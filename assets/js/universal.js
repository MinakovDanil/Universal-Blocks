jQuery(document).ready(function ($) {


    // Circle block - START
    function blockCircle() {
        const circleWrapper = $('.lib-circle-wrapper');
        const numberItems = circleWrapper.find('.lib-circle__item').length;

        circleWrapper.addClass('items-' + numberItems);
    }
    blockCircle();
    // Circle block - END

});