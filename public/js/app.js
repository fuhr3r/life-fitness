$('#menuButton').click(function(event) {
    $('.ui.sidebar').sidebar('toggle');
});

var resim = $("body");

resim.hammer().on("swiperight", function(ev) {
    $('.ui.sidebar').sidebar('toggle');
});

$('.tabular.menu .item').tab();

$('.name').click(function () {
    $('.ui.modal').modal('show');
});

$('.ui.dropdown').dropdown();

// $(document).ready(function() {
//     $('.ui.form').form({
//         fields: {
//             CPF: {
//                 identifier  : 'CPF',
//                 rules: [
//                     {
//                         type   : 'empty',
//                         prompt : 'Por favor, digite seu CPF'
//                     },
//                     {
//                         type   : 'empty',
//                         prompt : 'CPF inválido'
//                     }
//                 ]
//             },
//             password: {
//                 identifier  : 'password',
//                 rules: [
//                     {
//                         type   : 'empty',
//                         prompt : 'Por favor, digite sua senha'
//                     },
//                     {
//                         type   : 'length[6]',
//                         prompt : 'Sua senha deve conter no mínimo 6 dígitos'
//                     }
//                 ]
//             }
//         }
//     });
// });