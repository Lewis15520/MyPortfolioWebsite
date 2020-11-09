require('./bootstrap');
require('./jquery');

$(document).ready(function() {

    checkScrollForHeader();
    $(document).scroll(function() {
        checkScrollForHeader();
    });

    function checkScrollForHeader()
    {
        if($(window).scrollTop() === 0) {
            $('header').removeClass('scrolled');
        } else {
            if (!$('header').hasClass('scrolled')) {
                $('header').addClass('scrolled');
            }
        }
    }

    $(document).on('click', '.experienceItem', function() {
        let experienceId = $(this).attr('id');
        $('.experiencePaneShow').removeClass('experiencePaneShow');
        $('.switcher .active').removeClass('active');
        $('#' + experienceId + '-pane').addClass('experiencePaneShow');
        $(this).addClass('active');
    });

});
