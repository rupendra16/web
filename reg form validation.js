function formValidation() {

var firstname = document.getElementByName('NAME');
var email = document.getElementByName('email');
// To check empty form fields.
if (firstname.value.length == 0) {
document.getElementByName('head').innerText = "* All fields are mandatory *"; // This segment displays the validation rule for all fields
firstname.focus();
return false;
}
// Check each input in the order that it appears in the form.
if (inputAlphabet(firstname, "* For your name please use alphabets only *")) {
if (lengthDefine(username, 6, 8)) {
if (emailValidation(email, "* Please enter a valid email address *")) {
if (trueSelection(state, "* Please Choose any one option")) {
return true;
}
}
}
}

return false;
}
// Function that checks whether input text is numeric or not.
function textNumeric(inputtext, alertMsg) {
var numericExpression = /^[0-9]+$/;
if (inputtext.value.match(numericExpression)) {
return true;
} else {
document.getElementById('p6').innerText = alertMsg; // This segment displays the validation rule for zip.
inputtext.focus();
return false;
}
}