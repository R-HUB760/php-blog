<?php $post_show = $obj->display_posts();  

if(isset($_GET['status'])){
    if($_GET['status']=="delete"){
        $id = $_GET['id'];
        $post_msg = $obj->dataDeletePost($id);
    }
}


?>

<h3 class="bg-success mt-2 p-2 text-white border border-left border-5 border-dark">Manage Posts Here!</h3>

    <?php if (isset($post_msg)) { ?>
        <p class="bg-success mt-2 p-2 text-white"><?php echo $post_msg; ?></p>
    <?php } ?>



<table class="table" id="dataTable" style="width:100%;">
    <thead>
        <tr>
            <th>Cat_id</th>
            <th>Cat_Name</th>
            <th>Cat_Description</th>
            <th>Cat_Action</th>
            <th>Post status</th>
            <th>Post Comment</th>
            <th>Post Date</th>
            <th>post category</th>
            <th>Post content</th>
            <th>post summa</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($cat_see = mysqli_fetch_assoc($post_show)) { ?>
        <tr>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['post_id'];
            } ?>
            </td>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['post_title'];
            } ?>
            </td>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['post_date'];
            } ?>
            </td>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['post_cat'];
            } ?>
            </td>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['post_summary'];
            } ?>
            </td>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['post_content'];
            } ?>
            </td>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['post_comment'];
            } ?>
            </td>
            <td>
                <?php if (isset($cat_see)) {
                if ($cat_see['post_status']==1){
                    echo"Published";
                }else{
                    echo"Draft";
                }
            } ?>
            </td>
            <td>
                <img src="../upload/<?php if (isset($cat_see)) {
                echo $cat_see['post_img'];
            } ?>" alt="" width="150">
            </td>
            <td>
                <a href="update_post.php?status=edit&&id=<?php if (isset($cat_see)) {
                echo $cat_see['post_id'];} ?>" class="btn btn-primary">Edit</a>
                <a href="?status=delete&&id=<?php if (isset($cat_see)) {
                echo $cat_see['post_id'];} ?>" class="btn btn-warning">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>

</table>