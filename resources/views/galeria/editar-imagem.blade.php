<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Secretaria</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <h1>Editar Imagem</h1>
            <form action="/salvar-edicao-imagem/{id}" method="get">
                {{csrf_field()}}
                <div class="form-group">
                    <input readonly class="form-control" type="hidden" name="id" value="{{ $imagem->id}}">
                    <label for="nome">Alt da Imagem</label>
                    <input class="form-control" type="text" name="alt" value="{{$imagem->alt}}" required>
                    <label for="nome">Escrita</label>
                    <input class="form-control" type="text" name="escrita" value="{{$imagem->escrita}}" required>
                    <button class="btn btn-primary" style="margin-top:5px" type="submit">Salvar</button>
                </div>
            </form>
            </div>
    </body>
</html>
