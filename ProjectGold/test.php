<?php
if(isset($_POST['submit'])){
move_uploaded_file($_FILES["testfile"]["tmp_name"],$_FILES["testfile"]["name"]);
}
?>



<form method="post" action="test.php" enctype="multipart/form-data">
    <input type="file" name="testfile" >
    <input type="submit" name="sumit" value="upload" >
</form>
