$('#menuButton').click(function(event) {
    $('.ui.sidebar').sidebar('toggle');
});

var resim = $("body");

resim.hammer().on("swiperight", function(ev) {
    $('.ui.sidebar').sidebar('toggle');
});

$('.tabular.menu .item').tab();