<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinayak Harmalakar Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar sidebarGo" id="sidebar">
            <nav>
                <ul>
                    <li class="home"><a href="/">Home</a></li>
                    <li><a href="/Intro.html">My Intro</a></li>
                    <li><a href="/Service.html">Services</a></li>
                    <li><a href="/Blog.html">Blog</a></li>
                    <li><a href="/contact.html">Contact Me</a></li>
                </ul>
            </nav>
        </div>
        <div class="main">
            <div class="hamburger">
                <img class="ham" src="ham.png" alt="ham" height="23px">        
                <img class="cross" src="cross.png" alt="cross" height="23px">
            </div>
            <div class="contactform">
                <h1>Contact Me For Work or General Enquiry</h1>
                <form action="/contact.php" method="post">
                    <div class="mb-3">
                        <label for="clinetName" class="form-label">Name :</label>
                        <input type="text" name="name" class="form-control" id="clinetName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="clientEmail" class="form-label">Email address :</label>
                        <input type="email" name="email" class="form-control" id="clientEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="clientPhone" class="form-label">Phone no. :</label>
                        <input type="number" name="phone" min="1000000000" max="9999999999" class="form-control" id="clientPhone">
                    </div>
                    <div class="mb-3">
                        <label for="clientEnquiry" class="form-label">Enquiry :</label>
                        <input type="text" name="Enquiry" class="form-control" id="clientEnquiry">
                    </div>
                    <div class=" mb-3" id="form-check">
                        <input type="checkbox" class="form-check-input" id="isclient">
                        <label class="form-check-label" for="isclient">I want you to work with me on a project</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>

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
        $sql = "INSERT INTO `ContactMe`(`Name`, `Email`, `Phone`, `Enquiry`) VALUES ('$n', '$E','$P','$Enq')";
        $result=mysqli_query($conn,$sql);
        if($result)
            echo '<script>alert("Success, You will be contacted soon");</script>';
        else    
            echo '<script>alert("Sorry, Your data has not Submitted '.mysqli_error($conn).'");</script>';
    }
}

?>