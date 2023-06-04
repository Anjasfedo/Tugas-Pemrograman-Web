<h2>Edit Premium Section</h2>
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

<hr>
<h4 id="premium_optionsection">Premium List</h4>
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Id</th>
            <th>Type</th>
            <th>Price</th>
            <th>Profit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$query2="SELECT * FROM premium_option";
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
                            <h6 class="modal-title" id="exampleModalLabel">Edit Skill</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="skilleditbox">
                            <form method="post" action="php/supdate.php">
                                <input type="hidden" name="id" value="<?=$data2['id']?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="types">Type</label>
                                        <input
                                            type="text"
                                            name="types"
                                            value="<?=$data2['types']?>"
                                            class="form-control"
                                            id="types"
                                            placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="price">Price</label>
                                        <input
                                            type="text"
                                            name="price"
                                            value="<?=$data2['price']?>"
                                            class="form-control"
                                            id="price"
                                            placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="profit">Profit</label>
                                        <input
                                            type="text"
                                            name="profit"
                                            value="<?=$data2['profit']?>"
                                            class="form-control"
                                            id="profit"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="supdate" value="Update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <td>#<?=$count?></td>
            <td><?=$data2['types']?></td>
            <td><?=$data2['price']?></td>
            <td><?=$data2['profit']?></td>
            <td>
                <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#modal<?=$data2['id']?>">
                    Edit
                </button>
                <a href="php/supdate.php?del=<?=$data2['id']?>">
                    <button
                        type="button"
                        class="btn btn-danger"
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
<form action="php/supdate.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="types">Type</label>
            <input
                type="text"
                name="types"
                class="form-control"
                id="types"
                placeholder=""
                required="required">
        </div>
        <div class="form-group col-md-5">
            <label for="price">Price</label>
            <input
                type="text"
                name="price"
                class="form-control"
                id="price"
                placeholder=""
                required="required">
        </div>
        <div class="form-group col-md-5">
            <label for="profit">Profit</label>
            <input
                type="text"
                name="profit"
                class="form-control"
                id="profit"
                placeholder=""
                required="required">
        </div>
        <div class="form-group col-md-2">
            <label class="text-white">Submit</label>
            <input
                type="submit"
                name="addskill"
                class="btn btn-primary form-control"
                value="Add Premium">
        </div>
    </div>
</form>