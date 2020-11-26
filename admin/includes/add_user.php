<?php if (isset($_POST['create_user'])) {
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

  $query = "INSERT INTO users(user_firstname, user_lastname, user_role, 
  username, user_email, user_password)";

  $query .= "VALUES ('{$user_firstname}', '{$user_lastname}', '{$user_role}', '{$username}', '{$user_email}', '{$user_password}')";

$create_user_query = mysqli_query($conn, $query);

//check if everything is ok
comfirm($create_user_query);

} ?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">First name</label>
    <input type="text" class="form-control" name="user_firstname" />
  </div>

<select name="user_role" id="">

<option value="subscriber">
select options
</option>
<option value="admin">
admin
</option>
<option value="subscriber">
subscriber
</option>


</select>



  <div class="form-group">
    <label for="post_author">Last name</label>
    <input type="text" class="form-control" name="user_lastname" />
  </div>



  
  <!-- <div class="form-group">
    <label for="post_category_id">post_category id</label>
    <input type="text" class="form-control" name="post_category_id" />
  </div> -->

  

  <div class="form-group">
    <label for="post_status">username</label>
    <input type="text" class="form-control" name="username" />
  </div>

  <!-- <div class="form-group">
    <label for="post_image">post image</label>
    <input type="file" class="form-control" name="post_image" />
  </div> -->

  <div class="form-group">
    <label for="post_tags">Email</label>
    <input type="text" class="form-control" name="user_email" />
  </div>

  <div class="form-group">
    <label for="post_tags">Password</label>
    <input type="text" class="form-control" name="user_password" />
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
      value="Add user"
      name="create_user"
      name="post_tags"
    />
  </div>
</form>
