<style media="screen">
        .container{
            position: relative;
        }
        #image {
            position: absolute;
        }
        #texto {
           position: absolute;
           font-size: 32px;
           right: 5px;
           bottom: 5px;
           color: red;
       }
       .gallery a.imgs::after{
           content: attr(data-caption);
           position: absolute;
           font-size: 20px;
           right: 5px;
           bottom: 5px;
           color: white;
           -webkit-text-stroke: 1px black;
           font-weight: bold;
           font-variant: all-petite-caps;

       }

       .gallery a.imgs.com-carimbo::before{
           content: "";
           position: absolute;
           right: 5px;
           top: 5px;
           background: url("img/carimbo.jpeg") no-repeat center;
           background-size: contain;
           height: 50px;
           width: 50px;
           background-color: #0000005c;
           box-shadow: 0 0 20px #000000de;
           border-radius: 50%;
       }

     </style>
