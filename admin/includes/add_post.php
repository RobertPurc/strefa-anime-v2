<?php if (isset($_POST['create_post'])) {
  $post_title = $_POST['title'];
  $post_category_id = $_POST['post_category_id'];
  $post_author = $_POST['post_author'];
  $post_status = $_POST['post_status'];
  $post_image = $_FILES['post_image']['name'];
  $post_image_temp = $_FILES['post_image']['tmp_name'];
  $post_tags = $_POST['post_tags'];
  $post_content = $_POST['post_content'];
  $post_date = date('d-m-y');
  $post_comment_count = 4;

  move_uploaded_file($post_image_temp, "../images/$post_image");

  $query = "INSERT INTO posts(post_category_id, post_title, post_author, 
  post_date, post_image, post_content, post_tags, post_comment_count, post_status)";

  $query .= "VALUES ({$post_category_id}, '{$post_title}', '{$post_author}', now() , '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment_count}' , '{$post_status}')" ;

$create_post_query = mysqli_query($conn, $query);

//check if everything is ok
comfirm($create_post_query);

} ?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Post title</label>
    <input type="text" class="form-control" name="title" />
  </div>



  <div class="form-group">
    <label for="categories">categories</label>
<select name="post_category_id" id="">


<?php
 $query = "SELECT * FROM  categories ";
 $select_categories_id = mysqli_query(
   $conn,
   $query
 );

 comfirm($select_categories_id);
 while (
   $row = mysqli_fetch_assoc(
     $select_categories_id
   )
 ) {

   $cat_id = $row['cat_id'];
   $cat_title = $row['cat_title'];

   echo "<option value='{$cat_id}'> {$cat_title}</option>"
?>

 <?php } ?>
  
</select>
  </div>
  <!-- <div class="form-group">
    <label for="post_category_id">post_category id</label>
    <input type="text" class="form-control" name="post_category_id" />
  </div> -->

  <div class="form-group">
    <label for="post_author">post author</label>
    <input type="text" class="form-control" name="post_author" />
  </div>

  <div class="form-group">
    <label for="post_status">post status</label>
    <input type="text" class="form-control" name="post_status" />
  </div>

  <div class="form-group">
    <label for="post_image">post image</label>
    <input type="file" class="form-control" name="post_image" />
  </div>

  <div class="form-group">
    <label for="post_tags">Post tags</label>
    <input type="text" class="form-control" name="post_tags" />
  </div>

  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea
      type="text"
      class="form-control"
      name="post_content"
      cols="30"
      rows="10"
    >
    </textarea>
  </div>

  <div class="form-group">
    <input
      type="submit"
      class="btn btn-primary"
      value="Publish"
      name="create_post"
      name="post_tags"
    />
  </div>
</form>
