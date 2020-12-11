<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Classes Cadastradas</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style media="screen">
            .alinhamento{
                display: inline-flex;
                flex-wrap: wrap;
                width: 100%;
            }
        </style>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
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