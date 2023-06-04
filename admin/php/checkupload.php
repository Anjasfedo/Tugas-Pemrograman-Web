<?php
function Upload($file,$dir){
    $target_file = $dir . basename($_FILES["$file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["$file"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }

if ($_FILES["$file"]["size"] > 2000000) {
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  return "error";
} else {
  if (move_uploaded_file($_FILES["$file"]["tmp_name"], $target_file)) {
  } else {
  }
}
}    