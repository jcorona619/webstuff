<?php

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

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="uploads/5beec15e92a8f3.41922083.jpg">
          <img src="uploads/5beec15e92a8f3.41922083.jpg" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">Author: </div>
        <div class="desc">Location: </div>
        <div class="desc">Date of Photo: </div>
      </div>
    </div>


    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="uploads/5bef65f70280e4.66657741.jpeg">
          <img src="uploads/5bef65f70280e4.66657741.jpeg" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Author: </div>
        <div class="desc">Location: </div>
        <div class="desc">Date of Photo: </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="uploads/5bef660a44df03.77078466.jpeg">
          <img src="uploads/5bef660a44df03.77078466.jpeg" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Author: </div>
        <div class="desc">Location: </div>
        <div class="desc">Date of Photo: </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="https://images.unsplash.com/photo-1536669919805-31599aa57aac?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=58e50e3e786751af9dce25bcc4681076&auto=format&fit=crop&w=375&q=80">
          <img src="https://images.unsplash.com/photo-1536669919805-31599aa57aac?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=58e50e3e786751af9dce25bcc4681076&auto=format&fit=crop&w=375&q=80" alt="Mountains" width="600" height="400">
        </a>
        <div class="desc">Author: </div>
        <div class="desc">Location: </div>
        <div class="desc">Date of Photo: </div>
      </div>
    </div>
    
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="https://images.unsplash.com/photo-1525127752301-99b0b6379811?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4e1aeb22fe3646c9619c495be7e44255&auto=format&fit=crop&w=1950&q=80">
          <img src="https://images.unsplash.com/photo-1525127752301-99b0b6379811?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4e1aeb22fe3646c9619c495be7e44255&auto=format&fit=crop&w=1950&q=80" alt="Mountains" width="600" height="400">
        </a>
        <div class="desc">Author: </div>
        <div class="desc">Location: </div>
        <div class="desc">Date of Photo: </div>
      </div>
    </div>
    
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="https://images.unsplash.com/photo-1441239372925-ac0b51c4c250?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e66ff246d231c0577310032fdc31856f&auto=format&fit=crop&w=672&q=80">
          <img src="https://images.unsplash.com/photo-1441239372925-ac0b51c4c250?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e66ff246d231c0577310032fdc31856f&auto=format&fit=crop&w=672&q=80" alt="Mountains" width="600" height="400">
        </a>
        <div class="desc">Author: </div>
        <div class="desc">Location: </div>
        <div class="desc">Date of Photo: </div>
      </div>
    </div>
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