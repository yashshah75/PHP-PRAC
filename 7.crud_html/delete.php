<?php include 'header.php'; ?>
<?php require_once('db.php'); 
    $uid = $_GET['Id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {
        echo "<div style='color: green; text-align: center;'>Action Confirmed!</div>";
    } elseif (isset($_POST['cancel'])) {
        echo "<div style='color: red; text-align: center;'>Action Cancelled!</div>";
    }
}
?>

<form method="POST">
    <p>Are you sure you want to proceed?</p>
    <button type="submit" name="confirm">Yes</button>
    <button type="submit" name="cancel">No</button>
</form>
<?php

    $query = "DELETE FROM register WHERE id='$uid'";

    $data = mysqli_query($conn, $query);
    
    if($data)
    {
        echo "DELETED";

    }
    else{
        echo "Failed to deleted";
    }
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
     </form>
</div>
</div>
</body>
</html>
