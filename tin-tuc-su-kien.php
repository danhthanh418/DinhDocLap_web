<?php 
    require './lib/dbCon.php';
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
    Tin tức - Sự kiện - Dinh độc lập
</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/960.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <!--script-->
    <script type="text/javascript" src="./assets/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./assets/js/html5.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="./assets/js/libraries.js"></script>
    <!--cycle2-->
    <script type="text/javascript" src="./assets/js/cycle/jquery.cycle2.js"></script>
    <script type="text/javascript" src="./assets/js/cycle/Tile/jquery.cycle2.tile.js"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="./assets/js/jquery.mousewheel-3.0.6.pack.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="./assets/js/source/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/js/source/jquery.fancybox.css" />
    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="./assets/js/source/helpers/jquery.fancybox-buttons.css" />
    <script type="text/javascript" src="./assets/js/source/helpers/jquery.fancybox-buttons.js"></script>

    <script type="text/javascript" src="./assets/js/jscrollpane/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="./assets/js/jscrollpane/jquery.jscrollpane.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/js/jscrollpane/jquery.jscrollpane.css" />

    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
</head>
<body class="LTR Safari Chrome Safari5 Chrome5 VIVN ContentBody" >
    <form method="post" action="/tin-tuc-su-kien/tin-tuc-su-kien.php" id="aspnetForm">

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=fTu1u7xO2N5D5vEsUK88Q94L8_ch7qZzYurKacvUCBpDHsq8_b57veigFKdGM0S_SfvEmk7M6wA0RncSrD63DNNYR401&amp;t=635589687467565191" type="text/javascript"></script>

<input type="hidden" name="lng" id="lng" value="vi-VN" />
<script src="/ScriptResource.axd?d=vBUhGA4CXo1FOusIB3qjtsuv9e0M248BPVt2yhQQGKHK-bh2t27oSG3qggMb3W4Pp1Y-NqK7ndBJ5DXEsUMV8-w9MLqTMzA9UFxmCxFQUEZ_Ng_E0&amp;t=3f0ccc7f" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=X_49sSFFmr0r8KwXaieXa2Pnh4P_zfoPQ8vreYchTIOG-7Tzj29wbDMWL2qRb3UT_aWCXPlDF_6l-43WLvUHLfmKvC1II4cHfNfb3kIy4eNSIUB2R3hi90zjSZ4L-nY2mCxLQQ2&amp;t=3f0ccc7f" type="text/javascript"></script>
<div>

    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="06BA3DFF" />
</div>
        <div id="ctl00_manPage">

</div><script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$manScript', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
//]]>
</script>

        
       
        <div id="header">
        <div class="container_12">
            <div class="wrap_logo grid_3 alpha">
                <a href="../index.php" class="logo"></a>
            </div>

            <div class="wrap_slogan grid_3 alpha">
                <span>Di tích lịch sử</span>
                <a href="../index.php" class="slogan_txt"></a>
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
                            <a href="index.php">
                                Trang chủ</a>
                        </li>

                        <li class="">
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

                        <li class="nav-act">
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
            <div id="ctl00_pSliderSub">
    
                <div class="wrap_slider_sub">
                    <div id="slider_sub" style="width: 100%">
                        <div class="cycle-slideshow"
                            data-cycle-timeout="5000"
                            data-cycle-next="#next4"
                            data-cycle-prev="#prev4"
                            data-cycle-fx="fade"
                            data-cycle-tile-vertical="false"
                            data-cycle-tile-count="5">
                             <img src="assets/img/MBMCMS/06f7eed1-5add-407e-a82a-86b83f5901f4.jpg" height="100%" width="100%">
                        </div>
                    </div>
                   
                </div>
            
</div>

            
   
    <!--end wrap_slider-->
    <div id="main_content_sub">
        <div class="container_12">
            <div class="breakcumb">
                <span  class="CMSBreadCrumbsCurrentItem">Tin tức - Sự kiện</span>
            </div>
            <!--// end breakcumb-->
            <div class="title_bar">
                <ul class="nav_title">
                    <!-- InstanceBeginEditable name="TITLE_BAR" -->
                    <li class="nav_title_act">
                        <a>Tin tức - Sự kiện</a>
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
                <div class="grid-new">
                    <div class="item">
                        <ul class="news-item">
                            
                                    <li>
                                        <a class="block" href="./tin-tuc-su-kien/tin-tuc-su-kien/oan-ai-bieu-cac-nuoc-tieu-vung-song-me-cong-tham-q.php">
                                        <div class="news-thumbs" style="background-image:url(assets/img/getattachment/1-1.jpg);width:260px;background-position:center center;background-repeat:no-repeat">
                                            
                                        </div></a>
                                        <div class="news-info" style="float:left;width:600px;">
                                            <h2><a href="./tin-tuc-su-kien/oan-ai-bieu-cac-nuoc-tieu-vung-song-me-cong-tham-q.php">Đoàn đại biểu các nước tiểu vùng sông Mê Công tham quan Dinh Độc Lập</a></h2>
                                            <time>04-04-2018 - 09:34</time>
                                            <div class="news-description">
                                               Đoàn đại biểu các nước tiểu vùng sông Mê Công tham quan Dinh Độc Lập
                                            </div>
                                            <a href="./tin-tuc-su-kien/oan-ai-bieu-cac-nuoc-tieu-vung-song-me-cong-tham-q.php" class="btn_more">Xem thêm</a>
                                        </div>  
                                        <div style="clear:both"></div>                                      
                                    </li>
                                
                                    
                                        <div style="clear:both"></div>                                      
                                    </li>
                                <div class="PagerControl"><div style="padding-bottom:4px;padding-top:4px;font-weight: bold;;" class="PagerResults"></div>
                                <!-- <div class="PagerNumberArea"><span>&nbsp;&nbsp; <span class="SelectedPrev" >&lt;</span></span>
                                    <span style="padding-left:5px;"></span>
                                    <span>&nbsp;<span class="SelectedPage">1</span>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=2"   class="UnselectedPage">2</a>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=3"   class="UnselectedPage">3</a>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=4"   class="UnselectedPage">4</a>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=5"   class="UnselectedPage">5</a>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=6"   class="UnselectedPage">6</a>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=7"   class="UnselectedPage">7</a>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=8"   class="UnselectedPage">8</a>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=9"   class="UnselectedPage">9</a>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=10"   class="UnselectedPage">10</a>&nbsp;</span><span style="padding-left:10px;"></span>
                                    <span>&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=2" class="UnselectedNext">&gt;</a>&nbsp;&nbsp;<a href="../tin-tuc-su-kien/tin-tuc-su-kien.php?page=26"></a>&nbsp;</span></div></div>
                                    <input type="hidden" value="1" name="ctl00_plcMain_rpt_pager_cpage" /> -->
                                    <div id="ctl00_plcMain_rpt_pager">

</div>
                        </ul>
                        <!--//news-item-->
                        <div class="clearfix"></div>
                    </div>
                    <!--//item-->
                    <!--Page Load-->
                   
                </div>
                <!--//gird-product-->
                <!-- InstanceEndEditable -->
                <div class="clearfix"></div>
            </div>
            <!--END content-->
        </div>
    </div>
    <!--end main_content-->

           
        </div>
        
        

        <div id="ctl00_pFooterSub">
    
            <div id="footer_sub">       
        <div class="container_12">
            <div class="grid_12 f_navfooter_sub">            
                
                   
<ul class="navfooter">

                        <li>
                            <a class="" href="index.php">
                                Trang chủ</a>
                        </li>

                        <li>
                            <a class="" href="gioi-thieu.php">
                                Giới thiệu</a>
                        </li>
                        <li>
                            <a class="" href="trung-bay.php">
                                Trưng bày</a>
                        </li>
                        <li>
                            <a class="" href="tham-quan.php">
                                Tham quan</a>
                        </li>
                        <li>
                            <a class="" href="hinh-anh-tu-lieu.php">
                                Hình ảnh - Tư liệu</a>
                        </li>
                        <li>
                            <a class="" href="tin-tuc-su-kien.php">
                                Tin tức - Sự kiện</a>
                        </li>
                        <li>
                            <a class="" href="an-pham.php">
                                Sản phẩm</a>
                        </li>
                        <li>
                            <a class="f_nav_act" href="ve-chung-toi.php">
                                Về chúng tôi</a>
                        </li>
                        <li>
                            <a  class ="" href="suu-tam.php">
                                Sưu tầm
                            </a>
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
                            <li>Email: <a href="mailto:dinhdoclap@dinhdoclap.gov.vn">dinhdoclap@dinhdoclap.gov.vn</a></li>
                        </ul>
                    </div>
                    <div class="f_rcol grid_4 push_4">
                        <div class="pagerank">
                            <!-- Histats.com  START  (standard)-->
                            <script type="text/javascript">
                            document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
                            </script>
                            <a href="http://www.histats.com" target="_blank" title="web stats">
                                <script type="text/javascript">
                                try {
                                    Histats.start(1, 2387506, 4, 226, 112, 50, "00011111");
                                    Histats.track_hits();
                                } catch (err) {};
                                </script>
                            </a>
                            <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2387506&101" alt="web stats" border="0"></a></noscript>
                            <!-- Histats.com  END  -->
                        </div>
                        <div class="clearfix"></div>
                        <div class="dn_license" style="position:relative;width:250px;padding-top:10px;">
                            <span style="position:absolute;left:-9px;bottom:13px;">
                            <a title="thiết kế website, thiet ke website,hosting" href="https://www.facebook.com/bd.tren/" target="_blank" rel="dofollow">Thiết kế bởi Nhóm 12_SE109.I21</a>
                            <!--     <img style="position:absolute;right:0px;bottom:9px;" src=".././assets/img/matbao.png" alt="" width="80" height="25" />-->
                    </span></div>
                    </div>
                </div>
            </div>
<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {$get("ctl00_manScript_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();Sys.Application.initialize();
//]]>
</script>
</form>
</body>
</html>