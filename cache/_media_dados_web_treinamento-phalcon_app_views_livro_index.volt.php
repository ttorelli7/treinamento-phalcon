<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Falcão</title>
    <base href="/treinamento-phalcon/">
    <link rel="stylesheet" type="text/css" href="assets/components/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/components/site.css">

    <link rel="stylesheet" type="text/css" href="assets/components/container.css">
    <link rel="stylesheet" type="text/css" href="assets/components/grid.css">
    <link rel="stylesheet" type="text/css" href="assets/components/header.css">
    <link rel="stylesheet" type="text/css" href="assets/components/image.css">
    <link rel="stylesheet" type="text/css" href="assets/components/menu.css">

    <link rel="stylesheet" type="text/css" href="assets/components/divider.css">
    <link rel="stylesheet" type="text/css" href="assets/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="assets/components/segment.css">
    <link rel="stylesheet" type="text/css" href="assets/components/button.css">
    <link rel="stylesheet" type="text/css" href="assets/components/list.css">
    <link rel="stylesheet" type="text/css" href="assets/components/icon.css">
    <link rel="stylesheet" type="text/css" href="assets/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="assets/components/transition.css">
    <link rel="stylesheet" type="text/css" href="assets/components/form.css">

    <link rel="stylesheet" type="text/css" href="assets/components/table.css">
    <link rel="stylesheet" type="text/css" href="assets/css/phalcon.css">
</head>
<body>

<!-- Page Contents -->
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a href="" class="item">Início</a>
                <a href="emprestimo" class="item">Empréstimo</a>
                <a href="usuario" class="item">Usuário</a>
                <a href="livro" class="item">Livro</a>
                <a href="autor" class="item">Autor</a>
                <a href="genero" class="item">Genêro</a>
            </div>
        </div>

        
    <div class="ui text container">
        <h1 class="ui inverted header">
            Gerenciamento de Livros
        </h1>
    </div>


    </div>

    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            
    <!--Cadastro de livros-->
    <div class="row">
        <div class="left aligned column">
            <div class="sixteen wide column">
                <h3 class="ui header">Cadastro de Livros</h3>
                <div class="ui form">
                    <form name="" action="" method="post">
                        <div class="three fields">
                            <div class="field">
                                <label>Titulo</label>
                                <input name="titulo" type="text" placeholder="Titulo do livro">
                            </div>
                            <div class="field">
                                <label>Ano</label>
                                <input name="ano" type="text" placeholder="Ano">
                            </div>
                            <div class="field">
                                <label>Edição</label>
                                <input name="senha" type="text" placeholder="Edição">
                            </div>
                            <div class="field">
                                <label>Autor</label>
                                <select name="autor">
                                    <option value="1">Autor</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>Gênero</label>
                                <select name="autor">
                                    <option value="1">Genero</option>
                                </select>
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
                        <th>Titulo</th>
                        <th>Ano</th>
                        <th>Edição</th>
                        <th>Autor</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Teste</td>
                        <td>teste@teste.com</td>
                        <td>123</td>
                        <td>123</td>
                        <td><a href="">editar</a> | <a href="">excluir</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        </div>
    </div>

</div>

</body>

</html>
