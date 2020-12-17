<script>
      window.addEventListener('load', function() {
        $('.gallery > *').fancybox({ //buscar na pagina, buscar os elementos e inicializar comforme os parametros. usando a classe .imgs ou o data-fancybox="img"
          buttons : [
            'slideShow',
            'share',
            'zoom',
            'fullScreen',
            'close',

          ],
          arrows: true,
          thumbs : {
            autoStart : true
          }
        });
    });
</script>

<style media="screen">

    .gallery{
        display: grid;
        grid-template-columns: repeat(auto-fill,minmax(300px,1fr));
        grid-gap: 20px;
    }
    .gallery img{
        width: 100%;
    }

    .gallery a:hover{
        box-shadow: 0px 0px 20px;
    }


    a.hidden{
        display: none;
    }

</style>
