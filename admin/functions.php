<?php

function comfirm($result){

  global $conn;
  if(!$result){
    die("query failed ." . mysqli_error($conn));
  }

 
  
}
function insert_categories()
{
  global $conn;
  if (isset($_POST['add'])) {
    $cat_title = $_POST['cat_title'];
    if ($cat_title == " " || empty($cat_title)) {
      echo "this fiels should not be empty";
    } else {
      $query = "INSERT INTO categories(cat_title)";
      $query .= "VALUE('{$cat_title}')";
      $create_category_query = mysqli_query($conn, $query);
      if (!$create_category_query) {
        die('query failed' . mysqli_error($conn));
      }
    }
  }
}

function findAllCategories()
{
  global $conn;
  //find all categories query
  $query = "SELECT * FROM  categories";
  $select_categories = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($select_categories)) {
    $cat_title = $row['cat_title'];
    $cat_id = $row['cat_id'];
    echo "<tr>";
    echo "<td>{$cat_id} </td>";
    echo "<td>{$cat_title} </td>";
    echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a> </td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a> </td>";
    echo "</tr>";
  }
}

function deleteCategories()
{
  global $conn;
  if (isset($_GET['delete'])) {
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
    $delete_query = mysqli_query($conn, $query);
    header("Location: categories.php");
  }
}



?>
