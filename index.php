<?php
session_start();
?>
<html>
<head>
	<title>FORUM</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="forum.css">
	<link rel="stylesheet" type="text/css" href="POSTIT.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>
	 <?php
	 if(isset($_SESSION['u_id']))
	 {
     echo 
	'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fab fa-accusoft fa-lg"></i>  FORUM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="uploadpost.php">UPLOAD THREAD</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SEARCH BY
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">POPULARITY</a>
          <a class="dropdown-item" href="#">YOUR LIKES</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">NEW LISTING</a>
        </div>
      </li>
 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" style="margin-right:5px;" type="submit">Search</button>
    </form>
        <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success my-2 my-sm-0" style="margin-right:5px;" type="submit"></button>
    	</form>
     	<form class="form-inline my-2 my-lg-0" style={} action="logout.php" method="POST">
      	<button class="btn btn-outline-success my-2 my-sm-0" id="logout"  type="submit" name="submit"> log out</button> 
      </form>
  </div>
</nav>

';
					}else

					{
						echo'<div id="index">
						 <div class="profbox">
            <h1><em>PROJECT FORUM</em></h1>
            <form action="loginverification.php" method="POST">
            <input  type="text" name="uid" placeholder="USERNAME OR EMAIL">
            <input type="password" name="pwd" placeholder="PASSWORD">
            <p>dont have an account ?? <a href="signup.php">sign up</a></p>
            <button  id="login" type="submit" name="submit"><i class="fas fa-sign-in-alt fa-lg"></i> LOG-IN</button>
            <hr>
            <button style="background:#3B5998;" type="submit"><i class="fab fa-facebook fa-lg"></i> FACEBOOK</button>
            <h4>or</h4>
            <button style="background: #dd5347;" type="submit"><i class="fas fa-envelope fa-lg "></i> G-MAIL</button>
          </form>
          </div>
          </div>';
					}

						?>
					</h1>
					</div>
				</div>
		</div>
</div> 
	
</body> 
</html>
