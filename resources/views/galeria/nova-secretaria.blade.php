<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Secretaria</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <h1>Nova Secretaria</h1>
            <form action="/salvar-secretaria" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nome">Nome Secretaria</label>
                    <input class="form-control" type="text" name="nome" value="" required>
                    <button class="btn btn-primary" style="margin-top:5px" type="submit">Salvar</button>
                </div>
            </form>
            </div>
    </body>
</html>
