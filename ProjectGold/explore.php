<?php session_start(); ?>
<!doctype html>
<html lang="en" id="main">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <title>Search Books</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  </head>
  <body>
    <?php define("APP",true);?>
    <?php include './components/_header1.php';?>
    <?php include './components/_login.php';?>
	  <?php include './components/_signup.php';?>
    <?php include './components/_confirm.php';?>
    <?php 
      if(isset($_GET['alert']) && $_GET['alert']!=="false"){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" id="signupError">
                      <strong>Status: </strong>'.$_GET['alert'].'
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
      }
	  ?>
    <div class="container-fluid table-responsive">
        <table class="table table-striped table-borderless" id="querytable">
            <thead >
                <tr>
                <th scope="col">S.NO</th>
                <th scope="col">Cover</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Count</th>
                <?php 
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
                echo '<th scope="col">Actions/Status</th>';
                }?>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './components/_dbconnect.php';
                    $query = "SELECT * FROM `books_db`;";
                    $result = mysqli_query($conn, $query);
                    $numrows = mysqli_num_rows($result);
                    $counter = 0;
                    if($numrows>0){
                        while($row = mysqli_fetch_assoc($result)) {
                            $counter++;
                            echo '<tr>
                                        <td>'.$counter.'</td>
                                        <td><img src="./assets/bookcover/'.$row["book_id"].'.jpg" alt="cover image of book height="55" width="55"></td>
                                        <td>'.$row["book_title"].'</td>
                                        <td>'.$row["book_author"].'</td>
                                        <td>'.$row['book_count'].'</td>';
                                        if($row['book_count']>0){
                                          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
                                            $user = $_SESSION['username'];
                                            $bid = $row['book_id'];
                                            $query1 = "SELECT * FROM reserve where username='$user' AND reserve_book_id='$bid';";
                                            $result1 = mysqli_query($conn, $query1);
                                            $numRows1 = mysqli_num_rows($result1);
                                            if($numRows1>=1){
                                              $row1 = mysqli_fetch_assoc($result1);
                                              if($row1['status']==='0'){
                                                echo '<td><button type="button" class="reserve btn btn-primary btn-sm" id='.$row["book_id"].' >Pending</button></td>';
                                              } elseif($row1['status']==='1'){
                                                echo '<td><button type="button" class="reserve btn btn-primary btn-sm" id='.$row["book_id"].' >Approved</button></td>';
                                              } 
                                            }
                                             else {
                                              echo '<td><button type="button" class="reserve btn btn-primary btn-sm" id='.$row["book_id"].' data-bs-toggle="modal" data-bs-target="#reserveConfirm">Reserve</button></td>'; 
                                            }
                                          }
                                        } else{
                                          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
                                            echo '<td><button type="button" class="btn btn-primary btn-sm" disabled>Reserve</button></td>'; 
                                          }
                                        }
                                    echo '</tr>';
                        }
                    } else {
                        echo '<tr>
                            <td>empty</td>
                            <td>empty</td>
                            <td>empty</td>
                         </tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- jQuery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- Datatables JS -->
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      //let table = new DataTable('#notestable');
      $(document).ready( function () {
        $('#querytable').DataTable({
            //scrollY: 400
            responsive: true
    //         responsive: {
    //     details: false
    // }
        });
      });
    </script>
    <!-- <script src="darkmode.js"></script> -->
    <script src="reserves.js"></script>
  </body>
</html>