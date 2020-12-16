<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Categorias Cadastradas</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <h1>Listagem das categorias</h1>
            <div class="d-flex flex-row-reverse bd-highlight">
              <div class="p-2 bd-highlight">
                  <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Adicionar nova galeria"
                     href="{{ route('nova-categoria', ['galeria' => $galeria_id]) }}">
                      <i class="material-icons">add_box</i>
                  </a>
              </div>
            </div>

            @foreach ($categorias as $categoria)
                <div class="card alinhamento" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">{{ $categoria->nome }}</h5>
                    <a class="btn btn-primary" href = "{{ route('lista-imagem', ['categoria' => $categoria->id]) }}">Ver Fotos</a>
                    <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar categoria"
                        onclick="window.location.href = '/editar-categoria/' + {{$categoria->id}}">
                        <i class="material-icons" >edit</i>
                    </button>
                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Excluir categoria"
                        onclick="if(confirm('Confirma a exclusão desta categoria?')){
                            window.location.href = '/excluir-categoria/' + {{$categoria->id}}
                            }">
                        <i class="material-icons">delete_forever</i>
                    </button>

                  </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
