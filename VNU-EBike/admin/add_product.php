<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>  

<?php
$product = new product;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert_product = $product->insert_product($_POST,$_FILES);
}
?>

<div class="admin-content-right">
            <div class = "admin-content-right-product_add">
                <h1>Thêm xe</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for=""> Nhập tên xe <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text"><br>

                    <label for=""> Chọn danh mục<span style="color: red;">*</span></label>
                    <select name="category_id" id="category_id">
                    <?php
                        $show_category = $product -> show_category();
                        if($show_category){
                            while($result=$show_category->fetch_assoc()){
                                
                        ?>
                        <option value="<?php echo $result['id']?>"> <?php echo $result['category_name']?> </option>
                        <?php
                            }
                        }
                    ?>
                    </select>
                    <br>

                    <label for=""> Giá xe thuê theo ngày <span style="color: red;">*</span></label>
                    <input name="price_per_day" required type="text"><br>

                    <label for=""> Giá xe thuê theo tháng<span style="color: red;">*</span></label>
                    <input name="price_per_month" required type="text"><br>

                    <label for=""> Mô tả xe <span style="color: red;">*</span></label>
                    <textarea required name="product_desc" id="" cols="30" rows="10"></textarea><br>

                    <label for=""> Ảnh xe <span style="color: red;">*</span></label>
                    <span style="color: red">
                        <?php 
                        if(isset($insert_product)){
                            echo $insert_product;
                        } 
                        ?>
                    </span>
                    <input name="product_img" required type="file">
                    <br>
                    <label for=""> Ảnh mô tả xe <span style="color: red;">*</span></label>
                    <input name="product_img_desc[]" required multiple type="file"><br>
                    
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
