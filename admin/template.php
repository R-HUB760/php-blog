<?php 


include("class/function.php");

$obj = new Myblog();

session_start();

$id = $_SESSION['adminId'];

if($id==null){
    header("location: index.php");
}

if(isset($_GET['log_out'])){

    
    // remove all session variables
    unset($_SESSION['adminId']);
    header("location: index.php");
}


?>

<?php include_once('includes/head.php') ?>

    <body class="sb-nav-fixed">
    <?php include_once('includes/topnav.php') ?>
        <div id="layoutSidenav">
        <?php include_once('includes/sidenav.php') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php 
                        if(isset($view)){
                            if($view == "dashboard"){
                                include_once("view/dash_view.php");
                            }
                            else if($view == "add_post"){
                                include_once("view/add_view_post.php");
                            }
                            else if($view == "manage_post"){
                                include_once("view/manage_view_post.php");
                            }
                            else if($view == "add_category"){
                                include_once("view/add_view_cat.php");
                            }
                            else if($view == "manage_category"){
                                include_once("view/manage_view_cat.php");
                            }
                            else if($view == "edit"){
                                include_once("view/edit_view.php");
                            }
                            else if($view == "update_post"){
                                include_once("view/update_view_post.php");
                            }
                            
                        }
                        
                        
                        
                        ?>
                    </div>
                </main>
                <?php include_once('includes/footer.php') ?>
            </div>
        </div>
        <?php include_once('includes/script.php') ?>
    </body>
</html>
