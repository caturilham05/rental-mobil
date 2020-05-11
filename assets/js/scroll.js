$('.page, .nav-link, .navbar-brand, .new-button').click(function(e) {
    var tujuan = $(this).attr('href');

    var elementTujuan = $(tujuan);

    $('html, body').animate({
    	scrollTop: elementTujuan.offset().top - 80
    }, 1000, 'easeInOutExpo');

    e.preventDefault();
});