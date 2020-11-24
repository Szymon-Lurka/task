<?php
    session_start();
    if(!isset($_SESSION['logged'])) header('Location: loginPanel.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/panel.css">
</head>
<body>
<nav class="navbar navbar-expand-lg" id='mainNav'>
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
                    <a class="nav-link login" href="logout.php">Log Out</a>
                </li>
              </ul>
          </div>
      </div>
  </nav>
  <?php
  if($_SESSION['updated']) {
    echo "
       <div class='container mt-3'>
       <div class=row>
       <div class=col-12>
        <div class='alert alert-success text-center role'=alert>
            Inscription changed successfully!
                <br/>
            <a href=index.php>Go to main site!</a>
        </div>";
    $_SESSION['updated'] = false;
  }
  ?>
  <div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="jumbotron jumbotron-fluid panelJumbotron">
                <div class="container">
                <h2 class='second-jumbotron__title'>Admin Panel Example</h2>
                <div class="dropdown-divider second"></div>
                <div class="row">
                <div class="col-12">
                <p class="paragraph">A simple example of an admin panel that allows you to edit ONLY one paragraph on the home page.</p>
                </div>
            </div>
        </div>
     </div>
  </div>
  <div class="col-12 col-lg-6 mt-5">
  <form action="changeParagraph.php" class="form" method="post">
  <div>
    <label for="exampleFormControlTextarea1" class="text-white">New text in choosen element</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text" placeholder="New Paragraph Value"></textarea>
  </div>
  <button type="submit" class="btn btn-light">Save changes!</button>
</form>
  </div>
  </div>
  </div>
  <div class="container">

  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>