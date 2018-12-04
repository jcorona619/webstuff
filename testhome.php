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
        height: auto;
      }

      div.desc {
        padding: 15px;
        text-align: center;
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
      .column{
        float: left;
        width: 40%;
        padding: 10px;
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
      }
    </style>
  </head>
  <body>
  <div class="main">
    <div class="row">
      <div class="column"><h2 class="user">/ <?php echo $_SESSION['uname'];?> /</h2></div>
      <div class="column"><?php include_once "upload_test.php" ?></div>
    </div>
    <?php include_once "display.php" ?>
    
  </div>
  <footer>
  <ul>
    <li><a href="">About us</a></li>
    <li><a href="">Contact us</a></li>
    <li><a href="">Delete Account</a></li>
  </ul>
</footer>
  </body>
</html>