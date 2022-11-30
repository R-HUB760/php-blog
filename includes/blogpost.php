<?php
 $post_show = $in_obj->display_posts();

?>

<div class="col-lg-8">
    <div class="all-blog-posts">
        <div class="row">
            <?php while($post_display = mysqli_fetch_assoc($post_show)){ ?>
            <div class="col-lg-6 rounded">
                <div class="blog-post shadow hover">
                    <div class="blog-thumb">
                        <a href="single.php?status=single&&id=<?php if(isset($post_display)){ echo $post_display['post_id'];} ?>">
                        <img style="min-width:100% ;" src="upload/<?php if(isset($post_display)){ echo $post_display['post_img'];} ?>" alt="">
                        </a>
                    </div>
                    <div class="down-content">
                        <span>Fashion</span>
                        <a href="single.php?status=single&&id=<?php if(isset($post_display)){ echo $post_display['post_id'];} ?>">
                            <h4><?php if(isset($post_display)){ echo $post_display['post_title'];} ?></h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#"><?php if(isset($post_display)){ echo $post_display['post_date'];} ?></a></li>
                            <li><a href="#"><?php if(isset($post_display)){ echo $post_display['post_comment'];} ?> Comments</a></li>
                        </ul>
                        <p> <?php if(isset($post_display)){ echo $post_display['post_summary'];} ?> </p>      
                        <div class="post-options">
                            <div class="row">
                                <div class="col-6">
                                    <ul class="post-tags">
                                        <li><i class="fa fa-tags"></i></li>
                                        <li><a href="#">HTML CSS</a>,</li>
                                        <li><a href="#">Photoshop</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="post-share">
                                        <li><i class="fa fa-share-alt"></i></li>
                                        <li><a href="#">Facebook</a>,</li>
                                        <li><a href="#">Twitter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-lg-12">
                <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>