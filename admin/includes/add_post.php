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
} ?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Post title</label>
    <input type="text" class="form-control" name="title" />
  </div>

  <div class="form-group">
    <label for="post_category_id">post_category id</label>
    <input type="text" class="form-control" name="post_category_id" />
  </div>

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
