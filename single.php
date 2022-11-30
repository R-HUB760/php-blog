<?php

include("admin/class/function.php");
$in_obj = new Myblog();


?>


<?php include_once("includes/head.php"); ?>

<title>Single Post</title>

<body>

  <main>
    <!-- ***** Preloader Start ***** -->
    <!-- <?php /* include_once("includes/pre_loader.php"); */?> -->
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php include_once("includes/header.php"); ?>

    <!-- Page Content -->

    <!-- Banner Starts Here -->
    <?php include_once("includes/banner.php"); ?>
    <!-- Banner Ends Here -->

    <!-- <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="row">
                                <div class="col-lg-8">
                                    <span>Stand Blog HTML5 Template</span>
                                    <h4>Creative HTML Template For Bloggers!</h4>
                                </div>
                                <div class="col-lg-4">
                                    <div class="main-button">
                                        <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog"
                                            target="_parent">Download Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


    <section class="blog-posts">
      <div class="container shadow mb-5">
        <div class="row">

          <!-- All Posts -->
          <center>
            <?php include_once("includes/single_post.php"); ?>
          </center>
          <!-- All Posts End -->
        </div>
      </div>
    </section>


    <!-- Tags -->
    <div class="container bg-success shadow">
      <div class="row">
        <div class="col-lg-4 container">
          <?php include_once("includes/post_tags.php"); ?>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include_once("includes/footer.php"); ?>
  </main>


  <!-- Bootstrap core JavaScript -->
  <?php include_once("includes/script.php"); ?>

</body>

</html>