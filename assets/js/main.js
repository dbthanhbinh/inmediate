$(document).ready(function(){
    $(document).on('scroll', function (e) {
        const top = $(this).scrollTop();
        if (top >= 100) {
            $('.site-header').addClass('mini');
        } else {
            $('.site-header').removeClass('mini');
        }
    });
})