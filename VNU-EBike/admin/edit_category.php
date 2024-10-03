<?php
include "header.php";
include "slider.php";
include "class/category_class.php";
?>

<?php
$category = new category;
if (!isset($_GET['id']) || $_GET['id']==NULL){
    echo "<script>window.location = 'show_category.php'</script>";
}
else {
    $id = $_GET['id'];
}
    $get_category = $category -> get_category($id);
    if ($get_category) {
        $result = $get_category -> fetch_assoc();
    }
?>

<?php   
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $category_name = $_POST['category_name'];
    $update_category = $category -> update_category($category_name, $id);
}
?>
        <div class="admin-content-right">
            <div class = "admin-content-right-add">
                <h1>Sửa danh mục</h1>
                <form action = "" method ="POST"> 
                    <input required name="category_name" type="text" placeholder="Tên danh mục" 
                    value = "<?php echo $result['category_name'] ?>">
                    <button type = "submit">Sửa</button>    
                </form> 
            </div>
        </div>
    </section>
</body>
</html>
