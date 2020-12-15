<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lista de imagens</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
        <style media="screen">
            #add {
                margin-top:5px;
                margin-bottom:5px;
            }
        </style>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <a id="add" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Adicionar nova imagem"
                href = "{{ route('nova-imagem', ['categoria' => $categoria_id]) }}"><i class="material-icons">add_box</i></a>
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
