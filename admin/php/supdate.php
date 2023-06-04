<?php
include('../../include/db.php');
if(isset($_POST['supdate'])){
    $id=$_POST['id'];
    $types=mysqli_real_escape_string($db,$_POST['types']);
    $price=mysqli_real_escape_string($db,$_POST['price']);
    $profit=mysqli_real_escape_string($db,$_POST['profit']);
    $query="UPDATE premium_option SET types='$types',price='$price', profit='$profit' WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editpremium=true#premium_optionsection");
    }
}

if(isset($_POST['addskill'])){
    $id=$_POST['id'];
    $types=mysqli_real_escape_string($db,$_POST['types']);
    $price=mysqli_real_escape_string($db,$_POST['price']);
    $profit=mysqli_real_escape_string($db,$_POST['profit']);
    $query="INSERT INTO premium_option (types,price,profit) VALUES ('$types','$price', '$profit')";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editpremium=true#premium_optionsection");
    }
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM premium_option WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editpremium=true#premium_optionsection");
    }
}