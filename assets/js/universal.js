jQuery(document).ready(function ($) {

    // Cost - START
    $(".lib-cost-wrapper .lib-cost-tab").click(function () {
        $(".lib-cost-wrapper .lib-cost-tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".lib-cost-wrapper .lib-cost-tab-item").hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active");
    // Cost - END

});