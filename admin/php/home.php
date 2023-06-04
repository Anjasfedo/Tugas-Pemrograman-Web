<h2>Edit Home Section</h2>
<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
<div class="alert alert-success text-center" role="alert">
    Successfully Updated !
</div>
<?php
  }  
 } 
?>

<form method="post" action="php/uhome.php">
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="heading">Heading</label>
            <input
                type="text"
                name="heading"
                class="form-control"
                id="heading"
                placeholder="<?=$data['heading']?>">
        </div>
        <div class="form-group col-md-12">
            <label for="shortdesc">Description</label>
            <textarea
                class="form-control"
                name="shortdesc"
                id="shortdesc"
                rows="3"
                placeholder="<?=$data['shortdesc'];?>"></textarea>
        </div>
    </div>
    <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>