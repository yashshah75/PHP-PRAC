<link rel="stylesheet" href="css-dashboard.css">
<!-- <h1>Display All The Records</h1> -->
<?php 
    include('db.php');
    // error_reporting(0);

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
            <table>
                <th class="heading" colspan="7">All The Records</th>
                <tr>
                    <th width="5%">ID</th>
                    <th width="5%">User_image</th>
                    <th width="5%">USER NAME</th>
                    <th width="5%">EMAIL</th>
                    <th>PASSWORD</th>
                    <th>CONFIRM PASSWORD</th>
                    <th width="5%">MOBILE</th>
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

</body>
</html>

