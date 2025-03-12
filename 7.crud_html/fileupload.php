<?php 

error_reporting(0);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
      <form action="" method="POST" enctype = "multipart/form-data">
      File : <input type="file" name="upload_file" id="">
      <br><br>
        <input type="submit" name="submit" value="Upload" id="">
      </form>
</body>
</html>


<?php 

   $filename =  $_FILES["upload_file"]["name"];
   $temp_name = $_FILES["upload_file"]["tmp_name"];

   $folder = "images/".$filename;

    move_uploaded_file($temp_name, $folder);
    echo "<img src='$folder' height='100px' width='100px'>";

?>
