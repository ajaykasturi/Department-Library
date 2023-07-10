<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
	<link rel="stylesheet" href="./chat.css" class="stylesheet">
	<link rel="stylesheet" href="./msg.css" class="stylesheet">
    <title>CSE Dept. Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<style>
		.hover:hover {
			background-color:rgb(211, 248, 248);
		}
	</style>
</head>
  <body>
	<?php include './components/_header.php'?>
	<?php include './components/_carousel.php'?>
	<!-- Top books will be shown here -->
	<div class="container">
		<div>
			<h2 class="display-5 fw-bold text-body-emphasis text-center my-5">
				<span class="badge text-bg-dark rounded-pill position-relative">
					Top Books
					<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
    					New
  					</span>
				</span>
			</h2>
		</div>
		
		<div class="row row-cols-1 row-cols-md-4 g-4">

			<div class="col">
				<div class="card h-100 shadow-sm bg-body-tertiary rounded">
				<img src="./assets/dbbook1.jpg" class="card-img-top" alt="..." height="200px">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				</div>
			</div>

			<div class="col">
				<div class="card h-100">
				<img src="./assets/dbbook1.jpg" class="card-img-top" alt="..." height="200px">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a short card.</p>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
				<img src="./assets/dbbook1.jpg" class="card-img-top" alt="..." height="200px">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
				<img src="./assets/dbbook1.jpg" class="card-img-top" alt="..." height="200px">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
				<img src="./assets/dbbook1.jpg" class="card-img-top" alt="..." height="200px">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
				<img src="./assets/dbbook1.jpg" class="card-img-top" alt="..." height="200px">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				</div>
			</div>
		</div>
	</div>

	<!-- explore and some info about references -->
	<div class="container">
		<div class="px-4 py-5 my-2 text-center">
		<svg xmlns="http://www.w3.org/2000/svg" width="57" height="72" fill="#0d6efd" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
  <path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z"/>
</svg>
			<h1 class="display-5 fw-bold text-body-emphasis"></h1>
				<div class="col-lg-6 mx-auto">
				<p class="lead mb-4">
				Classic Computer Science Textbooks, Programming Language References, Data Science and Machine Learning, Computer Science Theory, Web Development Books, Software Engineering and Development Practices, Computer Science History and Biographies and Digital Journals, Magazines, and Online Publications
				</p>
				<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
					<button type="button" class="btn btn-primary btn-lg px-4 gap-3">Explore Books</button>
				</div>
			</div>
  		</div>
	</div>
	<!-- footer -->
	<?php include './components/_footer.php'?>
	<!-- chat bot -->
	<button class="open-button" onclick="openForm()">Chat</button>
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
	<script src="header.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="chatserver.js" type="module"></script>
  </body>
</html>