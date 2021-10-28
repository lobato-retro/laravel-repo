@extends('plantilla')
@section('contenedor')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/auto.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/auto.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/auto.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<figure class="text-center">
  <blockquote class="blockquote">

</br> </br> </br> </br> </br> </br>

   <div clas="col-lg-12">

   <img src="{{ asset('img/coche.png') }}" width="10%" >
   </div>

    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  
  </blockquote>
  <figcaption class="blockquote-footer">
  </br>
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>



</br> </br> </br> </br> </br> </br> 


<figure class="text-center">
  <blockquote class="blockquote">


    <p class="mb-0"><strong>SERVICIOS</strong></p>
  
    </br> </br>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="#home">servicio 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#profile">servicio 2</a>
  </li>
  
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade show active" id="home">
    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
  </div>
</div>


</div>
</BR></BR></BR></BR></BR></BR>
<div class="col-lg-12" style="text-align:center";>

<div class="alert alert-dismissible alert-warning">
  
  <h4 class="alert-heading">SERVICIO DE ARRENDAMIENTO</h4>
  <img src="{{ asset('img/tratado.png') }}" width="10%" >
  <p class="mb-0">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de re1lleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. <a href="#" class="alert-link">logró hacer un libro de etC.</a>.</p>
</br></br>
  <a class="btn btn-primary btn-lg" href="{{ route('contacto') }}">CONTACTO</a>
</div>

</div>
</BR></BR></BR>

<div class="col-lg-12" style="text-align:center";>
<div class="alert alert-dismissible alert-primary">
  
<h4 class="alert-heading">ESTRENA TU AUTO</h4>
<img src="{{ asset('img/auto-limpio.png') }}" width="10%" >
  <p> <strong>SUPER!</strong> Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de re1lleno estándar de las industrias desde el año 1500, cuando un impresor </p>
</br></br>
  <div><a class="btn btn-warning btn-lg" href="{{ route('contacto') }}">CONTACTO</a></div>
</div>


</div>

</br></br></br>
<div style="margin-left:15%" class="col-lg-8">

<h1 style="text-align:center">COTIZA TU AUTO</h1>

<fieldset class="form-group">
      <legend class="mt-4">Enganche</legend>
        <label for="customRange1" class="form-label">min</label>
        <input type="range" class="form-range" id="customRange1">


        <label for="customRange3" class="form-label">Mensualidad</label>
        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
    </fieldset>
    <button type="submit" class="btn btn-primary">Cotizar</button>
  </fieldset>
</form>

</div>


</br></br></br></br>





@endsection