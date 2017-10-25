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

            <form class="ui form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="fields">

                    <div class="five wide field">
                        {!! Form::label('name', 'Nome')!!}
                        {!! Form::text('name')!!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('cpf', 'CPF') !!}
                        {!! Form::text('cpf') !!}
                    </div>

                    <div class="four wide field">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email') !!}
                    </div>

                    <div class="two wide field">
                        <label for="gender">Sexo</label>
                        <div class="ui compact selection dropdown">
                            <input type="hidden" name="gender">
                            <i class="dropdown icon"></i>
                        </div>
                    </div>

                    <div class="four wide field">
                        {!! Form::label('date', 'Data de Nascimento') !!}
                        {!! Form::text('date') !!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('job', 'Profissão') !!}
                        {!! Form::text('job') !!}
                    </div>

                </div>

                <div class="fields">

                    <div class="three wide field">
                        <label for="cep">CEP</label>
                        <input type="text" name="cep">
                    </div>

                    <div class="four wide field">
                        {!! Form::label('street', 'Endereço') !!}
                        {!! Form::text('street') !!}
                    </div>

                    <div class="two wide field">
                        {!! Form::label('number', 'Número') !!}
                        {!! Form::text('number') !!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('neighborhood', 'Bairro') !!}
                        {!! Form::text('neighborhood') !!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('city', 'Cidade') !!}
                        {!! Form::text('city') !!}
                    </div>

                    <div class="two wide field">
                        {!! Form::label('country', 'Estado') !!}
                        {!! Form::text('country') !!}
                    </div>

                </div>

                <div class="two fields">

                    <div class="three wide field">
                        {!! Form::label('phone', 'Telefone') !!}
                        {!! Form::text('phone') !!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('cellphone', 'Celular') !!}
                        {!! Form::text('cellphone') !!}
                    </div>

                </div>

              {!! Form::submit() !!}
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
                        {!! Form::label('name', 'Nome') !!}
                        {!! Form::text('name') !!}
                    </div>
                    <div class="three wide field">
                        {!! Form::label('cpf', 'CPF') !!}
                        {!! Form::text('cpf') !!}
                    </div>
                    <div class="four wide field">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email') !!}
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
                        {!! Form::label('date', 'Data de Nascimento') !!}
                        {!! Form::text('date') !!}
                    </div>
                    <div class="three wide field">
                      {!! Form::label('rg', 'RG') !!}
                      {!! Form::text('rg') !!}
                    </div>
                </div>

                <div class="fields">
                    <div class="three wide field">
                        <label>CEP</label>
                        <input type="text" name="cep" placeholder="Apenas números" maxlength="9">
                    </div>

                    <div class="four wide field">
                      {!! Form::label('street', 'Rua') !!}
                      {!! Form::text('street') !!}
                    </div>

                    <div class="two wide field">
                      {!! Form::label('number', 'Número') !!}
                      {!! Form::text('number') !!}
                    </div>

                    <div class="three wide field">
                      {!! Form::label('neighborhood', 'Bairro') !!}
                      {!! Form::text('neighborhood') !!}
                    </div>

                    <div class="three wide field">
                      {!! Form::label('city', 'Cidade') !!}
                      {!! Form::text('city') !!}
                    </div>

                    <div class="two wide field">
                      {!! Form::label('country', 'Estado') !!}
                      {!! Form::text('country') !!}
                    </div>
                </div>

                <div class="two fields">
                    <div class="three wide field">
                      {!! Form::label('phone', 'Telefone') !!}
                      {!! Form::text('phone') !!}
                    </div>

                    <div class="three wide field">
                      {!! Form::label('cellphone', 'Celular') !!}
                      {!! Form::text('cellphone') !!}
                    </div>
                </div>

                <!-- <button class="ui button" type="submit">Submit</button> -->
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
