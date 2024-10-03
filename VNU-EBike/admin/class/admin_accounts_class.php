<?php
include "database.php";
?>

<?php
class user {
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    public function insert_user($user_name, $date_birth, $gender, $student_id, $address, $phone_number, $email, $password) {
        $query = "INSERT INTO admin_accounts (user_name, date_birth, gender, student_id, address, phone_number, email, password) 
                  VALUES ('$user_name', '$date_birth', '$gender', '$student_id', '$address', '$phone_number', '$email', '$password')";
        
        $result = $this->db->insert($query);
        header('Location: show_admin_accounts.php');
    }
    

    public function show_user() {
        $query = "SELECT id, user_name, date_birth, gender, student_id, address, phone_number, email, password FROM admin_accounts ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function get_user($id){
        $query = "SELECT * FROM admin_accounts WHERE id = '$id'";
        $result = $this -> db -> select($query);
        return $result;
    }

    public function update_user($user_name, $id){
        $query = "UPDATE admin_accounts SET user_name = '$user_name',
                                date_birth = '{$_POST['date_birth']}', 
                                gender = '{$_POST['gender']}', 
                                student_id = '{$_POST['student_id']}', 
                                address = '{$_POST['address']}', 
                                phone_number = '{$_POST['phone_number']}', 
                                email = '{$_POST['email']}', 
                                password = '{$_POST['password']}' 
                            WHERE id = '$id'";
        $result = $this -> db -> update($query);
        header('Location:show_admin_accounts.php');
        return $result;
    }

    public function delete_user($id){
        $query = "DELETE FROM admin_accounts WHERE id = '$id'";
        $result = $this -> db -> delete($query);
        header('Location:show_admin_accounts.php');
        return $result;
    }
}
?>