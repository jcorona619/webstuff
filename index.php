<?php

  include_once "header.php";

?>

<section class="main-container">
  <div class="main-wrapper">
      <p class="p2">WELCOME</p>
      <form class="signup-form" method="post" action="includes/register_user.php">
          <h2 align="center">Create an Account</h2>
          <p align="center" style="font-size: small">Please fill out this form to sign up</p></p>
          <hr>
          <input type="text" placeholder="Enter First Name" name="fname" required>
          <input type="text" placeholder="Enter Last Name" name="lname" required>
          <input type="text" placeholder="Enter Username" name="username" required>
          <input type="text" placeholder="Enter Email" name="email" required>
          <input type="password" placeholder="Enter Password" name="pswrd" required></td></tr>
          <button type="submit" class="signupbtn">Sign Up</button>
      </form>
  </div>
</section>
<footer>
  <ul>
    <li><a href="about.html">About us</a></li>
    <li><a href="contact.html">Contact us</a></li>
    <li><a href="">Delete Account</a></li>
  </ul>
</footer>

</body>
</html>