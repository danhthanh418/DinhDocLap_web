<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dinh Độc Lập - Lịch sử về Dinh Độc Lập</title>

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
                <span class="CMSBreadCrumbsCurrentItem">Lịch sử về Dinh Độc Lập</span>
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
                            <a>Lịch sử về Dinh Độc Lập</a>
                        </h1>
                        <time class="ct_time">Cập nhật : 10-06-2013 - 09:10</time>
                        <div class="clearfix"></div>
                        <div>
                            <div style="text-align: justify;"> &nbsp; &nbsp; &nbsp;N&#259;m 1858, th&#7921;c d&#226;n Ph&#225;p n&#7893; s&#250;ng t&#7845;n
                                c&#244;ng &#208;&#224; N&#7861;ng m&#7903; &#273;&#7847;u cu&#7897;c chi&#7871;n tranh x&#226;m
                                l&#432;&#7907;c Vi&#7879;t Nam. N&#259;m 1867, Ph&#225;p chi&#7871;m xong l&#7909;c t&#7881;nh
                                Nam k&#7923; (Bi&#234;n Ho&#224;, Gia &#272;&#7883;nh, &#208;&#7883;nh T&#432;&#7901;ng,
                                V&#297;nh Long, An Giang, H&#224; Ti&#234;n). N&#259;m 1868, ch&#237;nh quy&#7873;n Ph&#225;p
                                b&#7855;t &#273;&#7847;u cho thi&#7871;t k&#7871; v&#224; x&#226;y d&#7921;ng t&#7841;i trung
                                t&#226;m th&#224;nh ph&#7889; S&#224;i G&#242;n m&#7897;t Dinh th&#7921; l&#224;m n&#417;i
                                &#7903; cho Th&#7889;ng &#273;&#7889;c Nam k&#7923;, khi x&#226;y xong c&#243; t&#234;n g&#7885;i
                                l&#224; Dinh NORODOM.&nbsp;
                                <br />
                                <br /> &nbsp; &nbsp; &nbsp;C&#244;ng tr&#236;nh &#273;&#432;&#7907;c kh&#7903;i c&#244;ng ng&#224;y
                                23/2/1868 v&#224; ho&#224;n t&#7845;t v&#224;o n&#259;m 1871 do vi&#234;n th&#7889;ng &#273;&#7889;c
                                Ph&#225;p t&#7841;i mi&#7873;n Nam Vi&#7879;t Nam l&#224; Lagrad&#236;ere &#273;&#7863;t
                                vi&#234;n &#273;&#225; &#273;&#7847;u ti&#234;n.&nbsp;&nbsp;
                                <br /> T&#7915; 1887 - 1945, nhi&#7873;u &#273;&#7901;i to&#224;n quy&#7873;n Ph&#225;p &#273;&#227;
                                s&#7917; d&#7909;ng dinh th&#7921; n&#224;y l&#224;m n&#417;i &#7903; v&#224; l&#224;m vi&#7879;c
                                trong su&#7889;t th&#7901;i k&#7923; x&#226;m l&#432;&#7907;c &#208;&#244;ng D&#432;&#417;ng.</div>
                            &nbsp;
                            <div style="text-align: center;">
                                <img alt="image0124zz.jpg" src="../assets/img/getattachment/image0124zz.jpg"
                                    style="width: 492px; height: 328px;" title="image0124zz.jpg" />
                            </div> &nbsp;
                            <div style="text-align: justify;"> &nbsp; &nbsp; &nbsp;Ng&#224;y 09/3/1945, ph&#225;t x&#237;t Nh&#7853;t &#273;&#7843;o ch&#237;nh
                                h&#7845;t c&#7859;ng Ph&#225;p, &#273;&#7897;c chi&#7871;m &#208;&#244;ng D&#432;&#417;ng,
                                Dinh Norodom l&#224; n&#417;i l&#224;m vi&#7879;c c&#7911;a ch&#237;nh quy&#7873;n Nh&#7853;t
                                &#7903; Vi&#7879;t Nam.&nbsp;
                                <br />
                                <br /> &nbsp; &nbsp; &nbsp;Th&#225;ng 9/1945, Nh&#7853;t th&#7845;t b&#7841;i trong chi&#7871;n
                                tranh th&#7871; gi&#7899;i th&#7913; II, Ph&#225;p tr&#7903; l&#7841;i chi&#7871;m Nam B&#7897;,
                                Dinh NORODOM l&#224; tr&#7909; s&#7903; l&#224;m vi&#7879;c c&#7911;a b&#7897; m&#225;y chi&#7871;n
                                tranh x&#226;m l&#432;&#7907;c c&#7911;a Ph&#225;p &#7903; Vi&#7879;t Nam.&nbsp;
                                <br />
                                <br /> &nbsp; &nbsp; &nbsp;Ng&#224;y 07/5/1954, th&#7921;c d&#226;n Ph&#225;p th&#7845;t b&#7841;i
                                n&#7863;ng n&#7873; trong chi&#7871;n d&#7883;ch &#208;i&#7879;n Bi&#234;n Ph&#7911; bu&#7897;c
                                ph&#7843;i k&#253; Hi&#7879;p &#273;&#7883;nh Gien&#232;ve v&#224; r&#250;t kh&#7887;i Vi&#7879;t
                                Nam. M&#7929; t&#236;m c&#225;ch nh&#7843;y v&#224;o th&#7921;c hi&#7879;n &#253; &#273;&#7891;
                                x&#226;m chi&#7871;m mi&#7873;n Nam, Vi&#7879;t Nam t&#7841;m th&#7901;i b&#7883; chia c&#7855;t
                                th&#224;nh 2 mi&#7873;n, mi&#7873;n B&#7855;c l&#224; Vi&#7879;t Nam D&#226;n ch&#7911; C&#7897;ng
                                h&#242;a, c&#242;n mi&#7873;n Nam l&#224; Qu&#7889;c gia Vi&#7879;t Nam.&nbsp;
                                <br /> Ng&#224;y 07/9/1954
                                <strong>,</strong>&nbsp;Dinh NORODOM &#273;&#432;&#7907;c b&#224;n giao gi&#7919;a &#273;&#7841;i
                                di&#7879;n ch&#237;nh ph&#7911; Ph&#225;p, &#208;&#7841;i t&#432;&#7899;ng Paul Ely v&#7899;i
                                &#273;&#7841;i di&#7879;n ch&#237;nh quy&#7873;n S&#224;i G&#242;n Th&#7911; t&#432;&#7899;ng
                                Ng&#244; &#208;&#236;nh Di&#7879;m. Ng&#244; &#208;&#236;nh Di&#7879;m &#273;&#227; quy&#7871;t
                                &#273;&#7883;nh &#273;&#7893;i t&#234;n Dinh th&#224;nh Dinh &#208;&#7897;c L&#7853;p. Ng&#224;y
                                26/10/1955, Th&#7911; t&#432;&#7899;ng Ng&#244; &#272;&#236;nh Di&#7879;m &#273;&#227; tru&#7845;t
                                ph&#7871; Qu&#7889;c tr&#432;&#7903;ng B&#7843;o &#272;&#7841;i, th&#224;nh l&#7853;p ch&#237;nh
                                quy&#7873;n Vi&#7879;t Nam C&#7897;ng h&#242;a v&#224; l&#234;n l&#224;m T&#7893;ng th&#7889;ng.
                                T&#7915; &#273;&#243; Dinh &#208;&#7897;c L&#7853;p tr&#7903; th&#224;nh n&#417;i &#7903;
                                c&#7911;a gia &#273;&#236;nh Ng&#244; &#208;&#236;nh Di&#7879;m v&#224; l&#224; n&#417;i
                                ch&#7913;ng ki&#7871;n nhi&#7873;u bi&#7871;n c&#7889; ch&#237;nh tr&#7883;. Ng&#244; &#208;&#236;nh
                                Di&#7879;m &#273;&#227; duy tr&#236; ch&#7871; &#273;&#7897; &#273;&#7897;c t&#224;i gia
                                &#273;&#236;nh tr&#7883;, d&#7891;n d&#226;n v&#224;o &#7845;p chi&#7871;n l&#432;&#7907;c,
                                thi h&#224;nh lu&#7853;t 10/59 l&#234; m&#225;y ch&#233;m kh&#7855;p mi&#7873;n Nam, kh&#244;ng
                                nh&#7919;ng g&#226;y ph&#7851;n u&#7845;t trong nh&#226;n d&#226;n m&#224; c&#242;n g&#226;y
                                ra s&#7921; b&#7845;t b&#236;nh trong n&#7897;i c&#225;c ch&#237;nh quy&#7873;n S&#224;i
                                G&#242;n.&nbsp;</div> &nbsp;
                            <div style="text-align: center;">
                                <img alt="scan0001.jpg" src="../assets/img/getattachment/scan0001.jpg"
                                    style="width: 492px; height: 327px;" title="scan0001.jpg" />
                            </div> &nbsp;
                            <div style="text-align: justify;"> &nbsp; &nbsp; &nbsp;Ng&#224;y 27/02/1962, phe &#273;&#7843;o ch&#237;nh &#273;&#227; c&#7917;
                                hai vi&#234;n phi c&#244;ng qu&#226;n &#273;&#7897;i S&#224;i G&#242;n l&#224; Nguy&#7877;n
                                V&#259;n C&#7917; v&#224; Ph&#7841;m Ph&#250; Qu&#7889;c l&#225;i 2 m&#225;y bay AD6 n&#233;m
                                bom l&#224;m s&#7853;p to&#224;n b&#7897; ph&#7847;n ch&#237;nh c&#225;nh tr&#225;i c&#7911;a
                                Dinh. Do kh&#244;ng th&#7875; kh&#244;i ph&#7909;c l&#7841;i, Ng&#244; &#208;&#236;nh Di&#7879;m
                                &#273;&#227; cho san b&#7857;ng v&#224; x&#226;y m&#7897;t dinh th&#7921; m&#7899;i ngay
                                tr&#234;n n&#7873;n &#273;&#7845;t c&#361; theo &#273;&#7891; &#225;n thi&#7871;t k&#7871;
                                c&#7911;a Ki&#7871;n tr&#250;c s&#432; Ng&#244; Vi&#7871;t Th&#7909; - ng&#432;&#7901;i Vi&#7879;t
                                Nam &#273;&#7847;u ti&#234;n &#273;&#7841;t gi&#7843;i Kh&#244;i nguy&#234;n La M&#227;.&nbsp;
                                <br
                                />
                                <br /> &nbsp; &nbsp; &nbsp;Ng&#244; &#208;&#236;nh Di&#7879;m quy&#7871;t &#273;&#7883;nh kh&#7903;i
                                c&#244;ng x&#226;y d&#7921;ng Dinh ng&#224;y 01/7/1962. Trong th&#7901;i gian x&#226;y d&#7921;ng
                                Dinh m&#7899;i, gia &#273;&#236;nh Ng&#244; &#208;&#236;nh Di&#7879;m t&#7841;m th&#7901;i
                                chuy&#7875;n sang s&#7889;ng t&#7841;i Dinh Gia Long (hi&#7879;n nay l&#224; B&#7843;o t&#224;ng
                                th&#224;nh ph&#7889; H&#7891; Ch&#237; Minh). C&#244;ng tr&#236;nh &#273;ang x&#226;y d&#7921;ng
                                d&#7903; dang th&#236; Ng&#244; &#208;&#236;nh Di&#7879;m b&#7883; phe &#273;&#7843;o ch&#237;nh
                                gi&#7871;t ch&#7871;t ng&#224;y 02/11/1963. Do v&#7853;y, ng&#224;y kh&#225;nh th&#224;nh
                                Dinh 31/10/1966, ng&#432;&#7901;i ch&#7911; t&#7885;a bu&#7893;i l&#7877; l&#224; Nguy&#7877;n
                                V&#259;n Thi&#7879;u, Ch&#7911; t&#7883;ch U&#7927; ban l&#227;nh &#273;&#7841;o qu&#7889;c
                                gia. Ng&#244; &#208;&#236;nh Di&#7879;m l&#224; ng&#432;&#7901;i kh&#7903;i x&#432;&#7899;ng
                                x&#226;y d&#7921;ng Dinh &#208;&#7897;c L&#7853;p nh&#432;ng &#244;ng ta kh&#244;ng &#273;&#432;&#7907;c
                                s&#7889;ng &#7903; &#273;&#226;y m&#7897;t ng&#224;y n&#224;o, m&#224; ng&#432;&#7901;i c&#243;
                                th&#7901;i gian s&#7889;ng &#7903; Dinh th&#7921; n&#224;y l&#226;u nh&#7845;t l&#224; T&#7893;ng
                                th&#7889;ng &#272;&#7879; nh&#7883; Vi&#7879;t Nam C&#7897;ng h&#242;a Nguy&#7877;n V&#259;n
                                Thi&#7879;u (t&#7915; th&#225;ng 10/1967 &#273;&#7871;n 21/4/1975).
                                <br /> &nbsp;</div>
                            <div style="text-align: center;">
                                <img alt="DSC04097.JPG" src="../assets/img/getattachment/DSC04097.JPG"
                                    style="width: 470px; height: 347px;" title="DSC04097.JPG" />
                            </div>
                            <br />
                            <div style="text-align: justify;"> &nbsp; &nbsp; &nbsp;Nh&#432;ng &#273;i&#7873;u g&#236; ph&#7843;i &#273;&#7871;n &#273;&#227;
                                &#273;&#7871;n.
                                <br />
                                <br /> &nbsp; &nbsp; &nbsp;B&#7857;ng chi&#7871;n d&#7883;ch H&#7891; Ch&#237; Minh l&#7883;ch
                                s&#7917;, 10h45&rsquo; ng&#224;y 30/4/1975, xe t&#259;ng mang s&#7889; hi&#7879;u 843 c&#7911;a
                                qu&#226;n gi&#7843;i ph&#243;ng thu&#7897;c &#208;&#7841;i &#273;&#7897;i 4, Ti&#7875;u &#273;o&#224;n
                                1, L&#7919; &#273;o&#224;n xe t&#259;ng 230, Qu&#226;n &#273;o&#224;n 2 d&#7851;n &#273;&#7847;u
                                &#273;&#7897;i h&#236;nh &#273;&#227; h&#250;c nghi&#234;ng c&#7893;ng ph&#7909; c&#7911;a
                                Dinh &#208;&#7897;c L&#7853;p, ti&#7871;p &#273;&#243; xe t&#259;ng mang s&#7889; hi&#7879;u
                                390 &#273;&#227; h&#250;c tung c&#7893;ng ch&#237;nh ti&#7871;n th&#7859;ng v&#224;o Dinh.
                                11h30&rsquo; c&#249;ng ng&#224;y, Trung &#250;y B&#249;i Quang Th&#7853;n - &#208;&#7841;i
                                &#273;&#7897;i tr&#432;&#7903;ng ch&#7881; huy xe t&#259;ng 843 &#273;&#227; h&#7841; l&#225;
                                c&#7901; 3 s&#7885;c xu&#7889;ng, k&#233;o l&#225; c&#7901; m&#7863;t tr&#7853;n d&#226;n
                                t&#7897;c gi&#7843;i ph&#243;ng mi&#7873;n Nam Vi&#7879;t Nam l&#234;n. C&#7901; ph&#7845;p
                                ph&#7899;i tung bay tr&#234;n n&#243;c Dinh, k&#7871;t th&#250;c 30 n&#259;m chi&#7871;n
                                tranh gian kh&#7893; v&#224; anh d&#361;ng c&#7911;a d&#226;n t&#7897;c Vi&#7879;t Nam. C&#361;ng
                                ch&#237;nh v&#224;o gi&#7901; ph&#250;t n&#224;y, T&#7893;ng th&#7889;ng cu&#7889;i c&#249;ng
                                c&#7911;a ch&#7871; &#273;&#7897; Vi&#7879;t Nam C&#7897;ng h&#242;a l&#224; D&#432;&#417;ng
                                V&#259;n Minh c&#249;ng to&#224;n b&#7897; n&#7897;i c&#225;c c&#7911;a ch&#237;nh quy&#7873;n
                                S&#224;i G&#242;n ph&#7843;i tuy&#234;n b&#7889; &#273;&#7847;u h&#224;ng v&#244; &#273;i&#7873;u
                                ki&#7879;n ch&#237;nh quy&#7873;n c&#225;ch m&#7841;ng. D&#432;&#7899;i s&#7921; l&#227;nh
                                &#273;&#7841;o c&#7911;a &#208;&#7843;ng C&#7897;ng s&#7843;n Vi&#7879;t Nam, qu&#226;n v&#224;
                                d&#226;n ta &#273;&#227; th&#7921;c hi&#7879;n &#273;&#432;&#7907;c &#253; nguy&#7879;n c&#7911;a
                                Ch&#7911; t&#7883;ch H&#7891; Ch&#237; Minh: Nh&#226;n d&#226;n 2 mi&#7873;n Nam - B&#7855;c
                                sum h&#7885;p m&#7897;t nh&#224;. Tinh th&#7847;n v&#224; &#253; ch&#237; c&#7911;a nh&#226;n
                                d&#226;n Vi&#7879;t Nam l&#224; &#273;&#7897;c l&#7853;p d&#226;n t&#7897;c v&#224; th&#7889;ng
                                nh&#7845;t &#273;&#7845;t n&#432;&#7899;c &#273;&#227; to&#224;n th&#7855;ng.&nbsp;
                                <br /> &nbsp;</div>
                            <div style="text-align: center;">
                                <img alt="1.jpg" src="../assets/img/getattachment/12.jpg" style="width: 640px; height: 427px;"
                                    title="1.jpg" />
                            </div> &nbsp;
                            <br /> &nbsp; &nbsp; &nbsp;Ng&#224;y nay, Dinh &#208;&#7897;c L&#7853;p l&#224; di t&#237;ch l&#7883;ch
                            s&#7917; n&#7893;i ti&#7871;ng &#273;&#432;&#7907;c &#273;&#244;ng &#273;&#7843;o du kh&#225;ch
                            trong n&#432;&#7899;c v&#224; n&#432;&#7899;c ngo&#224;i &#273;&#7871;n tham quan v&#224; l&#224;
                            n&#417;i h&#7897;i h&#7885;p, ti&#7871;p kh&#225;ch c&#7911;a c&#225;c c&#7845;p l&#227;nh &#273;&#7841;o
                            trung &#432;&#417;ng c&#361;ng nh&#432; c&#7911;a th&#224;nh ph&#7889;.


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
                                <a title="Giới thiệu" href="../gioi-thieu/gioi-thieu.html">Giới thiệu</a>
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