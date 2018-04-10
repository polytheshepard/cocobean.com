function checkRegrex() {
    // Input doesn't include spaces
    // specifying image and text input from their ids
    var image = document.getElementById('image-visa');
    var type = document.getElementById('checkNum').value;
    // finding the regular expression with 4 at the start and 16 integers
    var regex = /^4[0-9]{3}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}$/;

    // if regex equals or matches the input then the image will display
    // if not it will disappear
    if (regex.test(type)) {
        image.style.display = 'block';
    } else {
        image.style.display = 'none';
    }
}

