@extends('layouts.app')

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
                    <div class="four fields">
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
                    </div>

                    <div class="three fields">
                        <div class="field">
                            <label>Profissão</label>
                            <input type="text" name="profession" placeholder="Profissão">
                        </div>

                        <div class="field">
                            <label>Endereço</label>
                            <input type="text" name="name" placeholder="Nome completo">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="four wide field">
                            <label>Data de Nascimento</label>
                            <input type="date" name="date" placeholder="dd/mm/aaaa">
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