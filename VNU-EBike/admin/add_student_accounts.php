<?php
include "header.php";
include "slider.php";
include "class/student_accounts_class.php";
?>

<?php   
$user = new user;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = $_POST['user_name'];
    $date_birth = $_POST['date_birth'];
    $gender = $_POST['gender'];
    $student_id = $_POST['student_id'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert_user = $user->insert_user($user_name, $date_birth, $gender, $student_id, $address, $phone_number, $email, $password);
}
?>

        <div class="admin-content-right">
            <div class = "admin-content-right-add">
                <h1>Thêm tài khoản sinh viên</h1>
                <form action = "" method ="POST"> 
                    <input required name="user_name" type="text" placeholder="Tên">
                    <input required name="date_birth" type="date" placeholder="Ngày tháng sinh"> 
                    <input required name="gender" type="text" placeholder="Giới tính">
                    <input required name="student_id" type="text" placeholder="Mã sinh viên"> 
                    <input required name="address" type="text" placeholder="Địa chỉ">
                    <input required name="phone_number" type="text" placeholder="Số điện thoại"> 
                    <input required name="email" type="email" placeholder="Nhập tên đăng nhập">
                    <input required name="password" type="password" placeholder="Nhập mật khẩu">

                    <button type = "submit">Thêm</button>    
                </form> 
            </div>
        </div>
    </section>
</body>
</html>
