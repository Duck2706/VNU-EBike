<?php
include "class/category_class.php";

$category = new category;

if (!isset($_GET['id']) || $_GET['id']==NULL){
    echo "<script>window.location = 'show_category.php'</script>";
}
else {
    $id = $_GET['id'];
}
    $delete_category = $category->delete_category($id);

?>

