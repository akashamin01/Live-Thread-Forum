<html>
<head>
	<title>FORUM</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body id="index">
          <div class="profbox">
            <h1><em>PROJECT FORUM</em></h1>
            <form action="loginverification.php" method="POST">
            <input  type="text" name="uid" placeholder="USERNAME OR EMAIL">
            <input type="password" name="pwd" placeholder="PASSWORD">
            <p>don't have an account ?? <a href="signup.php">sign up</a></p>
            <button  id="login" type="submit" name="submit"><i class="fas fa-sign-in-alt fa-lg"></i> LOG-IN</button>
            <hr>
            <button style="background:#3B5998;" type="submit"><i class="fab fa-facebook fa-lg"></i> FACEBOOK</button>
            <h4>or</h4>
            <button style="background: #dd5347;" type="submit"><i class="fas fa-envelope fa-lg "></i> G-MAIL</button>
          </form>
          </div>
	
</body> 
</html>
