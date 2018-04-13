<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - Dinh độc lập</title>

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
                <img src="/App_Themes/DinhDocLap/img/icon/bulllet1.jpg" />
                <span class="CMSBreadCrumbsCurrentItem">Chuyện Dinh Độc Lập- Kỳ I: B&#226;ng khu&#226;ng kiến tr&#250;c sư Ng&#244; Viết Thụ - B&#225;o tienphong.vn</span>
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
                            <a>Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - Báo tienphong.vn</a>
                        </h1>
                        <time class="ct_time">Cập nhật : 06-10-2017 - 04:08</time>
                        <div class="clearfix"></div>
                        <div>
                            <header class="article-header" style="box-sizing: border-box; color: rgb(51, 51, 51); font-family: roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px;">
                                <div class="headline cms-title" id="headline" itemprop="headline" style="box-sizing: border-box; font-size: 3.4rem; margin: 0px 0px 10px; line-height: 4.2rem; font-family: noto-serif, Georgia, &quot;Times New Roman&quot;, Times, serif;">
                                    <span style="font-size:14px;">TP - Cảm giác bâng khuâng không chỉ khi đứng ở Dinh Độc Lập, công trình thiết kế của
                                        kiến trúc sư (KTS) Ngô Viết Thụ, mà mỗi khi chợt bắt gặp và phải chạm mặt với những
                                        mảng khối kiến trúc, trang trí rối rắm lòe loẹt hoa hoét tại một tư gia hay công
                                        sở nào đó, những khi ấy liền nghĩ ngay đến cái chất Ngô Viết Thụ dung dị uẩn súc
                                        hàm chứa bao liên tưởng tốt lành.</span>
                                </div>
                            </header>
                            <div class="clearfix" style="box-sizing: border-box; color: rgb(51, 51, 51); font-family: roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px;">
                                <div class="article-col-b" style="box-sizing: border-box; width: 665px; float: right;">
                                    <figure class="article-avatar cms-body" style="box-sizing: border-box; margin: 0px 0px 10px; width: 665px;">
                                        <span style="font-size:14px;">
                                            <a class="photo" data-desc="Dinh Độc Lập. Ảnh: TL" data-index="0" href="http://image.tienphong.vn/665x449/Uploaded/baogiay002/2015_04_24/9b_WLNY.jpg"
                                                style="box-sizing: border-box; background-color: transparent; color: rgb(51, 51, 51); text-decoration-line: none; width: 665px; height: 454px; position: relative; display: inline-block;">
                                                <img alt="Dinh Độc Lập. Ảnh: TL" class="cms-photo" cms-photo-caption="Dinh Độc Lập. Ảnh: TL"
                                                    data-desc="Dinh Độc Lập. Ảnh: TL" data-photo-original-="" src="http://image.tienphong.vn/665x449/Uploaded/baogiay002/2015_04_24/9b_WLNY.jpg"
                                                    style="box-sizing: border-box; border: 0px; vertical-align: middle; margin-bottom: 5px; max-width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;"
                                                    title="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ"
                                                />
                                            </a>
                                        </span>
                                        <figcaption class="fig" style="box-sizing: border-box; font-size: 12px; color: rgb(119, 119, 119); font-style: italic; text-align: center;">
                                            <span style="font-size:14px;">Dinh Độc Lập. Ảnh: TL</span>
                                        </figcaption>
                                    </figure>
                                    <div class="article-relate-b" style="box-sizing: border-box; padding: 10px 20px; border-top: 1px solid rgb(221, 221, 221); border-bottom: 1px solid rgb(221, 221, 221); margin-bottom: 10px;">
                                        <div class="collection" style="box-sizing: border-box; margin-bottom: 0px;">
                                            <article class="story theme-summary" data-id="539379" style="box-sizing: border-box; margin-bottom: 5px;">
                                                <h2 class="story-heading" style="box-sizing: border-box; margin: 0px; font-size: 1.3rem; line-height: 2rem; font-weight: 400; padding-top: 0px; padding-left: 10px; position: relative;">
                                                    &nbsp;</h2>
                                            </article>
                                            <article class="story theme-summary" data-id="758481" style="box-sizing: border-box; margin-bottom: 0px; padding-bottom: 0px; border-bottom: none; background: 0px 0px;">
                                                &nbsp;</article>
                                        </div>
                                    </div>
                                    <div class="article-body cms-body AdAsia" id="article-body" style="box-sizing: border-box; font-size: 1.5rem; line-height: 2.5rem;">
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">
                                                <span style="box-sizing: border-box;">Không làm cái việc biên chép lại những thông số các hạng mục trong Dinh Độc
                                                    Lập xây dựng hết những 150 ngàn lượng vàng thời 1960.</span>
                                            </span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Cứ lẩn thẩn nghĩ thêm về một KTS từng được hai người mời một cách ưu ái khẩn
                                                thiết. Đó là Ngô Đình Diệm và Võ Văn Kiệt.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Ngô Viết Thụ quê Thừa Thiên có một tuổi thơ nhọc nhằn, túng thiếu.&nbsp; Phải
                                                ở với ông ngoại may được ông kèm cặp chữ Hán. Chả phải mệnh&nbsp;
                                                <em style="box-sizing: border-box;">thân cư thê,</em>&nbsp;nhưng quả chàng trai Ngô Viết Thụ mang ơn nhiều bên
                                                vợ. Năm 1948, học xong Trường Cao đẳng kỹ thuật Đà Lạt, được gia đình vợ
                                                giúp sang du học ở Pháp. Năm 1950, Ngô Viết Thụ thi đậu vào Trường Quốc gia
                                                Cao đẳng Mỹ thuật Paris.</span>
                                        </p>
                                        <div class="article-photo inlinephoto" style="box-sizing: border-box; margin-bottom: 10px; font-size: 1.5rem; line-height: 2.5rem; text-align: center;">
                                            <span style="font-size:14px;">
                                                <a class="photo" data-desc="KTS Ngô Viết Thụ" data-index="1" href="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/9a_bxct.jpg"
                                                    style="box-sizing: border-box; background-color: transparent; color: rgb(165, 10, 2); text-decoration-line: none; width: 665px; height: 379px; position: relative; display: inline-block;">
                                                    <img alt="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - ảnh 1"
                                                        class="cms-photo" cms-photo-caption="KTS Ngô Viết Thụ" data-desc="KTS Ngô Viết Thụ"
                                                        data-photo-original-="" src="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/9a_bxct.jpg"
                                                        style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-left: auto; margin-right: auto; margin-bottom: 5px; display: block; width: auto;"
                                                        width="440" />
                                                </a>
                                            </span>
                                            <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                                <span style="font-size:14px;">
                                                    <span class="fig" style="box-sizing: border-box; color: rgb(34, 34, 34); font-style: italic; display: block;">
                                                        <em style="box-sizing: border-box;">KTS Ngô Viết Thụ</em>
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Đoạt giải khôi nguyên năm 1955, ông đỗ đầu giải kiến trúc La Mã, được Hội Kiến
                                                trúc sư Pháp tặng huy chương vàng. Muốn tham dự cuộc thi này, thí sinh phải
                                                có quốc tịch Pháp; tuổi dưới 25, độc thân và phải có đạo Thiên Chúa. Trong
                                                khi đó, Ngô Viết Thụ không có quốc tịch Pháp; tuổi đã 28, đã có vợ con và
                                                lại là Phật tử. Có lẽ tài năng đã cứu giúp ông. Ông đã lần lượt vượt qua
                                                4 vòng của cuộc thi và có mặt trong số 10 người ở vòng cuối. Trong kỳ thi
                                                cuối cùng (100 ngày) thí sinh không được bước chân ra ngoài trường thi.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Bài thi&nbsp;
                                                <em style="box-sizing: border-box;">Ngôi thánh đường trên đảo Địa Trung Hải,</em>&nbsp;có ngôi thánh đường hình&nbsp;
                                                <em
                                                    style="box-sizing: border-box;">parabol</em>&nbsp;trên mặt bể Địa Trung Hải như ẩn hiện dưới bầu trời. Kết
                                                    quả khi bỏ phiếu của Ban giám khảo cuộc thi (28/29), ông đoạt giải nhất
                                                    - gọi là Khôi nguyên La Mã (Premier Grand Prix de Rome); khi ấy ông 29
                                                    tuổi. Với việc đoạt giải Khôi nguyên La Mã của Viện Hàn lâm Pháp, ông
                                                    được cấp học bổng 3 năm nghiên cứu và sáng tác tại các khu biệt thự Medicis
                                                    thuộc tài sản Pháp ở La Mã. Một vinh dự lớn nữa, một triển lãm trình
                                                    bày các sơ đồ kiến trúc mang tên Ngô Viết Thụ được Tổng thống hai nước
                                                    Pháp và Ý đến cắt băng khánh thành.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            &nbsp;</p>
                                        <div class="article-photo inlinephoto" style="box-sizing: border-box; margin-bottom: 10px; font-size: 1.5rem; line-height: 2.5rem; text-align: center;">
                                            <span style="font-size:14px;">
                                                <a class="photo" data-desc="Phòng làm việc của Nguyễn Văn Thiệu" data-index="2"
                                                    href="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3301_sdqt.jpg"
                                                    style="box-sizing: border-box; background-color: transparent; color: rgb(165, 10, 2); text-decoration-line: none; width: 665px; height: 455px; position: relative; display: inline-block;">
                                                    <img alt="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - ảnh 2"
                                                        class="cms-photo" cms-photo-caption="Phòng làm việc của Nguyễn Văn Thiệu"
                                                        data-desc="Phòng làm việc của Nguyễn Văn Thiệu" data-photo-original-=""
                                                        src="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3301_sdqt.jpg"
                                                        style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-left: auto; margin-right: auto; margin-bottom: 5px; display: block; width: auto;"
                                                        width="440" />
                                                </a>
                                                <span class="fig" style="box-sizing: border-box; color: rgb(34, 34, 34); font-style: italic; display: block;">Phòng làm việc của Nguyễn Văn Thiệu</span>
                                            </span>
                                        </div>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            &nbsp;</p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Vào những năm đầu 60, ngành qui hoạch trên toàn thế giới vẫn còn đang ở giai
                                                đoạn đầu phát triển, và tại Việt Nam lúc đó chỉ có ba người có cả hai văn
                                                bằng kiến trúc sư và văn bằng phát triển quốc gia tại nước ngoài là: KTS
                                                Huỳnh Kim Mãng (GS Cao đẳng kiến trúc Sài Gòn), KTS Lê Văn Lắm (giám đốc
                                                Tổng nha kiến thiết đô thị) và KTS Ngô Viết Thụ.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Năm 1960, KTS Ngô Viết Thụ về Sài Gòn làm việc theo lời mời của Tổng thống Ngô
                                                Đình Diệm ở tuổi 30. Một thời kỳ sung sức, hứng khởi. Ông là tác giả nhiều
                                                đồ án xây dựng, kiến trúc đồ sộ, trong đó có Dinh Độc Lập, bây giờ là dinh
                                                Thống Nhất, Đại học sư phạm Huế, Trung tâm nguyên tử Đà Lạt. Đại Chủng viện
                                                Đà Lạt, Viện Đại học Huế, Làng Đại học Thủ Đức, chợ Đà Lạt, Khách sạn Hương
                                                Giang 1 Huế, Nhà thờ Phú Cam, Trụ sở Việt Nam Hàng không vv&hellip;</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">&hellip; Tới lui trên khoảng cỏ trước Dinh Độc lập, tôi ngắm ngó hồi lâu để cố
                                                mà vỡ vạc ra những nắc nỏm của thiên hạ rằng trong kiến trúc Dinh,&nbsp;
                                                yếu tố mỹ thuật và kỹ thuật luôn đổi mới sáng tạo, dung chứa một bản sắc
                                                độc đáo và triết lý sâu sắc. Trong công trình Dinh Thống Nhất, ông áp dụng
                                                khoa chiết tự vào thiết kế mặt đứng: chữ&nbsp;
                                                <em style="box-sizing: border-box;">Vương</em>&nbsp;và chữ&nbsp;
                                                <em style="box-sizing: border-box;">Tam&nbsp;</em>- tượng trưng cho&nbsp;
                                                <em style="box-sizing: border-box;">Nhân, Minh, Võ đức</em>&nbsp;- để nhắc nhở những ai chủ trì tại đó phải có
                                                tài đức của một nhà lãnh đạo. Chữ&nbsp;
                                                <em style="box-sizing: border-box;">Chủ</em>&nbsp;- giữ vững chủ quyền đất nước, chữ&nbsp;
                                                <em style="box-sizing: border-box;">Khẩu -</em>&nbsp;đảm bảo tự do ngôn luận của người dân, chữ&nbsp;
                                                <em style="box-sizing: border-box;">Trung</em>&nbsp;- trung với quốc dân, và chữ&nbsp;
                                                <em style="box-sizing: border-box;">Hưng&nbsp;</em>- làm cho đất nước hưng thịnh. Tổng thể khối kiến trúc Dinh
                                                thống nhất có hình chữ&nbsp;
                                                <em style="box-sizing: border-box;">Cát</em>&nbsp;hàm nghĩa tốt lành...</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Hình như ý nghĩa chiết tự - triết học và cái tao nhã của Dinh Độc Lập như một
                                                mục đích, cảm hứng chủ đạo là dân chủ đã rộng đường cho hậu thế, ngay từ
                                                lúc Dinh khánh thành (1966) đã mặc sức khen chê?</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">&nbsp;Chữ&nbsp;
                                                <em style="box-sizing: border-box;">Trung,&nbsp;</em>nếu là trung với vua, với nước thì phải có chữ&nbsp;
                                                <em
                                                    style="box-sizing: border-box;">Tâm</em>&nbsp;ở dưới? Còn không thì&nbsp;
                                                    <em style="box-sizing: border-box;">trung&nbsp;</em>chỉ mang nghĩa chính giữa. Chữ&nbsp;
                                                    <em style="box-sizing: border-box;">cát&nbsp;</em>là tốt. Nhưng chiết tự, chữ&nbsp;
                                                    <em style="box-sizing: border-box;">cát&nbsp;</em>có hình thót hậu. Về phong thủy, người ta kiêng kiểu đất
                                                    thót hậu. Vượng địa phải là vuông vắn hay nở hậu, mới lâu dài, tốt đẹp.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Cũng như vậy, bao nhiêu những lời khen tặng về bức rèm đá hình cây trúc theo
                                                điển&nbsp;
                                                <em style="box-sizing: border-box;">Tiết trực Tâm Hư</em>&nbsp;của nhà Nho ca tụng khí tiết cương trực của người
                                                quân tử.&nbsp;
                                                <em style="box-sizing: border-box;">Trúc tiết tâm hư thị ngã sư</em>&nbsp; (lòng rỗng của đốt trúc đích thầy
                                                ta) Rằng đây là điều mà ông Diệm ưa thích. Quốc huy thời ông Diệm chính là
                                                cành trúc.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Tấm rèm đá này ở giữa với mục đích che chắn hung khí từ đại lộ Thống Nhất nhiễm
                                                vào và đón ánh sáng không khí tự nhiên ùa vào hành lang. Thế mà không thiếu
                                                những suy luận rằng, các đốt trúc trắng này trông xa như hình xương ống chân,
                                                ống tay. Cái mà người ta gọi là rèm lại chính là một số xương ống tay, ống
                                                chân treo trên dinh Độc Lập. Đây là một điềm báo trước cái chết của gia đình
                                                ông Diệm(!?)&nbsp;</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            &nbsp;</p>
                                        <div class="article-photo inlinephoto" style="box-sizing: border-box; margin-bottom: 10px; font-size: 1.5rem; line-height: 2.5rem; text-align: center;">
                                            <span style="font-size:14px;">
                                                <a class="photo" data-desc="Các phòng trong Dinh Độc Lập" data-index="3" href="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3311_pezf.jpg"
                                                    style="box-sizing: border-box; background-color: transparent; color: rgb(165, 10, 2); text-decoration-line: none; width: 665px; height: 455px; position: relative; display: inline-block;">
                                                    <img alt="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - ảnh 3"
                                                        class="cms-photo" cms-photo-caption="Các phòng trong Dinh Độc Lập" data-desc="Các phòng trong Dinh Độc Lập"
                                                        data-photo-original-="" src="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3311_pezf.jpg"
                                                        style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-left: auto; margin-right: auto; margin-bottom: 5px; display: block; width: auto;"
                                                        width="440" />
                                                </a>
                                                <span class="fig" style="box-sizing: border-box; color: rgb(34, 34, 34); font-style: italic; display: block;">Các phòng trong&nbsp;Dinh Độc Lập</span>
                                            </span>
                                        </div>
                                        <div class="article-photo inlinephoto" style="box-sizing: border-box; margin-bottom: 10px; font-size: 1.5rem; line-height: 2.5rem; text-align: center;">
                                            <span style="font-size:14px;">
                                                <a class="photo" data-desc="" data-index="4" href="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3307_pepq.jpg"
                                                    style="box-sizing: border-box; background-color: transparent; color: rgb(165, 10, 2); text-decoration-line: none; width: 665px; height: 455px; position: relative; display: inline-block;">
                                                    <img alt="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - ảnh 4"
                                                        class="cms-photo" data-photo-original-="" src="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3307_pepq.jpg"
                                                        style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-left: auto; margin-right: auto; margin-bottom: 5px; display: block; width: auto;"
                                                        width="440" />
                                                </a>
                                            </span>
                                        </div>
                                        <div class="article-photo inlinephoto" style="box-sizing: border-box; margin-bottom: 10px; font-size: 1.5rem; line-height: 2.5rem; text-align: center;">
                                            <span style="font-size:14px;">
                                                <a class="photo" data-desc="" data-index="5" href="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3308_pxsc.jpg"
                                                    style="box-sizing: border-box; background-color: transparent; color: rgb(165, 10, 2); text-decoration-line: none; width: 665px; height: 455px; position: relative; display: inline-block;">
                                                    <img alt="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - ảnh 5"
                                                        class="cms-photo" data-photo-original-="" src="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3308_pxsc.jpg"
                                                        style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-left: auto; margin-right: auto; margin-bottom: 5px; display: block; width: auto;"
                                                        width="440" />
                                                </a>
                                            </span>
                                        </div>
                                        <div class="article-photo inlinephoto" style="box-sizing: border-box; margin-bottom: 10px; font-size: 1.5rem; line-height: 2.5rem; text-align: center;">
                                            <span style="font-size:14px;">
                                                <a class="photo" data-desc="" data-index="6" href="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3316_fuvd.jpg"
                                                    style="box-sizing: border-box; background-color: transparent; color: rgb(165, 10, 2); text-decoration-line: none; width: 665px; height: 455px; position: relative; display: inline-block;">
                                                    <img alt="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - ảnh 6"
                                                        class="cms-photo" data-photo-original-="" src="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3316_fuvd.jpg"
                                                        style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-left: auto; margin-right: auto; margin-bottom: 5px; display: block; width: auto;"
                                                        width="440" />
                                                </a>
                                            </span>
                                        </div>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            &nbsp;</p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Có lẽ hiếm một công trình như Dinh Độc Lập tròn nửa thế kỷ dằng dặc những luận
                                                bàn này khác nhưng nó vẫn tồn tại vẫn trở thành một trong Trung tâm hành
                                                chính quốc gia mọi thời. Vẫn rốt cuộc một mẫu số chung là nó&hellip; lạ nhưng
                                                bắt mắt. Và đẹp!</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Xin trích thêm bộc bạch của KTS Ngô Viết Nam Sơn (con trai cố KTS Ngô Viết Thụ)
                                                trong một bài viết về cha mình.</span>
                                        </p>
                                        <div class="banner box" position="Web_AdsArticleMiddle" style="box-sizing: border-box; margin-bottom: 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <div align="center" class="adsitem banner_show" id="Web_AdsArticleMiddle_0" rel="805" style="box-sizing: border-box; margin: 0px auto 15px; font-size: 1.5rem; line-height: 2.5rem;"
                                                tag="asiaAd_video_giua bai">
                                                <div id="AdAsia" style="box-sizing: border-box; margin-bottom: 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                                    &nbsp;</div>
                                            </div>
                                        </div>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Về mặt phong thủy, đa số công trình cho các vị vua ngày xưa đều xây dựng theo
                                                triết lý bá đạo, tức là làm sao có lợi nhất cho chủ nhân, mà không tính đến
                                                chuyện gây hại cho người khác.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Với Dinh Độc Lập, cha tôi theo quan điểm vương đạo, tức là làm sao cho cộng đồng
                                                phát triển tốt, khi cộng đồng thịnh vượng, trong đó sẽ có mình. Nhiều người
                                                cho rằng trục chính đi thẳng vào dinh là xấu, nhưng cha tôi vẫn làm, và dùng
                                                hồ nước để hóa giải. Ông cho rằng, vua thì phải làm gương, phải đứng ra gánh
                                                vác, chiếu không ngay, không ngồi. Tôi tự hào về cha, và ảnh hưởng nhiều
                                                về phong cách Á Đông kết hợp với kiến trúc cổ điển Pháp trong các công trình
                                                kiến trúc của ông.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            &nbsp;</p>
                                        <div class="article-photo inlinephoto" style="box-sizing: border-box; margin-bottom: 10px; font-size: 1.5rem; line-height: 2.5rem; text-align: center;">
                                            <span style="font-size:14px;">
                                                <a class="photo" data-desc="Trên nóc Dinh Độc Lập" data-index="7" href="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3343_vdbs.jpg"
                                                    style="box-sizing: border-box; background-color: transparent; color: rgb(165, 10, 2); text-decoration-line: none; width: 665px; height: 455px; position: relative; display: inline-block;">
                                                    <img alt="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - ảnh 7"
                                                        class="cms-photo" cms-photo-caption="Trên nóc Dinh Độc Lập" data-desc="Trên nóc Dinh Độc Lập"
                                                        data-photo-original-="" src="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3343_vdbs.jpg"
                                                        style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-left: auto; margin-right: auto; margin-bottom: 5px; display: block; width: auto;"
                                                        width="440" />
                                                </a>
                                                <span class="fig" style="box-sizing: border-box; color: rgb(34, 34, 34); font-style: italic; display: block;">Trên nóc Dinh Độc Lập</span>
                                            </span>
                                        </div>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            &nbsp;</p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            &nbsp;</p>
                                        <div class="article-photo inlinephoto" style="box-sizing: border-box; margin-bottom: 10px; font-size: 1.5rem; line-height: 2.5rem; text-align: center;">
                                            <span style="font-size:14px;">
                                                <a class="photo" data-desc="Tài liệu còn lưu lại trong Dinh 40 năm trước" data-index="8"
                                                    href="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3320_lnar.jpg"
                                                    style="box-sizing: border-box; background-color: transparent; color: rgb(165, 10, 2); text-decoration-line: none; width: 665px; height: 455px; position: relative; display: inline-block;">
                                                    <img alt="Chuyện Dinh Độc Lập- Kỳ I: Bâng khuâng kiến trúc sư Ngô Viết Thụ - ảnh 8"
                                                        class="cms-photo" cms-photo-caption="Tài liệu còn lưu lại trong Dinh 40 năm trước"
                                                        data-desc="Tài liệu còn lưu lại trong Dinh 40 năm trước" data-photo-original-=""
                                                        src="http://image.tienphong.vn/w665/uploaded/baogiay002/2015_04_24/img_3320_lnar.jpg"
                                                        style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-left: auto; margin-right: auto; margin-bottom: 5px; display: block; width: auto;"
                                                        width="440" />
                                                </a>
                                                <span class="fig" style="box-sizing: border-box; color: rgb(34, 34, 34); font-style: italic; display: block;">Tài liệu còn lưu lại trong Dinh 40 năm trước</span>
                                            </span>
                                        </div>
                                        <span style="font-size:14px;">&hellip;Cha tôi là người khí tiết, không chỉ trong lời nói, mà cả hành động. Sau
                                            này ông Diệm muốn đưa cha tôi vào chức vụ Bộ trưởng Bộ Xây dựng, nhưng cha tôi
                                            từ chối. Lúc đó, làm bộ trưởng Xây dựng giàu sang, uy quyền lắm, phụ trách luôn
                                            cả xổ số kiến thiết.</span>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            &nbsp;</p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Và vẫn luôn một KTS Ngô Viết Thụ đa tài! Trong lãnh vực hội họa, nội bộ tranh&nbsp;
                                                <em
                                                    style="box-sizing: border-box;">Sơn Hà Cẩm Tú</em>&nbsp;gồm 7 bức, mỗi bức dài 2m, rộng 1m được trưng ngay
                                                    trong chính Dinh Độc Lập đã khiến ông nổi danh. Lại thạo ngón chơi đàn
                                                    Tranh, đàn Kìm và Sáo. Ông để lại hàng trăm bài thơ và bài viết.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Ông Sáu Dân (Võ Văn Kiệt) dường như tìm đến ông hơi bị muộn? Đó là thời điểm
                                                sau khi ông Thụ đi học tập cải tạo 1 năm trở về&hellip;</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Nhiều ý kiến đánh giá, sở dĩ KTS Ngô Viết Thụ không di tản vì từng chịu ảnh hưởng
                                                ông Võ Văn Kiệt trong đó có câu&nbsp;
                                                <em style="box-sizing: border-box;">khi nào anh không chịu được nữa thì biểu tôi. Chứ đi như thế nguy hiểm lắm</em>&hellip;</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Ông Sáu Dân thời điểm chưa ở cương vị Thủ tướng, một lần đi công tác nước ngoài
                                                bằng phi cơ của&nbsp;
                                                <em style="box-sizing: border-box;">Air France,</em>&nbsp;mời ông đi cùng. Ghế của KTS Ngô Viết Thụ là hạng phổ
                                                thông. Trong khi hàng ghế hạng thương gia của ông Sáu Dân lại dư. Ông Sáu
                                                đề nghị phi hành đoàn mời KTS Ngô Viết Thụ lên nhưng ông không chịu. Ông
                                                Sáu Dân kiên quyết, nếu ông không lên thì ông Sáu sẽ xuống hạng phổ thông
                                                ngồi. Khi đó KTS Ngô Viết Thụ mới chịu.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Lần đó đi Vịnh Hạ Long, ông Sáu Dân thân mài mực nho và giữ giấy cho gió biển
                                                khỏi bay để KTS Ngô Viết Thụ họa cảnh.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Thủ tướng Võ Văn Kiệt công du&nbsp; Pháp và Algeria mời KTS Ngô Viết Thụ đi cùng.
                                                Đến Pháp, không may KTS bị chứng bệnh thận cấp tính phải lưu lại chữa trị.
                                                Trong thời gian chữa bệnh&nbsp; có rất nhiều lời mời ông ở lại, và hứa bảo
                                                lãnh cả gia đình&nbsp; sang nước ngoài luôn. Nhưng ông kiên quyết trở về.
                                                Con trai ông kể lại, ông trở về vì một lời đã hứa với chú Sáu. Ông nói: &ldquo;Kẻ
                                                sĩ đã tin nhau thì không bao giờ được phụ lòng nhau&rdquo;.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Rồi có thời điểm ông là cố vấn Ban Chấp hành Hội KTS Việt Nam, và cũng là cố
                                                vấn Ban Chấp hành Hội KTS TPHCM các nhiệm kỳ I, II, III, và IV
                                                <span style="box-sizing: border-box; font-weight: 700;">
                                                    <em style="box-sizing: border-box;">.&nbsp;</em>
                                                </span>Thủ tướng Võ Văn Kiệt đã mời ông là thành viên tổ chuyên gia tư vấn kiến
                                                trúc cho Thủ tướng.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Các thành viên của tổ chức tư vấn đều chuyên làm công tác nghiên cứu, không giữ
                                                chức quyền trong bộ máy hành chính nhà nước theo chế độ &ldquo;5 không&rdquo;:
                                                không biên chế, không lương, không chức vụ, không có cấp trên cấp dưới và
                                                quan trọng nhất là không bị ràng buộc, hạn chế gì khi góp ý kiến với Thủ
                                                tướng.</span>
                                        </p>
                                        <p style="box-sizing: border-box; margin: 0px 0px 15px; font-size: 1.5rem; line-height: 2.5rem;">
                                            <span style="font-size:14px;">Lúc rời Dinh nhớ thêm chi tiết của người hướng dẫn, Ban tổ chức đám tang KTS
                                                Ngô Viết Thụ đã cho dừng linh cữu xe tang trước cổng Dinh Độc Lập để vong
                                                hồn ông được nhìn lại lần cuối tác phẩm ông đắc ý nhất trong số các tác phẩm
                                                kiến trúc mà ông đã thực hiện trong suốt cuộc đời.
                                                <br /> Nguồn:&nbsp;http://www.tienphong.vn/xa-hoi/chuyen-dinh-doc-lap-ky-i-bang-khuang-kien-truc-su-ngo-viet-thu-852415.tpo
                                            </span>
                                            <br /> &nbsp;
                                        </p>
                                    </div>
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