<?php
include 'index.php'
?>
<html>
<head>
	<title>FORUM</title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="forum.css">
	<link rel="stylesheet" type="text/css" href="POSTIT.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body><a href=""></a>
		 <?php
	 if(isset($_SESSION['u_id']))
	 {echo '
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="blogbox">
				<img class="img-responsive" style="width: 100%;height: 50%;"  src="pic1.jpg">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknoncluding versions ofLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was pop Lorem Ipsum</p>
				<button type="submit" >like</button>
			</div>
		</div>
		<div class="col-md-4">

			<div class="blogbox">
				<img class="img-responsive" style="width: 100%;height: 50%;"  src="pic1.jpg">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknoncluding versions of Lorem Ipsum</p>
				<button type="submit" >like</button>
			</div>
		</div><div class="col-md-4">

			<div class="blogbox">
				<img class="img-responsive" style="width: 100%;height: 50%;"  src="pic1.jpg">
				<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was pop and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknoncluding versions of Lorem Ipsum</p>
				<button type="submit" >like</button>
			</div>
		</div><div class="col-md-4">

			<div class="blogbox">
				<img class="img-responsive" style="width: 100%;height: 50%;"  src="pic1.jpg">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrs standard dummy text ever since the 1500s, when an unknoncluding versions of Lorem Ipsum</p>
				<button type="submit" >like</button>
			</div>
		</div><div class="col-md-4">

			<div class="blogbox">
				<img class="img-responsive" style="width: 100%;height: 50%;"  src="pic1.jpg">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknoncluding versions of Lorem Ipsum</p>
				<button type="submit" >like</button>
			</div>
		</div><div class="col-md-4">

			<div class="blogbox">
				<img class="img-responsive" style="width: 100%;height: 50%;"  src="pic1.jpg">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrs standard dummy text ever since the 1500s, when an unknoncluding versions of Lorem Ipsum</p>
				<button type="submit" >like</button>
			</div>
		</div><div class="col-md-4">

			<div class="blogbox">
				<img class="img-responsive" style="width: 100%;height: 50%;"  src="pic1.jpg">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknoncluding Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popversions of Lorem Ipsum</p>
				<button type="submit" >like</button>
			</div>
		</div><div class="col-md-4">

			<div class="blogbox">
				<img class="img-responsive" style="width: 100%;height: 50%;"  src="pic1.jpg"
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknoncluding versions of Lorem Ipsum</p>
				<button type="submit" >like</button>
			</div>
		</div>
	
	</div>
</div>
';
	}?>

</body>
</html>
