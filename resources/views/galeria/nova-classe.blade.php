<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Nova Classe</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <form class="" action="/salvar-classe" method="post">
                {{csrf_field()}}
                <h1>Nova Classe</h1>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" value="" class="form-control" required>
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" value="" class="form-control" required>
                    <button class="btn btn-primary" type="submit" style="margin-top:5px">Salvar</button>
                </div>
            </form>
        </div>
    </body>
</html>
