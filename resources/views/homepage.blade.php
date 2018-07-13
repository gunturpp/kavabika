@extends('layouts.app')

@section('content')

<div class="pd-top">
    {{-- head banner --}}
    <img class="head-img" src="{{asset('images/banner.png')}}">
    <div class="head-content">
        <h1 class="head-title">Biji kopi <b>berkualitas</b> ada disini</h1>
        <div>
            <a class="link-findout" href="#">Cari kopi</a>
        </div>
    </div>
    <div class="container">
        {{-- produk kami --}}
        <div class="product">
            <h1>Produk Kami</h1>
            <div class="product-content row">
                <p class="product-fill">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae tincidunt nulla. Donec gravida metus in pharetra dignissim. Nulla pharetra sodales massa, tempor tincidunt arcu ullamcorper ac. Morbi purus massa, suscipit ac commodo a, mattis ut lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec fringilla ipsum, eu ullamcorper neque. 
                </p>
                <div class="col-lg-4">
                    <img class="product-img" src="{{asset('images/kopi1.png')}}">
                    <p><b>Biji Kopi 1</b></p>
                    <a data-toggle="modal" data-target="#productModal1" href="#">Lihat Produk</a>
                </div>
                <div class="col-lg-4">
                    <img class="product-img" src="{{asset('images/kopi2.png')}}">
                    <p><b>Biji Kopi 2</b></p>
                    <a data-toggle="modal" data-target="#productModal2" href="#">Lihat Produk</a>
                </div>
                <div class="col-lg-4">
                    <img class="product-img" src="{{asset('images/kopi3.png')}}">
                    <p><b>Biji Kopi 3</b></p>
                    <a data-toggle="modal" data-target="#productModal3" href="#">Lihat Produk</a>
                </div>
                <div class="mg-top center col-lg-12">
                    <a class="btn-primary btn-pd" href="#">Lihat Semua Produk</a>
                </div>
            </div>
        </div>
        <!-- product Modal -->
       
        {{-- Panduan --}}
        <div class="rules">
            <img class="rules-img" src="{{asset('images/panduan.png')}}">
            <h2>Panduan</h2>
            <p class="fill">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae tincidunt nulla. Donec gravida metus in pharetra dignissim. Nulla pharetra sodales massa, tempor tincidunt arcu ullamcorper ac. </p>
            <div class="mg-top center col-lg-12">
                <a class="btn-primary btn-pd" href="#">Lihat Semua</a>
            </div>

        </div>
        {{-- Tentang kami --}}
        <div class="aboutus">
            <img class="aboutus-img" src="{{asset('images/tentangkami.png')}}">
            <h2>Tentang Kami</h2>
            <p class="fill">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae tincidunt nulla. Donec gravida metus in pharetra dignissim. Nulla pharetra sodales massa, tempor tincidunt arcu ullamcorper ac. </p>    
            <div class="mg-top center col-lg-12">
                <a class="btn-primary btn-pd" href="#">Lihat</a>
            </div>

        </div>
    </div>
    @include('layouts/footer')
</div>
@endsection
