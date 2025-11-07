<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'dispositivos')</title>
  <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0/dist/css/tabler.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@tabler/icons@2.30.0/iconfont/tabler-icons.min.css" rel="stylesheet">

</head>
<body>
  <div class="page">
    <!-- Sidebar -->
     <header class="navbar navbar-expand-md d-print-none">...</header>
     
    <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" >Admin Dispositivos</a>
     
        <ul class="navbar-nav flex-column mt-3">
          <li class="nav-item">
            <!-- Aquí solo un link a tu index de dispositivos -->
             
      <li class="nav-item">
      
        
        <a class="nav-link {{ request()->routeIs('dispositivos.index') ? 'active' : '' }}" 
           href="{{ route('dispositivos.index') }}">
          <span  class="nav-link-icon d-md-none d-lg-inline-block">
         
          </span>
       <span class="btn btn-primary d-flex align-items-center">
  <!-- Icono Laptop -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-laptop me-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <rect x="3" y="6" width="18" height="12" rx="1" />
    <line x1="3" y1="18" x2="21" y2="18" />
  </svg>
  Dispositivos
</span>

  
<a href="#" class="btn btn-outline-primary">Ajustes</a>

          
        </a>
      </li>
        </ul>
      </div>
    </aside>

    

    <!-- Contenido principal -->
    <div class="page-wrapper">
      <div class="container-xl mt-4">
        @yield('content') <!-- Aquí se cargará tu index de dispositivos -->
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0/dist/js/tabler.min.js"></script>
</body>
</html>
