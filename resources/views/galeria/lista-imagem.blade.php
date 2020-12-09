<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lista de imagens</title>
    </head>
    <body>
        @foreach ($imagem  as $value)
            <img src="{{ url(str_replace('public/', 'storage/', $value->img_grande)) }}" alt="erro">
        @endforeach
    </body>
</html>
