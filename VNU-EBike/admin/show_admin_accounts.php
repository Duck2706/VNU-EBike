<?php
include "header.php";
include "slider.php";
include "class/admin_accounts_class.php"
?>

<?php   
$user = new user;
$show_user = $user -> show_user();
?>

        <div class="admin-content-right">
            <div class = "admin-content-right-show">
                <h1>Danh sách tài khoản admin</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Mã sinh viên</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Tên đăng nhập</th>
                            <th>Mật khẩu</th>
                            <th>Tùy biến</th>
                        </tr>
                    </thead>
                    <?php 
                        if($show_user){
                            $i = 0;
                            while(  $result = $show_user->fetch_assoc()){
                                $i++;
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $result['id'] ?></td>
                            <td><?php echo $result['user_name'] ?></td>
                            <td><?php echo $result['date_birth'] ?></td>
                            <td><?php echo $result['gender'] ?></td>
                            <td><?php echo $result['student_id'] ?></td>
                            <td><?php echo $result['address'] ?></td>
                            <td><?php echo $result['phone_number'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo $result['password'] ?></td>
                            <td><a href="edit_admin_accounts.php?id=<?php echo $result['id']?>">Sửa</a> | 
                                <a href="delete_admin_accounts.php?id=<?php echo $result['id']?>">Xóa</a></td>
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
