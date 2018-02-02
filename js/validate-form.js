var form = document.getElementsByTagName("form")[0];
var email = document.getElementById("email");
var password = document.getElementById("password");

var error = email, password;
while ((error = error.nextElementSibling).nodeType != 1);

// HTML5 specs for email regexp, includes a-z case sensitive, @ for email adress and . with numbered and characters
var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9-]+)*$/;
// password regexp that includes both uppercase and lowercase characters and special characters only from numbers
var passwordRegExp = /^[a-zA-Z0-9.!@#$%^&*()]+/;

//handles legacy browsers that doesn't support addEventListener method.
 function addEvent(element, event, callback) {
     var previousEventCallBack = element["on"+event];
     element["on"+event] = function (e) {
         var output = callback(e);

         if (output === false) return false;

         if (typeof previousEventCallBack === "function") {
            output = previousEventCallBack(e);
            if(output === false) return false;
         }
     }
 };

 // Error messages for email validation
 addEvent(window, "load", function () {
     var test = email.nodeValue.length === 0 || emailRegExp.test(email.value);
     if (test) {
        email.className = "valid";
        error.innerHTML = "";
        error.className = "error";
     } else {
        email.className = "invalid";
     }
 });

 addEvent(form, "submit", function() {
    var test = email.value.length === 0 || emailRegExp.test(email.value);

    if (!test) {
        email.className = "invalid";
        error.innerHTML = "Wrong email address.";
        error.className = "error active";
        return false;
     } else {
         email.className = "valid";
         error.innerHTML = "";
         error.className = "error";
     }
 });

// Error messages for password validation
// Error checking: for some reason error notice will only notify on password, will either update with
// jQuery or debug to change variables of test soon.
 addEvent(window, "load", function () {
    var test = password.nodeValue.length === 0 || passwordRegExp.test(password.value);
    if (test) {
       password.className = "valid";
       error.innerHTML = "";
       error.className = "error";
       return false;
    } else {
       password.className = "invalid";
    }
});

 addEvent(form, "submit", function () {
    var test = password.value.length === 0  || passwordRegExp.test(password.value);

    if (!test) {
        password.className = "invalid";
        error.innerHTML = "Password is empty or incorrect."
        error.className = "error active";
        return false;
    } else if (password.value.length < 8) {
        password.className = "invalid";
        error.innerHTML = "Password must be 8 or more characters."
        error.className = "error active";
        return false;
    } else {
        password.className = "valid";
        error.innerHTML = "";
        error.className = "error";
        return true;
    }
});
