<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- <link rel="stylesheet" href="./register_css.css"> -->
    <style>
      button a{
    text-decoration: none;
    color: #333;
    
}
body {

    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.container {
    background-color: #fff;
    padding: 20px;
    padding-right: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h2 {
    text-align: center;
    color: #333;
}
form {
    max-width: 400px;
    margin: 0 auto;
}
label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}
input[type="email"],
input[type="password"],
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button[type="submit"]:hover {
    background-color: #0056b3;
}
h5 a{
    text-decoration: none;
}
  
    </style>
        
</head>
<body>
    <div class="container">
        <h2>Create an Account</h2>
        <form action="/register" method="post" id="registrationForm">
            <div>
          <label for="email">Email:</label>
                <input type="email" id="email" name="useremail" >
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="userpassword" >
            </div>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="username" >
            </div>
            <button type="submit">Register</a></button>
            <h5>already have  an account.<a id="haveAccount" href="/login">Log in</a></h5>
        </form>
    </div>
   
</body>


</html>
