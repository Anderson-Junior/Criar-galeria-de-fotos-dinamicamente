<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lista de imagens</title>
        <x-scripts-links/>
        <x-fancybox/>
        <x-carimbos/>
    </head>
    <body>
        <div class="container">
            <h1>Fotos</h1>
            <div class="gallery">
                <div class="d-flex flex-row flex-wrap justify-content-around" >
                    @foreach ($imagem  as $value)
                        <div class="alinhamento" style="width: 18rem; margin-bottom:25px">
                            <a href="/storage/{{ $value->img_thumb }}" class="card-title" class="imgs" data-fancybox="img" data-caption="">
                                <img src="/storage/{{ $value->img_thumb }}" alt="erro" style="margin-bottom:10px">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
