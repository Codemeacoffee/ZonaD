@section('header')
    <!DOCTYPE html>
<html itemscope lang="es" dir="ltr" itemtype="https://schema.org/WebSite">
<head>
    <title>ADMINISTRACIÓN - ZONA D</title>
    <meta name="author" content="Jose Emmanuel Castro Martel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- SEO -->
    <meta name="keywords" content="ADMINISTRACIÓN - ZONA D">
    <meta name="description" content="ADMINISTRACIÓN - ZONA D">
    <meta property="og:site_name" content="Zona D"/>
    <meta property="og:title" content="ADMINISTRACIÓN - ZONA D">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:description" content="ADMINISTRACIÓN - ZONA D">
    <meta property="og:image" itemprop="image" content="{{asset('images/logo-seo.jpg')}}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:updated_time" content="{{strtotime(date('Y-m-d'))}}">
    <!-- SEO -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</head>
<body>
<nav id="main-navbar" style="z-index: 10" class="navbar w-100 navbar-expand-lg navbar-dark bg-transparent position-fixed impact">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Interruptor de navegación">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav nav-fill mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#createNewModal"><h5>CREAR NOTICIA</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" target="_blank" href="{{url('/')}}"><h5>VER WEB</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" target="_blank" href="{{url('createAdmin')}}"><h5>CREAR NUEVO ADMINISTRADOR</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('closeSession')}}"><h5>CERRAR SESIÓN</h5></a>
            </li>
        </ul>
    </div>
</nav>

<div class="modal fade" id="createNewModal" tabindex="-1" role="dialog" aria-labelledby="createNew" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="roboto" method="post" action="{{url('createNew')}}" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center w-100 impact" id="createNew"><b>CREAR NOTICIA</b></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                        <div class="form-outline mb-4">
                            <label class="form-label text-orange" for="name"><b>TÍTULO</b></label>
                            <input type="text" id="name" name="name" class="form-control" required/>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label text-orange" for="text"><b>DESCRIPCIÓN</b></label>
                            <textarea rows="4" id="text" name="text" class="form-control" required></textarea>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label text-orange" for="media"><b>IMAGEN O VIDEO</b></label>
                            <input type="file" accept="image/*,video/*" id="media" name="media" class="form-control" required/>
                        </div>
                        {{csrf_field()}}

                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-primary btn-block bg-black text-orange btn-outline-danger"><b>CREAR</b></button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container-fluid pt-5 roboto">
    <div class="row pt-5">
        <?php

        foreach($information as $current){
            echo '<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                <div class="bg-white rounded p-4 h-100">
                <h5 class="text-orange impact">'.$current->name.'</h5>
                <p>'.$current->text.'</p>
                <div>
                <a class="d-inline-block" href="'.url('deleteNew/'.$current->id).'"><button class="btn btn-primary btn-block bg-black text-red btn-outline-danger px-4
"><b>BORRAR</b></button></a>
                <a class="d-inline-block float-right" href="#" data-toggle="modal" data-target="#editModal'.$current->id.'"><button class="btn btn-primary btn-block bg-black text-orange btn-outline-danger px-4"><b>EDITAR</b></button></a>
                </div>
                </div>
                </div>

                <div class="modal fade" id="editModal'.$current->id.'" tabindex="-1" role="dialog" aria-labelledby="createNew" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <form class="roboto" method="post" action="'.url('editNew/'.$current->id).'" enctype="multipart/form-data">
                <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title text-center w-100 impact" id="createNew"><b>EDITAR NOTICIA</b></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body text-center">
                <div class="form-outline mb-4">
                <label class="form-label text-orange" for="name"><b>TÍTULO</b></label>
                <input type="text" id="name" name="name" class="form-control" value="'.$current->name.'" required/>
                </div>
                <div class="form-outline mb-4">
                <label class="form-label text-orange" for="text"><b>DESCRIPCIÓN</b></label>
                <textarea rows="4" id="text" name="text" class="form-control" required>'.$current->text.'</textarea>
                </div>
                <div class="form-outline mb-4">
                <label class="form-label text-orange" for="media"><b>IMAGEN O VIDEO</b></label>
                <p class="text-secondary"><small>*Solo incluir si se desea cambiar la foto o el video.</small></p>
                <input type="file" accept="image/*,video/*" id="media" name="media" class="form-control"/>
                </div>
                '.csrf_field().'
                </div>
                <div class="modal-footer text-center">
                <button type="submit" class="btn btn-primary btn-block bg-black text-orange btn-outline-danger"><b>EDITAR</b></button>
                </div>
                </div>
                </form>
                </div>
                </div>';

        }

        ?>
</div>



@if($errors->any())
    <script type="text/javascript">
        alert('{{$errors->first()}}');
    </script>
@endif
</body>
</html>
@show

