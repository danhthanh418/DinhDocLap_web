<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Những trải nghiệm khó quên tại Dinh Độc Lập - Dinh độc lập</title>

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
                <span class="CMSBreadCrumbsCurrentItem">Những trải nghiệm kh&#243; qu&#234;n tại Dinh Độc Lập - B&#225;o điện tử vnmedia.vn</span>
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
                            <a>Những trải nghiệm khó quên tại Dinh Độc Lập - Báo điện tử vnmedia.vn</a>
                        </h1>
                        <time class="ct_time">Cập nhật : 27-09-2017 - 04:06</time>
                        <div class="clearfix"></div>
                        <div>
                            <div class="content-detail" style="margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; vertical-align: middle; color: rgb(51, 51, 51); font-family: Arial, Roboto, sans-serif; font-size: 15px;">
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px; text-align: justify;">
                                    <strong> Qua hệ thống các pano, bảng chỉ dẫn, bảng tên phòng theo tiêu chuẩn quốc tế thay thế
                                        cho hình thức tham quan chờ tổ chức thành đoàn. Nếu có dịp đến Thành phố Hồ Chí Minh,
                                        có một nơi bạn không nên bỏ qua chính là ghé thăm Dinh Độc Lập, một công trình kiến
                                        trúc độc đáo và cũng là nơi lưu giữ những giá trị lịch sử đặc biệt quan trọng trong
                                        lịch sử phát triển của Việt Nam.</strong>
                                </p>

                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px; text-align: justify;">
                                    Dinh Độc Lập được công nhận là di tích lịch sử văn hóa quốc gia bằng Quyết định số 77A/VHQĐ ngày 25/6/1976 của Bộ trưởng
                                    Bộ Văn hóa. Ngày 12/8/2009, Thủ tướng Chính phủ nước Cộng hòa Xã hội Chủ nghĩa Việt Nam
                                    đã ký Quyết định số 1272/QĐ-TTg xếp hạng di tích lịch sử Dinh Độc Lập là một trong 10
                                    di tích quốc gia đặc biệt đầu tiên của cả nước. Cơ quan quản lý di tích lịch sử Dinh
                                    Độc lập là Hội trường Thống Nhất.</p>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px; text-align: justify;">
                                    Dinh Ðộc Lập là một công trình kiến trúc độc đáo của Kiến trúc sư Ngô Viết Thụ. Dinh được khởi công xây dựng ngày 01/7/1962
                                    và khánh thành vào ngày 31/10/1966. Khi thiết kế Dinh Ðộc Lập, Kiến trúc sư Ngô Viết
                                    Thụ muốn tìm một ý nghĩa văn hóa cho công trình, nên mọi sự xếp đặt từ bên trong nội
                                    thất cho đến tiền diện bên ngoài, tất cả đều tượng trưng cho triết lý cổ truyền, nghi
                                    lễ Phương đông và cá tính của dân tộc. Kiến trúc sư Ngô Viết Thụ đã kết hợp hài hoà giữa
                                    nghệ thuật kiến trúc hiện đại với kiến trúc truyền thống Phương Ðông.</p>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px; text-align: justify;">
                                    Toàn thể bình diện của Dinh làm thành hình chữ CÁT ( 吉&nbsp;) có nghĩa là tốt lành, may mắn; Tâm của Dinh là vị trí phòng
                                    Trình quốc thư; Lầu thượng là Tứ phương vô sự lầu hình chữ KHẨU ( 口&nbsp;) để đề cao
                                    giáo dục và tự do ngôn luận. Hình chữ KHẨU ( 口&nbsp;) có cột cờ chính giữa sổ dọc tạo
                                    thành hình chữ TRUNG ( 中&nbsp;) như nhắc nhở muốn có dân chủ thì phải trung kiên. Nét
                                    gạch ngang được tạo bởi mái hiên lầu tứ phương, bao lơn danh dự và mái hiên lối vào tiền
                                    sảnh tạo thành hình chữ TAM ( 三&nbsp;), theo quan niệm dân chủ hữu tam viết nhân, viết
                                    minh, viết võ, ý mong muốn một đất nước hưng thịnh thì phải có những con người hội đủ
                                    3 yếu tố Nhân, Minh, Võ. Ba nét gạch ngang này được nối liền nét sổ dọc tạo thành hình
                                    chữ VƯƠNG ( 王&nbsp;), trên có kỳ đài làm thành nét chấm tạo thành hình chữ CHỦ ( 主&nbsp;)
                                    tượng trưng cho chủ quyền đất nước. Mặt trước của dinh thự, toàn bộ bao lơn lầu 2 và
                                    lầu 3 kết hợp với mái hiên lối vào chính cùng 2 cột bọc gỗ phía dưới mái hiên tạo thành
                                    hình chữ HƯNG ( 興&nbsp;) ý cầu chúc cho nước nhà được hưng thịnh mãi.</p>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px; text-align: justify;">
                                    Đến với di tích Dinh Độc Lập, du khách sẽ được tự do trải nghiệm và tìm hiểu thông qua hệ thống các pano, bảng chỉ dẫn, bảng
                                    tên phòng theo tiêu chuẩn quốc tế thay thế cho hình thức tham quan chờ tổ chức thành
                                    đoàn. Nếu có nhu cầu cần thuyết minh viên, du khách sẽ được phục vụ ngay theo đoàn với
                                    mức phí qui định. Đoàn cần đáp ứng được số lượng khách tối đa 25 người lớn/đoàn hoặc
                                    50 trẻ em/đoàn (học sinh từ cấp II trở xuống). Sau chương trình tham quan, du khách sẽ
                                    xem bộ phim tư liệu &ldquo;Dinh Độc Lập - chứng nhân lịch sử&rdquo; tại phòng chiếu phim
                                    máy lạnh trong thời gian khoảng 25 phút.</p>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px; text-align: justify;">
                                    Bạn sẽ có những trải nghiệm thực sự khác lạ khi đến đây.</p>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px; text-align: justify;">
                                    Mời bạn đọc chiêm ngưỡng một số hình ảnh do&nbsp;
                                    <em style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        <strong style="margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; vertical-align: middle;">VnMedia</strong>
                                    </em>&nbsp;ghi lại tại đây:</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1758831_8.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="500">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1759147_4.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 500px; height: 281px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="500">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1759148_3.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 500px; height: 809px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1758833_7.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="ư" src="http://vnmedia.vn/dataimages/201608/original/images1758835_6.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td class="image_desc" style="margin: 0px; padding: 8px 0px 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(0, 0, 255);">Phòng Khánh tiết nằm ở tầng 1. Kể cả du khách đi thăm quan tự do hay đi theo
                                                    đoàn có hướng dẫn viên thì đều bắt đầu thăm quan và đọc giới thiệu về
                                                    Dinh Độc Lập từ phòng này.</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="500">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1759149_5.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 500px; height: 281px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1758843_1.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="500">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="Mô tả về kiến trúc của Dinh Độc Lập được đặt ở tầng 2." src="http://vnmedia.vn/dataimages/201608/original/images1759151_6.jpg"
                                                    style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 500px; height: 281px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td class="image_desc" style="margin: 0px; padding: 8px 0px 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(0, 0, 255);">Mô tả về kiến trúc của Dinh Độc Lập được đặt ở tầng 2.</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="500">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="Một điểm tham quan thú vị khác nữa phải kể đến ở đây là khu ở của Tổng thống." src="http://vnmedia.vn/dataimages/201608/original/images1759152_8.jpg"
                                                    style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 500px; height: 888px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td class="image_desc" style="margin: 0px; padding: 8px 0px 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(0, 0, 255);">Một điểm tham quan thú vị khác nữa phải kể đến ở đây là khu ở của gia đình
                                                    Tổng thống. Người có thời gian sống lâu nhất là Tổng thống dưới chế độ
                                                    cũ Nguyễn Văn Thiệu (từ tháng 10/1967 đến 21/4/1975)</span>
                                                <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(51, 51, 51); font-family: arial; font-size: 14px; line-height: 18px;">.&nbsp;</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="500">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1759153_7.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 500px; height: 281px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="500">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1759154_9.JPG" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 500px; height: 281px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1758842_2.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="500">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="Khu hầm trong Dinh Độc Lập là nơi thu hút rất đông du khách đến thăm quan." src="http://vnmedia.vn/dataimages/201608/original/images1759150_2.jpg"
                                                    style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 500px; height: 888px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td class="image_desc" style="margin: 0px; padding: 8px 0px 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(0, 0, 255);">Khu hầm trong Dinh Độc Lập là nơi thu hút rất đông du khách đến thăm quan.</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1758939_1.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1758836_5.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1758938_1.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="" src="http://vnmedia.vn/dataimages/201608/original/images1758839_4.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    &nbsp;</p>
                                <table align="center" class="image center" style="margin: 0px auto 10px; padding: 0px; border-width: initial; border-style: none; border-color: initial; background: none 0px 0px repeat scroll rgb(233, 233, 233); font-weight: inherit; outline: 0px; vertical-align: middle; border-collapse: collapse; font-style: italic; color: rgb(0, 68, 136); width: auto;"
                                    width="550">
                                    <tbody style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px;">
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td style="margin: 0px; padding: 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <img alt="Hiện trên nóc của Dinh Độc Lập vẫn để trưng bày một chiếc máy bay trực thăng. Hầu như ai đến đây cũng chụp lại bức ảnh này."
                                                    src="http://vnmedia.vn/dataimages/201608/original/images1758840_3.jpg" style="margin: 0px auto; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; max-width: 100%; display: table; width: 550px; height: 309px;"
                                                />
                                            </td>
                                        </tr>
                                        <tr style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle;">
                                            <td class="image_desc" style="margin: 0px; padding: 8px 0px 5px; border-width: initial; border-style: none; border-color: initial; border-collapse: collapse; text-align: center;">
                                                <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(0, 0, 255);">Hiện trên nóc của Dinh Độc Lập vẫn để trưng bày một chiếc máy bay trực thăng.
                                                    Hầu như ai đến đây cũng chụp lại bức ảnh này.</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px !important; margin-left: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; font-size: 14px; line-height: 18px;">
                                    <strong style="margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; vertical-align: middle;">
                                        <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(0, 0, 255);">
                                            <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; text-align: justify;">Di tích Lịch sử Dinh Độc Lập mở cửa bán vé phục vụ du khách tham quan hàng ngày
                                                (kể cả thứ bảy, chủ nhật và Lễ, Tết)</span>
                                        </span>
                                    </strong>
                                </p>
                                <div style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; text-align: justify;">
                                    <strong style="margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; vertical-align: middle;">
                                        <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(0, 0, 255);">- Sáng từ 7h30&rsquo; đến 11h00&rsquo;
                                            <br style="margin: 0px; padding: 0px; border: none;" /> - Chiều từ 13h00&rsquo; đến 16h00&rsquo;</span>
                                    </strong>
                                </div>
                                <div style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; text-align: justify;">
                                    &nbsp;</div>
                                <div style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; text-align: justify;">
                                    <strong style="margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; vertical-align: middle;">
                                        <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(0, 0, 255);">Vé vào cửa:</span>
                                    </strong>
                                </div>
                                <div style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; text-align: justify;">
                                    <br style="margin: 0px; padding: 0px; border: none;" />
                                    <strong style="margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; vertical-align: middle;">
                                        <span style="margin: 0px; padding: 0px; border: 0px; background: transparent; font-weight: inherit; outline: 0px; vertical-align: middle; color: rgb(0, 0, 255);">* Đối với khách lẻ:
                                            <br style="margin: 0px; padding: 0px; border: none;" /> + Người lớn: 30.000đ/người/lần
                                            <br style="margin: 0px; padding: 0px; border: none;" /> + Sinh viên: 15.000đ/người/lần
                                            <br style="margin: 0px; padding: 0px; border: none;" /> + Học sinh (từ 6 tuổi đến 17 tuổi): 5.000đ/người/lần
                                            <br style="margin: 0px; padding: 0px; border: none;" /> &nbsp;
                                            <br style="margin: 0px; padding: 0px; border: none;" /> * Đối với khách đoàn từ 20 người trở lên:
                                            <br style="margin: 0px; padding: 0px; border: none;" /> + Người lớn: 20.000đ/người/lần
                                            <br style="margin: 0px; padding: 0px; border: none;" /> + Sinh viên: 10.000đ/người/lần
                                            <br style="margin: 0px; padding: 0px; border: none;" /> + Học sinh (từ 6 tuổi đến 17 tuổi): 3.000đ/người/lần</span>
                                    </strong>
                                </div>
                            </div>
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
                                <a title="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - Báo tienphong.vn" href="Chuyen-Dinh-doc-lap-Ky-I-Bang-khuang-kien-truc-su.html">Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - Báo tienphong.vn</a>
                            </li>

                            <li>
                                <a title="Dấu ấn Dinh Độc Lập qua các biến cố lịch sử - Báo vnexpress.net" href="Dau-an-Dinh-doc-lap-qua-cac-bien-co-lich-su-Bao-vne.html">Dấu ấn Dinh Độc Lập qua các biến cố lịch sử - Báo vnexpress.net</a>
                            </li>

                            <li>
                                <a title="Cận cảnh siêu cổ thụ “bạch tuộc khổng lồ” giữa Sài Gòn; Báo điện tử baomoi.com" href="Can-canh-sieu-co-thu-bach-tuoc-khong-lo-giua-Sai-Gon.html">Cận cảnh siêu cổ thụ “bạch tuộc khổng lồ” giữa Sài Gòn; Báo điện tử baomoi.com</a>
                            </li>

                            <li>
                                <a title="Di tích quốc gia đặc biệt Dinh Độc lập Báo thegioidisan.vn" href="Di-tich-quoc-gia-dac-biet-Dinh-doc-lap-Bao-thegioidi.html">Di tích quốc gia đặc biệt Dinh Độc lập Báo thegioidisan.vn</a>
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