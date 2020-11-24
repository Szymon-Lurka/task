<?php
session_start();

if(!$_SESSION['global']) {
    header('Location: index.php');
}
$_SESSION['global'] = false;

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
    <title>Home</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" id='mainNav'>
      <div class="container"><a class="navbar-brand" href="#">Home</a>
          <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold collapsed" type='button'
              data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
              aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Portfolio <span class="sr-only">(current)</span></a>
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
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <img src="assets/avatarExample.svg" alt="avatar" class='header__avatar'>
        <h1 class="display-4 header__title">It's me... i guess</h1>
        <div class="dropdown-divider"></div>
        <p class="lead">I'm very happy!</p>
    </div>
</div>
<div class="jumbotron jumbotron-fluid jumbotron-second">
  <div class="container">
      <h2 class='second-jumbotron__title'>ABOUT ME</h2>
      <div class="dropdown-divider second"></div>
      <div class="row">
          <div class="col-12 col-lg-6">
             <?php echo '<p class=paragraph>'.$_SESSION['text'].'</p>' ?>

          </div>
          <div class="col-12 col-lg-6">
              <p class="paragraph">I will not write anything about myself because it is simply pointless, so I will write anything that comes to my mind.</p>
          </div>

      </div>

      <button type="button" class="btn btn-light jumbotron__button"><i class="fa fa-download"></i>Fake Button</button>
  </div>
</div>
<section class="myself">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <p class="myself__title">Just a couple pictures of beautiful nature</p>
              <p class="myself__second-title">
Cool isn't it?</p>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
              <img src="/assets/view1.jpg" alt="test" class="view-image">
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <img src="/assets/view2.jpg" alt="test" class="view-image">
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <img src="/assets/view3.jpg" alt="test" class="view-image">
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <img src="/assets/view4.jpg" alt="test" class="view-image">
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <img src="/assets/view5.jpg" alt="test" class="view-image">
  </div>
  <div class="col-12 col-md-6 col-lg-4">
    <img src="/assets/view6.jpg" alt="test" class="view-image">
</div>
  </div>
</section>
<div class="container">
  <div class="row">
      <div class="col-12">
          <h2 class="contact-me">CONTACT ME</h2>
      </div>
      <div class="col-12">
          <form>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group">
                  <textarea type="text" class="form-control" cols="20" rows="3" placeholder="Message"></textarea>

              </div>
              <button type="submit" class="btn btn-primary form__button">Send</button>
          </form>
      </div>
  </div>
</div>
<footer class="page-footer font-small blue pt-4 footer">

  <div class="container footer">
      <div class="row">
          <div class="col-12 col-lg-4">
              <h2 class="footer__title">LOCATION</h2>
              <p class="footer__place">Anywhere, anytime</p>
          </div>
          <div class="col-12 col-lg-4">
              <h2 class="footer__social-title">Just a footer</h2>
              <ul class="social-container">

                  <li class="list"> <a href="#" class="social-item"><i class="fa fa-facebook-square"></i></a></li>
                  <li class='list'><a href="#" class="social-item"><i class="fa fa-twitter-square"></i></a></li>
                  <li class='list'> <a href="#" class="social-item"><i class="fa fa-linkedin-square"></i></a></li>
                  <li class='list'> <a href="#" class="social-item"><i class="fa fa-home"></i></a></li>
              </ul>
          </div>
          <div class="col-12 col-lg-4">
              <h2 class='footer__about-title'>About this page</h2>
              <p class="footer__about-description">It's just created for example - and to learn something new!
                  <span>Love it!</span>

          </div>

      </div>

  </div>

  <div class="row">
      <div class="col-12 copyrights">
          <p class="copyright">Copyright &copy; Lmao Website 2020</p>
      </div>
  </div>



</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>