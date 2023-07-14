<?php 
include './components/_dbconnect.php';
session_start();
?>
<!doctype html>
<html lang="en" id="main" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
	<link rel="stylesheet" href="./chat2.css" class="stylesheet">
	<link rel="stylesheet" href="./msg.css" class="stylesheet">
	<link rel="stylesheet" href="./topbooks.css" class="stylesheet">
    <title>CSE Dept. Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<style>
		.hover:hover {
			background-color:rgb(211, 248, 248);
		}
	</style>
</head>
  <body>
	<!-- Header file for navigation, logo and title -->
	<?php define("APP",true);?>
	<?php include './components/_header1.php';?>
	<?php include './components/_login.php';?>
	<?php include './components/_signup.php';?>
	<?php 
		if(isset($_GET['alert']) && $_GET['alert']!=="false"){
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert" id="signupError">
                    <strong>Success! </strong>'.$_GET['alert'].'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
		}
		if(isset($_GET['error']) && $_GET['error']!=="false"){
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="signupError">
			<strong>Sorry! </strong>'.$_GET['error'].'
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
		}
	?>
	<!-- carousel to slideshow the images -->
	<?php include './components/_carousel.php'?>
	<!-- Top books will be shown here -->
	<?php include './components/_topbooks.php'?>
	<!-- explore and some info about references -->
	<?php include './components/_explorehero.php'?>
	<!-- footer -->
	<?php include './components/_footer.php'?>
	<!-- chat bot -->
	<div class="open-button" onclick="openForm()">
	<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#04AA6D" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
		<path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
	</svg>
	</div>
	<!-- <button class="open-button" onclick="openForm()" style="border-radius:50%;">Chat</button> -->
	<?php include './components/_chatbot.php'?>
	<!-- bootstrap js cdn -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script>
		function openForm() {
  			document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
  			document.getElementById("myForm").style.display = "none";
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<!-- <script src="head.js"></script> -->
	<script src="alertclose.js"></script>
	<script src="chatserver1.js" type="module"></script>
	<!-- <script src="darkmode.js"></script> -->
  </body>
</html>