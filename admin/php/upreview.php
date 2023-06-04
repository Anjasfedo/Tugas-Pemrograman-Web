<?php
include('../../include/db.php');
include('checkupload.php');
$id=$_POST['id'];
$query="SELECT * FROM preview_setup WHERE id='$id'";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../assets/img/";

if(isset($_POST['pupdate'])){    
$view_pic=$_FILES['view_pic']['name'];        
if($view_pic==""){
    $view_pic=$data['view_pic'];
}else{
    $pdone = Upload('view_pic',$target_dir);
}

$view_name=mysqli_real_escape_string($db,$_POST['view_name']);
  
if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE preview_setup SET ";
$query.="view_pic='$view_pic',";
$query.="view_name='$view_name' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editpreview=true#done");
}
}      
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM preview_setup WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editpreview=true#done");
}
}

if(isset($_POST['addtopreview'])){    
$view_pic=$_FILES['view_pic']['name'];        
if($view_pic==""){
    $view_pic=$data['view_pic'];
}else{
    $pdone = Upload('view_pic',$target_dir);
}
    
$view_name=mysqli_real_escape_string($db,$_POST['view_name']);
  
if($pdone=="error"){
    header("location:../?editpreview=true&msg=error");
}else{
$query="INSERT INTO preview_setup (view_name,view_pic) ";
$query.="VALUES ('$view_name','$view_pic')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editpreview=true&msg=updated");
}    
}     
}