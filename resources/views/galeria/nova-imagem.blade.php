<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Nova Imagem</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
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
                    <button class="btn btn-primary " type="submit">Submit</button>
                </div>
            </form>
            @if(isset($imagem))
                <img src="{{asset('img/galeria/' . $imagem)}}" alt="">
            @endif

        </div>
    </body>
</html>
