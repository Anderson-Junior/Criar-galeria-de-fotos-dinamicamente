<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Galerias Cadastradas</title>
    </head>
    <body>
        <div>
            <h1>Listagem das galerias</h1>
            @foreach ($galerias as $galeria)
                <p>Nome: {{ $galeria->nome}}</p>
            @endforeach
        </div>
    </body>
</html>
