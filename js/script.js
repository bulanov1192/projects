/**
 * Created by HYPERPC on 22.04.2018.
 */

// POPUP toggler
$('.project-add_btn').click(function() {
   $('.overlay').toggleClass('hidden');
});

$('.popup_close').click(function() {
    $('.overlay').addClass('hidden');
});

$('.overlay').click(function() {
    $(this).addClass('hidden');
});