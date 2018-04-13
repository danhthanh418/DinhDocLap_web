<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Café không gian xanh giữa lòng thành phố - Dinh độc lập</title>

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
                <span class="CMSBreadCrumbsCurrentItem">Caf&#233; kh&#244;ng gian xanh giữa l&#242;ng th&#224;nh phố - B&#225;o Thanhnien online</span>
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
                            <a>Café không gian xanh giữa lòng thành phố - Báo Thanhnien online</a>
                        </h1>
                        <time class="ct_time">Cập nhật : 20-10-2015 - 09:42</time>
                        <div class="clearfix"></div>
                        <div>
                            <h2 style="font-size: 12px; margin: 0px 0px 15px; line-height: 18px; color: rgb(89, 89, 89); font-family: Arial;">
                                Tách biệt khỏi sự ồn ào và náo nhiệt của Sài Gòn, Nhà hàng café 30.4 nằm trong khuôn viên dinh Thống Nhất được xem là &ldquo;điểm
                                xanh&rdquo; thư giãn hiếm hoi giữa lòng thành phố.</h2>
                            <div style="margin: 0px 0px 15px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial; line-height: 16.8px;">
                                <table align="center" class="imagefull" style="padding: 0px; border-collapse: collapse; clear: both; width: 600px; height: auto;">
                                    <tbody>
                                        <tr>
                                            <td style="padding: 5px 0px;">
                                                <div style="margin: 0px 0px 15px; padding: 0px; text-align: center; color: rgb(89, 89, 89);">
                                                    <a class="slide-photo" href="http://static.thanhnien.com.vn/uploaded/hoangnam/2015_02_03/cf2_qmmz.jpg?width=500" rel="prettyPhoto[thethao]"
                                                        style="color: rgb(1, 125, 197); text-decoration: none; display: block; position: relative;"
                                                        title="  ">
                                                        <img alt="Café không gian xanh  giữa lòng thành phố - ảnh 1" src="http://static.thanhnien.com.vn/uploaded/hoangnam/2015_02_03/cf2_qmmz.jpg?width=500"
                                                            style="max-width: 100%; display: block; margin: 0px auto 5px; height: auto;"
                                                        />
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px;">
                                                <div style="margin: 0px 0px 15px; padding: 0px; text-align: center; color: rgb(89, 89, 89);">
                                                    <a class="slide-photo" href="http://static.thanhnien.com.vn/uploaded/hoangnam/2015_02_03/cf1_goco.jpg?width=500" rel="prettyPhoto[thethao]"
                                                        style="color: rgb(1, 125, 197); text-decoration: none; display: block; position: relative;"
                                                        title="  ">
                                                        <img alt="Café không gian xanh  giữa lòng thành phố - ảnh 2" src="http://static.thanhnien.com.vn/uploaded/hoangnam/2015_02_03/cf1_goco.jpg?width=500"
                                                            style="max-width: 100%; display: block; margin: 0px auto 5px; height: auto;"
                                                        />
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px;">
                                                <div style="margin: 0px 0px 15px; padding: 0px; text-align: center; color: rgb(89, 89, 89);">
                                                    <a class="slide-photo" href="http://static.thanhnien.com.vn/uploaded/hoangnam/2015_02_03/cf_rccx.jpg?width=500" rel="prettyPhoto[thethao]"
                                                        style="color: rgb(1, 125, 197); text-decoration: none; display: block; position: relative;"
                                                        title="  ">
                                                        <img alt="Café không gian xanh  giữa lòng thành phố - ảnh 3" src="http://static.thanhnien.com.vn/uploaded/hoangnam/2015_02_03/cf_rccx.jpg?width=500"
                                                            style="max-width: 100%; display: block; margin: 0px auto 5px; height: auto;"
                                                        />
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="margin: 0px 0px 15px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial; line-height: 16.8px;">
                                Dù sáng hay trưa, khi bước chân vào quán, khách sẽ được thả mình vào bức tranh phong cảnh tuyệt đẹp với gam màu xanh thiên
                                nhiên làm chủ đạo. Những bãi cỏ xanh ngút mắt, những hàng cây cao rợp bóng mát, tiếng chim
                                hót véo von hòa lẫn trong tiếng nước chảy róc rách khiến tinh thần bạn trở nên thư thái và
                                tĩnh tại. Và đâu đó bên tách cà phê nghi ngút khói, thời gian dường như chậm lại để bắt kịp
                                cái bao la ấy, mênh mông ấy.</div>
                            <div style="margin: 0px 0px 15px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial; line-height: 16.8px;">
                                Buổi tối, bức tranh đó lại được vẽ lên sắc màu lung linh và ấm áp của những dãy đèn trang trí. Cuộc hàn huyên giữa trăng
                                sao và gió mát khiến câu chuyện càng trở nên thi vị. Đây sẽ là thời gian lý tưởng để bạn
                                hẹn hò với người thân và bạn bè bên bữa tiệc tối ấm cúng hoặc tổ chức những bữa tiệc liên
                                hoan, sinh nhật, họp mặt hoành tráng... Đặc biệt, những bữa tiệc cưới lãng mạn, đầy thơ mộng
                                giữa không gian xanh mát sẽ là dấu ấn khó phai.</div>
                            <div style="margin: 0px 0px 15px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial; line-height: 16.8px;">
                                Thực đơn ở đây cũng khá phong phú và đa dạng. Từ món điểm tâm nhẹ, cơm trưa văn phòng đến những bữa tiệc tối thịnh soạn đều
                                được các đầu bếp chăm chút tỉ mỉ với sự đam mê và sáng tạo. Bạn khó có thể bỏ qua món tào
                                phớ mát lạnh vốn được xem là đặc sản của quán, hay món lẩu riêu cá chép ngào ngạt hương thơm
                                đánh thức vị giác. Đặc biệt, giá cả ở đây vô cùng hợp lý giúp bạn thưởng thức được nhiều
                                tuyệt tác ẩm thực đặc sắc.</div>
                            <div style="margin: 0px 0px 15px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial; line-height: 16.8px;">
                                Cũng phải thừa nhận rằng không đâu có một không gian cà phê xanh, rộng và nhiều tiện nghi đến vậy. Khách đến quán không phải
                                lo lắng việc để xe bởi ở đây có bãi giữ xe &ldquo;khủng&rdquo; với sức chứa lên đến hàng
                                trăm chiếc ô tô và xe máy. Sân vườn rộng rãi có cầu tuột, xích đu cho trẻ em chạy nhảy vui
                                đùa mà không phải lo con bị níu chân trong một không gian chật hẹp đầy khói thuốc. Nhà hàng
                                café 30.4 đang có chương trình khuyến mãi giảm 5% trên hóa đơn đặt tiệc. Quán mở cửa phục
                                vụ từ 6 giờ sáng vào tất cả các ngày trong tuần.</div>
                            <div style="margin: 0px 0px 15px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial; line-height: 16.8px;">
                                Nhà hàng café 30.4,số 1 Huyền Trân Công Chúa, Q.1, TP.HCM; ĐT: 08085413 - 08085315 - 0903300035 (A.Triều).
                                <br
                                />
                                <br /> Nguồn http://www.thanhnien.com.vn/kinh-te/cafe-khong-gian-xanh-giua-long-thanh-pho-531242.html</div>

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
                                <a title="Dấu ấn Dinh Độc Lập qua các biến cố lịch sử - Báo vnexpress.net" href="Dau-an-Dinh-doc-lap-qua-cac-bien-co-lich-su-Bao-vne.html">Dấu ấn Dinh Độc Lập qua các biến cố lịch sử - Báo vnexpress.net</a>
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