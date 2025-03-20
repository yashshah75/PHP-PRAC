<!-- <form action="" method="post" enctype="multipart/form-data">

</form> -->



<!-- HTML Form -->
<form method = "POST" action="" enctype="multipart/form-data">
    Upload File : <input type="file" name="file">

    <input type="submit" value="Upload">
</form>


<?php 

    if(isset($_FILES['file']))
    {
        echo "File Name: " .$_FILES['file']['name']."<br>"; //in this we can also get filename, file size, file type and tmp_name
        echo "File type: " .$_FILES['file']['type']."<br>";
        echo "File size: " .$_FILES['file']['size']."<br>";
    }

?>

<!-- 
        move_uploaded_file($file, destination) : this function is used to upload file on the server side
-->
 



