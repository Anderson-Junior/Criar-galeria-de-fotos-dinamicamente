<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Categoria</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <h1>Editar Categoria</h1>
            <form action="/salvar-edicao-categoria/{id}" method="get">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nome">Nome Categorias</label>
                    <input readonly class="form-control" type="hidden" name="id" value="{{ $categoria->id}}">
                    <input class="form-control" type="text" name="nome" value="{{$categoria->nome}}" required>
                    <button class="btn btn-primary" style="margin-top:5px" type="submit">Salvar</button>
                </div>
            </form>
            </div>
    </body>
</html>
