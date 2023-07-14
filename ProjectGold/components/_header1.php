<?php
if(!defined("APP")){
    header("Location: ../index.php");
    exit();
} else {
  if(isset($_GET['search']) && $_GET['search']==="true"){
    $searchclass = "link-secondary";
    $homeclass = $borrowclass = $reserveclass = $rulesclass = $aboutclass = $contactclass = "link-body-emphasis";
  }
  // elseif(isset($_GET['borrow']) && $_GET['borrow']==="true"){
  //   $borrowclass = "link-secondary";
  //   $homeclass = $searchclass = $reserveclass = $rulesclass = $aboutclass = $contactclass = "link-body-emphasis";
  // }
  // elseif(isset($_GET['reserve']) && $_GET['reserve']==="true"){
  //   $reserveclass = "link-secondary";
  //   $homeclass = $borrowclass = $searchclass = $rulesclass = $aboutclass = $contactclass = "link-body-emphasis";
  // }
  elseif(isset($_GET['rules']) && $_GET['rules']==="true"){
    $rulesclass = "link-secondary";
    $homeclass = $borrowclass = $reserveclass = $searchclass = $aboutclass = $contactclass = "link-body-emphasis";
  }
  elseif(isset($_GET['about']) && $_GET['about']==="true"){
    $aboutclass = "link-secondary";
    $homeclass = $borrowclass = $reserveclass = $rulesclass = $searchclass = $contactclass = "link-body-emphasis";
  }
  elseif(isset($_GET['contact']) && $_GET['contact']==="true"){
    $contactclass = "link-secondary";
    $homeclass = $borrowclass = $reserveclass = $rulesclass = $aboutclass = $searchclass = "link-body-emphasis";
  } else {
    $homeclass = "link-secondary";
    $searchclass = $borrowclass = $reserveclass = $rulesclass = $aboutclass = $contactclass = "link-body-emphasis";
  }
  
session_start();
echo '<header class="p-3 mb-2 border-bottom">
<div class="container-fluid">
  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="./index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="./assets/logo.png" class="bi me-2" height="32" width="40">
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      <li><a href="./index.php" class="nav-link px-2 '.$homeclass.' hover rounded-pill">Home</a></li>
      <!--
      <li><a href="./borrow.php?borrow=true" class="nav-link px-2 '.$borrowclass.' hover rounded-pill">Borrow/Return</a></li>
      <li><a href="./reserve.php?reserve=true" class="nav-link px-2 '.$reserveclass.' hover rounded-pill">Reserve</a></li>
      -->
      <li><a href="./rules.php?rules=true" class="nav-link px-2 '.$rulesclass.' hover rounded-pill">Rules</a></li>
      <li><a href="./explore.php?search=true" class="nav-link px-2 '.$searchclass.' hover rounded-pill">Explore</a></li>
      <li><a href="./about.php?about=true" class="nav-link px-2 '.$aboutclass.' hover rounded-pill">About</a></li>
      <li><a href="./contact.php?contact=true" class="nav-link px-2 '.$contactclass.' hover rounded-pill">Contact</a></li>
    </ul>
    <!--
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
      <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
    </form>
    -->';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
    echo    '<div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="./profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="./components/_logout.php">Sign out</a></li>
                </ul>
            </div>';} else {
                echo '<button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Sign-up</button> ';
            }
echo '
</div>
</div>
</header>';}
?>
