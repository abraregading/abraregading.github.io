@extends('site.layouts.index')

@section('judul', 'Selamat datang di My - Porfolio')

@section('konten')

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach($data as $data)
                    <?php
                    $totkomen = DB::table('komentar')
                            ->where('artikel_id', $data->id)
                            ->count();
                    ?>
                    <article class="blog_item ">
                        <div class="blog_item_img">
                            <a href="{{url ('/artikel_v/detail/'.$data->id) }}">
                            <img class="card-img rounded-0 img-fluit" src="{{ asset('gambar/'. $data->gambar) }}"  alt="" style="width:80%">
                            <a href="" class="blog_item_date">
                                <h3>{{  date('d'), strtotime($data->created_at)}}</h3>
                                <p>{{  date('M'), strtotime($data->created_at)}}</p>
                            </a>
                        </div>

                        <div class="blog_details text-justify">
                            <a class="d-inline-block" href="{{url ('/artikel_v/detail/'.$data->id) }}">
                                <h2>{{ $data->judul }}</h2>
                            </a>
                            <p>{!! substr ($data->isi1, 0, 400) !!}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> {{ $data->name }} , {{ $data->kt }}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>  {{ $totkomen }}  Komentar</a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            @include('site.layouts.konten.konten_kanan')
        </div>
    </div>
</section>

@endsection