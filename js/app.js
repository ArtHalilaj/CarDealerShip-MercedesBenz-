
function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var pass = document.forms["myForm"]["pass"].value;
    var pass2 = document.forms["myForm"]["pass2"].value;
    
    if (name == "") {
      alert("Email must be filled out");
      return false;
    }
    
    if (!validateEmail(name)) {
      alert("Invalid email address format");
      return false;
    }
  
    if (pass == "") {
      alert("Password must be filled out");
      return false;
    }
    
    if (pass2 == "") {
      alert("Confirm Password must be filled out");
      return false;
    }
    
    if (pass != pass2) {
      alert("Passwords do not match");
      return false;
    }
  
    function validateEmail(email) {
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    }
  }
  