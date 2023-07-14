<!doctype html>
<html lang="en">
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
    <?php include './components/_header1.php'?>
    <div class="containerfluid table-responsive">
        <table class="table table-striped table-borderless" id="querytable">
            <thead >
                <tr>
                <th scope="col">S.NO</th>
                <th scope="col">Cover</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Count</th>
                <th scope="col">Reserve</th>
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
                                        <td></td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Reserve</button></td>
                                    </tr>';
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
  </body>
</html>