var searchInput = document.getElementById('searchInput');

function search() {
    searchInput.addEventListener('input', function() {
        var searchQuery = this.value.toLowerCase();

        if (searchQuery.trim() === '') {
            // If the search query is empty, remove any existing highlights
            clearHighlights();
            return;
        }

        // Tree-walk through all nodes in the body and highlight matching text
        walkThroughNodes(document.body, function(node) {
            // Check if the node is a text node
            if (node.nodeType === Node.TEXT_NODE) {
                var parentElement = node.parentNode;
                // Check if the text node is visible
                if (isVisible(parentElement)) {
                    var textContent = node.textContent;
                    var lowerText = textContent.toLowerCase();

                    // If the text content includes the search query, highlight it
                    if (lowerText.includes(searchQuery)) {
                        // Replace the matching text with highlighted text
                        highlightText(node, searchQuery);
                    }
                }
            }
        });
    });

    // Clear search results when search input is cleared
    searchInput.addEventListener('keyup', function(event) {
        if (event.key === 'Backspace' || event.key === 'Delete' ) {
            if (this.value.trim() === '') {
                clearHighlights(); // Clear existing highlights
            }
        }
    });
}

// Function to clear existing highlights from the document
function clearHighlights() {
    var highlightedElements = document.querySelectorAll('span.highlight');
    highlightedElements.forEach(function(element) {
        var parent = element.parentNode;
        parent.replaceChild(document.createTextNode(element.textContent), element);
    });
}

// Function to check if an element is visible
function isVisible(element) {
    var style = window.getComputedStyle(element);
    return style.display !== 'none' && style.visibility !== 'hidden';
}

// Function to highlight matching text within a text node
function highlightText(textNode, query) {
    var textContent = textNode.textContent;
    var lowerText = textContent.toLowerCase();
    var queryRegex = new RegExp(`(${query})`, 'gi');
    
    // Create a document fragment to replace the text node
    var fragment = document.createDocumentFragment();
    var lastIndex = 0;
    var match;

    while ((match = queryRegex.exec(lowerText)) !== null) {
        // Add the text before the match
        fragment.appendChild(document.createTextNode(textContent.substring(lastIndex, match.index)));
        // Create a highlighted span for the match
        var highlightSpan = document.createElement('span');
        highlightSpan.classList.add('highlight');
        highlightSpan.style.backgroundColor = 'yellow';
        highlightSpan.textContent = textContent.substring(match.index, match.index + query.length);
        fragment.appendChild(highlightSpan);
        // Update lastIndex for the next iteration
        lastIndex = match.index + query.length;
    }

    // Add the remaining text after the last match
    fragment.appendChild(document.createTextNode(textContent.substring(lastIndex)));

    // Replace the original text node with the new fragment
    textNode.parentNode.replaceChild(fragment, textNode);
}

// Walk through all nodes in the body using depth-first traversal
function walkThroughNodes(node, callback) {
    var currentNode = node.firstChild;
    while (currentNode) {
        callback(currentNode);
        if (currentNode.hasChildNodes()) {
            walkThroughNodes(currentNode, callback);
        }
        currentNode = currentNode.nextSibling;
    }
}

// Call the search function on page load
window.onload = function() {
    search();
};
