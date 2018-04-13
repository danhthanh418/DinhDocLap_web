<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dấu ấn Dinh Độc lập qua các biến cố lịch sử - Dinh độc lập</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/960.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>
    <div id="header">
        <div class="container_12">
            <div class="wrap_logo grid_3 alpha">
                <a href="../trang-chu.html" class="logo"></a>
            </div>

            <div class="wrap_slogan grid_3 alpha">
                <span>Di tích lịch sử</span>
                <a href="../trang-chu.html" class="slogan_txt"></a>
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
                                window.location = "../tim-kiem.php?searchtext=" + txtS + "&searchmode=anyword";
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
        <div id="container">

            <div id="navigation">
                <div class="container_12">
                    <ul class="menu">

                        <li class="">
                            <a href="trang-chu.php">
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
                            <a href="suu-tam.php">
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
    <div class="clearfix"></div>
    <div id="ctl00_pSliderSub">

        <div class="wrap_slider_sub">
            <div id="slider_sub" style="width: 100%">
                <div class="cycle-slideshow" data-cycle-timeout="5000" data-cycle-next="#next4" data-cycle-prev="#prev4" data-cycle-fx="fade"
                    data-cycle-tile-vertical="false" data-cycle-tile-count="5">
                    <img src="../assets/img/dinh-big.jpg" height="100%" width="100%">
                </div>
            </div>

        </div>

    </div>

    <!--Hết header-->


    <div id="main_content_sub">
        <div class="container_12">
            <div class="breakcumb">
                <a href="/vi-vn/suu-tam.aspx" class="CMSBreadCrumbsLink">Sưu tầm</a>
                <img src="../assets/img/icon/bulllet1.jpg" />
                <span class="CMSBreadCrumbsCurrentItem">Dấu ấn Dinh Độc Lập qua c&#225;c biến cố lịch sử - B&#225;o vnexpress.net</span>
            </div>
            <!--// end breakcumb-->
            <div class="title_bar">
                <ul class="nav_title">
                    <!-- InstanceBeginEditable name="TITLE_BAR" -->
                    <li class="nav_title_act">
                        <a>Sưu tầm</a>
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
                <div id="tab_content1">
                    <div class="article">
                        <h1>
                            <a>Dấu ấn Dinh Độc Lập qua các biến cố lịch sử - Báo vnexpress.net</a>
                        </h1>
                        <time class="ct_time">Cập nhật : 06-10-2017 - 02:03</time>
                        <div class="clearfix"></div>
                        <div>
                            <h1 class="title_news_detail mb10" style="margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; font-weight: 400; font-stretch: normal; font-size: 28px; line-height: 32px; font-family: arial; color: rgb(51, 51, 51); margin-bottom: 10px !important;">
                                &nbsp;</h1>
                            <article class="content_detail fck_detail width_common block_ads_connect" style="margin: 0px; padding: 0px 0px 10px; box-sizing: border-box; text-rendering: geometricPrecision; width: 500px; float: left; color: rgb(51, 51, 51); font-size: 14px; font-family: arial;">
                                <table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin: 10px auto; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; max-width: 100%;">
                                    <tbody style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0; width: 500px;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su" class="lazyInitial lazyLoaded" data-natural-width="500" data-pwidth="500"
                                                    data-was-processed="true" data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/dinh3-4851-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%; width: 500px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    Lúc mới được người Pháp xây, khoảng năm 1865, dinh mang tên Norodom. Đại lộ phía trước dinh (nay là đường Lê Duẩn)&nbsp;vẫn
                                                    còn bùn lầy, ẩm thấp.</p>
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0; width: 500px;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su-1" class="lazyInitial lazyLoaded" data-natural-width="500" data-pwidth="500"
                                                    data-was-processed="true" data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/d6-phap-thuoc-4739-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%; width: 500px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    <strong style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; color: rgb(0, 0, 0); line-height: 20px;">&nbsp;</strong>Dinh được coi là công thự đẹp nhất ở Á Ðông và là nơi
                                                    ở của Thống đốc Đông Dương.&nbsp;Đây cũng là cơ quan biểu thị cho bộ
                                                    máy cai trị Pháp trên toàn cõi Ðông Dương.</p>
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0; width: 500px;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su-2" class="lazyInitial lazyLoaded" data-natural-width="500" data-pwidth="500"
                                                    data-was-processed="true" data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/d7-Dinh-Doc-Lap-truoc-khi-duoc-5121-4110-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%; width: 500px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    Năm 1955, Thủ tướng Quốc gia Việt Nam Ngô Đình Diệm phế truất Quốc trưởng Bảo Đại và lên làm Tổng thống. Ông quyết định đổi
                                                    tên thành Dinh Độc Lập.</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin: 10px auto; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; max-width: 100%; width: 500px;">
                                    <tbody style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su-3" class="lazyLoading" data-natural-width="500" data-pwidth="500" data-was-processed="true"
                                                    data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/d4-dao-chinh-11-4562-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    Dinh bị hư hại nhẹ trong lần đảo chính đầu tiên ngày 11/11/1960 do&nbsp;Đại tá Nguyễn Chánh Thi, Trung tá Vương Văn Đông
                                                    và Đại úy Phan Lạc Tuyên&nbsp;đưa quân bao vây dinh suốt 2 ngày.</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin: 10px auto; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; max-width: 100%; width: 500px;">
                                    <tbody style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su-4" class="lazyLoading" data-natural-width="500" data-pwidth="500" data-was-processed="true"
                                                    data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/d3-1962-2109-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    Trong lần đảo chính thứ 2 vào ngày 27/2/1962, phe đảo chính đã cử hai viên phi công quân đội Sài Gòn là Nguyễn Văn Cử và
                                                    Phạm Phú Quốc lái 2 máy bay AD6 ném bom làm sập toàn bộ phần chính cánh
                                                    trái của dinh.</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin: 10px auto; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; max-width: 100%; width: 500px;">
                                    <tbody style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su-5" class="lazyLoading" data-natural-width="500" data-pwidth="500" data-was-processed="true"
                                                    data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/dinh11-7162-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    Do không thể khôi phục lại, Tổng thống VNCH Ngô Ðình Diệm đã cho san bằng và xây một dinh thự mới ngay trên nền đất cũ theo
                                                    đồ án thiết kế của Kiến trúc sư Ngô Viết Thụ - người Việt Nam đầu tiên
                                                    đạt giải Khôi nguyên La Mã.</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin: 10px auto; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; max-width: 100%;">
                                    <tbody style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0; width: 500px;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su-6" class="lazyLoading" data-natural-width="500" data-pwidth="500" data-was-processed="true"
                                                    data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/dinh14-8954-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%; width: 500px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    Là người khởi xướng xây dựng Dinh Ðộc Lập nhưng ông Ngô Đình Diệm&nbsp;không được sống ở đây ngày nào.</p>
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0; width: 500px;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su-7" class="lazyLoading" data-natural-width="500" data-pwidth="500" data-was-processed="true"
                                                    data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/dinh-13-4712-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%; width: 500px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    Trưa 30/4/1975, xe tăng quân giải phóng đã húc đổ cổng và tiến vào Dinh Độc Lập, kết thúc cuộc chiến kéo dài 30 năm, nước
                                                    Việt Nam được thống nhất.</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin: 10px auto; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; max-width: 100%; width: 500px;">
                                    <tbody style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su-8" class="lazyLoading" data-natural-width="500" data-pwidth="500" data-was-processed="true"
                                                    data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/XE-TANG-843-4487-1429500232-4644-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    Những người lính trên xe tăng 390 và 843 là lực lượng giải phóng&nbsp;có mặt sớm nhất&nbsp;ở Dinh Độc Lập ngày 30/4/1975.&nbsp;</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin: 10px auto; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; max-width: 100%; width: 500px;">
                                    <tbody style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <img alt="dau-an-dinh-doc-lap-qua-cac-bien-co-lich-su-9" class="lazyLoading" data-natural-width="500" data-pwidth="500" data-was-processed="true"
                                                    data-width="500" src="https://i-vnexpress.vnecdn.net/2016/05/03/dinh-10-7840-1462255664.jpg"
                                                    style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; border: 0px; font-size: 0px; line-height: 0; max-width: 100%;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision;">
                                            <td style="margin: 0px; padding: 0px; box-sizing: border-box; text-rendering: geometricPrecision; line-height: 0;">
                                                <p class="Image" style="margin: 0px; padding: 10px; box-sizing: border-box; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; line-height: normal; background: rgb(245, 245, 245);">
                                                    Dinh Độc Lập ngày nay.&nbsp;</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br /> Nguồn:
                                <a href="http://vnexpress.net/tin-tuc/thoi-su/dinh-doc-lap-va-nhung-bien-co-lich-su-o-sai-gon-3396416-p2.html">http://vnexpress.net/tin-tuc/thoi-su/dinh-doc-lap-va-nhung-bien-co-lich-su-o-sai-gon-3396416-p2.html</a>
                            </article>
                            <br />

                        </div>
                        <div class="ct_social">
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox2 addthis_default_style ">
                                <a class="addthis_button_preferred_1"></a>
                                <a class="addthis_button_preferred_2"></a>
                                <a class="addthis_button_preferred_3"></a>
                                <a class="addthis_button_preferred_4"></a>
                                <a class="addthis_button_compact"></a>
                                <a class="addthis_counter addthis_bubble_style"></a>
                                <a class="addthis_button_google_plusone"></a>
                            </div>
                            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f0e5d3d799c74c3"></script>
                            <!-- AddThis Button END -->
                            <div class="clearfix"></div>
                        </div>
                        <!--end ct_social-->
                        <div class="clearfix"></div>
                    </div>
                    <!--end article-->
                    <div class="orther_content">
                        <h1>
                            <a>Bài viết khác</a>
                        </h1>
                        <div class="clearfix"></div>
                        <ul class="list_orther">

                            <li>
                                <a title="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - Báo tienphong.vn"
                                    href="Chuyen-Dinh-doc-lap-Ky-I-Bang-khuang-kien-truc-su.html">Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - Báo tienphong.vn</a>
                            </li>

                            <li>
                                <a title="Cận cảnh siêu cổ thụ “bạch tuộc khổng lồ” giữa Sài Gòn; Báo điện tử baomoi.com" href="Can-canh-sieu-co-thu-bach-tuoc-khong-lo-giua-Sai-Gon.html">Cận cảnh siêu cổ thụ “bạch tuộc khổng lồ” giữa Sài Gòn; Báo điện tử baomoi.com</a>
                            </li>

                            <li>
                                <a title="Di tích quốc gia đặc biệt Dinh Độc lập Báo thegioidisan.vn" href="Di-tich-quoc-gia-dac-biet-Dinh-doc-lap-Bao-thegioidi.html">Di tích quốc gia đặc biệt Dinh Độc lập Báo thegioidisan.vn</a>
                            </li>

                            <li>
                                <a title="Những trải nghiệm khó quên tại Dinh Độc Lập - Báo điện tử vnmedia.vn" href="Nhung-trai-nghiem-kho-quen-tai-Dinh-doc-lap.html">Những trải nghiệm khó quên tại Dinh Độc Lập - Báo điện tử vnmedia.vn</a>
                            </li>

                            <li>
                                <a title="Café không gian xanh giữa lòng thành phố - Báo Thanhnien online" href="Cafe-khong-gian-xanh-giua-long-thanh-pho-Bao-Thanh.html">Café không gian xanh giữa lòng thành phố - Báo Thanhnien online</a>
                            </li>

                            <li>
                                <a title="Đám cưới đẹp rực rỡ ở Dinh Độc Lập - Báo điện tử ngoisao.net" href="dam-cuoi-dep-ruc-ro-o-Dinh-doc-lap-Bao-dien-tu-ngoisao.html">Đám cưới đẹp rực rỡ ở Dinh Độc Lập - Báo điện tử ngoisao.net</a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--end orther_content-->
                </div>
                <!--end tab_content1-->

                <!-- InstanceEndEditable -->
                <div class="clearfix"></div>
            </div>
            <!--END content-->
        </div>
    </div>
    <!--end main_content-->



    </div>


    <!--Footer-->
    <<div id="ctl00_pFooterSub">

        <div id="footer_sub">

            <div class="container_12">
                <div class="grid_12 f_navfooter_sub">

                    <ul class="navfooter">

                        <li>
                            <a class="" href="../trang-chu.html">
                                Trang chủ</a>
                        </li>

                        <li>
                            <a class="" href="../gioi-thieu.html">
                                Giới thiệu</a>
                        </li>
                        <li>
                            <a class="" href="../trung-bay.html">
                                Trưng bày</a>
                        </li>
                        <li>
                            <a class="" href="../tham-quan.html">
                                Tham quan</a>
                        </li>
                        <li>
                            <a class="" href="../giao-duc.html">
                                Giáo dục</a>
                        </li>
                        <li>
                            <a class="" href="../hinh-anh-tu-lieu.html">
                                Hình ảnh - Tư liệu</a>
                        </li>
                        <li>
                            <a class="" href="../tin-tuc-su-kien.html">
                                Tin tức - Sự kiện</a>
                        </li>
                        <li>
                            <a class="" href="../an-pham.html">
                                Sản phẩm</a>
                        </li>
                        <li>
                            <a class="" href="../ve-chung-toi.html">
                                Về chúng tôi</a>
                        </li>
                        <li>
                            <a class="f_nav_act" href="../suu-tam.html">
                                Sưu tầm</a>
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
                        <!-- Histats.com  START  (standard)
                        <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
                        <a href="http://www.histats.com" target="_blank" title="web stats">
                            <script type="text/javascript">
                                try {
                                    Histats.start(1, 2387506, 4, 226, 112, 50, "00011111");
                                    Histats.track_hits();
                                } catch (err) { };
                            </script>
                        </a>
                        <noscript>
                            <a href="http://www.histats.com" target="_blank">
                                <img src="http://sstatic1.histats.com/0.gif?2387506&101" alt="web stats" border="0">
                            </a>
                        </noscript>
                        Histats.com  END  -->
                    </div>

                    <div class="clearfix"></div>
                    <div class="dn_license" style="position:relative;width:250px;padding-top:10px;">
                        <span style="position:absolute;left:-9px;bottom:13px;">
                            <a target="_blank" rel="dofollow" href="https://www.facebook.com/bd.tren/" title="thiết kế website, thiet ke website,hosting">Thiết kế bởi Nhóm 12_SE109.I21</a>
                            <!--     <img style="position:absolute;right:0px;bottom:9px;" src="/App_Themes/DinhDocLap/img/matbao.png" alt="" width="80" height="25" />-->
                    </div>
                </div>

            </div>


        </div>


</body>

</html>