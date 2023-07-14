<?php

$showError = "false";
if($_SERVER['REQUEST_METHOD']=='POST'){
    include './_dbconnect.php';
    $email = $_POST['loginemail'];
    $password = $_POST['loginpass'];
    $query = "SELECT * FROM students WHERE email='$email';";
    $result = mysqli_query($conn, $query);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if($row['password']===$password){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['username'];
            header("Location: ../index.php");
            exit();
        }
    }
    $showError = "Unable to login";
    header("Location: ../index.php?error=$showError");
    exit();
}
header("Location: ../index.php");
exit();
?>