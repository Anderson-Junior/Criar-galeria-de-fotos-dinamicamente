<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Categorias Cadastradas</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="container mx-auto">
            <div>
                <h1 class="text-3xl">Listagem das categorias</h1>
            </div>
            @foreach ( $categorias as $categoria )
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $categoria->nome }}</div>
                    <p class="text-gray-700 text-base">
                    </p>
                  </div>
            @endforeach
        </div>
    </body>
</html>
