
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="css/forms.css" rel="stylesheet">
        <title>Sign Up | Fight Crime GC</title>
  </head>

  <body class="text-center">

    <form class="form-signin" method="POST" action="includes/register.inc.php">
		<h2><a class="navbar-brand" href="#"><span style="color:rgb(219, 29, 76)">Fight</span> <span
                style="color:rgb(0, 199, 30)">Crime</span> <span style="color:rgb(219, 29, 76)">GC</span></a></h2>


	        <label for="fullNames" class="sr-only">First Names</label>
      <input type="text" id="fullNames" name="name" class="form-control" placeholder="First name" required autofocus>

      <label for="surname" class="sr-only">Surname</label>
      <input type="text" id="surname" name="surname" class="form-control" placeholder="Surname" required autofocus>

	        <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

      <label for="number" class="sr-only">Phone number</label>
      <input type="number" id="number" name="number" class="form-control" placeholder="Mobile Number" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>

	        <label for="inputPasswordConf" class="sr-only">Confirm Password</label>
      <input type="password" id="inputPasswordConf" name="pwdConf" class="form-control" placeholder="Confirm Password" required>
      <hr>

      <label class="" for="validatedCustomFile3">Choose Profile Image...</label>
    <input type="file" class="form-control" name="image"  id="validatedCustomFile3" >
<br>
                <select id="location" name="location" style="padding:5px" class="form-control" required="required" data-error="Please specify Location.">
                    <option value="">Choose Your Area/Location</option>
                    <option value="G-West">G-West</option>
                    <option value="Phase2">Phase 2</option>
                    <option value="Phase4">Phase 4</option>
                    <option value="Braudhurst">Braudhurst</option>
                    <option value="Bontleng">Bontleng</option>
                    <option value="Block8">Block 8</option>
                    <option value="Block7">Block 7</option>
                    <option value="Village">Village</option>
                </select>
      <div class="checkbox mb-3">
        <p>
          already have an account? <a href="index.php">Sign In</a>
        <p>
                
      </div>
      <input class="btn btn-lg btn-danger btn-block" name="submit" type="submit" value="submit"/>
      <br>
      <a href="index.php" class="btn btn-danger">&lt;-Back</a>
    </form>
  </body>
</html>
