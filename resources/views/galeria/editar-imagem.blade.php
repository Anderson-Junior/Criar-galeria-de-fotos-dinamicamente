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

                    <x-select-classes/>
                    <select x-cloak id="select">
                        @foreach ($imagem->classes as $classe)
                            <option value="{{$classe->id}}">{{$classe->nome}}</option>
                        @endforeach
                    </select>

                    <button class="btn btn-primary" style="margin-top:5px" type="submit">Salvar</button>
                </div>
            </form>

            <div class=" d-flex justify-content-center">
                <table class="table-auto" style="margin-top:50px">
                    <thead>
                      <tr>
                        <th class="px-4 py-2">Classe</th>
                        <th class="px-4 py-2">Descrição</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($classes as $classe)
                          <tr>
                              <td class="border px-4 py-2">{{$classe->nome}}</td>
                              <td class="border px-4 py-2">{{$classe->descricao}}</td>
                          </tr>
                      @endforeach
                    </tbody>
              </table>
            </div>


        </div>
    </body>
</html>
