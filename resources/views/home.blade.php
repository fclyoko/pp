<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!--load all Font Awesome styles -->
  <link href="{{ asset('assets/fa/css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/custom.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="container w-full max-w-full">
        <div class="grid md:grid-cols-12 gap-0">
        <div class="col-span-1 bg-blue-900 text-center text-white">
            <ul class="main-menu">
                <a href="<?php echo url('/'); ?>" title="Inicio"><li class="align-middle"><i class="fa-light fa-house"></i></li></a>
                <a href="<?php echo url('/'); ?>/proveedores" title="Proveedores"><li><i class="fa-light fa-users"></i></li></a>
                <a href="#" title="Tratos"><li><i class="fa-light fa-badge-dollar"></i></li></a>
                <a href="#" title="Calendario"><li><i class="fa-light fa-calendar"></i></li></a>
                <a href="#" title="Comunicación"><li><i class="fa-light fa-comment"></i></li></a>
                <a href="#" title="Informes"><li><i class="fa-light fa-memo-circle-info"></i></li></a>
                <a href="#" title="Configuración"><li><i class="fa-light fa-gear"></i></li></a>
            </ul>
        </div>
        <div class="col-span-11">HOLA COMO ESTÁN TODOS POR ALLÁs</div>
        </div>
    </div>
</body>
</html>