<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giới thiệu - Kiến trúc của Dinh độc lập</title>

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
                <a href="../gioi-thieu/gioi-thieu.html" class="CMSBreadCrumbsLink">Giới thiệu</a>
                <img src="../assets/img/icon/bulllet1.jpg" />
                <span class="CMSBreadCrumbsCurrentItem">Kiến trúc của Dinh</span>
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
                            <a>Kiến trúc của Dinh</a>
                        </h1>
                        <time class="ct_time">Cập nhật : 15-03-2013 - 12:00</time>
                        <div class="clearfix"></div>
                        <div>
                            <div style="text-align: justify;"> &nbsp; &nbsp; &nbsp;Dinh &#208;&#7897;c L&#7853;p l&#224; m&#7897;t c&#244;ng tr&#236;nh ki&#7871;n
                                tr&#250;c &#273;&#7897;c &#273;&#225;o c&#7911;a Ki&#7871;n tr&#250;c s&#432; Ng&#244; Vi&#7871;t
                                Th&#7909;. Dinh &#273;&#432;&#7907;c kh&#7903;i c&#244;ng x&#226;y d&#7921;ng ng&#224;y 01/7/1962
                                v&#224; kh&#225;nh th&#224;nh v&#224;o ng&#224;y 31/10/1966.
                                <br /> &nbsp;
                                <br /> &nbsp; &nbsp; &nbsp;Khi thi&#7871;t k&#7871; Dinh &#208;&#7897;c L&#7853;p, Ki&#7871;n tr&#250;c
                                s&#432; Ng&#244; Vi&#7871;t Th&#7909; mu&#7889;n t&#236;m m&#7897;t &#253; ngh&#297;a v&#259;n
                                h&#243;a cho c&#244;ng tr&#236;nh, n&#234;n m&#7885;i s&#7921; x&#7871;p &#273;&#7863;t t&#7915;
                                b&#234;n trong n&#7897;i th&#7845;t cho &#273;&#7871;n ti&#7873;n di&#7879;n b&#234;n ngo&#224;i,
                                t&#7845;t c&#7843; &#273;&#7873;u t&#432;&#7907;ng tr&#432;ng cho tri&#7871;t l&#253; c&#7893;
                                truy&#7873;n, nghi l&#7877; Ph&#432;&#417;ng &#273;&#244;ng v&#224; c&#225; t&#237;nh c&#7911;a
                                d&#226;n t&#7897;c. Ki&#7871;n tr&#250;c s&#432; Ng&#244; Vi&#7871;t Th&#7909; &#273;&#227;
                                k&#7871;t h&#7907;p h&#224;i ho&#224; gi&#7919;a ngh&#7879; thu&#7853;t ki&#7871;n tr&#250;c
                                hi&#7879;n &#273;&#7841;i v&#7899;i ki&#7871;n tr&#250;c truy&#7873;n th&#7889;ng Ph&#432;&#417;ng
                                &#208;&#244;ng. To&#224;n th&#7875; b&#236;nh di&#7879;n c&#7911;a Dinh l&#224;m th&#224;nh
                                h&#236;nh ch&#7919; C&#193;T ( &#21513;&nbsp;) c&#243; ngh&#297;a l&#224; t&#7889;t l&#224;nh,
                                may m&#7855;n; T&#226;m c&#7911;a Dinh l&#224; v&#7883; tr&#237; ph&#242;ng Tr&#236;nh qu&#7889;c
                                th&#432;; L&#7847;u th&#432;&#7907;ng l&#224; T&#7913; ph&#432;&#417;ng v&#244; s&#7921;
                                l&#7847;u h&#236;nh ch&#7919; KH&#7848;U ( &#21475;&nbsp;) &#273;&#7875; &#273;&#7873; cao
                                gi&#225;o d&#7909;c v&#224; t&#7921; do ng&#244;n lu&#7853;n. H&#236;nh ch&#7919; KH&#7848;U
                                ( &#21475;&nbsp;) c&#243; c&#7897;t c&#7901; ch&#237;nh gi&#7919;a s&#7893; d&#7885;c t&#7841;o
                                th&#224;nh h&#236;nh ch&#7919; TRUNG ( &#20013;&nbsp;) nh&#432; nh&#7855;c nh&#7903; mu&#7889;n
                                c&#243; d&#226;n ch&#7911; th&#236; ph&#7843;i trung ki&#234;n. N&#233;t g&#7841;ch ngang
                                &#273;&#432;&#7907;c t&#7841;o b&#7903;i m&#225;i hi&#234;n l&#7847;u t&#7913; ph&#432;&#417;ng,
                                bao l&#417;n danh d&#7921; v&#224; m&#225;i hi&#234;n l&#7889;i v&#224;o ti&#7873;n s&#7843;nh
                                t&#7841;o th&#224;nh h&#236;nh ch&#7919; TAM ( &#19977;&nbsp;), theo quan ni&#7879;m d&#226;n
                                ch&#7911; h&#7919;u tam vi&#7871;t nh&#226;n, vi&#7871;t minh, vi&#7871;t v&#245;, &#253;
                                mong mu&#7889;n m&#7897;t &#273;&#7845;t n&#432;&#7899;c h&#432;ng th&#7883;nh th&#236; ph&#7843;i
                                c&#243; nh&#7919;ng con ng&#432;&#7901;i h&#7897;i &#273;&#7911; 3 y&#7871;u t&#7889; Nh&#226;n,
                                Minh, V&#245;. Ba n&#233;t g&#7841;ch ngang n&#224;y &#273;&#432;&#7907;c n&#7889;i li&#7873;n
                                n&#233;t s&#7893; d&#7885;c t&#7841;o th&#224;nh h&#236;nh ch&#7919; V&#431;&#416;NG ( &#29579;&nbsp;),
                                tr&#234;n c&#243; k&#7923; &#273;&#224;i l&#224;m th&#224;nh n&#233;t ch&#7845;m t&#7841;o
                                th&#224;nh h&#236;nh ch&#7919; CH&#7910; ( &#20027;&nbsp;) t&#432;&#7907;ng tr&#432;ng cho
                                ch&#7911; quy&#7873;n &#273;&#7845;t n&#432;&#7899;c. M&#7863;t tr&#432;&#7899;c c&#7911;a
                                dinh th&#7921;, to&#224;n b&#7897; bao l&#417;n l&#7847;u 2 v&#224; l&#7847;u 3 k&#7871;t
                                h&#7907;p v&#7899;i m&#225;i hi&#234;n l&#7889;i v&#224;o ch&#237;nh c&#249;ng 2 c&#7897;t
                                b&#7885;c g&#7895; ph&#237;a d&#432;&#7899;i m&#225;i hi&#234;n t&#7841;o th&#224;nh h&#236;nh
                                ch&#7919; H&#431;NG ( &#33288;&nbsp;) &#253; c&#7847;u ch&#250;c cho n&#432;&#7899;c nh&#224;
                                &#273;&#432;&#7907;c h&#432;ng th&#7883;nh m&#227;i.
                                <br /> &nbsp;
                                <br /> &nbsp; &nbsp;</div>
                            <div style="text-align: center;">
                                <img alt="cac-chu.jpg" src="../assets/img/getattachment/cac-chu.jpg" style="width: 598px; height: 480px;"
                                    title="cac-chu.jpg" />
                            </div>
                            <div style="text-align: justify;">
                                <br />
                                <br /> &nbsp; &nbsp; &nbsp;V&#7867; &#273;&#7865;p ki&#7871;n tr&#250;c c&#7911;a Dinh c&#242;n
                                &#273;&#432;&#7907;c th&#7875; hi&#7879;n b&#7903;i b&#7913;c r&#232;m hoa &#273;&#225; mang
                                h&#236;nh d&#225;ng nh&#7919;ng &#273;&#7889;t tr&#250;c thanh tao bao xung quanh l&#7847;u
                                2. R&#232;m hoa &#273;&#225; &#273;&#432;&#7907;c bi&#7871;n c&#225;ch t&#7915; b&#7913;c
                                c&#7917;a b&#224;n khoa c&#7911;a c&#225;c cung &#273;i&#7879;n C&#7889; &#273;&#244; Hu&#7871;,
                                kh&#244;ng ch&#7881; l&#224;m t&#259;ng v&#7867; &#273;&#7865;p c&#7911;a Dinh m&#224; c&#242;n
                                c&#243; t&#225;c d&#7909;ng l&#7845;y &#225;nh s&#225;ng m&#7863;t tr&#7901;i.
                                <br />
                                <br /> &nbsp; &nbsp; &nbsp;&#208;i v&#224;o b&#234;n trong Dinh, t&#7845;t c&#7843; c&#225;c &#273;u&#7901;ng
                                n&#233;t ki&#7871;n tr&#250;c &#273;&#7873;u d&#249;ng &#273;&#432;&#7901;ng ngay s&#7893;
                                th&#7859;ng, c&#225;c h&#224;nh lang, &#273;&#7841;i s&#7843;nh, c&#225;c ph&#242;ng &#273;&#7873;u
                                l&#7845;y c&#226;u ch&#237;nh &#273;&#7841;i quang minh l&#224;m g&#7889;c.
                                <br /> &nbsp;
                                <span style="text-align: justify;">&nbsp; &nbsp; &nbsp;</span>
                            </div>
                            <div style="text-align: justify;"> &nbsp;</div>
                            <div style="text-align: center;">
                                <img alt="Rem-hoa-da.jpg" src="../assets/img/getattachment/Rem-hoa-da.jpg"
                                    style="width: 640px; height: 427px;" title="Rem-hoa-da.jpg" />
                            </div>
                            <div style="text-align: justify;"> &nbsp;</div>
                            <div style="text-align: justify;"> &nbsp; &nbsp; &nbsp;S&#226;n tr&#432;&#7899;c c&#7911;a Dinh l&#224; m&#7897;t th&#7843;m c&#7887;
                                h&#236;nh oval c&#243; &#273;&#432;&#7901;ng k&#237;nh 102m. M&#224;u xanh c&#7911;a th&#7843;m
                                c&#7887; t&#7841;o ra m&#7897;t c&#7843;m gi&#225;c &#234;m d&#7883;u, s&#7843;ng kho&#225;i
                                cho kh&#225;ch ngay khi b&#432;&#7899;c qua c&#7893;ng.
                                <br />
                                <br /> &nbsp;</div>
                            <div style="text-align: center;">
                                <img alt="LM-93.jpg" src="../assets/img/getattachment/LM-93.jpg" style="text-align: center; font-size: 12px; width: 640px; height: 284px;"
                                    title="LM-93.jpg" />
                            </div>
                            <div style="text-align: justify;">
                                <br />
                                <span style="font-size: 12px;">&nbsp; &nbsp; &nbsp;Ch&#7841;y d&#224;i theo su&#7889;t chi&#7873;u ngang c&#7911;a &#273;&#7841;i
                                    s&#7843;nh l&#224; h&#7891; n&#432;&#7899;c h&#236;nh b&#225;n nguy&#7879;t. Trong h&#7891;
                                    th&#7843; hoa sen v&#224; hoa s&#250;ng g&#7907;i n&#234;n h&#236;nh &#7843;nh nh&#7919;ng
                                    h&#7891; n&#432;&#7899;c y&#234;n &#7843; &#7903; c&#225;c ng&#244;i &#273;&#236;nh,
                                    ng&#244;i ch&#249;a c&#7893; k&#237;nh c&#7911;a Vi&#7879;t Nam.</span>
                            </div>
                            <div style="text-align: justify;">
                                <br /> &nbsp;</div>
                            <div style="text-align: center;">
                                <img alt="LM-2.JPG" src="../assets/img/getattachment/LM-2.JPG" style="text-align: center; font-size: 12px; width: 640px; height: 427px;"
                                    title="LM-2.JPG" />
                            </div>
                            <div>
                                <br />
                                <span style="text-align: justify;">&nbsp; &nbsp;</span>
                                <div style="text-align: justify;"> &nbsp; &nbsp; &nbsp;Dinh c&#243; di&#7879;n t&#237;ch 120.000m&sup2; (300m x 400m), &#273;&#432;&#7907;c
                                    gi&#7899;i h&#7841;n b&#7903;i 4 tr&#7909;c &#273;&#432;&#7901;ng ch&#237;nh &#273;&#243;
                                    l&#224;:
                                    <br /> &nbsp; &nbsp; &nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#208;&#432;&#7901;ng Nam K&#7923;
                                    Kh&#7903;i Ngh&#297;a &#7903; ph&#237;a &#208;&#244;ng B&#7855;c (m&#7863;t ch&#237;nh
                                    c&#7911;a Dinh)
                                    <br /> &nbsp; &nbsp; &nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#208;&#432;&#7901;ng Huy&#7873;n
                                    Tr&#226;n C&#244;ng Ch&#250;a &#7903; ph&#237;a T&#226;y Nam (m&#7863;t sau c&#7911;a
                                    Dinh)
                                    <br /> &nbsp; &nbsp; &nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#208;&#432;&#7901;ng Nguy&#7877;n
                                    Th&#7883; Minh Khai &#7903; ph&#237;a T&#226;y B&#7855;c (ph&#237;a b&#234;n tr&#225;i
                                    Dinh)
                                    <br /> &nbsp; &nbsp; &nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#208;&#432;&#7901;ng Nguy&#7877;n
                                    Du &#7903; ph&#237;a &#208;&#244;ng Nam (ph&#237;a b&#234;n ph&#7843;i Dinh)</div>
                                <div
                                    style="text-align: center;">
                                    <img alt="ban-do-1.jpg" src="../assets/img/getattachment/ban-do-1.jpg" style="text-align: center; font-size: 12px; width: 603px; height: 480px;"
                                        title="ban-do-1.jpg" />
                            </div>
                        </div>
                        <div style="text-align: justify;">
                            <br />
                            <div> &nbsp; &nbsp; &nbsp;Khu nh&#224; ch&#237;nh h&#236;nh ch&#7919; T di&#7879;n t&#237;ch m&#7863;t
                                b&#7857;ng l&#224; 4.500m&sup2;, cao 26m, n&#7857;m &#7903; v&#7883; tr&#237; trung t&#226;m
                                c&#7911;a khu &#273;&#7845;t. &#208;&#226;y t&#7915;ng l&#224; n&#417;i &#7903; v&#224; l&#224;m
                                vi&#7879;c T&#7893;ng th&#7889;ng Vi&#7879;t Nam C&#7897;ng h&#242;a. Khu n&#224;y c&#243;
                                03 t&#7847;ng l&#7847;u, 02 g&#225;c l&#7917;ng, 01 s&#226;n th&#432;&#7907;ng, 01 t&#7847;ng
                                n&#7873;n v&#224; t&#7847;ng h&#7847;m. T&#7893;ng di&#7879;n t&#237;ch s&#7917; d&#7909;ng
                                l&#224; 20.000m&sup2; chia l&#224;m 95 ph&#242;ng. M&#7895;i ph&#242;ng c&#243; m&#7897;t
                                ch&#7913;c n&#259;ng ri&#234;ng, ki&#7871;n tr&#250;c v&#224; c&#225;ch trang tr&#237; ph&#249;
                                h&#7907;p v&#7899;i m&#7909;c &#273;&#237;ch s&#7917; d&#7909;ng c&#7911;a m&#7895;i ph&#242;ng.
                                Sau 1975, khu nh&#224; ch&#237;nh n&#224;y ti&#7871;p t&#7909;c &#273;&#432;&#7907;c s&#7917;
                                d&#7909;ng m&#7897;t s&#7889; ph&#242;ng, c&#242;n l&#7841;i &#273;&#7875; ph&#7909;c v&#7909;
                                du kh&#225;ch tham quan.
                                <br />
                                <div> &nbsp;</div>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img alt="binh-do-ddl-1-chu-Cac-Copy-2.jpg" src="../assets/img/getattachment/binh-do-ddl-1-chu-Cac-Copy-2.jpg"
                                style="width: 640px; height: 480px;" title="binh-do-ddl-1-chu-Cac-Copy-2.jpg" />
                        </div>
                        <div style="text-align: justify;"> &nbsp;
                            <br />
                            <span style="font-size: 12px;">&nbsp; &nbsp; &nbsp;Ngo&#224;i c&#225;c khu nh&#224; tr&#234;n, &#7903; g&#243;c tr&#225;i Dinh
                                ph&#237;a &#273;&#432;&#7901;ng Nguy&#7877;n Th&#7883; Minh Khai c&#242;n c&#243; m&#7897;t
                                nh&#224; b&#225;t gi&#225;c &#273;&#432;&#7901;ng k&#237;nh 4m, x&#226;y tr&#234;n m&#7897;t
                                g&#242; &#273;&#7845;t cao, xung quanh kh&#244;ng x&#226;y t&#432;&#7901;ng, m&#225;i ng&#243;i
                                cong c&#7893; k&#237;nh l&#224;m n&#417;i h&#243;ng m&#225;t, th&#432; gi&#227;n.</span>
                        </div>
                        <br style="text-align: justify;" />
                        <span style="text-align: justify;">&nbsp;</span>
                        <span style="text-align: justify;">&nbsp; &nbsp;</span>
                        <div style="text-align: center;">
                            <img alt="SD3-1020.jpg" src="../assets/img/getattachment/SD3-1020.jpg" style="width: 591px; height: 393px;"
                                title="SD3-1020.jpg" />
                            <br />
                            <div style="text-align: justify;">
                                <span style="text-align: justify;">&nbsp; &nbsp;
                                    <br /> &nbsp; &nbsp; &nbsp;Xung quanh Dinh l&#224; nh&#7919;ng b&#227;i c&#7887; xanh m&#432;&#7899;t,
                                    v&#432;&#7901;n c&#226;y c&#7893; th&#7909;, nh&#7919;ng ch&#7853;u c&#226;y ki&#7875;ng
                                    qu&#237; v&#224; 04 s&#226;n tennis ph&#237;a sau khu nh&#224; ch&#237;nh.</span>
                            </div>
                            <div>
                                <span style="font-size: 12px; text-align: justify;">&nbsp; &nbsp; &nbsp;</span>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img alt="SD3-0868.jpg" src="../assets/img/getattachment/SD3-0868.jpg" style="width: 250px; height: 166px;"
                                title="SD3-0868.jpg" />&nbsp; &nbsp;
                            <img alt="SD3-1027.jpg" src="../assets/img/getattachment/SD3-1027.jpg"
                                style="text-align: justify; font-size: 12px; width: 250px; height: 166px;" title="SD3-1027.jpg"
                            />
                            <span style="text-align: justify; font-size: 12px;">&nbsp;&nbsp;</span>
                            <img alt="SD3-1061.jpg" src="../assets/img/getattachment/SD3-1061.jpg"
                                style="text-align: justify; font-size: 12px; width: 250px; height: 166px;" title="SD3-1061.jpg"
                            />
                        </div>


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
                            <a title="Giới thiệu" href="../gioi-thieu/gioi-thieu.html">Giới thiệu</a>
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
    <div id="ctl00_pFooterSub">

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