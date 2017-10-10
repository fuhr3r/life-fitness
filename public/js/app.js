$('#menuButton').click(function(event) {
    $('.ui.sidebar').sidebar('toggle');
});

let resim = $("body");

resim.hammer().on("swiperight", function(ev) {
    $('.ui.sidebar').sidebar('toggle');
});

$('.tabular.menu .item').tab();

$('.new.user.action').click(function () {
    $('.ui.student.modal').modal('show');
});

$('.new.trainer.action').click(function () {
    $('.ui.trainer.modal').modal('show');
});

$('.ui.accordion').accordion();
