<?php include "db.php" ?>

<?php

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);

    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM users WHERE username =  '{$username}'";

    $select_user_query = mysqli_query($conn, $query);

    if(!$select_user_query){
        die("QUERY FAILED". mysqli_error($conn));
    }

    while($row = mysqli_fetch_array($select_user_query)){

        echo $db_id = $row['user_id'];
    }

}


?>