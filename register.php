<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the submitted username, password, and confirm password
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm_password"];

  // Perform your registration validation here
  // ...

  // If the passwords match, save the details to the database
  if ($password === $confirmPassword) {
    // Save the username and hashed password to the database
    // ...

    // Redirect back to the login page
    header("Location: login.html");
    exit;
  } else {
    echo "Passwords do not match!";
  }
}
?>
