<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dinh Độc Lập - Giới thiệu</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/960.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>

<body>
    <div id="header">
        <div class="container_12">
            <div class="wrap_logo grid_3 alpha">
                <a href="index.php" class="logo"></a>
            </div>

            <div class="wrap_slogan grid_3 alpha">
                <span>Di tích lịch sử</span>
                <a href="index.php" class="slogan_txt"></a>
            </div>

            <div class="r_header grid_3 push_3 omega">
                <ul class="social">

                    <li>
                        <a title="Skype" href="https://www.Skype.com/" target="_blank" class="s"></a>
                    </li>

                    <li>
                        <a title="Google+" href="https://www.Google.com/" target="_blank" class="g"></a>
                    </li>

                    <li>
                        <a title="Twitter" href="https://www.Twitter.com/" target="_blank" class="t"></a>
                    </li>

                    <li>
                        <a title="Facebook" href="https://www.facebook.com/" target="_blank" class="f"></a>
                    </li>

                </ul>

                <div class="clearfix"></div>
                <div id="search" class="right">



                    <script type="text/javascript">
                        function SetText() {
                            if (this.document.getElementById("txtContentSearch").value == "")
                                this.document.getElementById("txtContentSearch").value = "Từ khóa tìm kiếm";
                        }
                        function ClearText() {
                            if (this.document.getElementById("txtContentSearch").value == "Từ khóa tìm kiếm")
                                this.document.getElementById("txtContentSearch").value = "";
                        }
                        function toSearch() {
                            var txtS = document.getElementById("txtContentSearch").value;
                            if (txtS != "" && txtS != "Từ khóa tìm kiếm")
                                window.location = "/tim-kiem.php?searchtext=" + txtS + "&searchmode=anyword";
                            else {
                                return false;
                            }
                        }
                        function runScript(e) {
                            if (e.keyCode == 13) {
                                toSearch();
                                return false;
                            }
                        }

                    </script>

                    <input type="text" onblur="SetText()" value="Từ khóa tìm kiếm" onclick="ClearText()" onkeypress="return runScript(event)"
                        class="search-txt" id="txtContentSearch">
                    <input onclick="toSearch()" type="button" value="" class="search-btn" />
                    <div class="clearfix"></div>

                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <!-- Navigation containner -->
        <div id="container">
            <div id="navigation">
                <div class="container_12">
                    <ul class="menu">

                        <li class="">
                            <a href="index.php">
                                Trang chủ</a>
                        </li>

                        <li class="nav-act">
                            <a href="gioi-thieu.php">
                                Giới thiệu</a>
                        </li>

                        <li class="">
                            <a href="#home">
                                Trưng bày</a>

                            <div class="sub-menu2">

                                <div class="nav_col">
                                    <div class="n_img" style="background: url(./assets/img/getattachment/Khanh-tiet.jpg) no-repeat center center; width: 195px; height: 85px;">
                                        <a href="trung-bay/co-dinh.php" class="icon_hover"></a>
                                    </div>
                                    <div class="nav_caption">
                                        <a href="trung-bay/co-dinh.php">Cố định</a>
                                    </div>
                                </div>

                                <div class="nav_col">
                                    <div class="n_img" style="background: url(./assets/img/getattachment/mang-3.jpg) no-repeat center center; width: 195px; height: 85px;">
                                        <a href="trung-bay/chuyen-de.php" class="icon_hover"></a>
                                    </div>
                                    <div class="nav_caption">
                                        <a href="trung-bay/chuyen-de.php">Chuyên đề</a>
                                    </div>
                                </div>

                                <div class="nav_col">
                                    <div class="n_img" style="background: url(./assets/img/getattachment/nav2.jpg) no-repeat center center; width: 195px; height: 85px;">
                                        <a href="trung-bay/bo-sung.php" class="icon_hover"></a>
                                    </div>
                                    <div class="nav_caption">
                                        <a href="trung-bay/bo-sung.php">Bổ sung</a>
                                    </div>
                                </div>

                            </div>

                        </li>


                        <li class="">
                            <a href="#home">
                                Tham quan</a>

                            <ul class="sub-menu">

                                <li>
                                    <a href="./tham-quan/duong-di-den-di-tich.php">
                                        Đường đi đến di tích</a>
                                </li>

                                <li>
                                    <a href="./tham-quan/gia-ve.php">
                                        Giờ mở cửa, giá vé tham quan</a>
                                </li>

                                <li>
                                    <a href="./tham-quan/noi-quy-tham-quan.php">
                                        Nội quy tham quan</a>
                                </li>

                                <li>
                                    <a href="./tham-quan/thong-bao.php">
                                        Thông báo</a>
                                </li>

                            </ul>

                        </li>

                        <li class="">
                            <a href="#home">
                                Hình ảnh - Tư liệu</a>

                            <ul class="sub-menu">

                                <li>
                                    <a href="./hinh-anh-tu-lieu/hinh-anh.php">
                                        Hình ảnh</a>
                                </li>

                                <li>
                                    <a href="./hinh-anh-tu-lieu/tu-lieu.php">
                                        Tư liệu </a>
                                </li>

                            </ul>

                        </li>

                        <li class="">
                            <a href="./tin-tuc-su-kien.php">
                                Tin tức - Sự kiện</a>
                        </li>

                        <li class="">
                            <a href="./san-pham.php">
                                Sản phẩm</a>

                        </li>
                        <li class=""><a href="./ve-chung-toi.php">
                                    Về chúng tôi</a>
                            <ul class="sub-menu">
                                <li><a href="./ve-chung-toi/so-do-to-chuc/so-do-to-chuc.php">
                                                Sơ đồ tổ chức</a></li>
                                <li><a href="./ve-chung-toi/cac-hoat-dong.php">
                                                Các hoạt động</a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="./suu-tam.php">
                                Sưu tầm</a>

                        </li>

                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="main_content"></div>
    </div>

    <!-- End navigation contain -->
    <div class="clearfix"></div>
    <div id="ctl00_pSliderSub">

        <div class="wrap_slider_sub">
            <div id="slider_sub" style="width: 100%">
                <div class="cycle-slideshow" data-cycle-timeout="5000" data-cycle-next="#next4" data-cycle-prev="#prev4" data-cycle-fx="fade"
                    data-cycle-tile-vertical="false" data-cycle-tile-count="5">
                    <img src="assets/img/dinh-big.jpg" height="100%" width="100%">
                </div>
            </div>

        </div>

    </div>



    <!--end wrap_slider-->
    <div id="main_content_sub">
        <div class="container_12">
            <div class="breakcumb">
                <span class="CMSBreadCrumbsCurrentItem">Giới thiệu</span>
            </div>
            <!--// end breakcumb-->
            <div class="title_bar">
                <ul class="nav_title">
                    <!-- InstanceBeginEditable name="TITLE_BAR" -->
                    <li class="nav_title_act">
                        <a>Giới thiệu</a>
                    </li>
                    <!-- InstanceEndEditable -->
                </ul>
                <!--end nav_title-->
                <ul class="nav_title rtitle">
                    <!-- InstanceBeginEditable name="RIGHT TITLE BAR" -->
                    <!-- InstanceEndEditable -->
                </ul>
            </div>
            <!--end title_bar-->
            <div class="content">
                <!-- InstanceBeginEditable name="CONTENT" -->
                <div class="grid-new">
                    <div class="item">
                        <ul class="news-item">

                            <li>
                                <a class="block" href="gioi-thieu/gioi-thieu.php">
                                    <div class="news-thumbs" style="background-image:url(./assets/img/getattachment/Dinh-2.jpg);width:260px;background-position:center center;background-repeat:no-repeat">

                                    </div>
                                </a>
                                <div class="news-info" style="float:left;width:600px;">
                                    <h2>
                                        <a href="gioi-thieu/gioi-thieu.php">Giới thiệu</a>
                                    </h2>
                                    <time>10-06-2013 - 09:10</time>
                                    <div class="news-description">
                                        Dinh Độc Lập được công nhận là Di tích lịch sử văn hóa quốc gia bằng Quyết định số 77A/VHQĐ ngày 25/6/1976 của Bộ trưởng
                                        Bộ Văn Hóa. Tháng 8/2009, Thủ tướng Chính phủ nước Cộng hòa Xã hội Chủ nghĩa Việt
                                        Nam đã ký Quyết định số 1272/QĐ-TTg ngày 12 tháng 8 năm 2009 xếp hạng Di tích lịch
                                        sử Dinh Độc Lập là một trong 10 di tích quốc gia đặc biệt.
                                    </div>
                                    <a href="gioi-thieu/gioi-thieu.php" class="btn_more">Xem thêm</a>
                                </div>
                                <div style="clear:both"></div>
                            </li>

                            <li>
                                <a class="block" href="gioi-thieu/lich-su-ve-Dinh-doc-lap.php">
                                    <div class="news-thumbs" style="background-image:url(./assets/img/getattachment/lsd.jpg);width:260px;background-position:center center;background-repeat:no-repeat">

                                    </div>
                                </a>
                                <div class="news-info" style="float:left;width:600px;">
                                    <h2>
                                        <a href="gioi-thieu/lich-su-ve-Dinh-doc-lap.php">Lịch sử về Dinh Độc lập</a>
                                    </h2>
                                    <time>24-06-2014 - 03:11</time>
                                    <div class="news-description">
                                        Năm 1858, thực dân Pháp nổ súng tấn công Ðà Nẵng mở đầu cuộc chiến tranh xâm lược Việt Nam. Năm 1867, Pháp chiếm xong lục
                                        tỉnh Nam kỳ (Biên Hoà, Gia Định, Ðịnh Tường, Vĩnh Long, An Giang, Hà Tiên). Năm 1868,
                                        chính quyền Pháp bắt đầu cho thiết kế và xây dựng tại trung tâm thành phố Sài Gòn
                                        một Dinh thự làm nơi ở cho Thống đốc Nam kỳ, khi xây xong có tên gọi là Dinh NORODOM.
                                    </div>
                                    <a href="gioi-thieu/lich-su-ve-Dinh-doc-lap.php" class="btn_more">Xem thêm</a>
                                </div>
                                <div style="clear:both"></div>
                            </li>

                            <li>
                                <a class="block" href="gioi-thieu/kien-truc.php">
                                    <div class="news-thumbs" style="background-image:url(./assets/img/getattachment/ktd.jpg);width:260px;background-position:center center;background-repeat:no-repeat">

                                    </div>
                                </a>
                                <div class="news-info" style="float:left;width:600px;">
                                    <h2>
                                        <a href="gioi-thieu/kien-truc.php">Kiến trúc của Dinh</a>
                                    </h2>
                                    <time>15-03-2013 - 12:00</time>
                                    <div class="news-description">
                                        Dinh Ðộc Lập là một công trình kiến trúc độc đáo của Kiến trúc sư Ngô Viết Thụ. Dinh được khởi công xây dựng ngày 01/7/1962
                                        và khánh thành vào ngày 31/10/1966.
                                    </div>
                                    <a href="gioi-thieu/kien-truc.php" class="btn_more">Xem thêm</a>
                                </div>
                                <div style="clear:both"></div>
                            </li>

                            <li>
                                <a class="block" href="gioi-thieu/doi-moi-lo-trinh-tham-quan.php">
                                    <div class="news-thumbs" style="background-image:url(./assets/img/getattachment/lttq.jpg);width:260px;background-position:center center;background-repeat:no-repeat">

                                    </div>
                                </a>
                                <div class="news-info" style="float:left;width:600px;">
                                    <h2>
                                        <a href="gioi-thieu/doi-moi-lo-trinh-tham-quan.php">Đổi mới lộ trình tham quan</a>
                                    </h2>
                                    <time>14-03-2013 - 08:31</time>
                                    <div class="news-description">
                                        Gương mặt mới của di tích lịch sử - văn hóa Dinh Độc Lập
                                    </div>
                                    <a href="gioi-thieu/doi-moi-lo-trinh-tham-quan.php" class="btn_more">Xem thêm</a>
                                </div>
                                <div style="clear:both"></div>
                            </li>

                        </ul>
                        <!--//news-item-->
                        <div class="clearfix"></div>
                    </div>
                    <!--//item-->
                    <!--Page Load-->

                </div>
                <!--//gird-product-->
                <!-- InstanceEndEditable -->
                <div class="clearfix"></div>
            </div>
            <!--END content-->
        </div>
    </div>
    <!--end main_content-->

    </div>


    <!--Footer-->
    <div id="ctl00_pFooterSub">

        <div id="footer_sub">

            <div class="container_12">
                <div class="grid_12 f_navfooter_sub">

                    <ul class="navfooter">

                        <li>
                            <a class="" href="index.php">
                                Trang chủ</a>
                        </li>

                        <li>
                            <a class="f_nav_act" href="gioi-thieu.php">
                                Giới thiệu</a>
                        </li>
                        <li>
                            <a class="" href="./trung-bay.php">
                                Trưng bày</a>
                        </li>
                        <li>
                            <a class="" href="./tham-quan.php">
                                Tham quan</a>
                        </li>
                    
                        <li>
                            <a class="" href="./hinh-anh-tu-lieu.php">
                                Hình ảnh - Tư liệu</a>
                        </li>
                        <li>
                            <a class="" href="./tin-tuc-su-kien.php">
                                Tin tức - Sự kiện</a>
                        </li>
                        <li>
                            <a class="" href="./san-pham.php">
                                Sản phẩm</a>
                        </li>
                        <li>
                            <a class="" href="./ve-chung-toi.php">
                                Về chúng tôi</a>
                        </li>
                        <li>
                            <a  class ="" href="./suu-tam.php">
                                Sưu tầm
                            </a>
                        </li>
                    </ul>

                </div>

                <div class="clearfix"></div>
                <div class="f_lcol grid_4">

                    <ul>

                        <li class="up">Bản quyền website thuộc về Dinh Độc Lập
                        </li>
                        <li>Địa chỉ: 135 Nam Kỳ Khởi Nghĩa, quận 1, TP. Hồ Chí Minh</li>
                        <li>Điện thoại: 080. 85037 - 080. 85038 - 080. 85039 – 083.8223652 - Fax: 080.85008</li>
                        <li>Email:
                            <a href="mailto:dinhdoclap@dinhdoclap.gov.vn">dinhdoclap@dinhdoclap.gov.vn</a>
                        </li>

                    </ul>

                </div>

                <div class="f_rcol grid_4 push_4">
                    <div class="clearfix"></div>
                    <div class="dn_license" style="position:relative;width:250px;padding-top:10px;">
                        <span style="position:absolute;left:-9px;bottom:13px;">
                            <a target="_blank" rel="dofollow" href="https://www.facebook.com/bd.tren/" title="thiết kế website, thiet ke website,hosting">Thiết kế bởi Nhóm 12_SE109.I21</a>
                            <!--     <img style="position:absolute;right:0px;bottom:9px;" src="/App_Themes/DinhDocLap/img/matbao.png" alt="" width="80" height="25" />-->
                    </div>
                </div>
            </div>

        </div>



        <script type="text/javascript ">
//<![CDATA[
(function() {var fn = function() {$get("ctl00_manScript_HiddenField ").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();Sys.Application.initialize();
//]]>
</script>
        </form>
</body>

</body>

</html>