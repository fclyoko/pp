<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!--load all Font Awesome styles -->
    <link href="{{ asset('assets/fa/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/custom.css') }}" rel="stylesheet" type="text/css" >
    <title>Inicio</title>
  </head>
  <body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-1 text-center text-white">

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
            <div class="col-11">

                <div class="panel">
                        <div class="init-navbar">
                            <div class="row">
                                <div class="col p-4 add">
                                    <a href="#"><i class="fa-light fa-plus"></i> Agregar</a> 
                                </div>
                                <div class="col actions p-4">
                                    <div class="main-controls">
                                        <a href="#"><i class="fa-thin fa-magnifying-glass"></i></a>
                                            <form action="#">
                                                <input type="text" name="search" id="search">
                                            </form>
                                        <a href="#"><i class="fa-thin fa-bell"></i></a>
                                        <a href="#"><i class="fa-thin fa-message"></i></a>
                                        <a href="#" class="user-profile"><i class="fa-solid fa-user"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="second-navbar">
                                <div class="second-actions">

                                    <div class="row">
                                        <div class="col-4 p-4">
                                            <div class="start-controls">
                                                <a href="">Empezar</a>
                                                <a href="javascript:void(0)" class="showPanel">Panel</a>
                                            </div>
                                            
                                        </div>
                                        <div class="col-8 p-4 welcome-message">
                                            Bienvenido <strong>{empresa.name}</strong> su cuenta está actuamente en el nivel <strong>{empresa.nivel}</strong>
                                            <button class="btn btn-primary">Ver Planes</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-4 vh-100 lists">
                                        <ul class="list-group">
                                            <li class="list-group-item"><a href=""><i class="fa-regular fa-address-card"></i> Cree su perfíl de empresa</a></li>
                                            <li class="list-group-item"><a href="javascript:void(0)" class="add-proveedor-welcome"><i class="fa-solid fa-people-arrows-left-right"></i> Añada a un proveedor</a></li>
                                            <li class="list-group-item"><i class="fa-light fa-face-smile"></i> Invite a un proveedor</li>
                                            <li class="list-group-item"><i class="fa-light fa-gear"></i> Configure su cuenta</li>
                                            <li class="list-group-item"><i class="fa-light fa-badge-dollar"></i> Cree un nuevo trato</li>
                                        </ul>
                                    </div>
                                    <div class="col-8 p-4 content-ajax">
                                        <div class="company-profile">
                                            <h2>Crea tu perfíl de empresa e inicia hoy mismo</h2>
                                            <p>Comenzar a gestionar tus proveedores es muy fácil. Pero antes necesitarás completar tu perfíl de empresa para que puedas comenzar a usar la plataforma.</p>
                                            <p>Completa los campos a continuación para comenzar a usar la plataforma.</p>
                                            <form action="#">

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>

                                                    <label for="basic-url" class="form-label">URL de tu empresa</label>
                                                    <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon3">URL</span>
                                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                                    </div>

                                                    <div class="input-group mb-3">
                                                    <span class="input-group-text">$</span>
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                    <span class="input-group-text">.00</span>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                                    <span class="input-group-text">@</span>
                                                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                                                    </div>

                                                    <div class="input-group">
                                                    <span class="input-group-text">With textarea</span>
                                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        $(document).ready(function() {
            $(".add-proveedor-welcome").on("click", function() {

                $.ajax({
                    url: "<?php echo url('/'); ?>/add-proveedor-welcome",
                    type:"GET",
                    /*data:{
                        name:name,
                        email:email,
                        mobile_number:mobile_number,
                        message:message,
                        _token: _token
                    },*/
                    success:function(response){
                        console.log(response);
                        if(response) {
                            $(".content-ajax").html(response);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

            });
            $(".showPanel").on("click", function() {
                
                $.ajax({
                    url: "<?php echo url('/'); ?>/panel",
                    type:"GET",
                    success:function(response){
                        console.log(response);
                        if(response) {
                            $(".content").html(response);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

            });
        });
    </script>
  </body>
</html>