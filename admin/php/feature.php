<h2>Edit Feature Section</h2>
<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
<div class="alert alert-success text-center" role="alert">
    Successfully Added !
</div>
<?php
  }  
 } 
?>

<form action="php/ufeature.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="feature">Feature Name</label>
            <input
                type="text"
                name="feature"
                class="form-control"
                id="feature"
                placeholder=""
                required="required">
        </div>
        <div class="form-group col-md-8">
            <label for="feature_desc">Feature Description</label>
            <input
                type="text"
                name="feature_desc"
                class="form-control"
                id="feature_desc"
                placeholder=""
                required="required">
        </div>
        <div class="form-group col-md-2 ml-auto">
            <input
                type="submit"
                name="addtofeature"
                class="btn btn-primary form-control"
                value="Add Feature">
        </div>
    </div>
</form>
<table id="rlist" class="table table-striped table-sm .table-responsive ">
    <thead>
        <tr>
            <th>Id</th>
            <th>Feature</th>
            <th>Feature Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$query2="SELECT * FROM feature_setup";
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
                            <h6 class="modal-title" id="exampleModalLabel">Edit</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="php/ufeature.php" method="post">
                                <input type="hidden" name="id" value="<?=$data2['id']?>">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="feature">Feature Name</label>
                                        <input
                                            type="text"
                                            name="feature"
                                            value="<?=$data2['feature']?>"
                                            class="form-control"
                                            id="feature"
                                            placeholder=""
                                            required="required">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="feature_desc">Feature Description</label>
                                        <input
                                            type="text"
                                            name="feature_desc"
                                            value="<?=$data2['feature_desc']?>"
                                            class="form-control"
                                            id="feature_desc"
                                            placeholder=""
                                            required="required">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="fupdate" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <td>#<?=$count?></td>
                <td><?=$data2['feature']?></td>
                <td><?=$data2['feature_desc']?></td>
                <td>
                    <button
                        type="button"
                        class="btn btn-primary btn-sm"
                        data-toggle="modal"
                        data-target="#modal<?=$data2['id']?>">
                        Edit
                    </button>
                    <a href="php/ufeature.php?del=<?=$data2['id']?>">
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