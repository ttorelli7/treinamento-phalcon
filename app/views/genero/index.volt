{% extends "layouts/default.twig" %}

{% block title %}
    <div class="ui text container">
        <h1 class="ui inverted header">
            Gerenciamento de Gêneros
        </h1>
    </div>
{% endblock %}

{% block content %}
    <!--Cadastro de genero-->
    <div class="row">
        <div class="left aligned column">
            <div class="sixteen wide column">
                <h3 class="ui header">Cadastro de Genero</h3>
                <div class="ui form">
                    <form name="" action="" method="post">
                        <div class="three fields">
                            <div class="field">
                                <label>Gênero</label>
                                <input name="nome" type="text" placeholder="Gênero">
                            </div>
                        </div>
                        <div class="ui buttons">
                            <a href="" type="reset" class="ui button">Apagar</a>
                            <div class="or"></div>
                            <button type="submit" class="ui positive button">Salvar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="left aligned column">
            <div class="sixteen wide column">
                <h3 class="ui header">Cadastros</h3>
                <table class="ui compact celled definition table">
                    <thead class="full-width">
                    <tr>
                        <th>Autores</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Teste</td>
                        <td><a href="">editar</a> | <a href="">excluir</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}