<!DOCTYPE html>
<html>

    <head>
        <link rel="icon" href="../packages/foostart/post/src/images/ht.jpg"/>
        <title>Tư Vấn Tuyển Sinh</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
        if (!class_exists('lessc')) {
            include ('../packages/foostart/post/src/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../packages/foostart/post/src/less/styles.less', '../packages/foostart/post/src/css/styles.css');
        ?> 

        <link rel="stylesheet" href="{{asset('../packages/foostart/post/src/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('../packages/foostart/post/src/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('../packages/foostart/post/src/css/font-awesome.min.css')}}">

        <script src="../packages/foostart/post/src/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../packages/foostart/post/src/js/carousel.js" type="text/javascript"></script>
        <script src="../packages/foostart/post/src/js/bootstrap.min.js" type="text/javascript"></script>
    </head> 

    <body> 

        <!--header-->
        <div class="ie-module-2">
            <div class="navbar navbar-default ie-fix-bottom" role="navigation">
                <!--Brand and toggle get grouped for better mobile display--> 
                <hr class="ie-tophr">
                <div class="top-strip">

                    <hr class="ie-fix-border" >
                </div>

                <div class="ie-nav">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-sm-fix">
                                <div class="logo ">
                                    <a href="#">
                                        <img src="../packages/foostart/post/src/images/logo.png" alt=""/>
                                    </a>
                                </div>
                                <div class="navbar-header ">

                                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12">
                                <!--Collect the nav links, forms, and other content for toggling--> 
                                <nav class="nav-fix">
                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                        <div class="row">
                                            <ul>
                                                <li class="dropdown ie-li" >

                                                    <a href="#"> <p>Trang Chủ</p> </a>
                                                </li>
                                                <li class="dropdown ie-li" >

                                                    <a href="#"> <p>Tin Tức</p> </a>

                                                </li>
                                                <li class="dropdown ie-li" >
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <p class="center-block">Dịch Vụ</p> <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Tư Vấn Chọn Trường</a></li>
                                                        <li><a href="#">Ăn ở, đi lại</a></li>
                                                        <li><a href="#">In Ấn Tờ Rơi</a></li>
                                                        <li><a href="#">Dịch vụ khác</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown ie-li" >
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <p class="center-block">Khu Vực</p> <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Khu vực miền Bắc</a></li>
                                                        <li><a href="#">Khu vực miền Trung</a></li>
                                                        <li><a href="#">Khu vực miền Nam</a></li>
                                                        <li><a href="#">Khu vực khác</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown ie-li" >

                                                    <a href="#"> <p>Đối Tác</p> </a>

                                                </li>
                                                <li class="dropdown ie-li" >
                                                    <a href="#contact">
                                                        <p class="center-block">Liên Hệ</p></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end header-->


        <!--slide show-->
        <div class="ie-module-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!--Wrapper for slides--> 
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../packages/foostart/post/src/images/banner1.jpg">
                    </div>
                    <!--End Item--> 
                    <div class="item">
                        <img src="../packages/foostart/post/src/images/banner2.jpg">
                    </div>
                    <!--End Item--> 
                    <div class="item">
                        <img src="../packages/foostart/post/src/images/banner3.jpg">
                    </div>
                    <!--End Item--> 
                    <div class="item">
                        <img src="../packages/foostart/post/src/images/banner4.jpg">
                    </div>
                    <!--End Item--> 
                </div>
                <!--End Carousel Inner--> 
                <div class="nav nav-pills nav-justified ie-padding" >
                    <div data-target="#myCarousel" data-slide-to="0" class=" active"><a href="#">-</a></div>
                    <div data-target="#myCarousel" data-slide-to="1"><a href="#">-</a></div>
                    <div data-target="#myCarousel" data-slide-to="2"><a href="#">-</a></div>
                    <div data-target="#myCarousel" data-slide-to="3"><a href="#">-</a></div>
                </div>

            </div>
            <div class="newsletters">
                <h1>Dịch vụ tư vấn tuyển sinh.</h1>
                <h4>Tìm kiếm những dịch vụ về tư vấn tuyển sinh nhanh, uy tín, chất lượng, đảm bảo.</h4>
                <div class="subscribe">
                    <input type="text" class="input-block-level ie-text">
                    <input type="button" class="ie-btn" value="Tìm kiếm">
                </div>
            </div>
        </div>

        <!--        end slide show
        
                service-->
        <div class="ie-module-1">

            <div class="contant"> 
                <section>
                    <div class="container">

                        <div class="sec-header">
                            <h3>Những dịch vụ của chúng tôi</h3>
                            <p>Hãy nhìn vào những thứ chúng tôi đã làm được</p>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="row">

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="services">
                                    <div class="header">
                                        <i class="fa fa-tablet"></i>
                                        <i class="fa fa-user inner-icon"></i>
                                    </div>
                                    <div class="text">
                                        <h3><a href="#">Những Chuyên gia Tư vấn</a></h3>
                                        <p>Cải tiến giao diện người dùng là một khía cạnh tương lai của WordPress mà tất cả mọi người tôi nói chuyện dường như đồng ý trên:
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="services">
                                    <div class="header">
                                        <i class="fa fa-tablet"></i>
                                        <i class="fa fa-list-alt inner-icon"></i>
                                    </div>
                                    <div class="text">
                                        <h3><a href="#">Những Chuyên gia Tư vấn</a></h3>
                                        <p>Cải tiến giao diện người dùng là một khía cạnh tương lai của WordPress mà tất cả mọi người tôi nói chuyện dường như đồng ý trên: </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="services">
                                    <div class="header">
                                        <i class="fa fa-tablet"></i>
                                        <i class="fa fa-cogs inner-icon"></i>
                                    </div>
                                    <div class="text">
                                        <h3><a href="#">Những Chuyên gia Tư vấn</a></h3>
                                        <p>Cải tiến giao diện người dùng là một khía cạnh tương lai của WordPress mà tất cả mọi người tôi nói chuyện dường như đồng ý trên: </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
            </div>
        </div>

        <!--        end service
        
                tin tuc-->
        <div class="ie-module-7">
            <div class="container">
                <ul class="nav nav-tabs ie-tab-fix">
                    <li class="active"><a data-toggle="tab" href="#home" > <i class="fa fa-book"></i>
                            <p> Thông tin tuyển sinh</p></a></li>
                    <li><a data-toggle="tab" href="#home" > <i class="fa fa-book"></i>
                            <p> Cẩm nang dự thi</p></a></li>
                    <li><a data-toggle="tab" href="#home" > <i class="fa fa-book"></i>
                            <p> Hướng nghiệp</p></a></li>
                    <li><a data-toggle="tab" href="#home" > <i class="fa fa-book"></i>
                            <p> Kỹ năng mềm</p></a></li>
                    <li><a data-toggle="tab" href="#home" > <i class="fa fa-book"></i>
                            <p> Tư vấn du học</p></a></li>
                    <li><a data-toggle="tab" href="#home" > <i class="fa fa-book"></i>
                            <p> Giáo dục phổ thông</p></a></li>
                </ul>

                <div class="tab-content ie-content-fix">
                    <div id="home" class="tab-pane fade in active">
                        <ul class="course-topics row">

                            <li class="col-md-4 col-sm-6 col-xs-12">
                                <div class="thumb">
                                    <a href="#"><img src="../packages/foostart/post/src/images/gai.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h4>Thí sinh chỉ được điều chỉnh đăng ký xét tuyển một lần</h4>
                                    <p>Sau khi có kết quả thi THPT quốc gia, nếu có nguyện vọng, mỗi thí sinh chỉ được điều chỉnh đăng ký xét tuyển (ĐKXT) một lần trong thời gian quy định.</p>
                                    <span>Xem thêm...</span>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12">
                                <div class="thumb">
                                    <a href="#"><img src="../packages/foostart/post/src/images/gai.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h4>Thí sinh chỉ được điều chỉnh đăng ký xét tuyển một lần</h4>
                                    <p>Sau khi có kết quả thi THPT quốc gia, nếu có nguyện vọng, mỗi thí sinh chỉ được điều chỉnh đăng ký xét tuyển (ĐKXT) một lần trong thời gian quy định.</p>
                                    <span>Xem thêm...</span>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12">
                                <div class="thumb">
                                    <a href="#"><img src="../packages/foostart/post/src/images/gai.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h4>Thí sinh chỉ được điều chỉnh đăng ký xét tuyển một lần</h4>
                                    <p>Sau khi có kết quả thi THPT quốc gia, nếu có nguyện vọng, mỗi thí sinh chỉ được điều chỉnh đăng ký xét tuyển (ĐKXT) một lần trong thời gian quy định.</p>
                                    <span>Xem thêm...</span>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12">
                                <div class="thumb">
                                    <a href="#"><img src="../packages/foostart/post/src/images/gai.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h4>Thí sinh chỉ được điều chỉnh đăng ký xét tuyển một lần</h4>
                                    <p>Sau khi có kết quả thi THPT quốc gia, nếu có nguyện vọng, mỗi thí sinh chỉ được điều chỉnh đăng ký xét tuyển (ĐKXT) một lần trong thời gian quy định.</p>
                                    <span>Xem thêm...</span>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12">
                                <div class="thumb">
                                    <a href="#"><img src="../packages/foostart/post/src/images/gai.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h4>Thí sinh chỉ được điều chỉnh đăng ký xét tuyển một lần</h4>
                                    <p>Sau khi có kết quả thi THPT quốc gia, nếu có nguyện vọng, mỗi thí sinh chỉ được điều chỉnh đăng ký xét tuyển (ĐKXT) một lần trong thời gian quy định.</p>
                                    <span>Xem thêm...</span>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12">
                                <div class="thumb">
                                    <a href="#"><img src="../packages/foostart/post/src/images/gai.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h4>Thí sinh chỉ được điều chỉnh đăng ký xét tuyển một lần</h4>
                                    <p>Sau khi có kết quả thi THPT quốc gia, nếu có nguyện vọng, mỗi thí sinh chỉ được điều chỉnh đăng ký xét tuyển (ĐKXT) một lần trong thời gian quy định.</p>
                                    <span>Xem thêm...</span>
                                </div>
                            </li>

                    </div>
                </div>

            </div>
            <!--            end tin tuc
            
                        bai viet pho bien
               
            
            
            
            
            
            
            
                        contact-->

            <div class="ie-module-10" id="contact">  
                <div class="form">
                    <br>
                    <br>
                    <div class="form-contant relative">
                        <div class="container form-fields">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="span6">
                                        <img src="../packages/foostart/post/src/images/student.png">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="span6">
                                        <div class="student-form">
                                            <div class="header">
                                                <h2>Hỗ trợ</h2>
                                                <p>Hãy gửi những thắc mắc, yêu cầu của các bạn.</p>
                                            </div>
                                            <div class="form-data">
                                                <ul>
                                                    <div class="input">
                                                        <li><input type="text" placeholder="Tên"></li>
                                                        <li><input type="text" placeholder="Địa chỉ email"></li>
                                                        <li><input type="text" placeholder="Số điện thoại"></li>
                                                        <li><textarea type="text" placeholder="Nội dung"></textarea></li>
                                                    </div>
                                                    <li>
                                                        <button>Gửi</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bg1" class="skrollable"></div>
                        <div id="bg2" class="skrollable"></div>
                        <div id="bg3" class="skrollable"</div>
                    </div>
                </div>
                
            </div>

            <!--end contact-->
         







            <div class="ie-module-12">  
                <!--                Begin Follow-->
                <div class="follow-us">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 col-sm-4">
                                <div class="span4">
                                    <div class="follow">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                            <div class="text">
                                                <h4>Hãy theo dõi chúng tôi trên Facebook</h4>
                                                <p>FB.com/tuvantuyensinh</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="span4">
                                    <div class="follow">
                                        <a href="#">
                                            <i class="fa fa-google"></i>
                                            <div class="text">
                                                <h4>Hãy theo dõi chúng tôi trên Facebook</h4>
                                                <p>FB.com/tuvantuyensinh</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="span4">
                                    <div class="follow">
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                            <div class="text">
                                                <h4>Hãy theo dõi chúng tôi trên Instagram</h4>
                                                <p>instagram.com/tuvantuyensinh</p>     
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--                End Follow
                
                                Begin Footer-->

                <footer>

                    <div class="tweets">
                        <div class="container">
                            <div class="tweet-contant">
                                <i class="fa fa-twitter"></i>
                                <h4>Cập nhật hàng ngày</h4>
                                <div class="bx-wrapper" >
                                    <div class="bx-viewport">
                                        <div class="bxslider" id="carousel-bounding-box">
                                            <div class="carousel slide" id="myCarousel">
                                                <!--Carousel items--> 
                                                <div class="carousel-inner">
                                                    <div class="active item" data-slide-number="0">
                                                        <li>
                                                            <p>Quan điểm thú vị của bạn về diễn đàn -
                                                                <a href="#">http://t.co/tdEHlbZf</a>
                                                            </p>
                                                        </li>
                                                    </div>

                                                    <div class=" item" data-slide-number="1">
                                                        <li >
                                                            <p>Chia sẻ của bạn đến với diễn đàn - <a href="#">http://t.co/tdEHlbZf</a></p>
                                                        </li>
                                                    </div>

                                                    <div class=" item" data-slide-number="2">
                                                        <li >
                                                            <p>Những lời chia sẻ hữu ích của những chuyên gia trên diễn đàn - <a href="#">http://t.co/tdEHlbZf</a></p>
                                                        </li>
                                                    </div>

                                                </div> 
                                                <!--Carousel nav--> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-footer">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-3 col-sm-3">
                                    <div class="widget widget-categories">
                                        <h2>Từ Khóa</h2>
                                        <ul>
                                            <li><a href="#">Trường Dân Lập</a></li>
                                            <li><a href="#">Trường Công Lập</a></li>
                                            <li><a href="#">Trường Bán Công </a></li>
                                            <li><a href="#">Trường Quốc Tế</a></li>
                                            <li><a href="#">Quy Chế Tuyển Sinh</a></li>
                                            <li><a href="#">Thư viện Nghành - Nghề</a></li>
                                            <li><a href="#">Tư Vấn Chọn Nghề</a></li>
                                            <li><a href="#">Chuyện Khởi Nghiệp</a></li>
                                            <li><a href="#">Thủ Tục - Hồ Sơ</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-3">
                                    <div class="widget widget-facebook">
                                        <h2>Facebook</h2>
                                        <div class="pull-left">
                                            <div id="bx-pager">
                                                <a id=" " href="#">
                                                    <div class="thumb">
                                                        <img src="../packages/foostart/post/src/images/TDC.jpg" alt=""/>
                                                    </div>
                                                    <p class="color">TDC</p>
                                                </a>
                                                <a id=" " href="#">
                                                    <div class="thumb">
                                                        <img src="../packages/foostart/post/src/images/HCMUTE.jpg" alt=""/>
                                                    </div>
                                                    <p class="color">UTE</p>
                                                </a>
                                                <a id=" " href="#">
                                                    <div class="thumb">
                                                        <img src="../packages/foostart/post/src/images/NLU.jpg" alt=""/>
                                                    </div>
                                                    <p class="color">NLU</p>
                                                </a>
                                                <a id=" " href="#">
                                                    <div class="thumb">
                                                        <img src="../packages/foostart/post/src/images/NUTE.png" alt=""/>
                                                    </div>
                                                    <p class="color">NUTE</p>
                                                </a>
                                                <a id=" " href="#">
                                                    <div class="thumb">
                                                        <img src="../packages/foostart/post/src/images/SDC.png" alt=""/>
                                                    </div>
                                                    <p class="color">SDC</p>
                                                </a>
                                                <a id=" " href="#">
                                                    <div class="thumb">
                                                        <img src="../packages/foostart/post/src/images/DTU.png" alt=""/>
                                                    </div>
                                                    <p class="color">DTU</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-3">
                                    <div class="widget widget-newsletter">
                                        <h2>Lợi Ích</h2>
                                        <div class="newsletter-contant">
                                            <p>Theo dõi là người đầu tiên biết về giao dịch tốt nhất và cung cấp độc quyền!</p>
                                            <p><input type="text" class="input-block-level"></p>
                                            <p><button>Theo dõi</button></p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-3">
                                    <div class="widget widget-map">
                                        <h2>Chúng ta đang ở?</h2>
                                        <div class="location-map">
                                            <img src="../packages/foostart/post/src/images/map.png" class="img-responsive">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="copyright">
                        <div class="container">
                            <p>&copy; Copyrights 2017. All Rights Reserved <a href="#">HT</a></p>
                        </div>
                    </div>
                </footer>
                <!--End Footer-->

            </div>
            <div class="clearfix"></div>
    </body>
</html>
