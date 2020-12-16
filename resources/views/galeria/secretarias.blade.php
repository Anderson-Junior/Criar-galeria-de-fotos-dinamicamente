<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Secretarias Cadastradas</title>
        <x-scripts-links/>
    </head>
    <body>
        <div>
            <h1>Listagem das secretarias:</h1>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
            <p class="text-gray-700 text-base">
                @foreach ( $secretarias as $secretaria )
                    <p>Nome: {{ $secretaria->nome }}</p>
                @endforeach
            </p>
          </div>
    </body>
</html>
