$(document).ready(function() {
    $('.carousel').carousel({
        interval: 2000
    });

    $('.carousel').carousel('cycle');
});
//Set active 
<script type="text/javascript" charset="utf-8">
    $(document).each(function () {

        $(function () {
            $('li a').click(function (e) {
                e.preventDefault();
                $('a').removeClass('nav-act');
                $(this).addClass('nav-act');
            });
        });
    });
</script>





