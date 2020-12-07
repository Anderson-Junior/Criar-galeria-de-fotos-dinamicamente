<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Galerias</title>
    </head>
    <body>
        <h1>Nova Galeria</h1>
        <form action="/salvar-galeria" method="post">
            {{ csrf_field() }}
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="">
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
