<?php
include('../../include/db.php');
include('checkupload.php');
$query="SELECT * FROM information";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../assets/img/";

if(isset($_POST['information'])){
    
$logo_pic=$_FILES['logo_pic']['name'];    
$app_pic=$_FILES['app_pic']['name'];
$preview_pic1=$_FILES['preview_pic1']['name'];
$preview_pic2=$_FILES['preview_pic2']['name'];
    
if($logo_pic==""){
    $logo_pic=$data['logo_pic'];
}else{
    $pdone = Upload('logo_pic',$target_dir);
}
    
if($app_pic==""){
    $app_pic=$data['app_pic'];
}else{
    $cdone = Upload('app_pic',$target_dir);
}

if($preview_pic1==""){
    $preview_pic1=$data['preview_pic1'];
}else{
    $pv1done = Upload('preview_pic1',$target_dir);
}

if($preview_pic2==""){
    $preview_pic2=$data['preview_pic2'];
}else{
    $pv2done = Upload('preview_pic2',$target_dir);
}
     
$app_name=mysqli_real_escape_string($db,$_POST['app_name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$address=mysqli_real_escape_string($db,$_POST['address']);
$mobile=mysqli_real_escape_string($db,$_POST['mobile']);
  
if($pdone=="error"){
    header("location:../?editinformation=true&msg=error");
}else if($cdone=="error"){
    header("location:../?editinformation=true&msg=error");
}else if($pv1done=="error"){
    header("location:../?editinformation=true&msg=error");
}else if($pv2done=="error"){
    header("location:../?editinformation=true&msg=error");
}else{
$query="UPDATE information SET ";
$query.="logo_pic='$logo_pic',";
$query.="app_name='$app_name',";
$query.="app_pic='$app_pic',";
$query.="preview_pic1='$preview_pic1',";
$query.="preview_pic2='$preview_pic2',";
$query.="location='$address',";
$query.="mobile='$mobile',";
$query.="emailid='$email' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editinformation=true&msg=updated");
}    
}     
}
