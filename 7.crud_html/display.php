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
        <table>
            <th class="heading" colspan="6">All The Records</th>
            <tr>
            <th>ID</th>
            <th>USER NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>MOBILE</th>
            <th> ACTIONS </th>
        </tr>
        

        <?php
        
        // echo "Table Has Records";
        while($result = mysqli_fetch_assoc($data))
        {
           echo "<tr>
                    <td>".$result['id']."</td>
                    <td>".$result['username']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['password']."</td>
                    <td>".$result['phone']."</td>
                    <td> <a href='edit.php'> <button> EDIT </button> </a> 
                         <a href='delete.php'> <button class='del'> DELETE </button> </a>
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

