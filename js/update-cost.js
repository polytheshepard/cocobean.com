var productAmount = document.getElementsByClassName("productAmount");
function updateSubTotal() {
    var product = document.getElementById("pid").value;
    document.getElementById("subtotal-result").innerHTML = "$" + product*10;
}