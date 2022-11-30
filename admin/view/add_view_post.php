<?php
$cat_nav = $obj->display_cat();

if (isset($_POST['post_set'])) {
    $post_msg = $obj->add_post($_POST);
}


?>


<!--
    ==================
    Add Post Here 
    ==================
-->

<div class="container">
    <h3 id="" class="bg-success mt-2 p-2 text-white">Add Post Here!</h3>
</div>
<div class="container">

    <p id="cat_not">
        <?php if (isset($post_msg)) {
            echo $post_msg;
        } ?>
    </p>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md">

                <!-- Post Title -->
                <div class="form-group">
                    <label for="post_title">Post Title *</label> <br>
                    <input type="text" name="post_title" id="post_title" class="form-control p-2" required>
                </div>

                <!-- Post Content -->
                <div class="form-group">
                    <label for="post_content">Post Content</label> <br>
                    <textarea name="post_content" placeholder="Write Post here!" id="post_content" class="form-control p-2" rows="4"
                        cols="4"> </textarea>
                </div>

                <!-- Post Image -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Post Image -->
                        <div class="form-group">
                            <label for="post_img">Post Image</label> <br>
                            <input type="file" name="post_img" id="post_img" class="form-control p-2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Post Image -->
                        <div class="form-group">
                            <img src="<?php if(isset($post_img)){ echo $post_img; } ?>" alt="">
                        </div>
                    </div>
                </div>

                <!-- Post Category -->
                <div class="form-group">
                    <label for="post_cat">Post Category</label> <br>
                    <select id="post_cat" name="post_cat" class="form-control p-2" required>
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
                    <textarea name="post_excerpt" id="post_excerpt" class="form-control p-2" rows="3"
                        cols="3"> </textarea>
                </div>

                <!-- Post Tags -->
                <div class="form-group">
                    <label for="post_tags">Post Tags</label> <br>
                    <input type="text" name="post_tags" id="post_tags" class="form-control p-2" required>
                </div>

                <!-- Post Status -->
                <div class="form-group">
                    <label for="post_status">Post Status</label> <br>
                    <select id="post_status" name="post_status" class="form-control p-2" required>
                        <option value="1">Published</option>
                        <option value="0">Draft</option>
                    </select>
                </div>

                <!-- Submit -->
                <div class="form-group">
                    <input type="submit" name="post_set" id="cat_sumbit" class="btn btn-primary" rows="3" cols="3"
                        value="Add Post">
                </div>
            </div>
        </div>
    </form>
</div>