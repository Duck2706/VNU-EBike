<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="admin_accounts.css">
    <link rel="stylesheet" href="student_accounts.css">-->
    <link rel="stylesheet" href="add_product.css">
    <title>Danh mục xe cho thuê</title>
</head>

<body>
    <header>
        <div class="header-left">
            <h1>VNU-EBike</h1>
        </div>
        <div class="header-right">
            <div class="profile" id="profile">
                <img src="assets/images/user-avatar.png" alt="Avatar" class="profile-avatar">
                <span class="profile-name">Tên Tài Khoản</span>
                <div class="profile-dropdown" id="profileDropdown">
                    <ul>
                        <li><a href="#">Xem hồ sơ</a></li>
                        <li><a href="#">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
        <!-- Thêm đoạn script để điều khiển dropdown -->
        <script>
        // Lấy phần tử profile và dropdown
        const profile = document.getElementById('profile');
        const profileDropdown = document.getElementById('profileDropdown');

        // Lắng nghe sự kiện click vào profile
        profile.addEventListener('click', function() {
            // Toggle (bật/tắt) hiển thị dropdown khi click vào
            profileDropdown.classList.toggle('show');
        });

        // Ẩn dropdown khi click bên ngoài
        window.addEventListener('click', function(e) {
            if (!profile.contains(e.target)) {
                profileDropdown.classList.remove('show');
            }
        });
    </script>
</body>