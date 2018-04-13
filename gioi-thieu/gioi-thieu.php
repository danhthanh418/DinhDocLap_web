<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giới thiệu - Dinh độc lập
    </title>

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
                            <a href="../index.php">
                                Trang chủ</a>
                        </li>

                        <li class="nav-act">
                            <a href="../gioi-thieu.php">
                                Giới thiệu</a>
                        </li>

                        <li class="">
                            <a href="#home">
                                Trưng bày</a>

                            <div class="sub-menu2">

                                <div class="nav_col">
                                    <div class="n_img" style="background: url(../assets/img/getattachment/Khanh-tiet.jpg) no-repeat center center; width: 195px; height: 85px;">
                                        <a href="../trung-bay/co-dinh.php" class="icon_hover"></a>
                                    </div>
                                    <div class="nav_caption">
                                        <a href="../trung-bay/co-dinh.php">Cố định</a>
                                    </div>
                                </div>

                                <div class="nav_col">
                                    <div class="n_img" style="background: url(../assets/img/getattachment/mang-3.jpg) no-repeat center center; width: 195px; height: 85px;">
                                        <a href="../trung-bay/chuyen-de.php" class="icon_hover"></a>
                                    </div>
                                    <div class="nav_caption">
                                        <a href="../trung-bay/chuyen-de.php">Chuyên đề</a>
                                    </div>
                                </div>

                                <div class="nav_col">
                                    <div class="n_img" style="background: url(../assets/img/getattachment/nav2.jpg) no-repeat center center; width: 195px; height: 85px;">
                                        <a href="../trung-bay/bo-sung.php" class="icon_hover"></a>
                                    </div>
                                    <div class="nav_caption">
                                        <a href="../trung-bay/bo-sung.php">Bổ sung</a>
                                    </div>
                                </div>

                            </div>

                        </li>


                        <li class="">
                            <a href="#home">
                                Tham quan</a>

                            <ul class="sub-menu">

                                <li>
                                    <a href="../tham-quan/duong-di-den-di-tich.php">
                                        Đường đi đến di tích</a>
                                </li>

                                <li>
                                    <a href="../tham-quan/gia-ve.php">
                                        Giờ mở cửa, giá vé tham quan</a>
                                </li>

                                <li>
                                    <a href="../tham-quan/noi-quy-tham-quan.php">
                                        Nội quy tham quan</a>
                                </li>

                                <li>
                                    <a href="../tham-quan/thong-bao.php">
                                        Thông báo</a>
                                </li>

                            </ul>

                        </li>

                        <li class="">
                            <a href="#home">
                                Hình ảnh - Tư liệu</a>

                            <ul class="sub-menu">

                                <li>
                                    <a href="../hinh-anh-tu-lieu/hinh-anh.php">
                                        Hình ảnh</a>
                                </li>

                                <li>
                                    <a href="../hinh-anh-tu-lieu/tu-lieu.php">
                                        Tư liệu </a>
                                </li>

                            </ul>

                        </li>

                        <li class="">
                            <a href="../tin-tuc-su-kien.php">
                                Tin tức - Sự kiện</a>
                        </li>

                        <li class="">
                            <a href="../san-pham.php">
                                Sản phẩm</a>

                        </li>
                        <li class=""><a href="../suu-tam.php">
                                    Về chúng tôi</a>
                            <ul class="sub-menu">
                                <li><a href="../suu-tam/so-do-to-chuc/so-do-to-chuc.php">
                                                Sơ đồ tổ chức</a></li>
                                <li><a href="../ve-chung-toi/cac-hoat-dong.php">
                                                Các hoạt động</a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="../suu-tam.php">
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
                <a href="../gioi-thieu/gioi-thieu.html" class="CMSBreadCrumbsLink">Giới thiệu</a>
                <img src="../assets/img/icon/bulllet1.jpg" />
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
                <div id="tab_content1">
                    <div class="article">
                        <h1>
                            <a>Giới thiệu</a>
                        </h1>
                        <time class="ct_time">Cập nhật : 10-06-2013 - 09:10</time>
                        <div class="clearfix"></div>
                        <div>
                            &nbsp; &nbsp; &nbsp; Dinh &#272;&#7897;c L&#7853;p &#273;&#432;&#7907;c c&#244;ng nh&#7853;n l&#224; Di t&#237;ch l&#7883;ch
                            s&#7917; v&#259;n h&#243;a qu&#7889;c gia b&#7857;ng Quy&#7871;t &#273;&#7883;nh s&#7889; 77A/VHQ&#272;
                            ng&#224;y 25/6/1976 c&#7911;a B&#7897; tr&#432;&#7903;ng B&#7897; V&#259;n h&#243;a.&nbsp;
                            <br
                            /> &nbsp; &nbsp; &nbsp; Ng&#224;y 12 th&#225;ng 8 n&#259;m 2009, Th&#7911; t&#432;&#7899;ng Ch&#237;nh
                            ph&#7911; n&#432;&#7899;c C&#7897;ng h&#242;a X&#227; h&#7897;i Ch&#7911; ngh&#297;a Vi&#7879;t
                            Nam &#273;&#227; k&#253; Quy&#7871;t &#273;&#7883;nh s&#7889; 1272/Q&#272;-TTg x&#7871;p h&#7841;ng
                            Di t&#237;ch l&#7883;ch s&#7917; Dinh &#272;&#7897;c L&#7853;p l&#224; m&#7897;t trong 10 di
                            t&#237;ch qu&#7889;c gia &#273;&#7863;c bi&#7879;t &#273;&#7847;u ti&#234;n c&#7911;a c&#7843;
                            n&#432;&#7899;c.
                            <br /> &nbsp; &nbsp; &nbsp; C&#417; quan qu&#7843;n l&#253; Di t&#237;ch l&#7883;ch s&#7917; Dinh &#272;&#7897;c
                            l&#7853;p l&#224; H&#7897;i tr&#432;&#7901;ng Th&#7889;ng Nh&#7845;t. C&#259;n c&#7913; Quy&#7871;t
                            &#273;&#7883;nh s&#7889; 709/Q&#272;-VPCP ng&#224;y 14 th&#225;ng 6 n&#259;m 2013 c&#7911;a B&#7897;
                            tr&#432;&#7903;ng, Ch&#7911; nhi&#7879;m V&#259;n ph&#242;ng Ch&#237;nh ph&#7911; ch&#7913;c
                            n&#259;ng, nhi&#7879;m v&#7909;, quy&#7873;n h&#7841;n v&#224; c&#417; c&#7845;u t&#7893; ch&#7913;c
                            c&#7911;a H&#7897;i tr&#432;&#7901;ng Th&#7889;ng Nh&#7845;t, H&#7897;i tr&#432;&#7901;ng Th&#7889;ng
                            Nh&#7845;t l&#224; &#273;&#417;n v&#7883; s&#7921; nghi&#7879;p c&#243; thu thu&#7897;c V&#259;n
                            ph&#242;ng Ch&#237;nh ph&#7911; c&#243; ch&#7913;c n&#259;ng qu&#7843;n l&#253;, b&#7843;o t&#7891;n,
                            t&#244;n t&#7841;o Di t&#237;ch l&#7883;ch s&#7917; Dinh &#272;&#7897;c L&#7853;p; ph&#7909;c
                            v&#7909; &#273;&#7841;i bi&#7875;u, kh&#225;ch tham d&#7921; c&#225;c cu&#7897;c h&#7885;p, h&#7897;i
                            ngh&#7883; c&#7911;a Ch&#237;nh ph&#7911;, Th&#7911; t&#432;&#7899;ng Ch&#237;nh ph&#7911; v&#224;
                            V&#259;n ph&#242;ng Ch&#237;nh ph&#7911;; c&#225;c h&#7897;i ngh&#7883; v&#224; ho&#7841;t &#273;&#7897;ng
                            kh&#225;c c&#7911;a &#272;&#7843;ng, Nh&#224; n&#432;&#7899;c, Qu&#7889;c h&#7897;i khi c&#243;
                            y&#234;u c&#7847;u; &#273;&#432;&#7907;c t&#7853;n d&#7909;ng c&#417; s&#7903; v&#7853;t ch&#7845;t,
                            lao &#273;&#7897;ng &#273;&#7875; kinh doanh d&#7883;ch v&#7909; theo qui &#273;&#7883;nh c&#7911;a
                            ph&#225;p lu&#7853;t.&nbsp;
                            <br /> &nbsp; &nbsp; &nbsp; H&#7897;i tr&#432;&#7901;ng Th&#7889;ng Nh&#7845;t hi&#7879;n c&#243; c&#225;c
                            ph&#242;ng ch&#7913;c n&#259;ng sau:
                            <br /> -&nbsp;&nbsp;&nbsp;&nbsp; Ph&#242;ng Nghi&#7879;p v&#7909; Thuy&#7871;t minh
                            <br /> -&nbsp;&nbsp;&nbsp;&nbsp; Ph&#242;ng K&#7871; ho&#7841;ch T&#224;i v&#7909;
                            <br /> -&nbsp;&nbsp;&nbsp;&nbsp; Ph&#242;ng B&#7843;o v&#7879;
                            <br /> -&nbsp;&nbsp;&nbsp;&nbsp; Ph&#242;ng H&#224;nh ch&#237;nh T&#7893; ch&#7913;c
                            <br /> -&nbsp;&nbsp;&nbsp;&nbsp; Ph&#242;ng Qu&#7843;n tr&#7883;
                            <br /> -&nbsp;&nbsp;&nbsp;&nbsp; Nh&#224; kh&#225;ch 108 Nguy&#7877;n Du
                            <br /> -&nbsp;&nbsp;&nbsp;&nbsp; Nh&#224; kh&#225;ch Tao &#272;&#224;n
                            <br /> -&nbsp;&nbsp;&nbsp;&nbsp; Nh&#224; kh&#225;ch 17 Th&#249;y V&#226;n, th&#224;nh ph&#7889; V&#361;ng
                            T&#224;u, t&#7881;nh B&#224; R&#7883;a &ndash; V&#361;ng T&#224;u&nbsp;
                            <br /> &nbsp; &nbsp; &nbsp; Trong nhi&#7873;u n&#259;m qua, t&#7853;p th&#7875; c&#225;n b&#7897;,
                            nh&#226;n vi&#234;n H&#7897;i tr&#432;&#7901;ng Th&#7889;ng Nh&#7845;t lu&#244;n &#273;o&#224;n
                            k&#7871;t nh&#7845;t tr&#237; cao, ph&#225;t huy cao &#253; th&#7913;c tr&#225;ch nhi&#7879;m
                            &#273;&#7889;i v&#7899;i c&#244;ng vi&#7879;c, ch&#7911; &#273;&#7897;ng, s&#225;ng t&#7841;o
                            ho&#224;n th&#224;nh t&#7889;t c&#244;ng t&#225;c qu&#7843;n l&#253;, b&#7843;o t&#7891;n v&#224;
                            ph&#225;t huy gi&#225; tr&#7883; Di t&#237;ch l&#7883;ch s&#7917; Dinh &#272;&#7897;c L&#7853;p
                            v&#224; ho&#224;n th&#224;nh xu&#7845;t s&#7855;c c&#225;c nhi&#7879;m v&#7909; do l&#227;nh
                            &#273;&#7841;o V&#259;n ph&#242;ng Ch&#237;nh ph&#7911; giao. N&#259;m 2010, H&#7897;i tr&#432;&#7901;ng
                            Th&#7889;ng Nh&#7845;t &#273;&#227; vinh d&#7921; nh&#7853;n C&#7901; thi &#273;ua c&#7911;a
                            Ch&#237;nh ph&#7911; v&#224; &#273;&#432;&#7907;c Ch&#7911; t&#7883;ch n&#432;&#7899;c C&#7897;ng
                            h&#242;a X&#227; h&#7897;i Ch&#7911; ngh&#297;a Vi&#7879;t Nam t&#7863;ng th&#432;&#7903;ng Hu&#226;n
                            ch&#432;&#417;ng Lao &#273;&#7897;ng h&#7841;ng I.
                            <div style="position: absolute; top: -3333px"> Tag t&#7915; kh&#243;a:
                                
                            </div>
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
                                <a title="Lịch sử về Dinh Độc lập" href="../gioi-thieu/lich-su-ve-Dinh-doc-lap.html">Lịch sử về Dinh Độc lập</a>
                            </li>

                            <li>
                                <a title="Đổi mới lộ trình tham quan" href="../gioi-thieu/doi-moi-lo-trinh-tham-quan.html">Đổi mới lộ trình tham quan</a>
                            </li>

                            <li>
                                <a title="Kiến trúc của Dinh" href="../gioi-thieu/kien-truc.html">Kiến trúc của Dinh</a>
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
                            <a class="f_nav_act" href="../gioi-thieu.html">
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
                            <!--     <img style="position:absolute;right:0px;bottom:9px;" src="/App_Themes/DinhDocLap/img/matbao.png" alt="" width="80" height="25" />-->
                    </div>
                </div>

            </div>


        </div>


</body>

</html>