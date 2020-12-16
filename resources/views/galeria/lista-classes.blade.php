<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Classes Cadastradas</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <h1>Classes Cadastradas</h1>
            <div class="d-flex flex-row-reverse bd-highlight">
              <div class="p-2 bd-highlight">
                  <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Adicionar nova classe"
                     href="/nova-classe">
                      <i class="material-icons">add_box</i>
                  </a>
              </div>
            </div>
            @foreach ($classes as  $classe)
                <div class="card alinhamento" style="width: 18rem;">
                  <div class="card-body">
                    <h3 class="card-title">{{ $classe->nome }}</h3>
                    <h5>{{ $classe->descricao }}</h5>
                  </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
