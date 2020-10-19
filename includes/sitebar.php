<div class="col-md-4">






<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="search.php" method="post">
    <div class="input-group">
        <input name="search" type="text" class="form-control">
        <span class="input-group-btn">
            <button name="submit" type="submit" class="btn btn-default" >
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    </form>
    <!-- form search -->
    <!-- /.input-group -->
</div>






<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">


            <?php

$query = "SELECT *  FROM categories LIMIT 5";
$select_sitebar_categories_query = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($select_sitebar_categories_query)) {
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id'];

        echo "<li><a href='category.php?category=$cat_id'>{$cat_title} </a></li>";
}

?>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">

<?php include "widget.php" ?>
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>