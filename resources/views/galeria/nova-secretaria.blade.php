<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Secretaria</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="container mx-auto">
            <h1 class="text-3xl">Nova Secretaria</h1>
            <form action="/salvar-secretaria" method="post">
                {{csrf_field()}}
                <div>
                    <label for="nome">Nome Secretaria</label>
                    <input type="text" name="nome" value="" required>
                    <button type="submit">Salvar</button>
                </div>
            </form>
            </div>
    </body>
</html>
