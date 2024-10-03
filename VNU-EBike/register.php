<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-10">
        <div class="card card-registration my-4 shadow-lg">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="..\images\logo.png"
                alt="None images yet" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Đăng ký thuê xe theo tháng</h3>

                <div class="mb-3">
                  <label class="form-label" for="name">Họ và tên</label>
                  <input type="text" id="name" class="form-control form-control-lg" placeholder="Nhập họ và tên"/>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label class="form-label" for="studentID">Mã sinh viên</label>
                    <input type="text" id="studentID" class="form-control form-control-lg" placeholder="Nhập mã sinh viên"/>
                  </div>
                  <div class="col-md-6 mb-4">
                    <label class="form-label" for="number">Số điện thoại</label>
                    <input type="text" id="number" class="form-control form-control-lg" placeholder="Nhập số điện thoại"/>
                  </div>
                </div>

                <div class="mb-4">
                  <label class="form-label" for="dateBirth">Ngày, tháng, năm sinh</label>
                  <input type="date" id="dateBirth" class="form-control form-control-lg" placeholder="dd/mm/yy"/>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                  <h6 class="mb-0 me-4">Giới tính:</h6>
                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option1" />
                    <label class="form-check-label" for="maleGender">Nam</label>
                  </div>
                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option2" />
                    <label class="form-check-label" for="femaleGender">Nữ</label>
                  </div>
                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                    <label class="form-check-label" for="otherGender">Khác</label>
                  </div>
                </div>

                <div class="mb-4">
                  <label class="form-label" for="mail">Email</label>
                  <input type="email" id="mail" class="form-control form-control-lg" placeholder="Nhập email"/>
                </div>

                <div class="mb-4">
                  <label class="form-label" for="adress">Địa chỉ</label>
                  <input type="text" id="adress" class="form-control form-control-lg" placeholder="Nhập địa chỉ"/>
                </div>

                <div class="mb-4">
                  <label class="form-label" for="orderDate">Ngày nhận xe</label>
                  <input type="date" id="orderDate" class="form-control form-control-lg" placeholder="dd/mm/yy"/>
                  <label class="form-label" for="returnDate">Ngày trả xe</label>
                  <input type="date" id="returnDate" class="form-control form-control-lg" placeholder="dd/mm/yy"/>
                </div>

                <div class="d-flex justify-content-end">
                  <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg me-2">Hoàn tác</button>
                  <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Gửi</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
