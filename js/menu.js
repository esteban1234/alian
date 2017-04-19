$(function() {
    var contador = 1;
    var pull = $('#pull');
    menu = $('.menu ul');
    menuHeight = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        if (contador == 1) {
           menu.slideToggle(100);
           $("#icon-abierto").hide(100);
           $("#icon-cerrado").show(100);
            contador = 0;
        } else {
            menu.slideToggle(100);
            contador = 1;
           $("#icon-abierto").show(100);
           $("#icon-cerrado").hide(100);
        }
    });
});