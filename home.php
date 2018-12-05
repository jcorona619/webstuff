<?php
  //include_once "display.php";
  include_once "user_header.php";
  session_start();

?>


<!DOCTYPE html>
<html>
  <head>
    <style>
      div.gallery {
        border: 5px solid #ccc;
      }

      div.gallery:hover {
        border: 5px solid #777;
      }

      div.gallery img {
        width: 100%;
        height: 400px;
        object-fit: cover;
      }

      div.desc {
        font-family: "Aldrich";
        padding: 15px;
        text-align: center;
        background-color: white;
        padding: 10px;
        background: rgba(255,255,255,0.6);
      }

      * {
        box-sizing: border-box;
      }

      .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
      }

      @media only screen and (max-width: 700px) {
        .responsive {
          width: 49.99999%;
          margin: 6px 0;
        }
      }

      @media only screen and (max-width: 500px) {
        .responsive {
          width: 100%;
        }
      }

      .clearfix:after {
        content: "";
        display: table;
        clear: both;
      }
      
      div.main {
        font-family: "Open Sans", sans-serif;
        padding: 5px 25px;
        font-size: 18px;
        margin: 0;
        color: #444;
        background-color: transparent;
      }
      .column1{
        float: left;
        width: 30%;
        padding: 10px;
        height: 25px;
      }
      .column2{
        float: left;
        width: 40%;
        padding: 10px;
        height: 25px;
      }
      .column3{
        float: left;
        width: 25%;
        padding: 30px;
        margin-bottom: 0;
        height: 25px;
      }
      .row:after{
        content: "";
        display: table;
        clear: both;
        padding: 20px;
        padding-bottom: 70px;
      }
      h2.user{
        font-family: "Aldrich";
        font-size: 200%;
        padding-top: 30px;
      }
    </style>
  </head>
  <body>
  <div class="main">
    <div class="row">
      <div class="column1"><h2 class="user">/ <?php echo $_SESSION['uname'];?> /</h2></div>
      <div class="column2"><?php include_once "upload_form.php" ?></div>
      <div class="column3"> 
        <a href ="user_images.php">
          <button class="delete" type = button><h1>Delete Photo</h1></button>
        </a>
      </div>
    </div>
    <?php include_once "display.php" ?>
    
  </div>
  <footer>
  <ul>
    <li><a href="about.html">About us</a></li>
    <li><a href="contact.html">Contact us</a></li>
    <li><a href="">Delete Account</a></li>
  </ul>
</footer>
  </body>
</html>