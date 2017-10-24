<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name=”viewport” content=”width=device-width, user-scalable=0; initial-scale=1.0, maximum-scale=1.0">
    <meta name=”viewport” content=”width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=false;”>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta name="theme-color" content="#000000"/>

    {{--<link rel="icon" sizes="192x192" href="nice-highres.png"> //logo--}}
    <link rel="stylesheet" href="{{ URL::asset('semantic/semantic.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css/app.css') }}"/>
    @stack('admin-nav-bar')
</head>
<body>

<div class="ui fixed inverted menu">
    <div class="ui container">
        <div class="header item disabled">
            {{--<img class="ui mini circular image konata" src="images/maxresdefault.jpg">--}}
            <span class="main title">Home</span>
        </div>
        <div class="right menu">
            <div class="ui item">
                <img src="{{ URL::asset('images/icons/sidebar/log-out.svg') }}" alt="" class="new trainer action">
            </div>
            <div class="ui item">
                <img src="{{ URL::asset('images/icons/sidebar/log-out.svg') }}" alt="" class="new user action">
            </div>
            <div class="ui item">
                <img src="{{ URL::asset('images/icons/sidebar/log-out.svg') }}" alt="" class="log out action">
            </div>
        </div>
    </div>
</div>

@yield('content')

<div class="ui large student modal">
    <i class="close icon"></i>
    <div class="header">
        Adicionar Aluno
    </div>
    <div class="content">
        <form class="ui form">
            <div class="fields">
                <div class="five wide field">
                    <label>Nome completo</label>
                    <input type="text" name="name" placeholder="Nome completo">
                </div>
                <div class="three wide field">
                    <label>CPF</label>
                    <input type="text" name="cpf" placeholder="Apenas números">
                </div>
                <div class="four wide field">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="exemplo@gmail.com">
                </div>
                <div class="two wide field">
                    <label>Sexo</label>
                    <div class="ui compact selection dropdown">
                        <input type="hidden" name="gender">
                        <i class="dropdown icon"></i>
                        <div class="default text">Sexo</div>
                        <div class="menu">
                            <div class="item" data-value="1">Masculino</div>
                            <div class="item" data-value="0">Feminino</div>
                        </div>
                    </div>
                </div>
                <div class="four wide field">
                    <label>Data de Nascimento</label>
                    <input type="date" name="date" placeholder="dd/mm/aaaa">
                </div>
                <div class="three wide field">
                    <label>Profissão</label>
                    <input type="text" name="job" placeholder="Profissão">
                </div>
            </div>

            <div class="fields">
                <div class="three wide field">
                    <label>CEP</label>
                    <input type="text" name="cep" placeholder="Apenas números" maxlength="9">
                </div>

                <div class="four wide field">
                    <label>Rua</label>
                    <input type="text" name="street" placeholder="Rua, alameda, avenida, ...">
                </div>

                <div class="two wide field">
                    <label>Número</label>
                    <input type="text" name="number" placeholder="Número">
                </div>

                <div class="three wide field">
                    <label>Bairro</label>
                    <input type="text" name="neighborhood" placeholder="Nome do bairro">
                </div>

                <div class="three wide field">
                    <label>Cidade</label>
                    <input type="text" name="city" placeholder="Nome da Cidade">
                </div>

                <div class="two wide field">
                    <label>Estado</label>
                    <input type="text" name="state" placeholder="Sigla">
                </div>
            </div>

            <div class="two fields">
                <div class="three wide field">
                    <label>Telefone</label>
                    <input type="text" name="telephone" placeholder="DDD e número">
                </div>

                <div class="three wide field">
                    <label>Celular</label>
                    <input type="text" name="cellphone" placeholder="DDD e número">
                </div>
            </div>

            <div class="fields">
                <div class="four wide field">
                    <label>Restrições</label>
                    <input type="text" name="telephone" placeholder="Telefone Fixo">
                </div>

                <div class="four wide field">
                    <label>Objetivos</label>
                    <input type="text" name="cellphone" placeholder="Número de celular">
                </div>

                <div class="three wide field">
                    <label>Período</label>
                    <input type="text" name="cellphone" placeholder="Número de celular">
                </div>
            </div>

            <button class="ui button" type="submit">Submit</button>
        </form>
    </div>
    <div class="actions">
        <div class="ui button">Cancelar</div>
        <div class="ui button">OK</div>
    </div>
</div>
<div class="ui large trainer modal">
    <i class="close icon"></i>
    <div class="header">
        Adicionar Treinador
    </div>
    <div class="content">
        <form class="ui form">
            <div class="fields">
                <div class="five wide field">
                    <label>Nome completo</label>
                    <input type="text" name="name" placeholder="Nome completo">
                </div>
                <div class="three wide field">
                    <label>CPF</label>
                    <input type="text" name="cpf" placeholder="Apenas números">
                </div>
                <div class="four wide field">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="exemplo@gmail.com">
                </div>
                <div class="two wide field">
                    <label>Sexo</label>
                    <div class="ui compact selection dropdown">
                        <input type="hidden" name="gender">
                        <i class="dropdown icon"></i>
                        <div class="default text">Sexo</div>
                        <div class="menu">
                            <div class="item" data-value="1">Masculino</div>
                            <div class="item" data-value="0">Feminino</div>
                        </div>
                    </div>
                </div>
                <div class="four wide field">
                    <label>Data de Nascimento</label>
                    <input type="date" name="date" placeholder="dd/mm/aaaa">
                </div>
                <div class="three wide field">
                    <label>RG</label>
                    <input type="text" name="rg" placeholder="Apenas números">
                </div>
            </div>

            <div class="fields">
                <div class="three wide field">
                    <label>CEP</label>
                    <input type="text" name="cep" placeholder="Apenas números" maxlength="9">
                </div>

                <div class="four wide field">
                    <label>Rua</label>
                    <input type="text" name="street" placeholder="Rua, alameda, avenida, ...">
                </div>

                <div class="two wide field">
                    <label>Número</label>
                    <input type="text" name="number" placeholder="Número">
                </div>

                <div class="three wide field">
                    <label>Bairro</label>
                    <input type="text" name="neighborhood" placeholder="Nome do bairro">
                </div>

                <div class="three wide field">
                    <label>Cidade</label>
                    <input type="text" name="city" placeholder="Nome da Cidade">
                </div>

                <div class="two wide field">
                    <label>Estado</label>
                    <input type="text" name="state" placeholder="Sigla">
                </div>
            </div>

            <div class="two fields">
                <div class="three wide field">
                    <label>Telefone</label>
                    <input type="text" name="telephone" placeholder="DDD e número">
                </div>

                <div class="three wide field">
                    <label>Celular</label>
                    <input type="text" name="cellphone" placeholder="DDD e número">
                </div>
            </div>

            <button class="ui button" type="submit">Submit</button>
        </form>
    </div>
    <div class="actions">
        <div class="ui button">Cancelar</div>
        <div class="ui button">OK</div>
    </div>
</div>

<script src="{{ URL::asset('js/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('semantic/semantic.js') }}"></script>

<script src="{{ URL::asset('js/hammer-js/hammer.min.js') }}"></script>
<script src="{{ URL::asset('js/hammer-js/hammer-time.min.js') }}"></script>
<script src="{{ URL::asset('js/hammer-js/jquery.hammer.js') }}"></script>

<script src="{{ URL::asset('js/vanilla-masker/vanilla-masker.min.js') }}"></script>
<script src="{{ URL::asset('js/vanilla-masker/masks.js') }}"></script>
<script src="{{ URL::asset('js/cep.js') }}"></script>

<script src="{{ URL::asset('js/app.js') }}"></script>

<script type="text/javascript">
    $('#parts_select').on('change', function (e) {
        part_id = $(this).val();
        url = '/part/'+part_id+'/get-exercises';
        $('#exercises_select').empty();
        $.get(url, function (data) {
            console.log(data);
            $.each(data, function (index, exercise) {
                $('#exercises_select').append(`<option value="${exercise.id}">${exercise.name}</option>`);
            })
        })
    });
</script>
</body>
</html>

