<?php include "./includes/admin_header.php"; ?>
    <div id="wrapper">

      <?php include "./includes/admin_navigation.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">


<?php


if(isset($_POST['add'])){

    $cat_title = $_POST['cat_title'];


    if($cat_title == " " || empty($cat_title)){

        echo "this fiels should not be empty";
    }else {
        $query = "INSERT INTO categories(cat_title)";

        $query .= "VALUE('{$cat_title}')";

        $create_category_query = mysqli_query($conn, $query);


        if(!$create_category_query){
            die('query failed' . mysqli_error($conn));
        }
    }
}

// if(isset($_POST['delete'])){
//     $cat_title = $_POST['cat_title'];

//     if($cat_title == " " || empty($cat_title)){

//         echo "this fiels should not be empty";
//     }
//         else {



           
//         $query = "DELETE FROM categories WHERE cat_title  = '{$cat_title}'";
    
//             $delete_category_query = mysqli_query($conn, $query);
    
    
//             if(!$delete_category_query){
//                 die('query failed' . mysqli_error($conn));
//             }
//         }


// }


?>



                        <form action="" method="post">
                            <div class="form-group">
                            <label for="cat_title">Add category</label>
                            <input type="text " class="form-control  "name="cat_title">
                               
                            
                            </div>
                            <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="add" value="add category">

                            
                            </div>
                            <div class="form-group">
                            <input class="btn btn-warning" type="submit" name="delete" value="delete category">

                            
                            </div>
                        </form>
                        </div>

                        <div class="col-xs-6">



                        <?php  ?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    

                                    <?php 
                                    //find all categories query
                                    $query="SELECT * FROM  categories"; 
                                    $select_categories = mysqli_query($conn, $query)
                                    while($row = mysqli_fetch_assoc($select_categories)){
                                    $cat_title = $row['cat_title'];
                                    $cat_id = $row['cat_id'];
echo "<tr>";
                                    echo "<td>{$cat_id} </td>";
                                    echo "<td>{$cat_title} </td>";
                                    echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a> </td>";
                                    echo "</tr>";
                                }?>
                                </tr>
                              
                                </tbody>





                                
                            </table>
                        </div>
                     
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include './includes/admin_footer.php'?>