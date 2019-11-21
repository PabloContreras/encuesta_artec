<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Edad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Deporte</th>
      <th scope="col">Música favorita</th>
      <th scope="col">Pintor famoso</th>
      <th scope="col">Descripción música clásica</th>
      <th scope="col">Intérprete de música clásica</th>
      <th scope="col">Museos visitados</th>
      <th scope="col">Gustos en lecura</th>
      <th scope="col">Tiempo de lectura diaria</th>
      <th scope="col">Interés en videojuegos</th>
      <th scope="col">Personaje de caricatura 1</th>
      <th scope="col">Personaje de caricatura 2</th>
      <th scope="col">Personaje de caricatura 3</th>

    </tr>
  </thead>
  <tbody>
    @foreach( $encuestas as $encuesta )
      <tr>
        <th> {{ $encuesta->id }} </th>
        <td>{{ $encuesta->edad }}</td>
        <td>{{ $encuesta->sexo }}</td>
        <td>{{ $encuesta->deportes }}</td>
        <td>{{ $encuesta->musica == 'Ninguno' ? 'No escucha música' : $encuesta->musica }}</td>
        <td>{{ $encuesta->pintor_famoso == '0' || 'o' ? 'No conoce ningún pintor' : $encuesta->pintor_famoso }}</td>
        <td>{{ $encuesta->desc_musica_clasica == '0' || 'o' ? 'No sabe qué es la música clásica' : $encuesta->desc_musica_clasica }}</td>
        <td>{{ $encuesta->interprete == '0' ? 'No conoce ningún intérprete' : $encuesta->interprete }}</td>
        <td>{{ $encuesta->museos == '0' ? 'Nunca ha ido a un museo' : $encuesta->museos }}</td>
        <td>{{ $encuesta->gustos_lectura }}</td>
        <td> 
            @if( $encuesta->tiempo_lectura == '0')
              Lee menos de una hora
            @elseif( $encuesta->tiempo_lectura == '1')
              Lee de una a dos horas
            @else
              Más de dos horas
            @endif
        </td>
        <td>{{ $encuesta->gusto_videojuegos == '0' ? 'No juega videojuegos' : $encuesta->gusto_videojuegos }}</td>
        <td>{{ $encuesta->personaje_1 == '0' ? 'Ninguno' : $encuesta->personaje_1 }}</td>
        <td>{{ $encuesta->personaje_2 == '0' ? 'Ninguno' : $encuesta->personaje_2 }}</td>
        <td>{{ $encuesta->personaje_3 == '0' ? 'Ninguno' : $encuesta->personaje_3 }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
</body>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>