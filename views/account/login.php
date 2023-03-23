<?php
    include_once('views/shares/Header.php')
?>
<?php 
    session_start();
    if(isset($_SESSION['error'])){
        echo"<p class='muted'>".$_SESSION['error']."</p>";
    }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="login-box">
      <h2>Login Form</h2>
      <p class="muted"></p>
      <form method="post" action="?r=login">
      <input type="text" name="username" id="username" placeholder="Tên đăng nhập" >
        <input type="password" name="password" id="password" placeholder="Mật khẩu" >
        <button type="submit" >Đăng nhập</button>
      </form>
    </div>
  </body>
</html>
<style>
      body {
        background-color: #eee;
        font-family: Arial, sans-serif;
      }
      .login-box {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        text-align: center;
      }
      h2 {
        margin-top: 0;
      }
      input[type="text"], input[type="password"] {
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
        padding: 10px;
        width: 100%;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        margin-top: 10px;
        padding: 10px;
        width: 100%;
      }
    </style>





    <?php
    include_once('views/shares/Footer.php')
?>