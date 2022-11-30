<?php
class Myblog
{
  private $conn;

  public function __construct()
  {
    #db-host, #db-user, #db-pass, #db-name

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'blogproject';

    $this->conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$this->conn) {
      die("Connection Failed Error!!");
    }
  }

  public function admin_login($data)
  {
    $ad_email = $data['admin_email'];
    $ad_pass = md5($data['admin_password']);
    $sql = "SELECT * FROM admin_info WHERE admin_email='$ad_email' && admin_password='$ad_pass'";

    if (mysqli_query($this->conn, $sql)) {
      $add_fo = mysqli_query($this->conn, $sql);


      if ($add_fo) {
        header('location: dashboard.php');

        $admin_ss = mysqli_fetch_assoc($add_fo);
        session_start();
        $_SESSION['adminId'] = $admin_ss['id'];
        $_SESSION['adminName'] = $admin_ss['admin_name'];
      }
    }

  }

  public function add_cat($data)
  {
    $cat_name = $data['add_cat'];
    $cat_des = $data['add_des'];

    $sql = "INSERT INTO add_cat (cat_name, cat_des) VALUES ('$cat_name', '$cat_des')";

    if (mysqli_query($this->conn, $sql)) {

      return "Added Category Successfully";
    }
  }

  public function display_cat()
  {
    $sql = "SELECT * FROM add_cat";
    $cat_dis = mysqli_query($this->conn, $sql);

    return $cat_dis;
  }

  public function display_cat_view($id)
  {
    $sql = "SELECT * FROM add_cat WHERE cat_id=$id ";
    $cat_dis = mysqli_query($this->conn, $sql);

    return $cat_dis;
  }


  public function update_add_cat($data)
  {
    $update_cat_name = $data['update_add_cat'];
    $update_cat_des = $data['update_add_des'];
    $update_id = $data['update_id'];

    $sql = " UPDATE add_cat SET cat_name='$update_cat_name', cat_des='$update_cat_des' WHERE cat_id=$update_id ";

    if (mysqli_query($this->conn, $sql)) {

      return "Update Category Successfully";
    }
  }

  public function dataDelete($id)
  {
    $sql = "DELETE FROM add_cat WHERE cat_id = $id";

    if (mysqli_query($this->conn, $sql)) {

      return "Deleted Category Successfully";
    }
  }

  public function dataDeletePost($id)
  {
    $sql = "DELETE FROM add_post WHERE post_id = $id";
    if (mysqli_query($this->conn, $sql)) {
      return "Deleted Post Successfully";
    }
  }

  public function add_post($data)
  {
    $post_title = $data['post_title'];
    $post_img = $_FILES['post_img']['name'];
    $post_img_tmp = $_FILES['post_img']['tmp_name'];
    $post_cat = $data['post_cat'];
    $post_excerpt = $data['post_excerpt'];
    $post_content = $data['post_content'];
    $post_tags = $data['post_tags'];
    $post_status = $data['post_status'];

    $sql = "INSERT INTO add_post (post_title, post_img, post_author, post_date, post_cat, post_summary, post_content, post_comment, post_tags, post_status) 
    VALUES ('$post_title','$post_img','Admin',now(),'$post_cat','$post_excerpt','$post_content',3,'$post_tags',$post_status)";

    $post = mysqli_query($this->conn, $sql);

    if ($post) {
      move_uploaded_file($post_img_tmp, '../upload/' . $post_img);

      return "Added Post Successfully";
    }
  }

  public function display_posts()
  {
    $sql = "SELECT * FROM add_post WHERE post_status=1 ORDER BY post_id DESC";
    $post_dis = mysqli_query($this->conn, $sql);

    return $post_dis;
  }
  public function display_posts_id($id)
  {
    $sql = "SELECT * FROM add_post WHERE post_id=$id ORDER BY post_id DESC";
    $post_dis = mysqli_query($this->conn, $sql);

    return $post_dis;
  }

  public function display_post_view($id)
  {
    $sql = "SELECT * FROM add_post WHERE post_id=$id ";
    $cat_dis = mysqli_query($this->conn, $sql);
    return $cat_dis;
  }

  public function update_post($data)
  {
    $post_id = $data['update_post_id'];
    $post_title = $data['update_post_title'];
    $post_img = $_FILES['update_post_img']['name'];
    $post_img_tmp = $_FILES['update_post_img']['tmp_name'];
    $post_cat = $data['update_post_cat'];
    $post_excerpt = $data['update_post_excerpt'];
    $post_content = $data['update_post_content'];
    $post_tags = $data['update_post_tags'];
    $post_status = $data['update_post_status'];
    

    $sql = "UPDATE `add_post` SET `post_title`='$post_title', `post_img`='$post_img', `post_author`='Admin', `post_date`=now(), `post_cat`=$post_cat, `post_summary`='$post_excerpt', `post_content`='$post_content', `post_comment`=3, `post_tags`='$post_tags', `post_status`=$post_status WHERE `post_id`=$post_id";

    $post = mysqli_query($this->conn, $sql);
    if ($post) {
      move_uploaded_file($post_img_tmp, '../upload/' . $post_img);
      return "Update Post Successfully";
    }
  }

}

?>