<?php

session_start();
echo '<div class="container-fluid">
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3  border-bottom">
  <div class="col-md-3 mb-2 mb-md-0">
  <a href="./index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
    <img src="./assets/logo.png" class="bi me-2" height=50px>
    <!--<span class="fs-4" id="headtitle"></span> -->
  </a>
  </div>
  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
      <li><a href="./index.php" class="nav-link px-2 link-secondary hover rounded-pill">Home</a></li>
    <li><a href="#" class="nav-link px-2 rounded-pill hover">Borrow/Return</a></li>
    <li><a href="#" class="nav-link px-2 rounded-pill hover">Reserve</a></li>
    <li><a href="#" class="nav-link px-2 rounded-pill hover">Rules and Regulations</a></li>
    <li><a href="#" class="nav-link px- rounded-pill hover">Explore</a></li>
    <!-- <li><a href="#" class="nav-link px-2 rounded-pill hover">About</a></li>
    <li><a href="#" class="nav-link px-2 rounded-pill hover">Contact</a></li> -->
  </ul>';
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
    $icon = '
    <div class="dropdown text-end">
    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
    </a>
    <ul class="dropdown-menu text-small" style="">
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="./components/_logout.php">Sign out</a></li>
    </ul>
  </div>';
    echo $icon;
  } else {
  echo '<div class="col-md-3 text-end">
    <!--
    <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Sign-up</button>
  </div>';
}
echo '</header>
</div>';

?>