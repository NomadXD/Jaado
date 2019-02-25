<form action="" method="post">
<div class="form-group">
    <label for="cat_title">Edit Category</label>
    
    <?php // EDIT A SELECTED CATEGORY
    if(isset($_GET['edit'])){
    $edit_cat_id = $_GET['edit'];
    $query = "SELECT * FROM category WHERE cat_id={$edit_cat_id} ";
    $edit_query = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($edit_query)){
    $value = $row['cat_title'];
    ?>

    <input value="<?php echo $value ?>" type="text" class="form-control" name="cat_title">

<?php }}?>

<?php
if(isset($_POST['edit'])){
    $update_cat_title = $_POST['cat_title'];
    $query = "UPDATE category SET cat_title='{$update_cat_title}' WHERE cat_id={$edit_cat_id} ";
    $update_query = mysqli_query($connection,$query);
    if(!$update_query){
        die("QUERY FAILED".mysqli_error($connection));
    }
}


?>


</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" name="edit" value="Edit Category">
</div>

</form>