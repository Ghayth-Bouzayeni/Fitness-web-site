function toggleMessage(container) {
    // Toggle the paragraph within the container
    var textElements = container.getElementsByClassName("infotext");
    if (textElements.length > 0) {
        textElements[0].style.display = textElements[0].style.display === 'block' ? 'none' : 'block';
    }

    // Toggle the first image within the container
    var imageElements = container.getElementsByClassName("uparrow");
    if (imageElements.length > 0) {
        imageElements[0].style.display = imageElements[0].style.display === 'block' ? 'none' : 'block';
    }

    // Toggle the second image within the container
    var additionalImageElements = container.getElementsByClassName("downarrow");
    if (additionalImageElements.length > 0) {
        additionalImageElements[0].style.display = additionalImageElements[0].style.display === 'none' ? 'block' : 'none';
    }
}