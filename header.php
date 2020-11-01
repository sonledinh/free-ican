<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>main</title>
    <!--link css-->
    <link rel="stylesheet" type="text/css" title="" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery.mmenu.all.css">  
    <link rel="stylesheet" href="css/animate.css">  
    <link rel="stylesheet" type="text/css" title="" href="css/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/style.css">
    <link rel="stylesheet" type="text/css" title="" href="css/responsive.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body> 
    <section class="bg-blue"></section>
    <header>
        <div class="header-menu wow fadeInUp wHighlight" data-wow-delay=".1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <div class="h-menu">
                            <ul>
                                <li><a href="index.php"><img src="images/logo.svg" class="img-fluid" alt=""></a></li>
                                <li><a href="index.php" class="active"><img src="images/menu-2.svg" class="img-fluid"> Trang chủ</a></li>
                                <li><a href="about.php"><img src="images/menu-2.svg" class="img-fluid"> Giới thiệu</a></li>
                                <li><a href="lopmoi.php"><img src="images/menu-3.svg" class="img-fluid"> Lớp mới</a></li>
                                <li><a href="giasu.php"><img src="images/menu-4.svg" class="img-fluid"> Đội ngũ gia sư</a></li>
                                <li><a href="#"><img src="images/menu-5.svg" class="img-fluid"> Tin tức</a></li>
                                <li><a href="tailieu.php"><img src="images/menu-6.svg" class="img-fluid"> Tài liệu</a></li>
                            </ul>
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="m-right">
                            <ul class="list-inline text-right">
                                <li class="list-inline-item"><a href="" class="btn-app">App ICAN 4.0</a></li>
                                <li class="list-inline-item"><a href="" class="btn-link">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-mobile" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-6 col-sm-6">
                        <div class="logo"> 
                            <a title="" href="index.php"><img alt="" src="images/logo.svg" class="img-fluid avarta-logo" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 col-sm-6"> 
                        <div class="right">
                            <div class="header">
                                <a title="" href="#menu"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav id="menu">
                <ul>
                    <li><a href="index.php" class="active">Trang chủ</a></li>
                    <li><a href="about.php">Giới thiệu</a></li>
                    <li><a href="lopmoi.php">Lớp mới</a></li>
                    <li><a href="giasu.php">Đội ngũ gia sư</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="tailieu.php">Tài liệu</a></li>
                </ul>
            </nav>
        </div>
    </header> 
    <section>


        <!-- popup -->
        <div class="modal fade" id="modal-login">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="content-popup">
                    <h3>Đăng nhập gia sư</h3>
                    <div class="form-popup">
                        <div class="item">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" placeholder="nguyenlehoang86@gmail.com ">
                        </div>
                        <div class="item">
                            <label for="">Mật khẩu</label>
                            <input type="password" placeholder="123456789">
                        </div>
                        <div class="item">
                            <p><a href="javascript:void(0)">Bạn quên mật khẩu?</a></p>
                        </div>
                        <div class="item">
                            <input type="submit" class="btn-login" value="Đăng nhập">
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="modal fade" id="modal-regis">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="content-popup">
                    <h3>Đăng ký gia sư</h3>
                    <div class="form-popup">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Họ</label>
                                    <input type="text">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tên</label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Giới tính</label>
                                    <select name="" id="">
                                        <option value="">Nam</option>
                                        <option value="">Nữ</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Năm sinh</label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <label for="">Số điện thoại</label>
                            <input type="text">
                        </div>
                        <div class="item">
                            <label for="">Gmail</label>
                            <input type="text">
                        </div>
                        <div class="item">
                            <label for="">Nơi học (công tác)</label>
                            <input type="text">
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Gia sư môn</label>
                                    <select name="" id="">
                                        <option value="">Toán</option>
                                        <option value="">Hóa</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Lớp</label>
                                    <select name="" id="">
                                        <option value="">12</option>
                                        <option value="">11</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <input type="submit" class="btn-login" value="Đăng ký">
                        </div>
                        <div class="item">
                            <p class="text-center">Bạn đã có tài khoản?<a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#modal-login">Đăng nhập</a></p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end popup -->
    </section>