<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="reports.php">Reports <span class="sr-only">(current)</span></a>
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

    <section class="container">
    <div class="jumbotron" style="background-color:#343A40">
  <h1 class="display-4" style="color:white">Latest News &amp; Reports!</h1>
  <p class="lead" style="color:white">Login For More Insight.</p>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
    </section>

    <section>
            <div class="container">
            <div class="row">
                <?php 
                    require 'includes/dbh.inc.php';
                    
                    $sql = "SELECT * FROM reports";
                    $result = $con->query($sql);

                    function time_elapsed_string($datetime, $full = false) {
                        $now = new DateTime;
                        $ago = new DateTime($datetime);
                        $diff = $now->diff($ago);
                    
                        $diff->w = floor($diff->d / 7);
                        $diff->d -= $diff->w * 7;
                    
                        $string = array(
                            'y' => 'year',
                            'm' => 'month',
                            'w' => 'week',
                            'd' => 'day',
                            'h' => 'hour',
                            'i' => 'minute',
                            's' => 'second',
                        );
                        foreach ($string as $k => &$v) {
                            if ($diff->$k) {
                                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                            } else {
                                unset($string[$k]);
                            }
                        }
                    
                        if (!$full) $string = array_slice($string, 0, 1);
                        return $string ? implode(', ', $string) . ' ago' : 'just now';
                    }
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $time = $row['date_reported'];
                            $date_reported =  time_elapsed_string($time); 
                    
                            echo '<div class="col-md-12 col-lg-4">
                            <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h3 class="card-title">'.$row["title"].' @ '.$row['location'].'</h3>
                              <p>Reported: '.$date_reported.' </p>
                              <form method="get" action="includes/readmore.process.inc.php">
                              <input type="hidden" value="'.$row['id'].'" name="post-id">
                              <button type="submit" class="btn btn-danger" name="id" id="'.$row['id'].'"  >View Report</button>
                              </form>
                            </div>
                          </div>
                            </div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    $con->close();
                    
                ?>
            </div>
            </div>
    </section>

    
</body>
</html>