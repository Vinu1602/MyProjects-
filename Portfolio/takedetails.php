<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
$n = $_POST['name'];
$E = $_POST['email'];
$P = $_POST['phone'];
$Enq = $_POST['Enquiry'];

    $servername = "localhost";
    $username = "root";
    $pass="1234";
    $databasename="portfolio";

    $conn = mysqli_connect($servername, $username, $pass, $databasename);
    if(!$conn){
        echo "<script>alert('sorry failed to connect with the database');</script>";
        
    }
    else{
        $sql = "INSERT INTO `ContactMe`(`Name`, `Email`, `Phone`, `Enquiry`) VALUES ('$n', `$E`,`$P`,`$Enq`)";
        $result=mysqli_query($conn,$sql);
        if($result)
            echo '<script>alert("Success, You will be contacted soon");</script>';
        else    
            echo '<script>alert("Sorry, Your data has not Submitted '.mysqli_error($conn).'");</script>';
    }
}

?>