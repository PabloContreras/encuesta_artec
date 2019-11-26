<html>
  <head>
   <script src="https://code.highcharts.com/highcharts.js"></script>
  </head>
  <body>
    <center><h1>Resultados</h1></center>
  <div id="container" style="width:100%; height:400px;"></div>
  <br>
  <div id="container1" style="width:100%; height:400px;"></div>
  <br>
  <div id="container2" style="width:100%; height:400px;"></div>
  <br>
  <div id="container3" style="width:100%; height:400px;"></div>
  <br>
  <div id="container4" style="width:100%; height:400px;"></div>
  <br>
  <div id="container5" style="width:100%; height:400px;"></div>
  <br>
  <div id="container6" style="width:100%; height:400px;"></div>
  <br>
  <div id="container7" style="width:100%; height:400px;"></div>
  <br><br><br>
  <center><h1>Interpretación de la muestra</h1></center>
  <br>
  <div id="container8" style="width:100%; height:400px;"></div>
  </body>
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Deportes'
            },   
            series: [{
                name: 'Práctican algún deporte',
                data:  [{{ $deportes }}]
            }, {
                name: 'No práctican deportes',
                data: [{{$noDeportes}}]
            }]
        });
      });
      document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container1', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Música'
            },   
            series: [{
                name: 'Rock',
                data:  [{{ $rock }}]
            }, {
                name: 'Banda',
                data: [{{$banda}}]
            }, {
                name: 'Electronica',
                data: [{{$electronica}}]
            }, {
                name: 'Regueton',
                data: [{{$regueton}}]
            }, {
                name: 'Ninguno',
                data: [{{$noMusica}}]
            }]
        });
      });
      document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Pintores famosos'
            },   
            series: [{
                name: 'Sabe de alguno',
                data:  [{{ $pintor }}]
            }, {
                name: 'No conoce',
                data: [{{$noSabe}}]
            }]
        });
      });
       document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container3', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Música clásica'
            },   
            series: [{
                name: 'Trató de responder, aunque de manera errónea',
                data:  [{{ $respuesta }}]
            }, {
                name: 'Respondió que no sabe',
                data: [{{$noSabeMusica}}]
            }]
        });
      });
      document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container4', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Intérprete de música clásica'
            },   
            series: [{
                name: 'Conoce algún intérprete de música clásica',
                data:  [{{ $interprete }}]
            }, {
                name: 'No conoce ninguno',
                data: [{{$noInterprete}}]
            }]
        });
      });
      document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container5', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Gustos en lectura'
            },   
            series: [{
                name: 'Terror',
                data:  [{{ $terror }}]
            }, {
                name: 'Misterio',
                data: [{{$misterio}}]
            }, {
                name: 'Historia',
                data: [{{$historia}}]
            }, {
                name: 'Otro',
                data: [{{$otro}}]
            }]
        });
      });
      document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container6', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Tiempo de lectura'
            },   
            series: [{
                name: 'Menos de una hora',
                data:  [{{ $menos }}]
            }, {
                name: 'De una a dos horas',
                data: [{{$una}}]
            }, {
                name: 'Más de dos horas',
                data: [{{$mas}}]
            }]
        });
      });
      document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container7', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Personajes de caricatura'
            },   
            series: [{
                name: 'Mencionó un personaje',
                data:  [{{ $un_personaje }}]
            }, {
                name: 'Mencionó dos personajes',
                data: [{{$dos_personajes}}]
            }, {
                name: 'Mencionó tres personajes',
                data: [{{$tres_personajes}}]
            }, {
                name: 'No mencionó ningún personaje',
                data: [{{$ningun_personaje}}]
            }]
        });
      });
      document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container8', {
            chart: {
                type: 'bar'
            },  
            series: [{
                name: 'Escucha música',
                data:  [{{ $musica }}]
            }, {
                name: 'No escucha música',
                data: [{{$noMusica}}]
            }, {
                name: 'Conoce algún pintor famoso',
                data:  [{{ $pintor }}]
            }, {
                name: 'No conoce pintores',
                data: [{{$noSabe}}]
            }, {
                name: 'Conoce algún intérprete de música clásica',
                data:  [{{ $interprete }}]
            }, {
                name: 'No conoce ningún intérprete de música clásica',
                data: [{{$noInterprete}}]
            }, {
                name: 'Lee menos de una hora',
                data:  [{{ $menos }}]
            }, {
                name: 'Lee de una a dos horas',
                data: [{{$una}}]
            }]
        });
      });
    </script>
</html>