<?php
include "header.php";
include "slider.php";
include "class/admin_accounts_class.php";
?>

<?php
$user = new user;
if (!isset($_GET['id']) || $_GET['id']==NULL){
    echo "<script>window.location = 'show_admin_accounts.php'</script>";
}
else {
    $id = $_GET['id'];
}
    $get_user = $user -> get_user($id);
    if ($get_user) {
        $result = $get_user -> fetch_assoc();
    }
?>

<?php   
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $user_name = $_POST['user_name'];
    $update_user = $user -> update_user($user_name, $id);
}
?>
        <div class="admin-content-right">
            <div class = "admin-content-right-add">
                <h1>Sửa thông tin tài khoản</h1>
                <form action = "" method ="POST"> 
                    <input required name="user_name" type="text" placeholder="Tên" 
                    value = "<?php echo $result['user_name'] ?>">

                    <input required name="date_birth" type="date" placeholder="Ngày tháng sinh" 
                    value = "<?php echo $result['date_birth'] ?>"> 

                    <input required name="gender" type="text" placeholder="Giới tính" 
                    value = "<?php echo $result['gender'] ?>">

                    <input required name="student_id" type="text" placeholder="Mã sinh viên" 
                    value = "<?php echo $result['student_id'] ?>"> 

                    <input required name="address" type="text" placeholder="Địa chỉ" 
                    value = "<?php echo $result['address'] ?>">

                    <input required name="phone_number" type="text" placeholder="Số điện thoại" 
                    value = "<?php echo $result['phone_number'] ?>"> 

                    <input required name="email" type="email" placeholder="Nhập tên đăng nhập" 
                    value = "<?php echo $result['email'] ?>">

                    <input required name="password" type="password" placeholder="Nhập mật khẩu" 
                    value = "<?php echo $result['password'] ?>">
                    <button type = "submit">Sửa</button>    
                </form> 
            </div>
        </div>
    </section>
</body>
</html>
