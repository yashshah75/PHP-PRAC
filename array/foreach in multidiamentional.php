<?php 
    $arr = [
        [1,"Yash","Shah","PHP",25000],
        [2,"Mahir","Sheth","JAVA",30000],
        [3,"Devansh","Vora","React",25000],
        [4,"Jaimin","Soneji","UI/UX",15000],
    ];

    echo "<table border='2px' cellpadding ='10px' cellspacing = '0' text-align='center'>";

    echo "
            <tr>    
                <th> ID </th>  
                <th> Name </th>  
                <th> Last Name </th>  
                <th> Technology </th>  
                <th> Salary </th>
            </tr>  
        ";
    foreach($arr as list($id, $name, $lastname, $technology, $salary))
    {
        echo "<tr><td> $id </td> <td> $name </td> <td>$lastname</td> <td>$technology</td> <td>$salary</td></tr>";
    }
    echo "</table>";
?>