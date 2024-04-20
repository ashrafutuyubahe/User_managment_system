<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }

      .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .login-form {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 320px;
      }

      .login-form label {
        font-weight: bold;
        margin-bottom: 8px;
      }

      .login-form input[type="email"],
      .login-form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      .login-form input[type="submit"] {
        background-color: #0bb7de;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
      }

      .login-form input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    
    <div class="login-container">
      <form class="login-form" id="login-form" action="/login" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="useremail" />
        <label for="password">Password</label>
        <input type="password" id="password" name="userpassword" />
        <input type="submit" value="Login" />
      </form>
    </div>
<?php

if($_SERVER['REQUEST_METHOD']=='post' ){
  include_once 'connection.php';
  $password= $_POST['userpassword'];
  $email= $_POST['useremail'];

  $retrievedPassword="SELECT password FROM users where email='$email'";
  $result= mysqli_query($conn,$retrievedPassword);
  if(!$result){
    echo "failed to retrieve password";
  }
  if($retrievedPassword==$password){
    echo "<script>alert(' you are logged in');</script>"; 
  
}
echo "<script>alert('invalid email or password.please use correct credentials');</script>"; 
}
echo "Invalid request method. Please try again.";

?>
    
  </body>
</html>
