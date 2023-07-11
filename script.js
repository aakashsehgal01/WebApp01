function showRegistrationForm() {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("registration-form").style.display = "block";
  }
  
  function cancelRegistration() {
    document.getElementById("registration-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
  }
  