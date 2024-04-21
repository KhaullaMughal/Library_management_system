<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
</head>
<body>
  <div class="login">
<h1>Login</h1>
<form method="POST" action="welcome.php">
  <label>Username</label>
  <input type="text" name="user_name" placeholder="Enter your name" required>
  <label>Password</label>
  <input type="text" name="pass_word " placeholder="Enter your Password" required>
  
  <input type="submit" name="" value="submit">
 
</form>
</body>
</html>
<style>
  body{
    background-color: #1A1A1D;
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
  }
  .login {
    width: 360px;
    height: 280px;
    margin: auto;
    background: white;
    border-radius: 3px;
  }
  h1{
    text-align: center;
    padding: 10px;

  }
  form{
    width: 300px;
    margin-left: 20px;
  }
  form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;

  }
  form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray ;
    border-radius: 6px;
    outline: none;
  }
  input[type = "submit"]{
    width: 320px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #950740 ;
    color: white;
    font-size: 18px;
    cursor: pointer;
  }
  input[type = "submit"]:hover{
    color: white;
    background: #C3073f;
  }
</style>