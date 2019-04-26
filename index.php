<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Home</title>
  </head>
  <body>
      <!--BEGINNING OF MAIN NAVIGATION MENU-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
        <a class="navbar-brand" href="index.php"><span style="color:rgb(219, 29, 76)">Fight</span> <span
                style="color:rgb(0, 199, 30)">Crime</span> <span style="color:rgb(219, 29, 76)">GC</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reports.php">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <?php if(isset($_SESSION['ID'])){
                $userAcc = $_SESSION['name'];
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href="."'profile.php'"."> My Profile </a>";
                echo "</li>";
                echo '<li class="nav-item avatar"> <a class="nav-link p-0" style="color:white;font-style: italic;"><img src="images/user.svg" class="rounded-circle z-depth-0" alt="avatar image" height="45">    '.$userAcc.'</a></li>';
                }?>
                        </ul>
                        <?php if(isset($_SESSION['ID'])){
                echo "<form method='GET' action="."'includes/logout.inc.php'>";
                echo "<button class='btn btn-outline-success my-2 my-sm-0' type="."'submit'"." name='logout'> Log Out </button> ";
                echo "</form>";
                }else{
                echo "<button class='btn btn-outline-success my-2 my-sm-0' data-toggle="."'modal' data-target="."'#exampleModal'>"."Login</button>";
                }?>
        </div>
        </div>
    </nav>

    <!--LOGIN POP UP STRUCTURE (MODAL)-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <form class="form-signin" method="POST" action="includes/login.inc.php">
                            <h2><a class="navbar-brand" href="index.html"><span style="color:rgb(219, 29, 76)">Fight</span> <span
                                style="color:rgb(0, 199, 30)">Crime</span> <span style="color:rgb(219, 29, 76)">GC</span></a>
                            </h2>

                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="text" id="inputEmail" class="form-control" name="email" placeholder="Username/Email"
                                required autofocus>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" name="password"
                                placeholder="Password" required><br>
                            <button class="btn btn-lg btn-danger btn-block" type="submit" name="login-submit">Sign
                                in</button>
                            <div class="checkbox mb-3">
                                <p>
                                    Don't have an account? <a href="register.php">Register</a>
                                    <p>
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <main role="main">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="images/main1.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>Invest In Your Neighbourhood Watch.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-danger btn-color"  href="register.php" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <img class="second-slide" src="images/main1.png" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1 style="color:black">Report Crime.</h1>
          <p style="color:black">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary btn-color" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <img class="third-slide" src="images/main1.png" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1 style="color:#F1F1F1">One more for good measure.</h1>
          <p style="color:#F1F1F1">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary btn-color" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
    <h2>Stay Intouch With Neighbourhood Police</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">

      <h2>Keep The Streets Safe For Your Kids</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <h2>Fight Crime And Stay Safe</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Report Suspicious Activity.</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
    </div>
  </div>

 
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    
  </body>
</html>