showOptionsButtons();

let partId;

let resim = $("body");
resim.hammer().on("swiperight", function (ev) {
    $('.ui.sidebar').sidebar('toggle');
});

$('#menuButton').click(function (event) {
    $('.ui.sidebar').sidebar('toggle');
});

$('.tabular.menu .item').tab();

$('.new.user.action').click(function () {
    $('.ui.student.modal').modal('show');
});

$('.new.trainer.action').click(function () {
    $('.ui.trainer.modal').modal('show');
});

$('.new.part.action').click(function () {
    $('.ui.part.modal').modal('show');
});

$('.new.exercise.action').click(function () {
    $('.ui.exercise.modal').modal('show');
});

$('.new.training.action').click(function () {
    $('.parts.select').change();
    $('.ui.new.training.modal').modal('show');
});

$('.ui.accordion').accordion();

$('.ui.cancel.button').click(function () {
    $('.ui.modal').modal('hide');
});

$('.ui.dropdown').dropdown();

$('.edit.user.action').click(function () {
    $('.ui.student.modal').modal('show');
});

$('.edit.training.action').click(function () {

    let partName = $('.part.title.active').text().trim();
    let modal = $('.ui.edit.training.modal');
    let form = modal.find('form').eq(0);
    let value;
    form.find(".parts.select option").each(function () {
        if ($(this).text() == partName) {
            value = $(this).attr('value');
        }
    });

    form.find('.parts.select').val(value);

    $('.parts.select').change();


    let repetitions = $(this).parent().prevAll('.repetition.value').text();
    let serie = $(this).parent().prevAll('.serie.value').text();
    let weight = $(this).parent().prevAll('.weight.value').text();
    let id = $(this).parent().parent().attr('data-user-exercise');

    modal.modal('show').find('input[name=id]').val(id);

    modal.find('input[name=serie]').val(serie);
    modal.find('input[name=repetitions]').val(repetitions);
    modal.find('input[name=weight]').val(weight);
});

$('.delete.training.action').click(function () {
    let id = $(this).parent().parent().attr('data-user-exercise');
    $('.ui.delete.training.modal').modal('show').find('input[name=id]').val(id);
});

$('.edit.part.action').click(function () {
    let value = $(this).parent().prev().text();
    $('.ui.edit.part.modal input[name=name]').val(value);
    $('.ui.edit.part.modal').modal('show');
});

$('.delete.part.action').click(function () {
    partId = $(this).parents().eq(1).attr('data-part-id');
    $('.ui.delete.part.modal').modal('show');
});

$('.ui.part.form').submit(function (e) {
    let action = $(this).attr('action');
    console.log(action + partId);
    $(this).attr('action', action + '/' + partId);
});

$('.edit.exercise.action').click(function () { //todo: bind buttons after append
    alert(1)
   $('.ui.exercise.modal').modal('show')
});

$('.parts.select').change(function () {
    populateSelect(this)
});

$('.body.part.segment').click(function () {
    $('.is-selected').removeClass('is-selected');
    $(this).addClass("is-selected");
    console.log($(this));
    let partId = $(this).attr("data-part-id");
    let url = '/part/' + partId + '/get-exercises';
    $('.ui.training.segments').empty();
    $.get(url, function (data) {
        $.each(data, function (index, exercise) {
            $('.ui.training.segments').append(`
                <div class="ui options wrapper exercise segment">${exercise.name}
                    <div class="container options">
                        <i class="delete exercise trash outline icon action"></i>
                        <i class="edit exercise icon action"></i>
                    </div>
                 </div>`);
            showOptionsButtons();
        })
    })
});

function populateSelect(select) {
    let partId = $(select).val();
    // console.log(partId);
    let url = '/part/' + partId + '/get-exercises';
    $('.exercises.select').empty();
    $.get(url, function (data) {
        // console.log(data);
        $.each(data, function (index, exercise) {
            $('.exercises.select').append(`<option value="${exercise.id}">${exercise.name}</option>`);
        })
    })
}

function showOptionsButtons() {
    $('.options.wrapper').mouseenter(function () {
        $(this).find(".icon.action").css("opacity", 1)
    }).mouseleave(function () {
        $(this).find(".icon.action").css("opacity", 0)
    });
}