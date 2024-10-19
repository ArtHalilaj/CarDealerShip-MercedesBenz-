function validateForm() {
  var username = document.forms["myForm"]["name"].value;
  var password = document.forms["myForm"]["pass"].value;
  
  if (username == "") {
    alert("Username must be filled out");
    return false;
  }
  
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }
}