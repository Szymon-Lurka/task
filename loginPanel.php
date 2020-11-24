<?php
session_start();

if($_SESSION['logged'])
{
  header('Location:panel.php');
  exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/login.css">
    <title>Login</title>
  </head>
  <body class="body">
    <nav class="navbar navbar-expand-lg navigation" id='mainNav'>
      <div class="container"><a class="navbar-brand" href="index.php">HOME</a>
          <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold collapsed" type='button'
              data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
              aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link"href="index.php">Portfolio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">About</a>
                  </li>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link login" href="loginPanel.php">Account</a>
                </li>
              </ul>
          </div>
      </div>
  </nav>
  <div class="containerForm">
  <div class="mt-5 form">
            <form action="login.php" method="post" class="loginform">
                  <label for="login" class="text-white">Login</label>
                  <input type="text" name="login" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Login">

                  <label for="exampleInputPassword1" class="text-white">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  <small class="form-text text-white">
                    Make sure you never tell anyone else your password.</small>
                <?php
                if(isset($_SESSION['error'])) echo $_SESSION['error'];
                ?>
                <br/>
                <button type="submit" class="btn btn-light">Log in!</button>
              </form>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>