
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LCAA | Lecturer Profiles</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05); 
    }
	.table-title {
		padding-bottom: 15px;
		background: #299be4;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn {
		color: #566787;
		float: right;
		font-size: 13px;
		background: #fff;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn:hover, .table-title .btn:focus {
        color: #566787;
		background: #f2f2f2;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.settings {
        color: #2196F3;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.status {
		font-size: 30px;
		margin: 2px 2px 0 0;
		display: inline-block;
		vertical-align: middle;
		line-height: 10px;
	}
    .text-success {
        color: #10c469;
    }
    .text-info {
        color: #62c9e8;
    }
    .text-warning {
        color: #FFC107;
    }
    .text-danger {
        color: #ff5b5b;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<section style="background-color:white">
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
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item  active">
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

    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <?php 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            require 'includes/dbh.inc.php';
                    
            $sql = "SELECT * FROM reports where id=$id";
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
            
                    echo '<div class="container">
                    <p><a href="reports.php" class="btn btn-danger"> &lt;- Go Back</a></p>
                    <br>
                    <h1>'.$row['title'].' At '.$row['location'].'</h1>
                    <img style="width:100%" src="images/banner.jpg">
                    <br><br>
                    <div>
                     '.$row['description'].'
                    </div>
                    <hr>
                    <small>Posted '.$date_reported.' by '.$row['username'].'</small>
                    <hr>
                        <p><strong>Location:</strong> '.$row['location'].' </p>
                        <p><strong>Address:</strong> '.$row['address'].' </p>
                        <p><strong>Contact Police on</strong> +267 391273 </p>
                    </div>';
                }
            } else {
                echo "0 results";
            }
            $con->close();
            
        }

    ?>

    </section>

</body>
</html>   

