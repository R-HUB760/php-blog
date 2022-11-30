<?php

$cat_nav = $obj->display_cat();


if (isset($_GET['status'])) {
    if ($_GET['status'] == "edit") {
        $id = $_GET['id'];
        $pots = $obj->display_post_view($id);
        $post_value = mysqli_fetch_assoc($pots);
    }
}

if (isset($_POST['update_post_set'])) {
    $post_update = $obj->update_post($_POST);
}


?>


<!--
    ==================
    Update Post Here 
    ==================
-->

<div class="container">
    <h3 id="" class="bg-success mt-2 p-2 text-white">Update Post Here!</h3>
</div>
<div class="container">

    <?php if (isset($post_update)) { ?>
    <p class="bg-success mt-2 p-2 text-white hi">
        <?php echo $post_update; ?>
    </p>
    <?php } ?>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md">


                <!-- Post Title -->
                <div class="form-group">
                    <label for="post_title">Post Title *</label> <br>
                    <input type="text" value="<?php if (isset($post_value)) {
                        echo $post_value['post_title'];
                    } ?>" name="update_post_title" id="post_title" class="form-control p-2" required>
                </div>

                <!-- Post Content -->
                <div class="form-group">
                    <label for="post_content">Post Content</label> <br>
                    <textarea name="update_post_content" value="" id="post_content" class="form-control p-2" rows="4"
                        cols="4"><?php if (isset($post_value)) {
                            echo $post_value['post_content'];
                        } ?> </textarea>
                </div>

                <!-- Hidden post id -->
                <input type="hidden" value="<?php if (isset($post_value)) {
                        echo $post_value['post_id'];
                    } ?>" name="update_post_id" />


                <!-- Post Image -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Post Image -->
                        <div class="form-group">
                            <label for="post_img">Post Image</label> <br>
                            <input type="file" name="update_post_img" value="<?php if (isset($post_value)) {
                                    echo $post_value['post_img'];
                                } ?>" id="post_img" class="form-control p-2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Post Image -->
                        <div class="form-group">
                            <img src="../upload/<?php if (isset($post_img)) {
                                echo $post_img;
                            } ?>" alt="">
                        </div>
                    </div>
                </div>

                <!-- Post Category -->
                <div class="form-group">
                    <label for="post_cat">Post Category</label> <br>
                    <select id="post_cat" name="update_post_cat" class="form-control p-2" required>
                        <?php while ($cat_see_nav = mysqli_fetch_assoc($cat_nav)) { ?>
                        <option value="<?php if (isset($cat_see_nav)) {
                                echo $cat_see_nav['cat_name'];
                            } ?> ">
                            <?php if (isset($cat_see_nav)) {
                                echo $cat_see_nav['cat_name'];
                            } ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Post Excerpt -->
                <div class="form-group">
                    <label for="post_excerpt">Post Excerpt</label> <br>
                    <textarea name="update_post_excerpt" id="post_excerpt" value="" class="form-control p-2" rows="2"
                        cols="2"><?php if (isset($post_value)) {
                            echo $post_value['post_summary'];
                        } ?> </textarea>
                </div>

                <!-- Post Tags -->
                <div class="form-group">
                    <label for="post_tags">Post Tags</label> <br>
                    <input type="text" name="update_post_tags" value="<?php if (isset($post_value)) {
                            echo $post_value['post_tags'];
                        } ?>" id="post_tags" class="form-control p-2" required>
                </div>

                <!-- Post Status -->
                <div class="form-group">
                    <label for="post_status">Post Status</label> <br>
                    <select id="post_status" name="update_post_status" class="form-control p-2" required>
                        <option value="1">Published</option>
                        <option value="0">Draft</option>
                    </select>
                </div>

                <!-- Submit -->
                <div class="form-group">
                    <input type="submit" name="update_post_set" id="update" class="btn btn-primary" rows="3" cols="3"
                        value="Update Post">
                </div>
            </div>
        </div>
    </form>
</div>