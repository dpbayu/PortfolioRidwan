$('.page-scroll').on('click', function (e) {
    var section = $(this).attr('href');
    var menu = $(section);
    $('html , body').animate({
        scrollTop: menu.offset().top - 75
    });
    e.preventDefault();
});