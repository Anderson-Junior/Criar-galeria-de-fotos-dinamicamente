<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Categoria</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <h1>Editar Galeria</h1>
            <form action="/salvar-edicao-galeria/{id}" method="get">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nome">Nome Galeria</label>
                    <input readonly class="form-control" type="hidden" name="id" value="{{ $galeria->id}}">
                    <input class="form-control" type="text" name="nome" value="{{$galeria->nome}}" required>
                    <button class="btn btn-primary" style="margin-top:5px" type="submit">Salvar</button>
                </div>
            </form>
            </div>
    </body>
</html>
