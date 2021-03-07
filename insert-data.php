<?php
     if(isset($_POST['submit'])){
    // starting Database opration
        require_once 'login.php';
        $conn= new mysqli($hn,$un,$pw,$db);

        // database connection object

        if($conn->connect_error) die ($conn->connect_error);
        // connect succes or no

        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $listbox=$_POST['listbox'];
        $radio=$_POST['gender'];
        $address=$_POST['address'];
        $date=$_POST['date'];
        $chk="";
            if(!empty($_POST['check_list'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['check_list'] as $selected){

                $chk.=$selected.",";
                
                // stores value of selected subjects 

                }
            }
        $query="INSERT INTO student_details(name,email,number,list_box,radio,address,date,check_list) VALUES('$name','$email','$number','$listbox','$radio','$address','$date','$chk')";

        $result= $conn->query($query);

        if(! $result){
            die("database Access failed" .$conn->error);

        }else{
            echo "data Inserted <br>";

            echo "Student Details <br>";
            echo "Name: ".$name. "<br>";
            echo "Email: ".$email."<br>";
            echo "Mobile Number: ".$number."<br>";
            echo "Selected Education Year is: ".$listbox."<br>";
            echo "your Date of Birth is: ".$date."<br>";
            echo "Your Gender is: ".$radio."<br>";
            echo "You live at: ".$address."<br>";
            echo "Selected Subject :".$chk."<br>";
        }

        mysqli_close($conn);
    }

        // closes connection and free result
?>