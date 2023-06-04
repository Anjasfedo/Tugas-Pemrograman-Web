<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
$premium_title=mysqli_real_escape_string($db,$_POST['premium_title']);

$premium_desc=mysqli_real_escape_string($db,$_POST['premium_desc']);

$query="UPDATE premium SET ";
$query.="premium_desc='$premium_desc',";
$query.="premium_title='$premium_title' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editpremium=true&msg=updated");
}    

}    