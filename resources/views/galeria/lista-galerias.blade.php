<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Galerias Cadastradas</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
        <h1>Listagem das galerias</h1>
        <div class="d-flex flex-row-reverse bd-highlight">
          <div class="p-2 bd-highlight">
              <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Adicionar nova galeria"
                 href="{{ route('nova-galeria', ['secretaria' => $secretaria_id]) }}">
                  <i class="material-icons">add_box</i>
              </a>
          </div>
        </div>

            @foreach ( $galerias as $galeria)
                <div class="card alinhamento" style="width: 18rem; margin-bottom:5px">
                  <div class="card-body">
                    <h5 class="card-title">{{ $galeria->nome }}</h5>
                    <a class="btn btn-primary" href = "{{ route('lista-categoria', ['galeria' => $galeria->id]) }}">Ver Categorias</a>
                    <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar galeria"
                        onclick="window.location.href = '/editar-galeria/' + {{$galeria->id}}">
                        <i class="material-icons" >edit</i>
                    </button>
                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Excluir galeria"
                        onclick="if(confirm('Confirma a exclusão desta categoria?')){
                            window.location.href = '/excluir-galeria/' + {{$galeria->id}}
                            }">
                        <i class="material-icons">delete_forever</i>
                    </button>
                  </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
