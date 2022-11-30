<?php 

$cat_show = $obj->display_cat();  

if(isset($_GET['status'])){

    if($_GET['status']=="delete"){
        $id = $_GET['id'];

        $cat_dlt = $obj->dataDelete($id);
    }

}


?>

<h3 class="bg-success my-2 mb-4 p-2 text-white">Manage Category Here!</h3>


<table class="table" id="dataTable" style="min-width:100%;">
    <thead>
        <tr>
            <th>Cat_id</th>
            <th>Cat_Name</th>
            <th>Cat_Description</th>
            <th>Cat_Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($cat_see = mysqli_fetch_assoc($cat_show)) { ?>
        <tr>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['cat_id'];
            } ?>
            </td>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['cat_name'];
            } ?>
            </td>
            <td>
                <?php if (isset($cat_see)) {
                echo $cat_see['cat_des'];
            } ?>
            </td>
            <td>
                <a href="edit.php?status=edit&&id=<?php if (isset($cat_see)) {
                echo $cat_see['cat_id'];
            } ?>" class="btn btn-primary">Edit</a>
                <a href="?status=delete&&id=<?php if (isset($cat_see)) {
                echo $cat_see['cat_id'];
            } ?>" class="btn btn-warning">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>

</table>