<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Nova Categoria</title>
    </head>
    <body>
        <div class="container mx-auto">
        <h1 class="text-3xl">Nova Categoria</h1>
        <form action="/salvar-categoria" method="post">
            {{csrf_field()}}
            <div>
                <label for="nome">Nome Categoria</label>
                <input type="text" name="nome" value="" required>
                <button type="submit">Salvar</button>
            </div>
        </form>
        </div>

    </body>
</html>
