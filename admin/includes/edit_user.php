<?php

if(isset($_GET['edit_user'])){

  $the_user_id = $_GET['edit_user'];



  $query = "SELECT * FROM users WHERE user_id = $the_user_id";

  $select_users_query = mysqli_query($conn, $query);

  while (
    $row = mysqli_fetch_assoc(
      $select_users_query)
  ) {
    $user_id = $row['user_id'];
    $username = $row['username'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];  
    $user_role = $row['user_role'];
    $user_password = $row['user_password'];
  }












}

if (isset($_POST['edit_user'])) {
  // $user_id = $_POST['user_id'];
  $user_firstname = $_POST['user_firstname'];
  $user_lastname = $_POST['user_lastname'];
  $user_role= $_POST['user_role'];


  // $post_status = $_POST['post_status'];
  // $post_image = $_FILES['post_image']['name'];
  // $post_image_temp = $_FILES['post_image']['tmp_name'];
  $username = $_POST['username'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
  // $post_date = date('d-m-y');
  //$post_comment_count = 4;

  // move_uploaded_file($post_image_temp, "../images/$post_image");

  $query = "UPDATE users SET ";
  $query .="username  = '{$username}', ";
  $query .="user_firstname = '{$user_firstname}', ";
  $query .="user_lastname = '{$user_lastname}', ";
  $query .="user_email = '{$user_email}', ";
  $query .="user_role= '{$user_role}', ";
  $query .="user_password  = '{$user_password}' ";
  $query .= "WHERE user_id = {$the_user_id} ";

  $update_post = mysqli_query($conn, $query);


//check if everything is ok
comfirm( $update_post);

} ?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">First name</label>
    <input type="text" class="form-control" name="user_firstname" value="<?php echo $user_firstname ?>" />
  </div>

<select name="user_role" id="">

<option value="subscriber">
<?php echo $user_role ?>
</option>


<?php
if($user_role == 'admin') {
echo "<option value='subscriber'>
subscriber
</option>";

}else {
  echo "<option value='admin'>
  admin
  </option>";
}

?>




</select>



  <div class="form-group">
    <label for="post_author">Last name</label>
    <input type="text" class="form-control" name="user_lastname" value="<?php echo $user_lastname ?>" />
  </div>



  
  <!-- <div class="form-group">
    <label for="post_category_id">post_category id</label>
    <input type="text" class="form-control" name="post_category_id" />
  </div> -->

  

  <div class="form-group">
    <label for="post_status">username</label>
    <input type="text" class="form-control" name="username"  value="<?php echo $username ?>"/>
  </div>

  <!-- <div class="form-group">
    <label for="post_image">post image</label>
    <input type="file" class="form-control" name="post_image" />
  </div> -->

  <div class="form-group">
    <label for="post_tags">Email</label>
    <input type="text" class="form-control" name="user_email"  value="<?php echo $user_email ?>"" />
  </div>

  <div class="form-group">
    <label for="post_tags">Password</label>
    <input type="text" class="form-control" name="user_password" value="<?php echo $user_password ?>" " />
  </div>

  <!-- <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea
      type="text"
      class="form-control"
      name="post_content"
      cols="30"
      rows="10"
    >
    </textarea>
  </div> -->

  <div class="form-group">
    <input
      type="submit"
      class="btn btn-primary"
      value="Update user"
      name="edit_user"
     
    />
  </div>
</form>
