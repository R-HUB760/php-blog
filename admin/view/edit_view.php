<?php

if (isset($_POST['update_cat_set'])) {
    $update_add_msg = $obj->update_add_cat($_POST);
}

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'edit') {
        $id = $_GET['id'];
        $update = $obj->display_cat_view($id);
        $update_show = mysqli_fetch_assoc($update);
    }

}

?>


<!--
    ==================
    Update Category Here 
    ==================
-->

<div class="container col-xl-8">
    <h3 id="" class="bg-success mt-2 p-2 text-white">Update Category Here!</h3>

    <?php if (isset($update_add_msg)) { ?>
        <p class="bg-success mt-2 p-2 text-white hi"><?php echo $update_add_msg; ?></p>
    <?php } ?>


    <form action="" method="post">
        <div class="form-group">
            <label for="add_cat">Category Name</label> <br>
            <input type="text" name="update_add_cat" id="add_cat" class="form-control p-2" value="<?php if(isset($update_show)){ echo $update_show['cat_name']; } ?>" required>

            <input type="hidden" name="update_id" value="<?php if(isset($update_show)){ echo $update_show['cat_id']; } ?>">
        </div>
        <div class="form-group">
            <label for="add_des">Category Description</label> <br>
            <input type="text" name="update_add_des" id="add_des" class="form-control p-2" value="<?php if(isset($update_show)){ echo $update_show['cat_des']; } ?>">
        </div>
        <div class="form-group">
            <input type="submit" name="update_cat_set" id="update" class="btn btn-primary" rows="3" cols="3"
                value="Update Category"> <a class="btn btn-primary" href="manage_category.php"> Go to Manage Category </a>
        </div>
    </form>
</div>