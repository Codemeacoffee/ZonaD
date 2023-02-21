@section('header')
    <!DOCTYPE html>
<html itemscope lang="es" dir="ltr" itemtype="https://schema.org/WebSite">
<head>
    <title>CREAR ADMINISTRADOR - ZONA D</title>
    <meta name="author" content="Jose Emmanuel Castro Martel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- SEO -->
    <meta name="keywords" content="CREAR ADMINISTRADOR - ZONA D">
    <meta name="description" content="CREAR ADMINISTRADOR - ZONA D">
    <meta property="og:site_name" content="Zona D"/>
    <meta property="og:title" content="CREAR ADMINISTRADOR - ZONA D">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:description" content="CREAR ADMINISTRADOR - ZONA D">
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
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-8 col-12 offset-xl-4 offset-lg-3 offset-md-2 offset-0 bg-white rounded align-vertical">
            <form class="px-4 pt-4 pb-5 roboto" method="post" action="{{url('createAdmin')}}">
                <h3 class="text-orange text-center impact mb-4"><b>CREAR ADMINISTRADOR</b></h3>
                <div class="form-outline mb-4">
                    <label class="form-label text-orange" for="user"><b>USUARIO</b></label>
                    <input type="text" id="user" name="user" class="form-control" required/>
                    <p class="text-secondary"><small>*Recuerde que el nombre de usuario del administrador no puede repetirse.</small></p>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label text-orange" for="password"><b>CONTRASEÑA</b></label>
                    <input type="password" id="password" name="password" class="form-control" required/>
                </div>
                <button type="submit" class="btn btn-primary btn-block bg-black text-orange btn-outline-danger"><b>CREAR</b></button>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
@if($errors->any())
    <script type="text/javascript">
        alert('{{$errors->first()}}');
    </script>
@endif
</body>
</html>
@show
