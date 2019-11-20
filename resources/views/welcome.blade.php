<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title>ARTec | Bienvenido</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="jumbotron" style="background-color: white;">
        <div class="col-lg-12 text-center">
            <div class="row text-center">
                <div class="col-md-5 pull-left">
                    <img src="{{ asset('/img/tec.png') }}" style="width: 20%;">
                </div>
                <h1 class="display-3 text-center">¡Hola!</h1>
                <div class="col-md-5 pull-right">
                    <img src="{{ asset('/img/logo.png')}}" style="width: 25%;">
                </div>
            </div>
        </div>
        <hr class="my-4">
        <center>
          <h4><b>El objetivo de la presente entrevista es obtener información acerca de lo que conocen sobre las artes y la lectura los estudiantes de primaria.</b></h4>
        <hr class="my-4">
        @include('flash-message')
        <br><br><br><br>
        </center>
        <form action="{{ route('store.encuesta') }}" method="POST">
          @csrf
          <div class="col-md-12">            
              <div class="col-md-10 offset-md-1 text-center">
                <div class="card border-primary mb-3">
                  <div class="card-header"><b>Instrucciones: </b>Responde todas las preguntas, si tienes alguna pregunta, levanta la mano y en seguida se te resolverá, si no sabes qué responder, acude a alguno de los encargados.</div>
                  <div class="card-body">
                    {{-- Nombre --}}
                    <div class="form-group">
                      <label class="col-form-label" for="nombre">¿Cuál es tu nombre?</label>
                      <div class="col-md-4 offset-md-4">
                        <input type="text" class="form-control" placeholder="Pablo Contreras" id="nombre" name="nombre" required="">                          
                      </div>
                    </div>
                    {{-- Edad --}}
                    <div class="form-group">
                      <label class="col-form-label" for="edad">¿Cuántos años tienes?</label>
                      <div class="col-md-4 offset-md-4">
                        <input type="number" min="5" max="13" class="form-control" placeholder="Ej. 10" id="edad" name="edad" required="">                          
                      </div>
                    </div>
                    {{-- Sexo --}}
                    <div class="form-group">
                      <label for="sexo">Sexo</label>
                      <div class="col-md-4 offset-md-4"> 
                          <select class="form-control" id="sexo" name="sexo" required="">
                            <option selected=""></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                          </select>
                      </div>
                    </div>
                    {{-- Deportes --}}
                    <div class="form-group">
                      <label for="deportes">¿Qué deporte prácticas?</label>
                      <div class="col-md-4 offset-md-4">
                        <select class="form-control" id="deportes" name="deportes" required="">
                          <option selected=""></option>
                          <option value="Futbol">Fútbol</option>
                          <option value="Basquet">Basquet</option>
                          <option value="Otro">Otro</option>
                          <option value="Ninguno">Ninguno</option>
                        </select>                          
                      </div>
                    </div>
                    {{-- Tipo de música --}}
                    <div class="form-group">
                      <label for="musica">¿Qué tipo de música escuchas?</label>
                      <div class="col-md-4 offset-md-4">
                        <select class="form-control" id="musica" name="musica" required="">
                          <option selected=""></option>
                          <option value="Rock">Rock</option>
                          <option value="Banda">Banda</option>
                          <option value="Electronica">Electrónica</option>
                          <option value="Regueton">Reguetón</option>
                          <option value="Ninguno">No escucho música</option>
                        </select>
                      </div>
                    </div>
                    {{-- Pintores famosos --}}
                    <div class="form-group">
                      <label class="col-form-label" for="pintor_famoso">Escribe el nombre de un pintor famoso <small>(Si no sabes ninguno, escribe 0)</small></label>
                      <div class="col-md-4 offset-md-4">
                        <input type="text" class="form-control" placeholder="Nombre" id="pintor_famoso" name="pintor_famoso" required="">                          
                      </div>
                    </div>
                    {{-- Descripcióm música clásica --}}
                    <div class="form-group">
                      <label class="col-form-label" for="desc_musica_clasica">Describe qué es la música clásica <small>(Si no sabes qué es, escribe 0)</small></label>
                      <div class="col-md-4 offset-md-4">
                        <input type="text" class="form-control" placeholder="La música clásica es ..." id="desc_musica_clasica" name="desc_musica_clasica" required="">                          
                      </div>
                    </div>
                    {{-- Intérprete de música clásica --}}
                    <div class="form-group">
                      <label class="col-form-label" for="interprete">Menciona el nombre de un intérprete de música clásica <small>(Si no sabes ninguno, escribe 0)</small></label>
                      <div class="col-md-4 offset-md-4">
                        <input type="text" class="form-control" placeholder="Nombre" id="interprete" name="interprete" required="">                          
                      </div>
                    </div>
                    {{-- Museos visitados --}}
                    <div class="form-group">
                      <label class="col-form-label" for="museos">Escribe el nombre de los museos que has visitado <small>(Si no has visitado ninguno, escribe 0)</small></label>
                      <div class="col-md-4 offset-md-4">
                        <input type="text" class="form-control" placeholder="Museo ..." id="museos" name="museos" required="">                          
                      </div>
                    </div>
                    {{-- Lecturas preferidas --}}
                    <div class="form-group">
                      <label for="gustos_lectura">¿Qué tipo de lecturas te gustan?</label>
                      <div class="col-md-4 offset-md-4"> 
                          <select class="form-control" id="gustos_lectura" name="gustos_lectura" required="">
                            <option selected=""></option>
                            <option value="Terror">Terror</option>
                            <option value="Misterio">Misterio</option>
                            <option value="Historia">Historia</option>
                            <option value="Otro">Otro</option>
                          </select>
                      </div>
                    </div>
                    {{-- Tiempo de lectura --}}
                    <div class="form-group">
                      <label for="tiempo_lectura">¿Cuánto tiempo al día lees?</label>
                      <div class="col-md-4 offset-md-4"> 
                          <select class="form-control" id="tiempo_lectura" name="tiempo_lectura" required="">
                            <option selected=""></option>
                            <option value="0">Menos de una hora</option>
                            <option value="1">De una hora a dos horas</option>
                            <option value="2">Más de dos horas</option>
                          </select>
                      </div>
                    </div>
                    {{-- Valor agregado de gustos en videojuegos --}}
                    <div class="form-group">
                      <label class="col-form-label" for="gusto_videojuegos">Cuando juegas videojuegos ¿Qué es lo que más llama tu atención?</label>
                      <div class="col-md-6 offset-md-3">
                        <input type="text" class="form-control" placeholder="Los personajes, los colores, etc ..." id="gusto_videojuegos" name="gusto_videojuegos" required="">                          
                      </div>
                    </div>
                    {{-- Personajes de caricatura favoritos --}}
                    <div class="form-group">
                      <label class="col-form-label" for="gusto_personajes">¿Cuáles son tus personajes de caricatura favoritos? Escribe tres</label>
                      <div class="col-md-6 offset-md-3">
                        <input type="text" class="form-control" placeholder="Personaje 1" id="gusto_personajes" name="personaje_1" required=""> 
                        <br>
                        <input type="text" class="form-control" placeholder="Personaje 2" id="gusto_personajes" name="personaje_2" required="">
                        <br>
                        <input type="text" class="form-control" placeholder="Personaje 3" id="gusto_personajes" name="personaje_3" required="">                         
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                  </div>
                  {{-- Footer --}}
                  <div class="card-footer">
                    &copy;<script>document.write(new Date().getFullYear());</script>  Hecho con <i class="fas fa-heart" style="color: red;"></i> Por <a href="http://www.eostechnology.mx" target="_blank"> EOS Technology </a>
                  </div>
                </div>                
              </div>
          </div>
        </form>          
      </div>
      <footer class="ftco-footer ftco-bg-dark ftco-section" style="padding-top: 20px; padding-bottom: 0px; background-color: #007bff;" id="datos-contacto">
        <div class="container">          
          <div class="row" >
            <div class="col-md-12 text-center">
              <p style="color: white;">
                <b>Responsable de la aplicación:</b>
                <br>
                Pablo Einar Contreras Gutiérrez
                <br>
                Correo electrónico: p.contreras@eostechnology.mx
              </p>
            </div>
          </div>
        </div>
      </footer>
    </body>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
