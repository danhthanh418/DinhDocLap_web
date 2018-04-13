var $j = jQuery.noConflict();

/*===================
SUBMENU
=======================*/
var $j = jQuery.noConflict();
$j(function () {
    $j.each($j('#navigation ul.menu li').find('ul'), function () { $j(this).parent().addClass('arrow_down'); });
    $j.each($j('#navigation ul.menu li ul.sub-menu li').find('ul'), function () {
        $j(this).parent().removeClass('arrow_down');
    });
});

$j(function () {
    $j.each($j('ul.sub-menu li').find('ul'), function () { $j(this).parent().addClass('arrow_down'); });
    $j.each($j('ul.sub-menu li ul.sub2-menu li').find('ul'), function () {
        $j(this).parent().removeClass('arrow_down');
    });
});

$j(document).ready(function () {
    $j("#navigation ul.menu li").hover(function () {
        $j(this).find('ul.sub-menu').stop(true, true).slideDown();
    }, function () {
            $j(this).find('ul.sub-menu').stop(true, true).slideUp();
        });
});
$j(document).ready(function () {
    $j("ul.sub-menu li").hover(function () {
        $j(this).find('ul.sub2-menu').stop(true, true).slideDown();
    }, function () {
            $j(this).find('ul.sub2-menu').stop(true, true).slideUp();
        });

    /*tab content*/
    $j("#tab1").click(function () {
        $j("#tab_content1").css("display", "block");
        $j("#tab_content2").css("display", "none");
        $j("#tab_content3").css("display", "none");
    });
    $j("#tab2").click(function () {
        $j("#tab_content2").css("display", "block");
        $j("#tab_content1").css("display", "none");
        $j("#tab_content3").css("display", "none");
    });

    $j("#tab3").click(function () {
        $j("#tab_content3").css("display", "block");
        $j("#tab_content1").css("display", "none");
        $j("#tab_content3").css("display", "none");
    });

    /*end tab content*/
});

$j(document).ready(function () {
    $j("#navigation ul.menu li").hover(function () {
        $j(this).find('.sub-menu2').stop(true, true).slideDown();
    }, function () {
            $j(this).find('.sub-menu2').stop(true, true).slideUp();
        });
});

/*===================
SUBMENU
=======================*/
/*slider popup*/
$j(document).ready(function () {
	/*
	 *  Button helper. Disable animations, hide close button, change title type and content
	 */
    $j('.fancybox-buttons').fancybox({
        openEffect: 'none',
        closeEffect: 'none',

        prevEffect: 'none',
        nextEffect: 'none',

        closeBtn: false,

        helpers: {
            title: {
                type: 'inside'
            },
            buttons: {}
        },

        afterLoad: function () {
            this.title = this.title;
        }
    });
});
/*end slider popup*/

/*jScrollPane*/
$j(function () {
    $j('.scroll-pane').jScrollPane();
});

$j(function () {
    $j('.scroll-pane').jScrollPane(
        {
            verticalDragMinHeight: 40,
            verticalDragMaxHeight: 40,
            horizontalDragMinWidth: 40,
            horizontalDragMaxWidth: 40
        }
    );
});
/*end jScrollPane*/

/*datepicker*/
$j(function () {
    $j("#ctl00_plcMain_datepicker").datepicker({ dateFormat: 'dd-mm-yy' });
});

/*end datepicker*/
$j(document).ready(function () {
    $j("a[rel=example_group]").fancybox({
        'transitionIn': 'none',
        'transitionOut': 'none',
        'titlePosition': 'over',
        'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
    });
});


