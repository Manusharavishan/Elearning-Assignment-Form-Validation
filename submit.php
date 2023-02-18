<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  
  $to = "manusharavishan1@gmail.com";
  $subject = "New User Registration";
  $message = "Name: " . $name . "\n"
           . "Email: " . $email . "\n"
           . "Password: " . $password . "\n"
           . "Age: " . $age . "\n"
           . "Gender: " . $gender;
  
  $headers = "From: " . $email;
  
  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for registering. We will contact you shortly.";
  } else {
    echo "Oops, something went wrong. Please try again later.";
  }
}
?>