<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Buraya stil dosyalarınızı ekleyebilirsiniz -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container-fluid bg-light">
            <div class="row py-3">
                <div class="col-md-2 text-center">
                    <h3 class="text-danger"><strong>Kaybimiz</strong></h3>
                </div>
                <div class="col-md-9 d-flex justify-content-end">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home mr-2"></i>Anasayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('missing-persons.create') }}"><i class="fas fa-plus mr-2"></i>Kayıp Kişi Ekle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('missing-persons.index') }}"><i class="fas fa-search mr-2"></i>Kayıp Kişi İlanları</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
