<?php 
    session_start();
    include('db.php');

    echo "<br> <center>";
    echo "Welcome ".$_SESSION['user_name'];
    echo "</center>";
?>

<link rel="stylesheet" href="css-dashboard.css">

<?php  

    $user_profile = $_SESSION['user_name'];

    if($user_profile == TRUE)
    {
        // header('Location: register.php');
    }
    else
    {
        header('location: login.php');
    }

    $query = "SELECT * FROM register";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data); //it will presents how many number of rows are present in the table

    if($total != 0)
    {
        
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>INDEX</title>
        </head>
        <body>
    
        <table>
                <th class="heading" colspan="8">All The Records</th>
                <tr>
                    <th> ID</th>
                    <th> User_image</th>
                    <th width="20%"> USER NAME</th>
                    <th> EMAIL</th>
                    <th> PASSWORD</th>
                    <th> CONFIRM PASSWORD</th>
                    <th width="50%"> MOBILE</th>
                    <th width="100%"> ACTIONS </th>
                </tr>
              
                <?php
        
        // echo "Table Has Records";
        while($result = mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$result['id']."</td>
            <td><img src = '".$result['User_image']."' height='50px' width='50px'></td>
            <td>".$result['username']."</td>
            <td>".$result['email']."</td>
            <td>".$result['password']."</td>
            <td>".$result['confirmPassword']."</td>
            <td>".$result['phone']."</td>
            
            <td> <a href='edit.php?Id=$result[id]'><button> EDIT </button> </a> 
            <a href='delete.php?Id=$result[id]'> <button class='del'> DELETE </button> </a>
            </td>
            </tr>";
            
            echo "<br>";
        }
    }
    
    else{
        echo "No records Found";
    }
    ?>

    </table>

    <a href="login.php">
        <input type="submit" value="logout" name="logout" class="btn" style="cursor:pointer">
    </a>

</body>
</html>

