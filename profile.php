
<?php
session_start();
if(empty($_SESSION['username'])){
    echo '<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Login</title>
    </head>
    <body>
    
    <div class="container">
    <div style="width:30vw;margin:auto;margin-top:20vh;">
    <form class="form-signin" method="POST" action="includes/login.inc.php">
                                    <h1 style="text-align:center"><a  href="index.html"><span style="color:rgb(219, 29, 76)">Fight</span> <span
                                        style="color:rgb(0, 199, 30)">Crime</span> <span style="color:rgb(219, 29, 76)">GC</span></a>
                                    </h1>

                                    <p style="color:red"> You must Log in to continue</p>
        
                                    <label for="inputEmail" class="sr-only">Email address</label>
                                    <input type="text" id="inputEmail" class="form-control" name="email" placeholder="Username/Email"
                                        required autofocus>
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" id="inputPassword" class="form-control" name="password"
                                        placeholder="Password" required><br>
                                    <button class="btn btn-lg btn-danger btn-block" type="submit" name="login-redirect">Sign
                                        in</button>
                                    <div class="checkbox mb-3">
                                        <p>
                                            Don\'t have an account? <a href="register.php">Register</a>
                                            <p>
                                    </div>
                                    
                                </form>
    </div>
    </div>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>';
  }else{
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<!--BEGINNING OF MAIN NAVIGATION MENU-->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span style="color:rgb(219, 29, 76)">Fight</span> <span
                        style="color:rgb(0, 199, 30)">Crime</span> <span style="color:rgb(219, 29, 76)">GC</span></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="reports.php">Reports</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">My Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <form method="GET" action="includes/logout.inc.php"><button class="btn btn-lg btn-danger"
                                    style="width:100%" type="submit" name="logout">Logout</button></form>
                        </li>
                    </ul>

        </div><!-- /.container-fluid -->
    </div>
</nav>


<div class="container target">
    <div class="row">
    <?php if(isset($_GET['upload'])){
            if($_GET['upload'] == 'success'){
              echo '<h1 id="tag" onclick="cancel()" style="text-align:center;color:green">Report Sent!</h1>';
            }
          } ?>
        <div class="col-sm-10">
            <h1 class=""><?php echo "<p>".$_SESSION['name']." ". $_SESSION['surname']."</p>";  ?></h1>

            <button type="button" class="btn btn-success">Edit!</button>
            <br>
        </div>
        <div class="col-sm-2"><a href="/profiles" class="pull-right"><img title="profile image"
                    class="img-circle img-responsive" src="/storage/profile_images/{{$profile->profile_image}}"></a>

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">


            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Info</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Status</strong></span>
                    Active</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Names</strong></span>
                    <?php echo "<p>".$_SESSION['name']." ". $_SESSION['surname']."</p>";  ?> </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Username </strong></span>
                    <?php echo "<p>@".$_SESSION['username']."</p>"; ?></li>

            </ul>

            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Contact Info</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Email</strong></span> <?php echo "<p>".$_SESSION['email']."</p>"; ?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Number</strong></span>
                    <?php echo "<p>".$_SESSION['number']."</p>"; ?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Location </strong></span>
                    <?php echo "<p>".$_SESSION['location']."</p>"; ?></li>

            </ul>



            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i>

                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Reports</strong></span> 3
                </li>
            </ul>

        </div>


        <!--/col-3-->
        <div class="col-sm-9" style="" contenteditable="false">
            <div class="panel panel-default">
                <div class="panel-heading"><span>File Report<span> <span style="margin-left:60%"><button onClick="autoload()" class="btn btn-danger">Auto Fill</button></span></div>
                
                <div class="panel-body">
                <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="well well-sm">
          <form class="form-horizontal" action="includes/report.inc.php" method="post">
          <fieldset>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Username</label>
              <div class="col-md-9">
                <input id="uname" value="" name="name" type="text" placeholder="enter username" class="form-control">
              </div>
            </div>
    
            <!-- Title input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Title</label>
              <div class="col-md-9">
              <select id="title" name="title" style="padding:5px" class="form-control" required="required" data-error="Please specify Location.">
                    <option value="">Choose Type</option>
                    <option value="Robbery">Robbery</option>
                    <option value="Break-in">Break-in</option>
                    <option value="Suspicious Activity">Suspicious Activity</option>
                    <option value="Assault">Assault</option>
                    <option value="Rape">Rape</option>
                    <option value="Anon">Anonymous Tip</option>
                    <option value="Fraud">Fraud</option>
                </select>
              </div>
            </div>
    
            <!-- Report Description body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Brief Description</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="description" placeholder="Please enter your description here..." rows="5"></textarea>
              </div>
            </div>

            <!-- Location of crime-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Location</label>
              <div class="col-md-9">
                <input id="location" name="location" type="text" value="" class="form-control">
              </div>
            </div>

            <!-- Specific Street Address -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Location Street Address</label>
              <div class="col-md-9">
                <input id="street" name="address" type="text" placeholder="eg. amantle Dr, 445 , Bontleng" class="form-control" required>
              </div>
            </div>

            <!-- Contact Number -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Cell Number</label>
              <div class="col-md-9">
                <input id="number" name="number" type="text" value="" class="form-control" required>
              </div>
            </div>

            <input type="hidden" name="owner_id" value="<?php echo $_SESSION['ID']; ?>">
            <?php
        $variablephp = $_SESSION['username'];
        $description = 'This is an Emergency!!';
        $location = $_SESSION['location'];
        $cell = $_SESSION['number'];
        ?>

          <script>
          var variablejs = "<?php echo $variablephp; ?>" ;

          var username = "@<?php echo $variablephp; ?>" ;
          var description = "<?php echo $description; ?>" ;
          var locationb = "<?php echo $location; ?>" ;
          var cell = "<?php echo $cell; ?>" ;

          function autoload(){
              document.getElementById('uname').value = username;
              document.getElementById('message').innerHTML = description;
              document.getElementById('location').value = locationb;
              document.getElementById('number').value = cell;

              if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
              document.getElementById("street").value = "Geolocation is not supported by this browser.";
            }
          }

          function showPosition(position) {
              document.getElementById("street").value = "Latitude: " + position.coords.latitude + 
            " || Longitude: " + position.coords.longitude;
          }

          function cancel(){
        var tag = document.getElementById('tag');
        tag.style.display = "none";
      }


          </script>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="submit-report">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>

        </div>
      </div>
	</div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>

  <?php }; ?>