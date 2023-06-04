<h2>Edit Website Setup</h2>
<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
<div class="alert alert-success text-center" role="alert">
    Successfully Updated !
</div>
<?php
  }  
  if($_GET['msg']=='error'){
      ?>
<div class="alert alert-danger text-center" role="alert">
    something wrong with your image please check type or size!
</div>
<?php
  } } 
?>

<form method="post" action="php/useo.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-12">
            <img src="../assets/img/<?=$data['icon']?>" class="img-thumbnail ooo">
        </div>
        <div class="form-group col-md-6">
            <label>Website Icon</label>
            <div class="custom-file">
                <input type="file" name="siteicon" class="custom-file-input" id="icon">
                <label class="custom-file-label" for="projectpic">
                    <p><?=$data['icon']?></p>
                </label>
            </div>
        </div>
        <div class="form-group col-md-6 mt-auto">
            <label for="name">Website Title</label>
            <input
                type="name"
                name="title"
                value="<?=$data['title']?>"
                class="form-control"
                id="name"
                placeholder="">
        </div>
        <div class="form-group ml-auto">
            <input type="submit" name="seo" class="btn btn-primary" value="Update">
        </div>
    </form>