<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Nova Imagem</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <h1>Nova Imagem</h1>
            <form method="post" enctype="multipart/form-data" action="salvar-imagem">
                {{ csrf_field() }}
                <div>
                    <label for="escrita">Escrita</label>
                    <input class="form-control" required type="text" name="escrita" id="escrita">
                </div>
                <div>
                    <label for="image">Selecione uma imagem</label>
                    <input class="form-control" required type="file" id="image" name="image">
                </div>
                <div>
                    <x-select-classes/>

                    <select x-cloak id="select">
                        @foreach ($classes as $classe)
                            <option value="{{$classe->id}}">{{$classe->nome}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary" style="margin-top:5px" type="submit">Salvar</button>
                </div>

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

    </body>
</html>
