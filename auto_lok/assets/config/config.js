jQuery(document).ready(function ($) {
    'use strict';

    $('#contactform').submit(function () {
        var action = $(this).attr('action');
        $("#message").slideUp(750, function () {
            $('#message').hide();
            $('#submit').attr('disabled', 'disabled');
            $.post(action, {
                marca: $('#marca').val(),
                cor: $('#cor').val(),
                ano: $('#ano').val(),
                km: $('#km').val()
               

            },
                    function (data) {
                        document.getElementById('message').innerHTML = data;
                        $('#message').slideDown('slow');
                        $('#submit').removeAttr('disabled');
                        
                        $(window).trigger('resize');
                    }
            );
        });
        return false;
    });
});
