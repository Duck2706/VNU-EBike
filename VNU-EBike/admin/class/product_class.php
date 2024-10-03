<?php
include "database.php";
?>

<?php
class product {
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    public function show_category() {
        $query = "SELECT id, category_name FROM category ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_product() {
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $price_per_day = $_POST['price_per_day'];
        $price_per_month = $_POST['price_per_month'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
        $filetarget = basename($_FILES['product_img']['name']);
        $filetype = strtolower(pathinfo($product_img, PATHINFO_EXTENSION));
        $filesize = $_FILES['product_img']['size'];

        if(file_exists("uploads/$filetarget")){
            $alert = "File đã tồn tại";
            return $alert;
        }
        else{
            if($filetype != "jpg" && $filetype!= "png" && $filetype!= "jpeg"){
                $alert = "Chỉ chọn file jpg, png và jpeg";
                return $alert;
            }
            else{
                if($filesize > 1000000){
                    $alert = "File không được vượt quá 1MB";
                    return $alert;
                }
                else{
                    move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
                    $query = "INSERT INTO product (
                        product_name,
                        category_id,
                        price_per_day,
                        price_per_month,
                        product_desc,
                        product_img) 
                        VALUES (
                        '$product_name',
                        '$category_id',
                        '$price_per_day',
                        '$price_per_month',
                        '$product_desc',
                        '$product_img')";       
                    $result = $this->db->insert($query);
                    if($result){
                        $query = "SELECT * FROM product ORDER BY product_id DESC LIMIT 1";
                        $result = $this ->db->select($query)->fetch_assoc();
                        $product_id = $result['product_id'];
                        $filename = $_FILES['product_img_desc']['name'];
                        $filetmp = $_FILES['product_img_desc']['tmp_name'];
            
                        foreach($filename as $key => $value){
                            move_uploaded_file($filetmp[$key],"uploads/".$value);
                            $query = "INSERT INTO product_img_desc (product_id, img_desc) VALUES ('$product_id', '$value')";
                            $result = $this->db->insert($query);
                        }
                    }
                }
            }
        }
        //header('Location: show_product.php');
        return $result;
    }

    

















    public function get_category($id){
        $query = "SELECT * FROM category WHERE id = '$id'";
        $result = $this -> db -> select($query);
        return $result;
    }

    public function update_category($category_name, $id){
        $query = "UPDATE category SET category_name = '$category_name' WHERE id = '$id'";
        $result = $this -> db -> update($query);
        header('Location:show_category.php');
        return $result;
    }

    public function delete_category($id){
        $query = "DELETE FROM category WHERE id = '$id'";
        $result = $this -> db -> delete($query);
        header('Location:show_category.php');
        return $result;
    }
}
?>