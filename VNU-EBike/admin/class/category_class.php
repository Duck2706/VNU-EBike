<?php
include "database.php";
?>

<?php
class category {
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    public function insert_category($category_name) {
        $query = "INSERT INTO category (category_name) 
                  VALUES ('$category_name')";
        
        $result = $this->db->insert($query);
        header('Location: show_category.php');
    }
    

    public function show_category() {
        $query = "SELECT id, category_name FROM category ORDER BY id DESC";
        $result = $this->db->select($query);
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