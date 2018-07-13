<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('kavabika.name', 'Kavabika') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('https://code.jquery.com/jquery-3.2.1.slim.min.js"')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kavabika.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="pd-head navbar navbar-expand-lg navbar-dark">
            <a class="mg-left navbar-brand" href="{{ url('/') }}">
                {{ config('Kavabika.name', 'Kavabika') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="mg-right collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <!-- Right Side Of Navbar -->

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link font-color bold" href="">{{ __('Kopi') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-color bold" href="">{{ __('Panduan') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-color bold" href="">{{ __('Tentang') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('Bantuan') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">FAQ</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Shipping & Returns</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Store Policy</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Payment Methods</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="modal" data-target="#rightModal" class="nav-link font-color bold" href="#">{{ __('Keranjang') }}<span class="cart-sum">0</span></a>
                    </li>
            
                </ul>
            </div>
        </nav>
        {{-- product modal 1 --}}
        <div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="flex modal-body">
                        <div class="col-lg-6">
                            <img class="product-detail-img" src="{{asset('images/bg.jpg')}}">
                        </div>
                        <div class="col-lg-6">
                            <h2><b>Biji Kopi 1</b></h2>
                            <span>Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum </span>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ukuran</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>250 gram &nbsp;&nbsp;&nbsp;&nbsp; Rp 567.000</option>
                                    <option>1 ton &nbsp;&nbsp;&nbsp;&nbsp; Rp 1.000.000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Jumlah</label>
                                <input type="number" min="1" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- product modal 2 --}}
        <div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="flex modal-body">
                        <div class="col-lg-6">
                            <img class="product-detail-img" src="{{asset('images/bg.jpg')}}">
                        </div>
                        <div class="col-lg-6">
                            <h2><b>Biji Kopi 2</b></h2>
                            <span>Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum </span>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ukuran</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>250 gram &nbsp;&nbsp;&nbsp;&nbsp; Rp 567.000</option>
                                    <option>1 ton &nbsp;&nbsp;&nbsp;&nbsp; Rp 1.000.000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Jumlah</label>
                                <input type="number" min="1" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- product modal 3 --}}
        <div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="flex modal-body">
                        <div class="col-lg-6">
                            <img class="product-detail-img" src="{{asset('images/bg.jpg')}}">
                        </div>
                        <div class="col-lg-6">
                            <h2><b>Biji Kopi 3</b></h2>
                            <span>Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum </span>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ukuran</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>250 gram &nbsp;&nbsp;&nbsp;&nbsp; Rp 567.000</option>
                                    <option>1 ton &nbsp;&nbsp;&nbsp;&nbsp; Rp 1.000.000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Jumlah</label>
                                <input type="number" min="1" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Modal -->
        <div class="modal fade" id="rightModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-cart" role="document">
                <div class="cart">
                    {{-- header --}}
                    <div class="cart-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">></span>
                        </button>
                    <p>Keranjang <span class="cart-sum-modal">0</span></p>
                    </div>
                    {{-- content --}}
                    <div class="cart-content">
                        <div><b>Keranjang ini kosong</b></div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- cart --}}
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
