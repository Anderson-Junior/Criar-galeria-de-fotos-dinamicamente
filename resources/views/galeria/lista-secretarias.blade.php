<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Secretarias Cadastradas</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="container mx-auto">
            <div>
                <h1 class="text-3xl">Listagem das secretarias</h1>
            </div>
            @foreach ( $secretarias as $secretaria )
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $secretaria->nome }}</div>
                    <p class="text-gray-700 text-base">
                    </p>
                  </div>
            @endforeach
        </div>
    </body>
</html>
