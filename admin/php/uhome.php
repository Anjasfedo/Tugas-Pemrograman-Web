<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
$heading=mysqli_real_escape_string($db,$_POST['heading']);

$shortdesc=mysqli_real_escape_string($db,$_POST['shortdesc']);

$query="UPDATE home_setup SET ";
$query.="shortdesc='$shortdesc',";
$query.="heading='$heading' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?edithome=true&msg=updated");
}    

}    