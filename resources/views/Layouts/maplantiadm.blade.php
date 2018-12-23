<!doctype html>
<html>
    <head>
          <title>@yield('adminplan')</title>
        
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Bootstrap core CSS -->
           <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
           <script src="{{ asset('js/bootstrap.min.js') }}"></script>
          <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
          @yield('styles')
         
    <!-- Bootstrap theme -->
    <link href="{{ asset('css/bootstrap-theme.min.css') }}"rel="stylesheet">


    </head>
    <body>
          <header>
          <div class="container1">
          <div class="jumbotro">
            <br>
            <img src=header_white.png  class="img-responsive col-md-12" style="overflow: hidden;" width="900px" height="900px" boder="0">
            <div>
            <div class="col-md-9 .text-center apply-font"><h2 style="color=blue">Administrador de plantillas</h2></div>
            <div class="conten col-md-3" >
            <button type="button" class="btn1 btn-lg btn btn-primary apply-font">Volver</button>
            <button type="button" class="btn2 btn-lg btn btn-primary apply-font">Principal</button>
            </div> 
              
           
            </div>
            
          </div>
                <div class="linea"> <br></div>
          </div>
          </header>
      
      <div class="container-fluid apply-font" id="main-content"> 
     @yield('content')
     </div>
     <footer class="footer">
          <hr>
        <p class="text-muted apply-font" font style="vertical-align: inherit;">Instituto Tecnológico Superior de Calkiní en el Estado de Campeche, México ©2018 Aviso de Privacidad 15,701,403	visitas</p>
    </footer>
     
     
     
     
     
     @yield('scripts')
    </body>
</html>