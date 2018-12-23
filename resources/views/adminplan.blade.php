@extends('Layouts.maplantiadm')
@section('title', 'adminplan')

@section('content')
<br>
<div class="container marketing">
<!-- Four columns of plantillas-->
<div class="row">
        <div class="col-lg-3">
          <img class="img-responsive img-rounded" src="spring.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Primavera</h2>
          <p>Esta plantilla es configurable con colores primaverales y aptos para festejos acordes a la estación</p>
          <button type="button" class="btn btn-primary">Aplicar</button>
          <button type="button" class="btn btn-warning">Modificar</button>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3">
          <img src="summer.jpg" class="img-responsive img-rounded" alt="Generic placeholder image" width="140" height="140">
          <h2>Verano</h2>
          <p>Esta plantilla es configurable con colores de verano y aptos para festejos acordes a la estación</p>
          <button type="button" class="btn btn-primary">Aplicar</button>
          <button type="button" class="btn btn-warning">Modificar</button>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3">
          <img class="img-responsive img-rounded"src="otono.jpg" alt="Generic placeholder image" width="140" height="170">
          <h2>Otoño</h2>
          <p>Esta plantilla es configurable con colores de otoño y aptos para festejos acordes a la estación</p>
          <button type="button" class="btn btn-primary">Aplicar</button>
          <button type="button" class="btn btn-warning">Modificar</button>
        </div><!-- /.col-lg-3 -->
      <div class="col-lg-3">
          <img class="img-responsive img-rounded"src="invierno.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Invierno</h2>
          <p>Esta plantilla es configurable con colores invernales y aptos para festejos acordes a la estación</p>
         <button type="button" class="btn btn-primary">Aplicar</button>
         <button type="button" class="btn btn-warning">Modificar</button>
        </div><!-- /.col-lg-3 -->
      </div><!-- /.row -->  
</div>
<br>

@endsection

