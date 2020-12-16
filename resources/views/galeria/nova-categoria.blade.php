<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Nova Categoria</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
        <h1>Nova Categoria</h1>
        <form action="salvar-categoria" method="post">
            {{csrf_field()}}
            <div>
                <label for="nome">Nome Categoria</label>
                <input class="form-control" type="text" name="nome" value="" required>
                <button type="submit" class="btn btn-primary" style="margin-top:5px">Salvar</button>
            </div>
        </form>
        </div>

    </body>
</html>
