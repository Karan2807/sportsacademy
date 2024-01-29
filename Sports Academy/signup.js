var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
// This function will display the specified tab of the form...
var x = document.getElementsByClassName("tab");
x[n].style.display = "block";
//... and fix the Previous/Next buttons:
if (n == 0) {
  document.getElementById("prevBtn").style.display = "none";
} else {
  document.getElementById("prevBtn").style.display = "inline";
}
if (n == (x.length - 1)) {
  document.getElementById("nextBtn").innerHTML = "Submit";
} else {
  document.getElementById("nextBtn").innerHTML = "Next";
}
//... and run a function that will display the correct step indicator:
fixStepIndicator(n)
}

function nextPrev(n) {
// This function will figure out which tab to display
var x = document.getElementsByClassName("tab");
// Exit the function if any field in the current tab is invalid:
if (n == 1 && !validateForm()) return false;
// Hide the current tab:
x[currentTab].style.display = "none";
// Increase or decrease the current tab by 1:
currentTab = currentTab + n;
// if you have reached the end of the form...
if (currentTab >= x.length) {
  // ... the form gets submitted:
  document.getElementById("regForm").submit();
  return false;
}
// Otherwise, display the correct tab:
showTab(currentTab);
}

function validateForm() 
{
  var pw1 = document.getElementById("pass").value;  
  var pw2 = document.getElementById("cpass").value; 
  var em1 =document.getElementById("email").value; 
  if(pw1!= pw2)  
  {   
  alert("Passwords did not match!! please reset the page!!"); 
  document.getElementById('pass').reset(); 
  document.getElementById('cpass').reset();
  }
// var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
// if(inputText.value.match(mailformat))
// {
// alert("Submitted!!");
// document.regForm.text1.focus();
// return true;
// }
// else
// {
// alert("You have entered an invalid email address!");
// // document.regForm.text1.focus();
// return false;
// }
// }

// This function deals with validation of the form fields
var x, y, i, valid = true;
x = document.getElementsByClassName("tab");
y = x[currentTab].getElementsByTagName("input");
// A loop that checks every input field in the current tab:
for (i = 0; i < y.length; i++) {
  // If a field is empty...
  if (y[i].value == "") {
  // add an "invalid" class to the field:
  y[i].className += " invalid";
  // and set the current valid status to false
  valid = false;
  }
}
// If the valid status is true, mark the step as finished and valid:
if (valid) 
{
  document.getElementsByClassName("step")[currentTab].className += " finish";
}
return valid; // return the valid status
}

function fixStepIndicator(n) 
{
// This function removes the "active" class of all steps...
var i, x = document.getElementsByClassName("step");
for (i = 0; i < x.length; i++) {
  x[i].className = x[i].className.replace(" active", "");
}
//... and adds the "active" class on the current step:
x[n].className += " active";
}
