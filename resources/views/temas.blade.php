@extends('Layouts.maplantiadm')
@section('title', 'temas')
@section('styles')
<link href="{{ asset('css/temas.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontselector.css') }}" rel="stylesheet">
<link href="{{ asset('css/variables.css') }}" rel="stylesheet">

@endsection
@section('content')


<div class="tit">
  <h3 class="apply-font" id="frase">Temas de verano</h3>
</div>

<div class="row text-center apply-font">

  <div class="col-md-2">
  <ul class="nav nav-pills nav-stacked" id="pills-tab" role="tablist">
        <li class="nav-item active">
          <a class="nav-link active" id="pills-fuente-tab" data-toggle="pill" href="#pills-fuente" role="tab" aria-controls="pills-fuente" aria-selected="true">Fuente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-tamanio-tab" data-toggle="pill" href="#pills-tamanio" role="tab" aria-controls="pills-tamanio" aria-selected="false">Tamaño</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-color-tab" data-toggle="pill" href="#pills-color" role="tab" aria-controls="pills-color" aria-selected="false">Color</a>
        </li>
      </ul>
  </div>

  <div class="col-md-2">
  <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade active in" id="pills-fuente" role="tabpanel" aria-labelledby="pills-fuente-tab">
          <div class="form-group">
            <!-- <select class="form-control" name="fonts" id="fonts" size="7">
            </select> -->
            <div id="font-picker" class="apply-font">

            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-tamanio" role="tabpanel" aria-labelledby="pills-tamanio-tab">
          <div class="form-group">
            <select class="form-control" id="tamanio">
              <option value="small">Pequeño</option>
              <option value="normal">Mediano</option>
              <option value="large">Grande</option>
            </select>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-color" role="tabpanel" aria-labelledby="pills-color-tab">
          Color
        </div>
      </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail">
      <img src="sanfran.jpg" alt="San Francisco">
      <p><strong>Plantilla 2</strong></p>
      <p>descripcion de plantilla</p>
      <button class="btn">Guardar</button>
      <button class="btn">Aplicar</button>
    </div>
  </div>   
      
  <div class="col-md-4">
    <p>descripcion de plantilla</p>
    <button class="btn">Guardar</button>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/font-picker/lib/font-picker.js') }}"> </script>
<script> 
  const fontPicker = new FontPicker(
    'AIzaSyDvWCE80MQ8iZDnfSAykP8cti9Zl6TnC1c', // Google API key
    'Caveat', // default font
    { limit: 150 } // additional options
  );
</script>
<script src="{{ asset('js/fontselector.js') }}"></script>
<script src="{{ asset('js/temasfetch.js') }}"></script>

@endsection

