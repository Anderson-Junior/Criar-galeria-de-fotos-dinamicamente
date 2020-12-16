<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lista de imagens</title>
        <x-scripts-links/>
    </head>
    <body>
        <div class="container">
            <h1>Fotos
            <a id="add" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Adicionar nova imagem"
                href = "{{ route('nova-imagem', ['categoria' => $categoria_id]) }}"><i class="material-icons">add_box</i></a>
            </h1>
            <div class="d-flex flex-row flex-wrap justify-content-around" >
                @foreach ($imagem  as $value)
                    <div class="card alinhamento" style="width: 18rem; margin-bottom:25px">
                      <div class="card-body">
                        <h5 class="card-title"><img src="/storage/{{ $value->img_thumb }}" alt="erro" style="margin-bottom:10px"></h5>
                        <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar imagem"
                            onclick="window.location.href = '/editar-imagem/' + {{$value->id}}">
                            <i class="material-icons" >edit</i>
                        </button>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Excluir imagem"
                            onclick="if(confirm('Confirma a exclusão desta imagem?')){
                                window.location.href = '/excluir-imagem/' + {{$value->id}}
                                }">
                            <i class="material-icons">delete_forever</i>
                        </button>
                      </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
