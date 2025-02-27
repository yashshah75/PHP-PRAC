<?php 

    session_start();
    include('db.php');

    echo "Welcome ".$_SESSION['user_name'];
?>

<link rel="stylesheet" href="css-dashboard.css">
<!-- <h1>Display All The Records</h1> -->

<?php  
    // error_reporting(0);

    $user_profile = $_SESSION['user_name'];
    // echo $user_profile; 
    // exit();

    if($user_profile == true)
    {
        // echo "Logged In";
        // header('location:login.php');
    }
    else
    {
        echo "Login Failed";
    }

    $query = "SELECT * FROM register";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data); //it will presents how many number of rows are present in the table
    // echo $total;

    

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
    <center>
        <table>
                <th class="heading" colspan="8">All The Records</th>
                <tr>
                    <th width="3%">ID</th>
                    <th>User_image</th>
                    <th>USER NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>CONFIRM PASSWORD</th>
                    <th>MOBILE</th>
                    <th> ACTIONS </th>
                </tr>
              
                <?php
        
        // echo "Table Has Records";
        while($result = mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$result['id']."</td>
            <td><img src = '".$result['User_image']."' height='100px' width='100px'></td>
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
</center>
<a href="login.php">
<input type="submit" value="logout" name="logout" class="btn" style="cursor:pointer">
</a>
</body>
</html>

