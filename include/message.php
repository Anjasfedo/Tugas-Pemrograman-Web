<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query="INSERT INTO contact (cname,cemail,csubject,cmessage) "; 
$query.="VALUES('$name','$email','$subject','$message')";
$run = mysqli_query($db,$query);

if ($run) {
    
    header("location: ../contact-us.php?success=true");
}