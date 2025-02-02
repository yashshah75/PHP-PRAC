<!-- HTML Form -->
<form method="POST" action="">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Name: " . $_POST['name']; // Output: Value entered in the form
}
?>
