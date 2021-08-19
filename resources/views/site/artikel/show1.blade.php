@extends('site.layouts.index')

@section('judul', 'Selamat datang di My - Porfolio')

@section('konten')
                    <?php
                        $total = DB::table('komentar')
                                ->where('artikel_id', $artikel->id)
                                ->count();
                    ?>
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                    <img class="img-fluid" src="{{ asset('gambar/'. $artikel->gambar) }}" alt="">
                    </div>
                    <div class="blog_details text-justify">
                    <h2>{{ $artikel->judul }}
                    </h2>
                    <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> {{ $artikel->name }}, {{ $artikel->kt }}</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> {{ $total }} Komentar</a></li>
                    </ul>
                    <p class="excert">
                        {!! $artikel->isi1 !!}
                    </p>
                    <div class="quote-wrapper">
                        <div class="quotes">
                        {!! $artikel->isi3 !!}
                        </div>
                    </div>
                    <p>
                    {!! $artikel->isi2 !!}
                    </p>
                    </div>
                </div>
                
                <div class="comments-area">

                    <h4>{{ $total }} Komentar</h4>
                        @foreach($komentar as $data)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    
                                    <div class="desc">
                                            <p class="comment">
                                            {{ $data->komentar }}
                                            </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">{{ $data->nama }}</a>
                                                </h5>
                                                <p class="date">{{  date('M d,  Y, H:i:s'), strtotime($data->created_at)}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
                <div class="comment-form">
                    <h4>Tinggalkan Komentar</h4>
                    <form class="form-contact comment_form" method="post" action="{{ url('komentar/'. $artikel->id) }}" id="commentForm">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="komentar" id="komentar" cols="30" rows="9"
                                    placeholder="Tulis Komentar"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="nama" id="nama" type="text" placeholder="Masukkan Nama Anda">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection