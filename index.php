<?php
  session_start();
  if(!empty($_REQUEST['message'])){
    echo "<script>alert('LOGIN FAILED')</script>";
  }
  session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>MINIPROJECT</title>
    <style>
      .form-inline{
        margin-left:25%;
      }
    </style>
  </head>
  <body class="text-center">
    <div class="container">
      <div class="jumbotron vertical-center">
        <h1>WELCOME TO MINIPROJECT</h1>
        <hr>
        <h2>USER LOGIN</h2>
        <form action="login.php" method="post" class="form-inline">
          <div class="form-group mb-2">
            <label for="uname" class="sr-only">Username</label>
            <input
              class="form-control"
              type="text"
              name="uname"
              placeholder="Enter username"
            />
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="pw" class="sr-only">Password</label>
            <input
              class="form-control"
              type="password"
              name="pw"
              placeholder="Password"
            />
          </div>
          <input type="submit" value="Submit" class="btn btn-primary mb-2" />
        </form>
      </div>
    </div>
  </body>
</html>
