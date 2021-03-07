<?php
     require_once 'login.php';
     $conn= new mysqli($hn,$un,$pw,$db);

     // database connection object

     if($conn->connect_error) die ($conn->connect_error);

     $query2="SELECT * FROM student_details";

     $result2= $conn->query($query2);
     if(! $result2){
        die("database Access failed" .$conn->error);
    }else{
        echo "<table border=1><tr><th>Name</th><th>Email</th><th>Mobile Number:</th> <th>Year of Study</th>
        <th>Date of Birth</th> <th>Gender</th> <th>Subject</th> <th>Address</th>";

        $rows=$result2->num_rows;
        for ($j=0; $j<$rows;++$j)
        {
            $result2->data_seek($j);
            $rows=$result2->fetch_array(MYSQLI_NUM);
            echo "<tr>";
            
            for($k=0;$k<=7;++$k){
                if(isset($rows)){
                echo "<td>$rows[$k]</td>";
            }
            }
            echo "</tr>";
        }
        echo "</table>";
     }
     mysqli_free_result($result2);
     mysqli_close($conn);
?>