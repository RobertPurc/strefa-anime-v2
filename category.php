<?php include "includes/db.php"; ?>

<?php

include "includes/header.php";
?>
    <!-- Navigation -->
    <?php

    include "includes/navigation.php";
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

<?php
if(isset($_GET['category'])){

    $post_category = $_GET['category'];


}
            $query = "SELECT * FROM posts WHERE post_category_id = $post_category";

            $select_all_posts_query = mysqli_query($conn, $query);

            while($row = mysqli_fetch_assoc($select_all_posts_query)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = substr($row['post_content'], 0,100);

                ?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date?></p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                
                <!-- <h2><a href='{$post_title}'>{$post_title}</a></h2>
                <p class='lead'>
                    by <a href='{$post_author}'>{$post_author}</a>
                </p>
                 "; -->


         <?php   
         
        }


?>
              

            <!-- Blog Sidebar Widgets Column -->
     
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
    <?php

    include 'includes/footer.php';
    ?>