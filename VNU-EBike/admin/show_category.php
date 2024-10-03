<?php
include "header.php";
include "slider.php";
include "class/category_class.php"
?>

<?php   
$category = new category;
$show_category = $category -> show_category();
?>

        <div class="admin-content-right">
            <div class = "admin-content-right-show">
                <h1>Danh sách danh mục</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Tùy biến</th>
                        </tr>
                    </thead>
                    <?php 
                        if($show_category){
                            $i = 0;
                            while(  $result = $show_category->fetch_assoc()){
                                $i++;
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $result['id'] ?></td>
                            <td><?php echo $result['category_name'] ?></td>
                            <td><a href="edit_category.php?id=<?php echo $result['id']?>">Sửa</a> | 
                                <a href="delete_category.php?id=<?php echo $result['id']?>">Xóa</a></td>
                        </tr>
                    </tbody>
                    <?php 
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
