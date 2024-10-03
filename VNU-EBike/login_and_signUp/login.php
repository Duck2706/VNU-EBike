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
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10">
        <div class="row gx-lg-5 align-items-center">

          <!-- Text Section -->
          <div class="col-lg-6 mb-5 mb-lg-0" style="padding-right: 40px;">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              Ride smart <br />
              Ride green <br />
              <span class="text-primary">with VNU-EBike</span>
            </h1>
          </div>

          <!-- Form Section -->
          <div class="col-lg-6" style="padding-left: 40px;">
            <div class="card shadow-lg p-4" style="font-size: 1.2rem;">
              <div class="card-body py-5 px-md-5">
                <form>
                  <!-- Email input -->
                  <div class="mb-4">
                    <label for="InputEmail" class="form-label">Tên đăng nhập</label>
                    <input type="email" class="form-control form-control-lg" id="InputEmail" aria-describedby="emailHelp" placeholder="Nhập tên đăng nhập">
                  </div>

                  <!-- Password input -->
                  <div class="mb-4">
                    <label for="InputPassword" class="form-label">Mật khẩu</label>
                    <input type="password" id="inputPassword" class="form-control form-control-lg" aria-describedby="passwordHelpBlock" placeholder="Nhập mật khẩu">
                    <div id="passwordHelpBlock" class="form-text">
                      Độ dài mật khẩu 8-20 ký tự, chỉ bao gồm chữ hoặc số, không bao gồm khoảng trống hay ký tự đặc biệt.
                    </div>
                  </div>

                  <!-- Remember me checkbox -->
                  <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="check">
                    <label class="form-check-label" for="check">Ghi nhớ đăng nhập</label>
                  </div>

                  <!-- Submit button -->
                  <div class="d-grid gap-2 col-6 mx-auto mb-4">
                    <button type="submit" class="btn btn-primary btn-lg">Đăng nhập</button>
                  </div>

                  <!-- Registration and home links -->
                  <div class="text-center">
                    <span class="info">
                      Đăng ký tài khoản tại <a href="sign_up.php">đây</a>
                    </span>
                    <br />
                    <span class="info">
                      <a href="index.html">Quay về trang chủ</a>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
