// For tea leaves type
function updateSubtotal() {
    // Add integer times 10 costing $10 
    // only works for first item since id is used
    var product = document.getElementById("pid").value;
    document.getElementById("subtotal-result").innerHTML = "$" + product * 10;
}

function updateSubtotal2() {
    // Add integer times 12 costing $12 
    // only works for first item since id is used
    var product = document.getElementById("pid").value;
    document.getElementById("subtotal-result").innerHTML = "$" + product * 12;
}

function updateSubtotal3() {
    // Add integer times 14 costing $14
    // only works for first item since id is used
    var product = document.getElementById("pid").value;
    document.getElementById("subtotal-result").innerHTML = "$" + product * 14;
}