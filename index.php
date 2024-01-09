<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] ==  "POST")
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "insert into form(fname, lname, gender, cnum, address, email, pass) values ('$firstname', '$lastname', '$gender', '$num', '$address', '$gmail', '$password')";

        mysqli_query($con, $query);
        
        echo "<script type='text/javascript'> alert('sucessfully register')</script>";
    }
    else {
        echo "<script type='text/javascript'> alert('please enter valid information')</script>";
    }
}

?>



<!DOCTYPs html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form logIn and Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <h4> Its free and takes a few minutes</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Address</label>
            <input type="tel" name="number" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="submit">
        </form>
        <p>by clicking the sign up button, you agree to our<br>
            <a href="">terms and conditions</a> and <a href="#">policy and privacy</a>
            <p>Already have an account? <a href="login.php">LogIn Here</a></p>

        </p>
    </div>
    
</body>
</html>