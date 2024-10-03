<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_thue_xe";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$name = $_POST['name'];
$dateBirth = $_POST['dateBirth'];
$gender = $_POST['gender'];
$studentID = $_POST['studentID'];
$address = $_POST['address'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$password = $_POST['password'];

// Kiểm tra dữ liệu (có thể thêm các kiểm tra khác nếu cần)
if (empty($name) || empty($dateBirth) || empty($gender) || empty($studentID) || empty($address) || empty($phoneNumber) || empty($email) || empty($password)) {
    header('Location: sign_up.php?error=Vui lòng điền tất cả các trường');
    exit();
}

// Mã hóa mật khẩu
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

// Chuẩn bị câu lệnh SQL để chèn dữ liệu
$sql = "INSERT INTO User (fullname, date_birth, gender, student_id, address, phone_number, email, password) 
        VALUES ('$name', '$dateBirth', '$gender', '$studentID', '$address', '$phoneNumber', '$email', '$passwordHash')";

// Thực thi câu lệnh SQL
if ($conn->query($sql) === TRUE) {
    header('Location: sign_up.php?success=Đăng ký thành công');
} else {
    header('Location: sign_up.php?error=Lỗi khi đăng ký: ' . $conn->error);
}

// Đóng kết nối
$conn->close();
?>
