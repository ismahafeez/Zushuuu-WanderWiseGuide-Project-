<?php

$con = mysqli_connect("localhost", "root", "", "practice");

if (isset($_POST['sub']))

{

    $fname = $_POST['fname'];

    $lname = $_POST['lname'];

    $email = $_POST['email'];

    $pass = $_POST['pass'];




    $filename = $_FILES['img']['name'];

    $tempname = $_FILES['img']['tmp_name'];

    $folder = "images/" . $filename;

    move_uploaded_file($tempname, $folder);

    

    $query = "INSERT INTO blue(fname,lname,email,pass,birthday,gender,img) VALUES('$fname','$lname','$email','$pass','$birthday','$gender','$folder')";

    $result = mysqli_query($con, $query);

    //header("location:sign in1.php");

    //echo "<script>alert('Registered successfully')</script>";

}

?>