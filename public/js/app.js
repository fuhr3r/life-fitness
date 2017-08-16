$('#menuButton').click(function(event) {
    $('.ui.labeled.icon.sidebar').sidebar('toggle');
});

$('#home').click(function(event) {
    var data = "\webapp.html"

    window.location.href=data;
});

$('#digievolution').click(function(event) {
    var data = "\digievolution.html"

    window.location.href=data;
});

$('#quit').click(function(event) {
    window.location.href='\index.html';
});

$(document).ready(function() {
    $('.ui.form').form({
        fields: {
            CPF: {
                identifier  : 'CPF',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Por favor, digite seu CPF'
                    },
                    {
                        type   : 'empty',
                        prompt : 'CPF inválido'
                    }
                ]
            },
            password: {
                identifier  : 'password',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Por favor, digite sua senha'
                    },
                    {
                        type   : 'length[6]',
                        prompt : 'Sua senha deve conter no mínimo 6 dígitos'
                    }
                ]
            }
        }
    });
});