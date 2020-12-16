<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Secretarias Cadastradas</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <div>
                <h1 >Listagem das secretarias</h1>
                <div class="d-flex flex-row-reverse bd-highlight">
                  <div class="p-2 bd-highlight">
                      <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Adicionar nova secretaria"
                          onclick="window.location.href = '/nova-secretaria'">
                          <i class="material-icons">add_box</i>
                      </button>
                  </div>
                </div>
            </div>
            @foreach ( $secretarias as $secretaria )
                <div class="card alinhamento" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">{{ $secretaria->nome }}</h5>
                    <a class="btn btn-primary" href="{{ route('lista-galeria', ['secretaria' => $secretaria->id]) }}">Ver galerias</a>
                    <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar secretaria"
                        onclick="window.location.href = '/editar-secretaria/' + {{$secretaria->id}}">
                        <i class="material-icons" >edit</i>
                    </button>
                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Excluir secretaria"
                        onclick="if(confirm('Confirma a exclusão desta secretaria?')){
                            window.location.href = '/excluir-secretaria/' + {{$secretaria->id}}
                            }">
                        <i class="material-icons">delete_forever</i>
                    </button>
                  </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
