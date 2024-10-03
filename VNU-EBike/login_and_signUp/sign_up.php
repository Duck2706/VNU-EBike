<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

  <body>
    <section class="h-100 bg-light">
      <div class="container py-5">
        <div class="row gx-lg-5 align-items-center justify-content-between">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="display-3 fw-bold ls-tight mb-4" style="line-height: 1.2;">
              Ride smart <br />
              Ride green <br />
              <span class="text-primary">with VNU-EBike</span>
            </h1>
          </div>

          <div class="col-lg-6">
            <div class="card shadow-sm border-0">
              <div class="card-body p-5">
                <form action="db/connect.php" method="POST">
                  <!-- Full Name input -->
                  <div class="mb-4">
                    <label class="form-label" for="name">Họ và tên</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Nhập họ và tên" required/>
                  </div>

                  <!-- Date of Birth input -->
                  <div class="mb-4">
                    <label for="dateBirth" class="form-label">Ngày, tháng và năm sinh</label>
                    <input type="date" class="form-control form-control-lg" id="dateBirth" name="dateBirth" required>
                  </div>

                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                      <h6 class="mb-0 me-4">Giới tính:</h6>
                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Nam" required/>
                        <label class="form-check-label" for="maleGender">Nam</label>
                      </div>
                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Nữ" required/>
                        <label class="form-check-label" for="femaleGender">Nữ</label>
                      </div>
                      <div class="form-check form-check-inline mb-0">
                        <input class="form-check-input" type="radio" name="gender" id="otherGender" value="Khác" required/>
                        <label class="form-check-label" for="otherGender">Khác</label>
                      </div>
                    </div>
                    
                  <!-- Student ID input -->
                  <div class="mb-4">
                    <label for="studentID" class="form-label">Mã sinh viên</label>
                    <input type="text" class="form-control form-control-lg" id="studentID" name="studentID" placeholder="Nhập mã sinh viên" required>
                  </div>

                  <!-- Address input -->
                  <div class="mb-4">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control form-control-lg" id="address" name="address" placeholder="Nhập địa chỉ" required>
                  </div>

                  <!-- Phone input -->
                  <div class="mb-4">
                    <label for="phoneNumber" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control form-control-lg" id="phoneNumber" name="phoneNumber" placeholder="Nhập số điện thoại" required>
                  </div>

                  <!-- Email input -->
                  <div class="mb-4">
                    <label for="email" class="form-label">Tên đăng nhập</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Nhập tên đăng nhập" required>
                  </div>

                  <!-- Password input -->
                  <div class="mb-4">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Nhập mật khẩu" required>
                    <div id="passwordHelpBlock" class="form-text">
                      Độ dài mật khẩu 8-20 ký tự, chỉ bao gồm chữ hoặc số, không bao gồm khoảng trống hay ký tự đặc biệt.
                    </div>
                  </div>

                  <!-- Submit button -->
                  <div class="d-grid gap-2 mb-4">
                    <button type="submit" class="btn btn-primary btn-lg">Đăng ký</button>
                  </div>    

                  <!-- Login link -->
                  <div class="text-center mt-3">
                    <span class="info">
                      <a href="login.php">Quay lại đăng nhập</a>
                    </span>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
