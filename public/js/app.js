$('#menuButton').click(function (event) {
    $('.ui.sidebar').sidebar('toggle');
});

let resim = $("body");

resim.hammer().on("swiperight", function (ev) {
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
    $('.ui.training.modal:not(.edit)').modal('show');
});

$('.ui.accordion').accordion();

function showOptionsButtons() {
    $('.options.wrapper').mouseenter(function () {
        $(this).find(".icon.action").css("opacity", 1)
    }).mouseleave(function () {
        $(this).find(".icon.action").css("opacity", 0)
    });
}
showOptionsButtons();

$('.ui.cancel.button').click(function () {
   $('.ui.modal').modal('hide');
});

$('.ui.dropdown').dropdown();

////////////////////////////////////////

$('.edit.user.action').click(function () {
   $('.ui.student.modal').modal('show');
});

$('.edit.training.action').click(function () {
    let repetition = $(this).parent().prevAll('.repetition.value').text();
    let serie = $(this).parent().prevAll('.serie.value').text();
    let weight = $(this).parent().prevAll('.weight.value').text();

    $('.ui.training.modal').modal({
        onShow: function () {
            $(this).find('.header').html('Editar Treino');
            $(this).find('input[name=repetitions]').val(repetition);
            $(this).find('input[name=serie]').val(serie);
            $(this).find('input[name=weight]').val(weight);
        },
        onHidden: function () {
            $('input[name=repetitions],input[name=serie],input[name=weight]').val('');
            $(this).find('.header').html('Adicionar Treino');
            $(this).modal({});
        }
    }).modal('show');
});

$('.parts.select').on('change', function () {
    let partId = $(this).val();
    console.log(partId);
    let url = '/part/' + partId + '/get-exercises';
    $('.exercises.select').empty();
    $.get(url, function (data) {
        console.log(data);
        $.each(data, function (index, exercise) {
            $('.exercises.select').append(`<option value="${exercise.id}">${exercise.name}</option>`);
        })
    })
});

$('.body.part.segment').click(function () {
    $('.is-selected').removeClass('is-selected');
    $(this).addClass("is-selected");
    let partId = $(this).children("span").attr("data-id");
    let url = '/part/' + partId + '/get-exercises';
    $('.ui.training.segments').empty();
    $.get(url, function (data) {
        console.log(data);
        $.each(data, function (index, exercise) {
            $('.ui.training.segments').append(`
                <div class="ui options wrapper training segment">${exercise.name}
                    <div class="container options">
                        <i class="trash outline icon action"></i>
                        <i class="edit training icon action"></i>
                    </div>
                 </div>`);

            showOptionsButtons();
        })
    })
});



