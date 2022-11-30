<?php


if (isset($_GET['status'])) {
  if ($_GET['status'] == 'single') {
    $id = $_GET['id'];
    $post_show_id = $in_obj->display_posts_id($id);
  }
}

?>

<div class="col-lg-12">
  <div class="all-blog-posts">
    <div class="row">
      <?php while ($post_display = mysqli_fetch_assoc($post_show_id)) { ?>
      <div class="col-lg-12 rounded">
        <div class="blog-post">
          <div class="blog-thumb">
            <a href="single.php">
              <img style="min-width:100% ;"
                src="upload/<?php if (isset($post_display)) {
                echo $post_display['post_img'];
              } ?>" alt="">
            </a>
          </div>
          <div class="down-content">
            <span>Fashion</span>
            <a href="single.php">
              <h4>
                <?php if (isset($post_display)) {
                echo $post_display['post_title'];
              } ?>
              </h4>
            </a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">
                  <?php if (isset($post_display)) {
                echo $post_display['post_date'];
              } ?>
                </a></li>
              <li><a href="#">
                  <?php if (isset($post_display)) {
                echo $post_display['post_comment'];
              } ?> Comments
                </a></li>
            </ul>
            <p>
              <?php if (isset($post_display)) {
                echo $post_display['post_content'];
              } ?>
            </p>
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
    </div>
  </div>
</div>