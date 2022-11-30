<?php 

if(isset($_POST['cat_set'])){
    $add_msg = $obj->add_cat($_POST);
}



?>


<!--
    ==================
    Add Category Here 
    ==================
-->

<div class="container col-xl-8">
    <h3 id="" class="bg-success mt-2 p-2 text-white">Add Category Here!</h3>
    <p id="cat_not"><?php if(isset($add_msg)){ echo $add_msg; }?></p>
    <form action="" method="post">
        <div class="form-group">
            <label for="add_cat">Category Name</label> <br>
            <input type="text" name="add_cat" id="add_cat" class="form-control p-2" required>
        </div>
        <div class="form-group">
            <label for="add_des">Category Description</label> <br>
            <input type="text" name="add_des" id="add_des" class="form-control p-2" maxlength="200" >
        </div>
        <div class="form-group">
            <input type="submit" name="cat_set" id="cat_sumbit" class="btn btn-primary" rows="3" cols="3" value="Add Category">
        </div>
    </form>
</div>