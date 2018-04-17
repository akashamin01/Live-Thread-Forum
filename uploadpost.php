<?php
include 'index.php';
?>

<html>
<head>
	<title>upload a post</title>
	<link rel="stylesheet" type="text/css" href="POSTIT.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>
			 <?php
	 if(isset($_SESSION['u_id']))
	 {echo '
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
	<div class="upload">
	<form>
		<p><input type="text" name="headline" placeholder="enter a headline" required></p>
		<p><input type="text" name="content" placeholder="enter a content" required></p>
		<p><input type="text" name="author" placeholder="enter your name bieng a author" required></p>
		<p><input type="text" name="link" placeholder="add a source link" required></p>
		<select>
  		<option value="anycategory">any category</option>
  		<option value="news">news</option>
  		<option value="controvertial">contovertial</option>
  		<option value="study">study</option>
		</select>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<button type="submit" style="text-decoration:white;" name="submit">SUBMIT</button>
		</form>
	</div>
';}?>
</body>
</html>
