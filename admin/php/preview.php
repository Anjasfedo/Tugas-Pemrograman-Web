<h2>Edit Preview Section</h2>
<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
<div class="alert alert-success text-center" role="alert">
    Project Successfully Added !
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

<form method="post" action="php/upreview.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Preview Picture</label>
            <div class="custom-file">
                <input type="file" name="view_pic" class="custom-file-input" id="view_pic">
                <label class="custom-file-label" for="view_pic"></label>
                </div>
            </div>
            <div class="form-group col-md-6 mt-auto">
                <label for="view_name">Project Name</label>
                <input
                    type="name"
                    name="view_name"
                    class="form-control"
                    id="name"
                    placeholder="">
            </div>
            <div class="form-group col-md-2 ml-auto">
                <input
                    type="submit"
                    name="addtopreview"
                    class="btn btn-primary"
                    value="Add To preview">
            </div>
        </form>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Preview Image</th>
                    <th>Preview Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$query2="SELECT * FROM preview_setup";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>

                <tr>
                    <div
                        class="modal fade"
                        id="modal<?=$data2['id']?>"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Edit preview</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="php/upreview.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?=$data2['id']?>">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <img src="../assets/img/<?=$data2['view_pic']?>" class="oo img-thumbnail">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Preview Picture</label>
                                                <div class="custom-file">
                                                    <input type="file" name="view_pic" class="custom-file-input" id="view_pic">
                                                    <label class="custom-file-label" for="view_pic"></label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-auto">
                                                <label for="view_name">Project Name</label>
                                                <input
                                                    type="name"
                                                    name="view_name"
                                                    value="<?=$data2['view_name']?>"
                                                    class="form-control"
                                                    id="view_name"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" name="pupdate" value="Update">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <td>#<?=$count?></td>
                        <td><img src="../assets/img/<?=$data2['view_pic']?>" class="oo img-thumbnail"></td>
                        <td><?=$data2['view_name']?></td>
                        <td>
                            <button
                                type="button"
                                class="btn btn-primary btn-sm"
                                data-toggle="modal"
                                data-target="#modal<?=$data2['id']?>">
                                Edit
                            </button>
                            <a href="php/upreview.php?del=<?=$data2['id']?>">
                                <button
                                    type="button"
                                    class="btn btn-danger btn-sm"
                                    data-toggle="modal"
                                    data-target="#exampleModal">
                                    Delete
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php $count++;
} ?>

                </tbody>
            </table>