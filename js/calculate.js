
//increment the values
function plus(value){
    var value = parseInt(document.getElementById("pid").value);
    // if value is not a value return 
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById("pid").value = value;
}

// decrement the values IF a positive integer
function minus(value) {
    var value = parseInt(document.getElementById("pid").value);
    value = isNaN(value) ? 0 : value;
    // if value is less than the first number, being 0, pass it as zero or have it empty
    value < 1 ? value = 1 : "";
    value--;
    document.getElementById("pid").value = value;
}

// when user types in integer
var value = document.getElementById("pid");

// Checks for numbers that are not 0 through 9 and doesn't allow non-numbered inputs
value.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
       || (e.keyCode > 47 && e.keyCode < 58)
       || e.keyCode == 8)){
           return false;
       }
}

function updateSubTotal(value) {
    var value
}