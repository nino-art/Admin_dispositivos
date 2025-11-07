@extends('tabler')

@section('title', 'Dispositivos')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <!-- Estilos de DataTables Buttons -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

@stop

@section('content')

<h1>Listado de dispositivos</h1>

<!-- Panel superior: Carousel -->
<!-- Panel superior: Carousel de miniaturas -->
<div class="card mb-4">
  <div class="card-body">
    <div id="carousel-mini" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <!-- Thumbnails indicadores -->
      <div class="carousel-indicators carousel-indicators-thumb mb-3 d-flex justify-content-center">
        <button type="button" data-bs-target="#carousel-mini" data-bs-slide-to="0" class="active me-1"
          style="background-image: url(/static/photos/group-of-people-sightseeing-in-the-city.jpg); width:60px; height:40px; background-size: cover; border:none;"></button>
        <button type="button" data-bs-target="#carousel-mini" data-bs-slide-to="1" class="me-1"
          style="background-image: url(/static/photos/young-woman-working-in-a-cafe.jpg); width:60px; height:40px; background-size: cover; border:none;"></button>
        <button type="button" data-bs-target="#carousel-mini" data-bs-slide-to="2" class="me-1"
          style="background-image: url(/static/photos/soft-photo-of-woman-on-the-bed-with-the-book-and-cup-of-coffee-in-hands.jpg); width:60px; height:40px; background-size: cover; border:none;"></button>
        <button type="button" data-bs-target="#carousel-mini" data-bs-slide-to="3" class="me-1"
          style="background-image: url(/static/photos/stylish-workplace-with-computer-at-home.jpg); width:60px; height:40px; background-size: cover; border:none;"></button>
        <button type="button" data-bs-target="#carousel-mini" data-bs-slide-to="4"
          style="background-image: url(/static/photos/stylish-workspace-with-macbook-pro.jpg); width:60px; height:40px; background-size: cover; border:none;"></button>
      </div>

      <!-- Carousel slides (ajustar tamaño con clase img-fluid y contenedor limitado) -->
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <img class="img-fluid" style="max-height:200px; margin:0 auto;" src="https://images.fravega.com/f300/3e0f7e3a616e13fe512ecb49c7b61d00.jpg" alt="Imagen 1">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" style="max-height:200px; margin:0 auto;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3RMp4kXt8Uof38xqNu9UEeQPiA6AORwTTmQ&s" alt="Imagen 2">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" style="max-height:200px; margin:0 auto;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI8OwZr3LxmofMyRz1apLVwtz9Hhhcef0ikQ&s" alt="Imagen 3">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" style="max-height:200px; margin:0 auto;" src="https://www.tecnoroute.com/wp-content/uploads/2021/04/servidor-virtual-tecnoroute.jpg" alt="Imagen 4">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" style="max-height:200px; margin:0 auto;" src="https://lignux.com/wp-content/uploads/2014/08/Tux_terminal.jpg" alt="Imagen 5">
        </div>
      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel-mini" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel-mini" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </div>
</div>


<!-- Panel inferior: Tabla de dispositivos -->
<div class="card">
  <div class="table-responsive">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Modelo</th>
          <th>Número de serie</th>
          <th>Fabricante</th>
          <th>Marca</th>
        </tr>
      </thead>
      <tbody>
        @foreach($dispositivos as $disp)
        <tr>
          <td>{{ $disp->nombre }}</td>
          <td>{{ $disp->descripcion }}</td>
          <td>{{ $disp->modelo_de_dispositivo }}</td>
          <td>{{ $disp->numero_de_serie }}</td>
          <td>{{ $disp->fabricante }}</td>
          <td>{{ $disp->marca }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
