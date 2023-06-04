<h2>Edit Information</h2>
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
    something wrong with your image please check type or size !
</div>
<?php
  } } 
?>

<form method="post" action="php/uinformation.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <img src="../assets/img/<?=$data['logo_pic']?>" class="oo img-thumbnail"><br>
            <label>logo</label>
            <div class="custom-file">
                <input type="file" name="logo_pic" class="custom-file-input" id="logo_pic">
                <label class="custom-file-label" for="logo_pic"><p><?=$data['logo_pic']?></p></label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <img src="../assets/img/<?=$data['app_pic']?>" class="oo img-thumbnail">
            <label>Home Picture</label>
            <div class="custom-file">
                <input type="file" name="app_pic" class="custom-file-input" id="app_pic">
                <label class="custom-file-label" for="app_pic"><p><?=$data['app_pic']?></p></label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <img src="../assets/img/<?=$data['preview_pic1']?>" class="oo img-thumbnail">
            <label>Feature Picture 1</label>
            <div class="custom-file">
                <input
                    type="file"
                    name="preview_pic1"
                    class="custom-file-input"
                    id="preview_pic1">
                <label class="custom-file-label" for="preview_pic1"><p><?=$data['preview_pic1']?></p></label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <img src="../assets/img/<?=$data['preview_pic2']?>" class="oo img-thumbnail">
            <label>Feature Picture 2</label>
            <div class="custom-file">
                <input
                    type="file"
                    name="preview_pic2"
                    class="custom-file-input"
                    id="preview_pic2">
                <label class="custom-file-label" for="preview_pic2"><p><?=$data['preview_pic2']?></p></label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="app_name">Name</label>
            <input
                type="name"
                name="app_name"
                value="<?=$data['app_name']?>"
                class="form-control"
                id="app_name"
                placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                value="<?=$data['emailid']?>"
                class="form-control"
                id="email"
                placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input
            type="text"
            name="address"
            value="<?=$data['location']?>"
            class="form-control"
            id="address"
            placeholder="">
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="mobile">Mobile No</label>
            <input
                type="text"
                class="form-control"
                value="<?=$data['mobile']?>"
                name="mobile"
                id="mobile"
                placeholder="">
        </div>
    </div>
    <input
        type="submit"
        name="information"
        class="btn btn-primary"
        value="Save Changes">
</form>