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
                <a href="trang-chu.html" class="logo"></a>
            </div>

            <div class="wrap_slogan grid_3 alpha">
                <span>Di tích lịch sử</span>
                <a href="trang-chu.html" class="slogan_txt"></a>
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

    <!--Hết header-->

    <!--Chỉnh code tại đây-->

    <!--Footer-->
    <div id="ctl00_pFooter">

        <div id="footer">


            <div class="bot_container">
                <div class="container_12">
                    <div class="grid_12 f_navfooter">

                        <ul class="navfooter">

                            <li>
                                <a class="f_nav_act" href="/trang-chu.html">
                                    Trang chủ</a>
                            </li>

                            <li>
                                <a class="" href="/gioi-thieu.html">
                                    Giới thiệu</a>
                            </li>
                            <li>
                                <a class="" href="/trung-bay.html">
                                    Trưng bày</a>
                            </li>
                            <li>
                                <a class="" href="/tham-quan.html">
                                    Tham quan</a>
                            </li>
                            <li>
                                <a class="" href="/giao-duc.html">
                                    Giáo dục</a>
                            </li>
                            <li>
                                <a class="" href="/hinh-anh-tu-lieu.html">
                                    Hình ảnh - Tư liệu</a>
                            </li>
                            <li>
                                <a class="" href="/tin-tuc-su-kien.html">
                                    Tin tức - Sự kiện</a>
                            </li>
                            <li>
                                <a class="" href="/an-pham.html">
                                    Sản phẩm</a>
                            </li>
                            <li>
                                <a class="" href="/ve-chung-toi.html">
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

        </div>


</body>

</html>