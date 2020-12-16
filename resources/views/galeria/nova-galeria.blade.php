<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Galerias</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <h1>Nova Galeria</h1>
            <form action="salvar-galeria" method="post">
                {{ csrf_field() }}
                <label for="nome">Nome</label>
                <input  class="form-control" type="text" name="nome" value="">
                <button type="submit" class="btn btn-primary" style="margin-top:5px">Salvar</button>
            </form>
        </div>

    </body>
</html>
