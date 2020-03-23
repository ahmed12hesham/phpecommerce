//$(document).ready(function(){
//    'use strict';
//    $('.placeholder').on('focus',function(){
//        $(this).attr('placeholder','');
//    });
//});


$(function () {

    'use strict';

    //function hide the placeholder

    $('[placeholder]').focus(function () {

        $(this).attr('data-text', $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
    }).blur(function () {
        $(this).attr('placeholder', $(this).attr('data-text'));
    });

});