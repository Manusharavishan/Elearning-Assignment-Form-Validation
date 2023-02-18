function validateForm() {
    const name = document.forms["Form"]["name"].value;
    const email = document.forms["Form"]["email"].value;
    const password = document.forms["Form"]["password"].value;
    const age = document.forms["Form"]["age"].value;
    const gender = document.forms["Form"]["gender"].value;
    
    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
    
    if (email == "") {
      alert("Email must be filled out");
      return false;
    }
    
    if (password == "") {
      alert("Password must be filled out");
      return false;
    }
    
    if (age == "") {
      alert("Age must be filled out");
      return false;
    }
    
    if (gender == "") {
      alert("Gender must be selected");
      return false;
    }
    
    return true;
  }
  