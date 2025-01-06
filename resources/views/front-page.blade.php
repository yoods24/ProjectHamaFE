<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/frontpage.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ERP Front Page</title>
</head>
<body>
    <a href="/"><img src="{{ asset('images/DokterHama-logo-mini.png') }}" alt="Logo" class="logo"></a>
    <div class="frontpage-img-container">
        <img src="{{ asset('images/geometry-blue-green-turquoise-abstraction3-png.png')}} " alt="Img">
    </div>
    <div class="container d-flex justify-content-left ">
        <div class="row align-items-center min-vh-100">
            <!-- Left Section -->
            <div class="col-md-6">
                <img  src="{{ asset('images/erp-image.png') }}" alt="ERP Diagram"  class="img-fluid">
            </div>
            <!-- Right Section -->
            <div class="col-md-6 text-center frontpage-container">
                <h2>Sistem Informasi ERP</h2>
                <p>(Enterprise Resource Planning)</p>
                <div class="container-fluid d-flex justify-content-center align-items-center w-100 mx-auto login-container p-0">
                    <button class="btn btn-primary no-right-radius btn-left">
                        <a href="{{ route('staff') }}" class="login-link">Login as DokterHama</a>
                    </button>
                    <span>OR</span>
                    <button class="btn btn-secondary no-left-radius btn-right">
                        <a href="{{ route('client') }}" class="login-link">Login as Client</a>
                    </button>
                </div>
                <div class="container text-center mt-4 alert alert-light mx-auto" >
                    <img src="{{asset('images/shield-green.png')}}" id="shield-img" alt="shield" class="img-fluid">
                    <br> 
                    <strong class="h2 text-warning">Lindungi Akun Anda.</strong><br> 
                    Selalu lindungi akun Anda, jangan berikan password Anda kepada siapapun!
                </div>
            </div>
        </div>
    </div>
</body>
</html>
