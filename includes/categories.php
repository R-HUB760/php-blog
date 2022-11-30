<?php  $cat_nav = $in_obj->display_cat(); ?>

<div class="sidebar-item categories">
    <div class="sidebar-heading">
        <h2>Categories</h2>
    </div>
    <div class="content">
        <ul>
            <?php while ($cat_see_nav = mysqli_fetch_assoc($cat_nav)) { ?>
            <li>
                <a href="#">
                    <?php if (isset($cat_see_nav)) {
                echo $cat_see_nav['cat_name'];
            } ?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>