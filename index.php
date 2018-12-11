<?php

  include_once "header.php";

?>

<section class="main-container">
  <div class="main-wrapper">
      <p class="p2">WELCOME</p>
      <form class="signup-form" action="index.php" method="POST">
          <h2 align="center">Create an Account</h2>
          <p align="center" style="font-size: small">Please fill out this form to sign up</p></p>
          <hr>

          <!--First Name-->
          <input type="text" placeholder="First Name" name="fname" required>
          <?php if(in_array("Your first name must be between 2 to 25 characters<br>", $error_array)) echo "Your first name must be between 2 to 25 characters<br>"; ?>

          <!--Last Name-->
          <input type="text" placeholder="Last Name" name="lname" required>
          <?php if(in_array("Your last name must be between 2 to 25 characters<br>", $error_array)) echo "Your last name must be between 2 to 25 characters<br>"; ?>

          <!--Username-->
          <input type="text" placeholder="Username" name="username" required>
          <?php if(in_array("Username already exists<br>", $error_array)) echo "Username already exists<br>";
          ?>

          <!--Email-->
          <input type="email" placeholder="Email" name="email" required>
          <?php if(in_array("Email already exists<br>", $error_array)) echo "Email already exists<br>";
            else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
          ?>

          <!--Confirm Email-->
          <input type="email" placeholder="Confirm Email" name="email2" required>
          <?php if(in_array("Email do not match<br>", $error_array)) echo "Email do not match<br>"; ?>

          <!--Password-->
          <input type="password" placeholder="Password" name="pswrd" required>
          <input type="password" placeholder="Confirm Password" name="pswrd2" required></td></tr>
          <?php if(in_array("Your password do not match<br>", $error_array)) echo "Your password do not match<br>";
            else if(in_array("Your password can only contain English characters or numbers<br>", $error_array)) echo "Your password can only contain English characters or numbers<br>";
            else if(in_array("Your password must be between 5 to 30 characters<br>", $error_array)) echo "Your password must be between 5 to 30 characters<br>";
          ?>

          <button type="submit" class="signupbtn" name="signup_button">Sign Up</button>
      </form>
  </div>
</section>
<footer>
  <ul>
    <li><a href="about.html">About us</a></li>
    <li><a href="contact.html">Contact us</a></li>
    <li><a href="delete_account.php">Delete Account</a></li>
  </ul>
</footer>

</body>
</html>