<?php

function addCategory(){
    global $connection;
    if(isset($_POST['submit'])){
        $cat_title=$_POST['cat_title'];
    
        if($cat_title=="" || empty($cat_title)){
            echo "This feild can't be empty";
        }else{
            $query = "INSERT INTO category(cat_title) ";
            $query.= "VALUE('{$cat_title}')";
    
            $create_cat_query = mysqli_query($connection,$query);
    
            if(!$create_cat_query){
                die('QUERY FAILED'.mysqli_error($connection));
            }
        }
    } 

}

function deleteCategory(){
    global $connection;
    if(isset($_GET['delete'])){
        $delete_cat_id = $_GET['delete'];
        $query = "DELETE FROM category WHERE cat_id={$delete_cat_id} ";
        $delete_query = mysqli_query($connection,$query);
        header("Location:categories.php");
    }
}

function generateTable(){
    global $connection;
    $query = "SELECT * FROM category";
    $select_categories = mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($select_categories)){
        $cat_id = $row['cat_id']; 
        $cat_title = $row['cat_title'];
        echo "<tr>";
        echo "<td>$cat_id</td>";
        echo "<td>$cat_title</td>";
        echo "<td><a class='btn btn-danger' href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a class='btn btn-warning' href='categories.php?edit={$cat_id}'>Update</a></td>";
        echo "</tr>";
    }
}

?>