@extends('site.layouts.index1')

@section('judul', 'Selamat datang di My - Porfolio')

@section('konten')

<!--====================================
=            Single Article            =
=====================================-->

<section class="section page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h1>Artikel Kategori</h1>
				<!-- Page Description -->
				<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta.</p>
			</div>
		</div>
	</div>
</section>

<section class="section featured-article">
	<div class="container">
		<div class="row">
		@foreach($artikelrandom as $data)
			<div class="col-md-12">
				<article class="featured">
					<!-- Image -->
					<div class="image">
						<a href="blog-single.html"><img class="img-fluid" src="{{ asset ('site') }}/images/feature/featured-article.jpg" alt="featured-article"></a>
					</div>
					<!-- written-content -->
					<div class="content">
						<!-- Post Title -->
						<h2><a href="{{url ('/artikel_v/detail/'.$data->id) }}">{{ $data->judul }}</a></h2>
						<!-- Tags -->
						<ul class="list-inline post-tag">
							<li class="list-inline-item">
								<img class="img-fluid" src="{{ asset ('site') }}/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
							</li>
							<li class="list-inline-item">
								<a href="#">{{ $data->user->name }}</a>
							</li>
							<li class="list-inline-item">
							{{  date('d M Y'), strtotime($data->created_at)}}
							</li>
						</ul>
						<!-- Post Body -->
						<p>{!! substr($data->isi1, 0, 300) !!}</p>
						<a class="btn btn-main-sm" href="{{url ('/artikel_v/detail/'.$data->id) }}">Selengkapnya</a>
					</div>
				</article>
			</div>
			@endforeach
		</div>
	</div>
</section>

<!--====  End of Featured Article  ====-->
<section class="post-grid section pt-0">
	<div class="container">
		<div class="row">
			@foreach($artikelmenu as $data)
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
				<article class="post-sm">
					<!-- Post Image -->
					<div class="post-thumb">
						<a href="{{url ('/artikel_v/detail/'.$data->id) }}"><img class="w-100" src="{{ asset ('site') }}/images/blog/post-01.jpg" alt="Post-Image"></a>		
					</div>
					<!-- Post Title -->
					<div class="post-title">
						<h3><a href="{{url ('/artikel_v/detail/'.$data->id) }}">{{ $data->judul }}</a></h3>
					</div>
					<!-- Post Meta -->
					<div class="post-meta">
						<ul class="list-inline post-tag">
							<!-- <li class="list-inline-item"> -->
								<!-- <img src="{{ asset ('site') }}/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb"> -->
							<!-- </li> -->
							<li class="list-inline-item">
								<a href="#">{{ $data->user->name }}</a>
							</li>
							<li class="list-inline-item">
							{{  date('d M Y'), strtotime($data->created_at)}}
							</li>
						</ul>
					</div>
					<!-- Post Details -->
					<div class="post-details">
						<p> {!! substr($data->isi1, 0, 300) !!} </p>
					</div>
				</article>
			</div>
			@endforeach

			<!--  -->
			<div class="col-12">
				<!-- Pagination -->
				<nav class="pagination-nav">
				  <ul class="pagination">
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true"><i class="ti-angle-right"></i></span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</section>


<!--====  End of Related Article  ====-->


@endsection