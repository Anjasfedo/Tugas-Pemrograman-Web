<?php
include('../../include/db.php');
if(isset($_POST['addtofeature'])){        

$feature=mysqli_real_escape_string($db,$_POST['feature']);
$feature_desc=mysqli_real_escape_string($db,$_POST['feature_desc']);

$query="INSERT INTO feature_setup (feature,feature_desc) ";
$query.="VALUES ('$feature','$feature_desc')";    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editfeature=true&msg=updated");
}    

}    
    
if(isset($_POST['fupdate'])){
    $id=$_POST['id'];
    
$feature=mysqli_real_escape_string($db,$_POST['feature']);
$feature_desc=mysqli_real_escape_string($db,$_POST['feature_desc']);

 $query="UPDATE feature_setup SET feature='$feature',feature_desc='$feature_desc' WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editfeature=true#rlist");
    }
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM feature_setup WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editfeature=true#rlist");
    }
}