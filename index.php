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
    <!--script-->
    <script type="text/javascript" src="./assets/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./assets/js/html5.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="./assets/js/libraries.js"></script>
    <!--cycle2-->
    <script type="text/javascript" src="./assets/js/cycle/jquery.cycle2.js"></script>
    <script type="text/javascript" src="./assets/js/cycle/Tile/jquery.cycle2.tile.js"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="./assets/js/jquery.mousewheel-3.0.6.pack.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="./assets/js/source/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/js/source/jquery.fancybox.css" />
    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="./assets/js/source/helpers/jquery.fancybox-buttons.css" />
    <script type="text/javascript" src="./assets/js/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="./assets/js/jscrollpane/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="./assets/js/jscrollpane/jquery.jscrollpane.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/js/jscrollpane/jquery.jscrollpane.css" />
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
</head>

<body>
    <script type="text/javascript">
    //<![CDATA[
    var theForm = document.forms['aspnetForm'];
    if (!theForm) {
        theForm = document.aspnetForm;
    }

    function __doPostBack(eventTarget, eventArgument) {
        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
            theForm.__EVENTTARGET.value = eventTarget;
            theForm.__EVENTARGUMENT.value = eventArgument;
            theForm.submit();
        }
    }
    //]]>
    </script>
    <script src="./assets/js/resource/codeplex1.js" type="text/javascript"></script>
    <input type="hidden" name="lng" id="lng" value="vi-VN" />
    <script src="./assets/js/resource/codeplex2.js" type="text/javascript"></script>
    <script src="./assets/js/resource/codeplex3.js" type="text/javascript"></script>
    <div>
        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C9075014" />
    </div>
    <div id="ctl00_manPage">
    </div>
    <script type="text/javascript">
    //<![CDATA[
    Sys.WebForms.PageRequestManager._initialize('ctl00$manScript', document.getElementById('aspnetForm'));
    Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
    //]]>
    </script>
    <div id="ctl00_pSliderHome">
        <div class="wrap_slider">
            <div id="slider" style="width: 100%; height: 100%;">
                <div class="cycle-slideshow" data-cycle-timeout="5000" data-cycle-next="#next4" data-cycle-prev="#prev4" data-cycle-fx="fade" data-cycle-tile-vertical="false" data-cycle-tile-count="5">
                    <img src="assets/img/MBMCMS/fa212208-808f-4552-bd91-68df6b5e973d.jpg" height="100%" width="100%">
                    <img src="assets/img/MBMCMS/7613344f-5751-4c54-b0ac-ee5235484b80.jpg" height="100%" width="100%">
                    <img src="assets/img/MBMCMS/05a3955f-3516-404f-a758-30b7f2f14f52.jpg" height="100%" width="100%">
                    <img src="assets/img/MBMCMS/d200c7ac-fcde-443d-8602-d3757e439b0c.jpg" height="100%" width="100%">
                    <img src="assets/img/MBMCMS/355d4594-9e42-4e19-84bc-ab82b362d30a.jpg" height="100%" width="100%">
                </div>
            </div>
        </div>
    </div>
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
                    <input type="text" onblur="SetText()" value="Từ khóa tìm kiếm" onclick="ClearText()" onkeypress="return runScript(event)" class="search-txt" id="txtContentSearch">
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

                        <li class="nav-act">
                            <a href="index.php">
                                Trang chủ</a>
                        </li>

                        <li class="">
                            <a href="gioi-thieu.php">
                                Giới thiệu</a>
                        </li>

                        <li class="">
                            <a href="#home">
                                Trưng bày</a>

                            <div class="sub-menu2">

                                <div class="nav_col">
                                    <div class="n_img" style="background: url(assets/img/getattachment/Khanh-tiet.jpg) no-repeat center center; width: 195px; height: 85px;">
                                        <a href="trung-bay/co-dinh.php" class="icon_hover"></a>
                                    </div>
                                    <div class="nav_caption">
                                        <a href="trung-bay/co-dinh.php">Cố định</a>
                                    </div>
                                </div>

                                <div class="nav_col">
                                    <div class="n_img" style="background: url(assets/img/getattachment/mang-3.jpg) no-repeat center center; width: 195px; height: 85px;">
                                        <a href="trung-bay/chuyen-de.php" class="icon_hover"></a>
                                    </div>
                                    <div class="nav_caption">
                                        <a href="trung-bay/chuyen-de.php">Chuyên đề</a>
                                    </div>
                                </div>

                                <div class="nav_col">
                                    <div class="n_img" style="background: url(assets/img/getattachment/nav2.jpg) no-repeat center center; width: 195px; height: 85px;">
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
                                    <a href="tham-quan/duong-di-den-di-tich.php">
                                        Đường đi đến di tích</a>
                                </li>

                                <li>
                                    <a href="tham-quan/gia-ve.php">
                                        Giờ mở cửa, giá vé tham quan</a>
                                </li>

                                <li>
                                    <a href="tham-quan/noi-quy-tham-quan.php">
                                        Nội quy tham quan</a>
                                </li>

                                <li>
                                    <a href="tham-quan/thong-bao.php">
                                        Thông báo</a>
                                </li>

                            </ul>

                        </li>

                        <li class="">
                            <a href="#home">
                                Hình ảnh - Tư liệu</a>

                            <ul class="sub-menu">

                                <li>
                                    <a href="hinh-anh-tu-lieu/hinh-anh.php">
                                        Hình ảnh</a>
                                </li>

                                <li>
                                    <a href="hinh-anh-tu-lieu/tu-lieu.php">
                                        Tư liệu </a>
                                </li>

                            </ul>

                        </li>

                        <li class="">
                            <a href="tin-tuc-su-kien.php">
                                Tin tức - Sự kiện</a>
                        </li>

                        <li class="">
                            <a href="san-pham.php">
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
        <!-- End navigation container -->
        <div id="main_content"></div>
        <div class="clearfix"></div>
        <div id="ctl00_pSliderSub">
            <div class="wrap_slider_sub">
                <div id="slider_sub" style="width: 100%">
                    <div class="cycle-slideshow" data-cycle-timeout="5000" data-cycle-next="#next4" data-cycle-prev="#prev4" data-cycle-fx="fade" data-cycle-tile-vertical="false" data-cycle-tile-count="5">
                    </div>
                </div>
            </div>
        </div>
        <!--Hết header-->
        <!--Chỉnh code tại đây-->
        <!--Footer-->
        <div id="ctl00_pFooter">
            <div id="footer">
                <div class="bot_container">
                    <div class="container_12">
                        <div class="grid_12">
                            <div class="col grid_4 alpha omega">
                                <div class="wrap_title">
                                    <div class="col_title">
                                        <h1>
                                        <a href="gioi-thieu.php">Giới thiệu</a>
                                    </h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col_content">
                                    <p>
                                    </p>
                                    <a href="gioi-thieu.php" class="btn_more">Xem thêm</a>
                                </div>
                            </div>
                            <div class="col grid_4 alpha omega col2">
                                <div class="wrap_title">
                                    <div class="col_title">
                                        <h1>
                                        <a href="#">Trưng bày</a>
                                    </h1>
                                        <div class="wrap_btn">
                                            <a class="btn_prev" id="btn_prev"></a>
                                            <a class="btn_next" id="btn_next"></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="0" data-cycle-prev="#btn_prev" data-cycle-next="#btn_next" data-cycle-slides="> div">
                                    <div class="col_content">
                                        <table class="tb_pic">
                                            <tr>
                                                <td rowspan='2'>
                                                    <a href='trung-bay/co-dinh.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/1.jpg) no-repeat center; width: 99px; height: 100px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href='trung-bay/co-dinh.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/a143.jpg) no-repeat center; width: 49px; height: 49px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td rowspan='1'>
                                                    <a href='trung-bay/co-dinh.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/khanh-tiet1.jpg) no-repeat center; width: 126px; height: 49px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href='trung-bay/co-dinh.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/xe-tang-843.jpg) no-repeat center; width: 49px; height: 49px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td rowspan='1'>
                                                    <a href='trung-bay/co-dinh.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/xetang390.jpg) no-repeat center; width: 126px; height: 49px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col_content">
                                        <table class="tb_pic">
                                            <tr>
                                                <td rowspan='2'>
                                                    <a href='trung-bay/chuyen-de.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/hinh-4.jpg) no-repeat center; width: 99px; height: 100px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href='trung-bay/chuyen-de.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/IMG-1321.JPG) no-repeat center; width: 49px; height: 49px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td rowspan='1'>
                                                    <a href='trung-bay/chuyen-de.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/IMG-6617.JPG) no-repeat center; width: 126px; height: 49px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col_content">
                                        <table class="tb_pic">
                                            <tr>
                                                <td rowspan='2'>
                                                    <a href='trung-bay/bo-sung.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/4.jpg) no-repeat center; width: 99px; height: 100px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href='trung-bay/bo-sung.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/3.jpg) no-repeat center; width: 49px; height: 49px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td rowspan='1'>
                                                    <a href='trung-bay/bo-sung.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/2.jpg) no-repeat center; width: 126px; height: 49px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href='trung-bay/bo-sung.php'>
                                                        <div class='img1' style='background: url(assets/img/getattachment/11.jpg) no-repeat center; width: 49px; height: 49px;'>
                                                            <div class='item_hover'>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col grid_4 alpha omega col3">
                                <div class="wrap_title">
                                    <div class="col_title">
                                        <h1><a href="#">Tin tức - Sự kiện</a></h1>
                                        <div class="wrap_btn">
                                            <a class="btn_prev" id="btn_prev1"></a>
                                            <a class="btn_next" id="btn_next2"></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="0" data-cycle-prev="#btn_prev1" data-cycle-next="#btn_next2" data-cycle-slides="> div">
                                    <div class="col_content">
                                        <h1><a title="Đoàn đại biểu các nước tiểu vùng sông Mê Công tham quan Dinh Độc Lập" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/oan-ai-bieu-cac-nuoc-tieu-vung-song-Me-Cong-tham-q.aspx">Đoàn đại biểu các nước tiểu vùng sông ...</a></h1>
                                        <time>04/04/2018 9:34:50 SA</time>
                                        <p title="Đoàn đại biểu các nước tiểu vùng sông Mê Công tham quan Dinh Độc Lập">
                                            Đoàn đại biểu các nước tiểu vùng sông Mê Công tham quan Dinh Độc Lập
                                        </p>
                                    </div>
                                    <div class="col_content">
                                        <h1><a title="Đoàn Nhóm Nghị sĩ hữu nghị Rumani – Việt Nam tham quan Dinh Độc Lập" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/oan-Nhom-Nghi-si-huu-nghi-Rumani-Viet-Nam-tham-qua.aspx">Đoàn Nhóm Nghị sĩ hữu nghị Rumani – ...</a></h1>
                                        <time>03/04/2018 1:39:43 CH</time>
                                        <p title="Đoàn Nhóm Nghị sĩ hữu nghị Rumani – Việt Nam tham quan Dinh Độc Lập">
                                            Đoàn Nhóm Nghị sĩ hữu nghị Rumani – Việt Nam tham quan Dinh Độc Lập
                                        </p>
                                    </div>
                                    <div class="col_content">
                                        <h1><a title="Họp mặt truyền thống họ Đỗ (Đậu) Việt Nam lần thứ 21" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/Hop-mat-truyen-thong-ho-o-au-Viet-Nam-lan-thu-21.aspx">Họp mặt truyền thống họ Đỗ (Đậu) Việt ...</a></h1>
                                        <time>03/04/2018 1:34:19 CH</time>
                                        <p title="Họp mặt truyền thống họ Đỗ (Đậu) Việt Nam lần thứ 21">
                                            Họp mặt truyền thống họ Đỗ (Đậu) Việt Nam lần thứ 21
                                        </p>
                                    </div>
                                    <div class="col_content">
                                        <h1><a title="Thưởng thức buffet sáng các món ăn dân dã" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/Thuong-thuc-buffet-sang-cac-mon-an-dan-da.aspx">Thưởng thức buffet sáng các món ăn dân ...</a></h1>
                                        <time>29/03/2018 1:31:25 CH</time>
                                        <p title="Thưởng thức buffet sáng các món ăn dân dã">
                                            Thưởng thức buffet sáng các món ăn dân dã
                                        </p>
                                    </div>
                                    <div class="col_content">
                                        <h1><a title="Đoàn Trợ lý Nghị sỹ Quốc hội Hoa Kỳ tham quan Dinh Độc Lập" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/oan-Tro-ly-Nghi-sy-Quoc-hoi-Hoa-Ky-tham-quan-Dinh.aspx">Đoàn Trợ lý Nghị sỹ Quốc hội Hoa Kỳ ...</a></h1>
                                        <time>29/03/2018 1:20:39 CH</time>
                                        <p title="Đoàn Trợ lý Nghị sỹ Quốc hội Hoa Kỳ tham quan Dinh Độc Lập">
                                            Đoàn Trợ lý Nghị sỹ Quốc hội Hoa Kỳ tham quan Dinh Độc Lập
                                        </p>
                                    </div>
                                    <div class="col_content">
                                        <h1><a title="Triển lãm Hoa quốc tế Vietnam International Flora Expo (VIFE)" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/Trien-lam-Hoa-quoc-te-Vietnam-International-Flora.aspx">Triển lãm Hoa quốc tế Vietnam ...</a></h1>
                                        <time>19/03/2018 4:33:48 CH</time>
                                        <p title="Triển lãm Hoa quốc tế Vietnam International Flora Expo (VIFE)">
                                            Triển lãm Hoa quốc tế Vietnam International Flora Expo (VIFE)
                                        </p>
                                    </div>
                                    <div class="col_content">
                                        <h1><a title="Đoàn cán bộ cấp cao Bộ Quốc phòng Trung Quốc tham quan Dinh Độc Lập" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/oan-can-bo-cap-cao-Bo-Quoc-phong-Trung-Quoc-tham-q.aspx">Đoàn cán bộ cấp cao Bộ Quốc phòng Trung ...</a></h1>
                                        <time>19/03/2018 4:33:14 CH</time>
                                        <p title="Đoàn cán bộ cấp cao Bộ Quốc phòng Trung Quốc tham quan Dinh Độc Lập">
                                            Đoàn cán bộ cấp cao Bộ Quốc phòng Trung Quốc tham quan Dinh Độc Lập
                                        </p>
                                    </div>
                                    <div class="col_content">
                                        <h1><a title="Sơ kết học kỳ I và định hướng nhiệm vụ học kỳ II năm học 2017 – 2018 khối Ngoại ngữ - Tin học" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/So-ket-hoc-ky-I-va-inh-huong-nhiem-vu-hoc-ky-II-na.aspx">Sơ kết học kỳ I và định hướng nhiệm vụ ...</a></h1>
                                        <time>13/03/2018 1:21:48 CH</time>
                                        <p title="Sơ kết học kỳ I và định hướng nhiệm vụ học kỳ II năm học 2017 – 2018 khối Ngoại ngữ - Tin học">
                                            Sơ kết học kỳ I và định hướng nhiệm vụ học kỳ II năm học 2017 – 2018 khối Ngoại ngữ - Tin học
                                        </p>
                                    </div>
                                    <div class="col_content">
                                        <h1><a title="Lễ khai mạc trưng bày “Từ Dinh Norodom đến Dinh Độc Lập 1868 –1966”" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/Le-khai-mac-trung-bay-Tu-Dinh-Norodom-en-Dinh-oc-L.aspx">Lễ khai mạc trưng bày “Từ Dinh Norodom ...</a></h1>
                                        <time>09/03/2018 4:51:59 CH</time>
                                        <p title="Lễ khai mạc trưng bày “Từ Dinh Norodom đến Dinh Độc Lập 1868 –1966”">
                                            Lễ khai mạc trưng bày “Từ Dinh Norodom đến Dinh Độc Lập 1868 –1966”
                                        </p>
                                    </div>
                                    <div class="col_content">
                                        <h1><a title="Lộ diện những “bí ẩn” của dinh Độc Lập" href="/Tin-tuc-Su-kien/Tin-tuc-su-kien/Lo-dien-nhung-bi-an-cua-dinh-oc-Lap.aspx">Lộ diện những “bí ẩn” của dinh Độc Lập</a></h1>
                                        <time>09/03/2018 2:57:40 CH</time>
                                        <p title="Lộ diện những “bí ẩn” của dinh Độc Lập">
                                            Lộ diện những “bí ẩn” của dinh Độc Lập
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container_12">
                    <div class="grid_12 f_navfooter">
                        <ul class="navfooter">

                        <li>
                            <a class="f_nav_act" href="index.php">
                                Trang chủ</a>
                        </li>

                        <li>
                            <a class="" href="gioi-thieu.php">
                                Giới thiệu</a>
                        </li>
                        <li>
                            <a class="" href="trung-bay.php">
                                Trưng bày</a>
                        </li>
                        <li>
                            <a class="" href="tham-quan.php">
                                Tham quan</a>
                        </li>
                        <li>
                            <a class="" href="hinh-anh-tu-lieu.php">
                                Hình ảnh - Tư liệu</a>
                        </li>
                        <li>
                            <a class="" href="tin-tuc-su-kien.php">
                                Tin tức - Sự kiện</a>
                        </li>
                        <li>
                            <a class="" href="an-pham.php">
                                Sản phẩm</a>
                        </li>
                        <li>
                            <a class="" href="ve-chung-toi.php">
                                Về chúng tôi</a>
                        </li>
                        <li>
                            <a  class ="" href="suu-tam.php">
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
                        <div class="pagerank">
                        </div>
                        <div class="clearfix"></div>
                        <div class="dn_license" style="position:relative;width:250px;padding-top:10px;">
                            <span style="position:absolute;left:-9px;bottom:13px;">
                            <a target="_blank" rel="dofollow" href="https://www.facebook.com/bd.tren/" title="thiết kế website, thiet ke website,hosting">Thiết kế bởi Nhóm 12_SE109.I21</a>
                    </div>
                </div>

            </div>

        </div>

    </div>


</body>

</html>