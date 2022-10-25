function validateNotEmpty(form) {
  // get all the inputs within the submitted form
  var inputs = form.getElementsByTagName('input');
  for (var i = 0; i < inputs.length; i++) {
      // only validate the inputs that have the required attribute
      if(inputs[i].hasAttribute("required")){
          if(inputs[i].value == ""){
              // found an empty field that is required
              missing_field = form.getElementsByTagName('label')[i].textContent;
              alert("Please fill the "+missing_field+" field");
              return false;
          }
      }
  }
  return true;
}

/* Signup validation using Ajax */
function retype_pass_check(str) {
  if (str == "") {
      document.getElementById("check_retype_password").innerHTML = "";
      return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
      document.getElementById("check_retype_password").innerHTML = this.responseText;
  }
  xhttp.open("POST", "ajax/pass_check.php?type=retype&q="+str);
  xhttp.send();
}
function pass_check(str) {
  if (str == "") {
      document.getElementById("check_retype_password").innerHTML = "";
      return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
      document.getElementById("check_retype_password").innerHTML = this.responseText;
  }
  xhttp.open("POST", "ajax/pass_check.php?type=pass&q="+str);
  xhttp.send();
}
function email_check(str) {
  if (str == "") {
      document.getElementById("check_email").innerHTML = "Email";
      return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
      document.getElementById("check_email").innerHTML = this.responseText;
  }
  xhttp.open("POST", "ajax/email_check.php?q="+str);
  xhttp.send();
}
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("kk").innerHTML = this.responseText;
    }
  xhttp.open("GET", "ajax/validate.php");
  xhttp.send();
}