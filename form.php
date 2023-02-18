<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  
  $to = "stanfordcampus23@gmail.com";
  $subject = "New User Registration";
  $message = "Name: " . $name . "\n"
           . "Email: " . $email . "\n"
           . "Password: " . $password . "\n"
           . "Age: " . $age . "\n"
           . "Gender: " . $gender;
  
  $headers = "From: " . $email;
  
  if (mail($to, $subject, $message, $headers)) {
    $success_message = "Thank you for registering. We will contact you shortly.";
  } else {
    $error_message = "Oops, something went wrong. Please try again later.";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
  </head>
  <body>
    
    <form method="post" action="">
        <h1>Registration Form</h1>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="male" value="male" required>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female" required>
        <label for="female">Female</label>


        <input type="submit" value="Submit">
        
        <?php if (isset($success_message)) { ?>
      <p style="text-align: center;" class="success-message"><?php echo $success_message; ?></p>
    <?php } ?>
    <?php if (isset($error_message)) { ?>
      <p style="text-align: center;" class="error-message"><?php echo $error_message; ?></p>
    <?php } ?>

        
  
      </form>

    <script src="script.js"></script>

  </body>

</html>