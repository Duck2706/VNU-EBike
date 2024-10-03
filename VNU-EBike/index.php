<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VNU-EBike</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <style>
    /* Optional: Add custom styles for the logo */
    .navbar-brand img {
      max-height: 40px;
    }
    </style>

</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="index.html">
                        <span class="w3yellow">VNU</span>EBike
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#about">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#product">Loại xe</a>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link scroll" href="#contact">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
                    <a class="nav-link scroll" href="login_and_signUp\login.php">Đăng nhập</a>
                    <a class="nav-link scroll" href="login_and_signUp\sign_up.php">Đăng ký</a>
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/Banner-Start-->
    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
                    <h3 class="mb-md-5 mb-4">
                        Dịch vụ <br>
                        thuê xe điện VNU</h3>
                    <div class="banner-form-w3">
                        <!--/Request-a-call-form -->
                        <form action="" method="post">
                            <div class="form-style-w3ls">
                                <div class="form-gd">
                                    <label for="input_from">Ngày thuê xe</label>
                                    <input type="date" name="Name" placeholder="mm/dd/yyyy" required="required">
                                </div>
                                <div class="form-gd">
                                    <label for="input_from">Ngày trả xe</label>
                                    <input type="date" name="Name" placeholder="mm/dd/yyyy" required="required">
                                </div>
                                <div class="form-gd">
                                    <label for="input_from">Tìm xe</label>
                                    <button class="btn btn-style btn-primary"> Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                        <div class="form-footer mt-3">
                            <span class="info">
                                Đăng ký thuê xe theo tháng tại
                                <a href="register.php">đây</a>
                            </span>
                        </div>
                        <!-- //Request-a-call-form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//main-banner-->
    <!--/Client-Section-->
    <section id="about" class="clients">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 pe-lg-5">
                    <div class="title-content text-left">
                        <h6 class="title-subw3hny mb-2"><span>About Us</span></h6>
                        <h3 class="title-w3l">Hướng đến <br> một tương lai xanh</h3>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 ps-lg-5 mx-lg-0">
                    <p class="pr-lg-5" style="text-align: justify;">
                        VNU-EBike là một ứng dụng thân thiện với môi trường, 
                        giúp bạn dễ dàng di chuyển quanh khuôn viên Đại học Quốc gia Hà Nội bằng xe đạp điện. 
                        Với sứ mệnh tạo ra một môi trường xanh, sạch và tiện lợi, 
                        VNU-EBike mang đến cho người dùng một giải pháp giao thông hiện đại và tiết kiệm. 
                        Chúng tôi tự hào đồng hành cùng bạn trên mọi chặng đường học tập và làm việc. 
                        Hãy tham gia cùng chúng tôi để trải nghiệm sự tiện lợi và bảo vệ môi trường ngay hôm nay.
                    </p>
                </div>
            </div>

            <div class="car-img mx-0 text-center px-lg-5">
                <img src="assets/images/bg-ebike.png" alt="" class="img-fluid">
            </div>

        </div>
    </section>
    <!--//client-Section-->

<!--/Product-Section-->
    <section id="product" class="w3l-product section-bg">
        <div class="container">
            <div class="section-title">
                <h3 class="title-w3l two">Loại xe</h3>
            </div>
            <div class="row pb-5 w3l-courses">
                <div class="col-md-12 mx-auto pb-lg-5 pb-3">
                    <div class="owl-two owl-carousel owl-theme row">
                        <!-- Bike -->
                        <div class="item col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="card" onclick="openModal('Xe đạp', 'Giá: 60.000/ngày, 200.000/tháng', 'assets/images/bike.jpg', ['assets/images/bike.jpg', 'assets/images/bike.jpg', 'assets/images/bike.jpg', 'assets/images/bike.jpg', 'assets/images/bike.jpg', 'assets/images/bike.jpg', 'assets/images/bike.jpg', 'assets/images/bike.jpg'])">
                                <div class="card-header p-0 position-relative">
                                    <a href="#cardproduct" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/bike.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#cardproduct" class="course-desc">Xe đạp</a>
                                    <p class="mt-3">60.000/ngày <br> 200.000/tháng</p>
                                </div>
                            </div>
                        </div>

                        <!-- E Bike -->
                        <div class="item col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="card" onclick="openModal('Xe đạp điện', 'Giá: 70.000/ngày, 300.000/tháng', 'assets/images/electric-bike.jpg', ['assets/images/electric-bike.jpg', 'assets/images/electric-bike.jpg', 'assets/images/electric-bike.jpg', 'assets/images/electric-bike.jpg', 'assets/images/electric-bike.jpg', 'assets/images/electric-bike.jpg', 'assets/images/electric-bike.jpg', 'assets/images/electric-bike.jpg'])">
                                <div class="card-header p-0 position-relative">
                                    <a href="#cardproduct" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/electric-bike.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#cardproduct" class="course-desc">Xe đạp điện</a>
                                    <p class="mt-3">70.000/ngày <br> 300.000/tháng</p>
                                </div>
                            </div>
                        </div>

                        <!-- E MotorBike -->
                        <div class="item col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="card" onclick="openModal('Xe máy điện', 'Giá: 80.000/ngày, 400.000/tháng', 'assets/images/electric-motorbike.jpg', ['assets/images/electric-motorbike.jpg', 'assets/images/electric-motorbike1.jpg', 'assets/images/electric-motorbike2.jpg', 'assets/images/electric-motorbike3.jpg', 'assets/images/electric-motorbike4.jpg', 'assets/images/electric-motorbike5.jpg', 'assets/images/electric-motorbike6.jpg', 'assets/images/electric-motorbike7.jpg', 'assets/images/electric-motorbike8.jpg'])">
                                <div class="card-header p-0 position-relative">
                                    <a href="#cardproduct" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/electric-motorbike.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#cardproduct" class="course-desc">Xe máy điện</a>
                                    <p class="mt-3">80.000/ngày <br> 400.000/tháng</p>
                                </div>
                            </div>
                        </div>

                        <!-- Modal to view product details -->
                        <div id="productModal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="closeModal()">&times;</span>
                                <div class="modal-body">
                                    <div class="modal-image-section">
                                        <div class="main-image-container">
                                            <img id="modal-image" src="" alt="Product Image">
                                        </div>
                                        <div id="modal-thumbnails" class="thumbnail-container">
                                        </div>
                                    </div>
                                    <!-- Description -->
                                    <div class="modal-description">
                                        <h2 id="modal-title"></h2>
                                        <p id="modal-description">                                           
                                        </p>
                                        <p> Số lượng còn: </p>
                                        <a href="your-link-here.html" class="rent-button">Thuê ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //MODAL-JS -->
    <script src="assets/js/modal.js"></script>
    <!--/Product-Section-->



    <!--/contact-->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h3 class="title-w3l mb-2">Liên Hệ</h3>
                <p class="w3conatact-p mb-4">Mọi thắc mắc hoặc yêu cầu hãy liên hệ với chúng tôi qua phương thức sau, 
                                            chúng tôi sẽ phản hồi qua email của bạn trong vòng 24h</p>
            </div>
            <div class="row">
                <div class="col-lg-5 pe-lg-5">
                    <div class="row">
                        <div class="cont-details">
                            <div class="cont-top" data-aos="fade-up" data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Văn phòng</h6>
                                    <p>Tòa E3, 144 đường Xuân Thủy, phường Dịch Vọng Hậu, quận Cầu Giấy, thành phố Hà Nội</p>
                                </div>
                            </div>
                            <div class="cont-top margin-up" data-aos="fade-up" data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Số điện thoại</h6>
                                    <p><a href="tel: 0977 830 034">0977 830 034</a></p>
                                    <p><a href="tel: 0977 910 920">0977 910 920</a></p>
                                </div>
                            </div>
                            <div class="cont-top margin-up" data-aos="fade-up" data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Email</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">ducphuctq10@mail.com</a></p>
                                    <p><a href="mailto:example@mail.com" class="mail">21020044@vnu.edu.vn</a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-7 mt-lg-0 mt-5" data-aos="fade-up"
                    data-aos-duration="3000">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" class="form-control" name="CtName" id="CtName" placeholder="Họ và Tên" required="">
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="CtMail" id="Ctmail" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="CtSubject" id="CtSubject" placeholder="Tiêu đề" required="">
                        </div>
                        <div class="form-group">
                            <textarea name="CtMessage" class="form-control" id="CtMessage" placeholder="Nội dung" required=""></textarea>
                        </div>
                        <div class="w3lhny-submit text-right">
                            <button type="submit" class="btn btn-primary btn-style ">Gửi</button>
                        </div>

                    </form>
                </div>

            </div>
            <div class="map-iframe mt-5 pt-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8612163515763!2d105.78010407632053!3d21.038238380613578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab354920c233%3A0x5d0313a3bfdc4f37!2sVNU%20University%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2s!4v1723460628949!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!--//contact-->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
   
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });
        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
