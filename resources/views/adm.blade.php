@extends('layouts.app')

@push('mask')
    <script src="{{ URL::asset('js/vanilla-masker/vanilla-masker.min.js') }}"></script>
    <script src="{{ URL::asset('js/vanilla-masker/masks.js') }}"></script>
@endpush

@push('cep')
    <script src="{{ URL::asset('js/cep.js') }}"></script>
@endpush

@section('content')

    <div class="ui fixed inverted menu">
        <div class="ui container">
            <div class="header item disabled">
                {{--<img class="ui mini circular image konata" src="images/maxresdefault.jpg">--}}
                <span class="main title">Home</span>
            </div>
            <div class="right menu">
                <div class="ui item">
                    <i class="undo icon"></i>
                </div>
                <div class="ui item">
                    <i class="undo icon"></i>
                </div>
            </div>
        </div>
    </div>

    <div id="first" class="ui container">
        <div class="ui pointing secondary tabular menu">
            <a class="item active" data-tab="first">Alunos</a>
            <a class="item" data-tab="second">Treinadores</a>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="first">
            <table class="ui stripped table">
                <tbody>
                <tr>
                    <td><a href="#" class="student name">Lorem</a></td>
                </tr>
                <tr>
                    <td>Lorem</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">
            <table class="ui stripped table">
                <tbody>
                <tr>
                    <td><a href="#" class="trainer name">ipsum</a></td>
                </tr>
                <tr>
                    <td><a href="#">ipsum</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="ui modal">
            <i class="close icon"></i>
            <div class="header">
                Modal Title
            </div>
            <div class="content">
                <form class="ui form">
                    <div class="fields">
                        <div class="field">
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
                    </div>

                    <div class="fields">
                        <div class="three wide field">
                            <label>CEP</label>
                            <input type="text" name="cep" placeholder="Apenas números">
                        </div>

                        <div class="four wide field">
                            <label>Rua</label>
                            <input type="text" name="street" placeholder="Rua, alameda, avenida, ...">
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
                            <input type="text" name="telephone" placeholder="Telefone Fixo">
                        </div>

                        <div class="three wide field">
                            <label>Celular</label>
                            <input type="text" name="cellphone" placeholder="Número de celular">
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



                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" tabindex="0" class="hidden">
                            <label>I agree to the Terms and Conditions</label>
                        </div>
                    </div>
                    <button class="ui button" type="submit">Submit</button>
                </form>
            </div>
            <div class="actions">
                <div class="ui button">Cancel</div>
                <div class="ui button">OK</div>
            </div>
        </div>
    </div>



@endsection