<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Di tích quốc gia đặc biệt Dinh Độc lập - Dinh độc lập</title>

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
                <span class="CMSBreadCrumbsCurrentItem">Di t&#237;ch quốc gia đặc biệt Dinh Độc lập B&#225;o thegioidisan.vn</span>
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
                            <a>Di tích quốc gia đặc biệt Dinh Độc lập Báo thegioidisan.vn</a>
                        </h1>
                        <time class="ct_time">Cập nhật : 06-10-2017 - 10:37</time>
                        <div class="clearfix"></div>
                        <div>
                            <div class="artcl-heading" style="box-sizing: border-box; max-height: 350px; overflow: hidden; position: relative; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 15px; border-radius: 0px !important;">
                                <h1 class="entry-title" style="box-sizing: border-box; border-radius: 0px !important; font-size: 32px; margin: 0px 0px 15px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-weight: 400; line-height: 1.1; color: inherit; text-rendering: optimizeLegibility; padding: 15px 0px 0px;">
                                    <strong class="artcl-sapo" style="font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify; box-sizing: border-box; margin: 15px 0px; font-size: 14px; color: rgb(68, 68, 68); border-radius: 0px !important;">Dinh Độc Lập trước kia còn có tên gọi là Dinh NORODOM, từ tháng 11-1976 được mang tên
                                        Dinh Thống Nhất. Dinh Độc Lập ở số 106 Nguyễn Du, quận I thành phố Hồ Chí Minh. Khuôn
                                        viên của Dinh hiện nay có diện tích 18 ha. Dinh Độc Lập được công nhận là Di tích
                                        Lịch sử - Văn hóa theo Quyết định số 77A- VHQĐ ngày 25-6-1976. Ngày 12-8-2009 Dinh
                                        được tôn vinh là Di tích quốc gia đặc biệt.</strong>
                                </h1>
                            </div>
                            <div class="artcl-body" style="box-sizing: border-box; padding: 15px 0px; position: relative; text-align: justify; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 15px; border-radius: 0px !important;">
                                <div class="artcl-content" style="box-sizing: border-box; border-radius: 0px !important; font-size: 14px; padding: 15px 0px;">
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Dinh Độc Lập có quá trình hình thành lâu dài với nhiều sự kiện có liên quan tới cuộc đấu tranh vì độc lập và thống nhất đất
                                        nước của nhân dân Việt Nam kể từ khi người Pháp xây dựng Dinh năm 1868 cho đến ngày
                                        nay. Sau hơn 3 năm xây dựng, năm 1871 Dinh được khánh thành và chính quyền thực dân
                                        Pháp gọi là Dinh NORODOM. Từ đó đến năm 1945 Dinh là nơi ở của nhiều đời toàn quyền
                                        Pháp ở Đông Dương.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Tháng 3-1945 phát xít Nhật đảo chính lật đổ chính quyền Pháp, Dinh là nơi làm việc của chính quyền Nhật ở Việt Nam. Nhưng
                                        từ tháng 9-1945 Nhật thất bại, Dinh lại trở thành trụ sở làm việc của bộ máy xâm
                                        lược Pháp trong suốt 9 năm đến 1954.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; text-align: center; border-radius: 0px !important;">
                                        <img alt="" height="352" src="http://thegioidisan.vn/assets/media/20150403151005333_img_1517-as-smart-object-1.jpg" style="box-sizing: border-box; border-radius: 0px !important; border: 0px; vertical-align: middle; max-width: 100%; height: auto; width: 653.328px;"
                                            width="600" />
                                    </p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Từ tháng 9 - 1954 chính quyền Pháp trao trả Dinh NORODOM cho chính quyền Ngô Đình Diệm, tay sai của đế quốc Mỹ và Dinh được
                                        đổi tên là Dinh Độc Lập. Dưới thời Ngô Đình Diệm, Dinh Độc Lập đã chứng kiến nhiều
                                        cuộc đảo chính thanh trừng lẫn nhau trong nội bộ chính quyền Sài Gòn theo ý đồ của
                                        Mỹ. Tháng 2-1962 quân đảo chính đã ném bom Dinh Độc Lập, không thể sửa chữa và khôi
                                        phục lại được cho nên Ngô Đình Diệm quyết định san bằng toàn bộ Dinh cũ và xây dựng
                                        lại Dinh mới trên nền đất cũ và vẫn lấy tên là Dinh Độc Lập. Dinh mới được khánh
                                        thành ngày 31-10-1966 và tồn tại đến ngày nay.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Tác giả thiết kế Dinh là Kiến trúc sư Ngô Viết Thụ, ông vừa là người thiết kế, đồng thời là kiến trúc sư trưởng theo dõi
                                        xây dựng công trình.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Được xây dựng dưới chế độ độc tài Ngô Đình Diệm, Dinh có kiến trúc đặc thù riêng. Ngô Đình Diệm có ý định xây dựng một phủ
                                        Tổng thống lớn, tráng lệ vào bậc nhất Đông Nam Á, vừa là một dinh thự, đồng thời
                                        là nơi ở và làm việc, tiếp khách và là một công trình phòng thủ kiên cố&nbsp; bảo
                                        vệ cho chế độ của mình. Về mặt kiến trúc, Kiến trúc sư Ngô Viết Thụ thể hiện tài
                                        năng của mình muốn thiết kế một dinh thự cho một Nguyên thủ quốc gia kết hợp kiến
                                        trúc hiện đại với kiến trúc truyền thống phương Đông.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Nằm trong khuôn viên rộng, Dinh Độc Lập có chiều cao 26 mét, có thể chịu được bom 4 tấn (ngày 28-4-1975 Trung úy phi công
                                        Nguyễn Thành Trung ném hai quả bom vào đúng vị trí 2 cầu thang cho nên chỉ làm sập
                                        hai cầu thang này). Diện tích mặt bằng của Dinh rộng 4.500m2 với 3 tầng chính, hai
                                        gác lửng, một sân thượng, một tầng nền và một tầng hầm. Toàn bộ diện tích các tầng
                                        của Dinh thự khoảng 20.000m2 với gần 100 phòng. Mỗi tầng và mỗi phòng của dinh thự
                                        đều có kiến trúc, cũng như cách trang trí riêng phù hợp với mục đích sử dụng, đồng
                                        thời phù hợp với tổng thể kiến trúc của toàn dinh thự.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Năm 1954, khi tiếp nhận dinh thự này, chính Ngô Đình Diệm đã nói: Dù thế nào đi chăng nữa, tôi cũng giữ một vai trò trong
                                        buổi lễ tiếp nhận này, tôi sẽ sống trong ngôi nhà cổ kính này, tôi cũng tự coi mình
                                        như một người được sự ủy nhiệm của nhân dân Việt Nam. Tuy nhiên Ngô Đình Diệm đã
                                        sử dụng dinh thự này như là một pháo đài bảo vệ cho chế độ độc tài phát xít chống
                                        lại nhân dân Việt Nam. Dưới sự bảo trợ của đế quốc Mỹ, chính quyền Ngô Đình Diệm
                                        đã thi hành nhiều chính sách cực kỳ phản động: Luật 10/59 với việc lập tòa án quân
                                        sự đặc biệt có quyền xử án tại chỗ và công khai những người bị nghi là &ldquo;cộng
                                        sản&rdquo;. Hàng nghìn người yêu nước bị giết hại; Chính sách dồn dân, lập ấp chiến
                                        lược, chính sách bình định nông thôn&hellip;làm cho cả miền Nam trở thành một trại
                                        tập trung khổng lồ.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Dinh Độc Lập đã chứng kiến nhiều cuộc đảo chính liên tiếp. Sau khi Dinh bị quân đảo chính ném bom ngày 27-2-1962, gia đình
                                        Ngô Đình Diệm phải rời sang Dinh Gia Long để thiết kế và xây dựng lại Dinh, đồng
                                        thời cho xây dựng hệ thống hầm để tránh bom. Nhưng trong quá trình tái thiết Dinh
                                        Độc Lập, Mỹ đã tiến hành cuộc đảo chính loại gia đình Ngô Đình Diệm. Ngày 2-11-1963
                                        Ngô Đình Diệm và Ngô Đình Nhu bị giết, gia đình Diệm, Nhu không được ở trong dinh
                                        thự mới này.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; text-align: center; border-radius: 0px !important;">
                                        <img alt="" height="680" src="http://thegioidisan.vn/assets/media/Dinh-%C4%90%E1%BB%99c-L%E1%BA%ADp.jpg67.jpg" style="box-sizing: border-box; border-radius: 0px !important; border: 0px; vertical-align: middle; max-width: 100%; height: auto; width: 653.328px;"
                                            width="1024" />
                                    </p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; text-align: center; border-radius: 0px !important;">
                                        Phòng tiếp khách trong nước của Tổng thống Việt Nam cộng hòa thời đó.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; text-align: center; border-radius: 0px !important;">
                                        Ảnh: TL</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Ngày 31-10-1966 Nguyễn Văn Thiệu và Nguyễn Cao Kỳ là những người may mắn được chủ tọa buổi lễ khánh thành Dinh Độc Lập mới.
                                        Từ cuối năm 1967 Nguyễn Văn Thiệu với tư cách là Tổng thống Việt Nam Cộng hòa đã
                                        đến ở tại dinh thự này.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Thời kỳ Tổng thống Nguyễn Văn Thiệu nắm quyền và chiếm Dinh Độc Lập là thời kỳ đế quốc Mỹ đã thất bại trong cuộc chiến tranh
                                        đặc biệt và tiến hành thực hiện chiến lược chiến tranh mới- &ldquo;chiến tranh cục
                                        bộ&rdquo;. Mỹ đã đưa quân ồ ạt vào miền Nam Việt Nam. Nguyễn Văn Thiệu tiếp tục dựa
                                        vào Mỹ, chính quyền Sài Gòn tiếp tục làm công cụ cho các chiến lược chiến tranh của
                                        đế quốc Mỹ. Hơn nửa triệu quân viễn chinh và quân chư hầu, quân ngụy ồ ạt mở hàng
                                        loạt cuộc phản công lớn hòng giành lại thế chủ động trên chiến trường, hoàn tất chương
                                        trình bình định, đồng thời Mỹ đã dùng không quân và hải quân chống nước VNDCCH hòng
                                        làm suy yếu miền Bắc, ngăn chặn sự chi viện của hậu phương đối với tiền tuyến lớn.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Cuộc Tổng tiến công và nổi dậy mùa xuân năm 1968 là một đòn quyết định làm phá sản chiến lược &ldquo;Chiến tranh cục bộ&rdquo;
                                        của Mỹ, làm lung lay ý chí xâm lược của chúng. Sau đó, năm 1973 đế quốc Mỹ buộc phải
                                        ký Hiệp định Pari về Việt Nam, công nhận các quyền dân tộc cơ bản của nhân dân Việt
                                        Nam, rút quân đội Mỹ và chư hầu ra khỏi miền Nam Việt Nam. Nhưng với chiến lược phi
                                        Mỹ hóa chiến tranh, Mỹ đã sử dụng quân ngụy Sài Gòn như là xương sống của chiến lược
                                        &ldquo;Việt Nam hóa chiến tranh&rdquo;, tiến hành phá hoại Hiệp định Pari, xóa bỏ
                                        vùng giải phóng.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Mùa xuân năm 1975, trận đánh quyết chiến chiến lược bắt đầu bằng Chiến dịch Tây Nguyên, phát triển mạnh mẽ sang Chiến dịch
                                        Thừa Thiên- Huế, Quảng Nam Đà Nẵng và kết thúc bằng Chiến dịch Hồ Chí Minh lịch sử.
                                        Cuộc tổng công kích của quân giải phóng phối hợp với sự nổi dậy của nhân dân thành
                                        phố Sài Gòn đã tấn công Dinh Độc Lập. Giờ phút đánh chiếm Dinh Độc Lập cũng là giờ
                                        phút kết thúc thắng lợi của Chiến dịch Hồ Chí Minh và gải phóng hoàn toàn miền Nam.
                                        Dinh Độc Lập trở thành nơi hội tụ của chiến thắng. Tại đây, ngày 30-4-1975 Tổng thống
                                        Dương Văn Minh và toàn bộ nội các của chính quyền ngụy Sài Gòn bị bắt sống và buộc
                                        phải đầu hàng vô điều kiện, đánh dấu sự sụp đổ của một chế độ do đế quốc Mỹ dựng
                                        nên nhằm phục vụ cho chiến lược làm bá chủ toàn cầu của Mỹ.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; text-align: center; border-radius: 0px !important;">
                                        <img alt="" height="418" src="http://thegioidisan.vn/assets/media/b_0_0_0_00_images_stories_28_1_dinh_doc_lap_1.jpg" style="box-sizing: border-box; border-radius: 0px !important; border: 0px; vertical-align: middle; max-width: 100%; height: auto; width: 653.328px;"
                                            width="630" />
                                    </p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Chính vì vậy Dinh Độc Lập là một địa điểm không chỉ có ý nghĩa quốc gia mà còn có ý nghĩa quốc tế. Nó là một dấu tích về
                                        một bộ máy chiến tranh thời kỳ sau chiến tranh thế giới thứ hai, dấu tích về sự thất
                                        bại của chủ nghĩa thực dân kiểu mới của đế quốc Mỹ.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Sau thắng lợi mùa xuân năm 1975, Dinh Độc Lập vốn là một công trình của nhân dân, từ đó mới thật sự được sử dụng vì lợi ích
                                        của nhân dân. Ngày 15-11-1975 tại Dinh thự này đã diễn ra một sự kiện lịch sử trọng
                                        đại- đó là Hội nghị Hiệp thương chính trị giữa đại biểu hai miền Nam- Bắc để bàn
                                        về vấn đề thực hiện thống nhất nước Việt Nam về mặt Nhà nước. Và cũng từ đó Dinh
                                        được gọi là Dinh Thống Nhất.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Ngoài các công trình kiến trúc, trong khu vực Dinh còn có khu vườn rộng với hơn 60 loài cây, trong đó có các loại gỗ quý
                                        như Cẩm lai, Giáng hương, Gõ (đỏ và trắng), Dầu sao&hellip; Ngoài các điểm di tích,
                                        phía cổng chính vào Dinh còn có đường Thống Nhất (sau đổi thành đường 30/4, nay là
                                        đường Lê Duẩn), nơi có trưng bày chiếc xe tăng tiến vào chiếm Dinh Độc Lập ngày 30-4-1975.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important;">
                                        Dinh Độc Lập trực thuộc Văn phòng Chính phủ nhiều năm nay vừa phát huy tác dụng một di tích lịch sử- văn hóa, tổ chức đón
                                        khách trong nước và quốc tế tham quan; Đồng thời là nơi đón tiếp các đoàn khách cấp
                                        cao của Đảng và Nhà nước ở phía Nam Tổ quốc, nơi tổ chức các cuộc hội thảo quốc tế
                                        và trong nước. Từ khi được công nhận là Di tích quốc gia đặc biệt, Dinh Độc Lập vốn
                                        đã là nơi thu hút rất đông khách tham quan trong nước và quốc tế, nay càng được quan
                                        tâm hơn. Hy vọng rằng, dự án bảo tồn, tôn tạo và phát huy giá trị di tích với những
                                        phương pháp mới hiện đại, nhưng phù hợp với nội dung và ý nghĩa của Dinh sẽ làm cho
                                        nơi đây trở thành một địa chỉ văn hóa- lịch sử xứng tầm quốc gia.</p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; text-align: right; border-radius: 0px !important;">
                                        <strong style="box-sizing: border-box; border-radius: 0px !important;">TS Nguyễn Thị Tình</strong>
                                    </p>
                                    <p style="box-sizing: border-box; margin: 0px 0px 22px; line-height: 20px; border-radius: 0px !important; text-align: left;">
                                        <strong style="box-sizing: border-box; border-radius: 0px !important;">Nguồn:&nbsp;</strong>
                                        <a href="http://thegioidisan.vn/vi/di-tich-quoc-gia-dac-biet-dinh-doc-lap.html"
                                            style="text-align: justify;">http://thegioidisan.vn/vi/di-tich-quoc-gia-dac-biet-dinh-doc-lap.html</a>
                                    </p>
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