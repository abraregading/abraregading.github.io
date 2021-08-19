@extends('site.layouts.index')

@section('judul', 'Selamat datang di My - Porfolio')

@section('konten')

<div class="slider-area ">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="hero__caption">
                            <span data-animation="fadeInUp" data-delay=".4s">Memberikan Solusi Untuk Bisnis Anda.</span>
                            <h1 data-animation="fadeInUp" data-delay=".6s">Hei, Saya Muhammad Abrar</h1>
                            <P data-animation="fadeInUp" data-delay=".8s" >Dalam menjalankan sebuah tanggungjawab pada situasi tertentu dibutuhkan sebuah Solusi untuk membantu pelaksanaannya...</P>
                            <!-- Hero-btn -->
                            <div class="hero__btn">
                                <a href="{{ url ('/artikel_v/menu/1') }}" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Lihat Artikel</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection