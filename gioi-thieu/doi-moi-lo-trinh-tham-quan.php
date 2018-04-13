<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giới thiệu - Đổi mới lộ trình tham quan</title>

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
                <span class="CMSBreadCrumbsCurrentItem">Đổi mới lộ trình tham quan</span>
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
                            <a>Đổi mới lộ trình tham quan</a>
                        </h1>
                        <time class="ct_time">Cập nhật : 14-03-2013 - 08:31</time>
                        <div class="clearfix"></div>
                        <div>
                            <div style="text-align: center;">
                                <strong>Gương mặt mới của di tích lịch sử - văn hóa Dinh Độc Lập</strong>
                                <br /> Bài viết của PGS.TS NGUYỄN VĂN HUY - Ủy viên Hội đồng di sản quốc gia
                                <br /> &nbsp;
                                <br />
                                <img alt="Untitled.jpg" src="../assets/img/getattachment/Untitled.jpg" style="width: 499px; height: 282px;"
                                    title="Untitled.jpg" />
                                <br />
                                <br /> Cung cấp thông tin để khách tham quan có thể tự đọc, tự khám phá.</div>
                            <div>
                                &nbsp;
                                <br />
                                <strong>NDĐT- Tại TP Hồ Chí Minh vừa diễn ra lễ khai trương Lộ trình tham quan mới tại Dinh Độc Lập,
                                    di tích quốc gia đặc biệt. Lộ trình mới này đã làm thay đổi hẳn bộ mặt và cách tham quan
                                    di tích lịch sử quan trọng này. Chúng tôi trân trọng giới thiệu bài viết của TS. Nguyễn
                                    Văn Huy, Ủy viên Hội đồng di sản quốc gia - người tư vấn quan trọng đối với Lộ trình
                                    tham quan mới này.</strong>
                                <br /> &nbsp;
                            </div>
                            <div>
                                Hàng năm di tích lịch sử văn hóa Dinh Độc Lập thường đón gần một triệu khách tham quan trong và ngoài nước. Đó là một con
                                số rất lớn đối với các bảo tàng, di tích hiện nay ở nước ta. Tuy nhiên suốt mấy chục năm
                                nay khách đến di tích này thường chỉ được đi xem những hiện vật trong hơn 30 căn phòng làm
                                việc trước đây ở Dinh. Những thông tin họ nhận được chỉ qua lời giới thiệu của hướng dẫn
                                viên của Dinh hoặc của các công ty du lịch.
                                <br />
                                <br /> Khách không được tự trải nghiệm, tự khám phá thông tin bằng thị giác. Hơn nữa cách hướng
                                dẫn khá phiền toái theo kiểu gom các nhóm khách thăm lại thành từng đoàn 50 đến 100 người.
                                Khách đi lẻ hay đoàn phải chờ đủ số người mới được hướng dẫn làm mất cảm hứng và mất nhiều
                                thời gian của khách. Đặc biệt do hướng dẫn các đoàn quá đông người nên hướng dẫn viên đều
                                dùng loa để mọi người có thể nghe, điều đó gây sự ồn ào, phản cảm với khách thăm, làm mất
                                tính trang nghiêm, tĩnh lặng ở Dinh Tổng thống trước đây.</div>
                            <div style="text-align: center;">
                                &nbsp;
                                <br />
                                <img alt="2.jpg" src="../assets/img/getattachment/21.jpg" style="width: 503px; height: 379px;"
                                    title="2.jpg" />
                                <br /> &nbsp;
                                <br /> &nbsp;
                            </div>
                            <div>
                                Nhận thấy khiếm khuyết này, được sự tư vấn của Trung tâm nghiên cứu và phát huy giá trị di sản văn hóa (CCH) thuộc Hội Di
                                sản văn hóa Việt Nam, lãnh đạo và tập thể cán bộ viên chức ở di tích này đã quyết tâm đổi
                                mới để nâng cao hơn nữa chất lượng giới thiệu di tích lịch sử quan trọng này. Bước đi ban
                                đầu của sự đổi mới này là thay đổi cách tham quan, xóa bỏ cách dùng loa hướng dẫn với những
                                nhóm đông người mà tạo điều kiện cho khách thăm bằng cách cung cấp thông tin để khách có
                                thể tự đọc, tự khám phá.
                                <br />
                                <br /> Công việc chuẩn bị tiến hành gần hai năm với sự tư vấn chuyên môn của các chuyên gia trong
                                nước và chuyên gia Pháp (nhà bảo tàng học Christine Hemmet và nhà thiết kế đồ họa Patrick
                                Hoarau). Nhóm chuyên môn đã xác định từng vị trí cần thông tin như Phòng Khánh tiết, Phòng
                                Trình quốc thư, Phòng Tổng thống hay vị trí cắm cờ tại Dinh ngày 30-4-1975. Mỗi vị trí tương
                                ứng với một bảng giới thiệu gồm ba ngữ Việt, Anh, Pháp với nội dung được biên soạn cô đọng,
                                súc tích, chính xác. Mỗi bảng có một tấm ảnh được chọn lọc kỹ càng phản ánh lịch sử chân
                                thực và sinh động.</div>
                            <div style="text-align: center;">
                                &nbsp;
                                <br />
                                <img alt="3.jpg" src="../assets/img/getattachment/31.jpg" style="width: 504px; height: 395px;"
                                    title="3.jpg" />
                                <br /> &nbsp;
                            </div>
                            <div>
                                Toàn bộ lộ trình tham quan mới được dẫn dắt bằng 35 bảng giới thiệu thiết kế chuyên nghiệp, bố cục hài hòa, màu đỏ bắt mắt,
                                cỡ chữ phù hợp. Cùng với các bảng này là các biển hướng dẫn lối đi để khách có thể tự di
                                chuyển dễ dàng từ phòng này đến phòng khác, từ tầng dưới lên tầng trên và ngược lại. Chính
                                hệ thống các bảng giới thiệu và biển chỉ dẫn này đã góp phần tạo ra bản sắc mới của di tích.
                                <br
                                />
                                <br /> Sự thay đổi lộ trình tham quan mới ở Dinh Độc Lập đã đón nhận sự quan tâm đặc biệt của du
                                khách. Cách làm đưa bảo tàng vào di tích hay nói một cách khác làm cho di tích trở thành
                                bảo tàng này như một sự đột phá trong việc phát huy giá trị của di tích, làm cho khách tham
                                quan dễ dàng tiếp cận và hiểu sâu sắc hơn nội dung của di tích. Hy vọng cách làm mới này
                                giúp các di tích và bảo tàng ở nước ta có thêm được một mô hình tốt để tham khảo.</div>
                            <h3>
                                <br />
                                <span style="font-size:20px;">
                                    <strong>Một số bài báo viết về sự kiện &quot;Đổi mới lộ trình tham quan&quot;</strong>
                                    <br /> - &nbsp; &nbsp; Báo Thanh Niên số 114 ra ngày 24/4/2014</span>
                            </h3>
                            <br />
                            <div style="text-align: center;">
                                <img alt="tu-kham-pha-dinh-Thong-Nhat.jpg" src="../assets/img/getattachment/tu-kham-pha-dinh-Thong-Nhat.jpg"
                                    style="font-size: 12px; width: 900px; height: 828px;" title="tu-kham-pha-dinh-Thong-Nhat.jpg"
                                />
                            </div>
                            <div>
                                &nbsp;</div>
                            <h3>
                                <span style="font-size:20px;">- &nbsp;Bài đăng trên tạp chí Echo des Rizieres (hội Pháp ngữ tại Việt Nam), số 97 tháng
                                    3, tháng 4/2014, tác giả Priscilla Bergeret</span>
                            </h3>
                            <div>
                                <br /> &nbsp;
                            </div>
                            <div style="text-align: center;">
                                <img alt="L-Echo-de-Rizieres-No-97-1-1-1.jpg" src="../assets/img/getattachment/L-Echo-de-Rizieres-No-97-1-1-1.jpg"
                                    style="width: 250px; height: 345px;" title="L-Echo-de-Rizieres-No-97-1-1-1.jpg" />&nbsp; &nbsp;
                                <img alt="L-Echo-de-Rizieres-No-97-3-1.jpg" src="../assets/img/getattachment/L-Echo-de-Rizieres-No-97-1-1-1.jpg"
                                    style="width: 250px; height: 370px;" title="L-Echo-de-Rizieres-No-97-3-1.jpg" />&nbsp; &nbsp;
                                <img alt="L-Echo-de-Rizieres-No-97-2-1.jpg" src="../assets/img/getattachment/L-Echo-de-Rizieres-No-97-1-1-1.jpg"
                                    style="width: 250px; height: 352px;" title="L-Echo-de-Rizieres-No-97-2-1.jpg" />
                                <br /> &nbsp;
                            </div>
                            <h3>
                                <span style="font-size:20px;">- &nbsp;Báo VOV số 34 - 36 ra ngày 29/4/2014</span>
                            </h3>
                            <div style="text-align: center;">
                                <br />
                                <img alt="bao-VOV.jpg" src="../assets/img/getattachment/bao-VOV.jpg"
                                    style="width: 950px; height: 955px;" title="bao-VOV.jpg" />&nbsp; &nbsp;</div>
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
                                <a title="Giới thiệu" href="../gioi-thieu/gioi-thieu.html">Giới thiệu</a>
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