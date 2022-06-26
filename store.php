<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Data</title>
</head>
<body>



<?php

if(isset($_POST)){
    $con = mysqli_connect('localhost:3307', 'root');
    if($con){
        // echo "Connection Successful";
        mysqli_select_db($con, 'volvo');
       
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender= $_POST["gender"];
        $locality = $_POST["Locality"];
        $redirect = false;
      

        $query = "INSERT INTO gymdata(name, age, gender, locality) VALUES ('$name','$age','$gender','$locality')";
        if(mysqli_query($con, $query))
        {
        echo " <script> alert('Your Data Are Submitted') </script>";

         
        }

        header('Location: //localhost:8082/Practice_Internship/');
        

        }
        // if($redirect){
        //     header('Location: //localhost:8082/Task-3_Project/');
        // }
    }
    else{
        echo "Connection Not Successful";
    }
    






    ?>
    
</body>
</html>