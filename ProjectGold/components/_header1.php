<?php
if(!defined("APP")){
    header("Location: ../index.php");
    exit();
} else {
session_start();
echo '<header class="p-3 mb-2 border-bottom">
<div class="container-fluid">
  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="./index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="./assets/logo.png" class="bi me-2" height="32" width="40">
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      <li><a href="./index.php" class="nav-link px-2 link-secondary hover rounded-pill">Home</a></li>
      <li><a href="#" class="nav-link px-2 link-body-emphasi hover rounded-pill">Borrow/Return</a></li>
      <li><a href="#" class="nav-link px-2 link-body-emphasis hover rounded-pill">Reserve</a></li>
      <li><a href="#" class="nav-link px-2 link-body-emphasis hover rounded-pill">Rules</a></li>
      <li><a href="#" class="nav-link px-2 link-body-emphasis hover rounded-pill">Explore</a></li>
      <li><a href="#" class="nav-link px-2 link-body-emphasis hover rounded-pill">About</a></li>
      <li><a href="#" class="nav-link px-2 link-body-emphasis hover rounded-pill">Contact</a></li>
    </ul>
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
      <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
    </form>';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
    echo    '<div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="./components/_logout.php">Sign out</a></li>
                </ul>
            </div>';} else {
                echo '<button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Sign-up</button>';
            }
echo '</div>
</div>
</header>';}
?>