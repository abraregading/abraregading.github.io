@extends('site.layouts.index1')

@section('judul', 'Selamat datang di My - Porfolio')

@section('konten')

<!--====================================
=            Single Article            =
=====================================-->
<section class="section blog-single">
	<div class="container">
		<div class="row">
			<div class="col-md-10 m-auto">
				<!-- Single Post -->
				<article class="single-post">
					<!-- Post title -->
					<div class="post-title text-center">
						<h1>{{ $artikel->judul }}</h1>
						<!-- Tags -->
						<ul class="list-inline post-tag">
							<li class="list-inline-item">
								<img src="{{ asset ('site') }}/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
							</li>
							<li class="list-inline-item">
								<a href="#">{{ $artikel->user->name }}</a>
							</li>
							<li class="list-inline-item">
								<a href="#">{{  date('d M Y'), strtotime($artikel->created_at)}}</a>
							</li>
						</ul>
					</div>
					<!-- Post body -->
					<div class="post-body">
						<!-- Feature Image -->
						<div class="feature-image">
							<img class="img-fluid" src="{{ asset ('site') }}/images/blog/single-blog-feature-image.jpg" alt="feature-image">
						</div>
						<!-- Paragrapgh -->
						<p>{!! substr ($artikel->isi1, 0, 400) !!}</p>
						<!-- Blockquote -->
						<div class="quote">
							<blockquote>
								Design is not just what it looks like and feels like. Design is how it works.
							</blockquote>
						</div>
						<!-- Paragrapgh -->
						<p>{!! substr ($artikel->isi2, 0, 400) !!}</p></p>
						<!-- Post Image -->
						<div class="post-image text-center">
							<img class="img-fluid" src="{{ asset ('site') }}/images/blog/post-body-image.jpg" alt="post-body-image">
						</div>
						<!-- Paragrapgh -->
						<p>{!! substr ($artikel->isi3, 0, 400) !!}</p></p>
					</div>
				</article>
				<!-- About Author Widget -->
				<div class="about-author">
					<h2>Tentang Penulis</h2>
					<div class="media">
						<!-- Author Image -->
						<div class="image">
							<img class="d-flex justify-content-center align-self-center" src="{{ asset ('site') }}/images/team/marketing-team-03.jpg" alt="author-image">
						</div>
						<!-- About Author -->
						<div class="media-body align-self-center">
							<!-- Author Name -->
							<h3>Jonathon Andrew</h3>
							<!-- Bio -->
							<p>Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Mauris blandit aliquet elit, </p>
							<!-- Author Social links -->
							<ul class="list-inline social-links">
								<li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
								<li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
								<li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
								<li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Single Article  ====-->

<!--======================================
=            Related Article            =
=======================================-->
<section class="section related-articles bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-12 title">
				<!-- Section Title -->
				<h2>Artikel Terkait</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
                <article class="post-sm">
                    <!-- Post Image -->
                    <div class="post-thumb">
                        <a href="blog-single.html"><img class="w-100" src="{{ asset ('site') }}/images/blog/post-01.jpg" alt="Post-Image"></a>		
                    </div>
                    <!-- Post Title -->
                    <div class="post-title">
                        <h3><a href="#">{{ $artikel->judul }}</a></h3>
                    </div>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <ul class="list-inline post-tag">
                            <li class="list-inline-item">
                                <img src="{{ asset ('site') }}/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                            </li>
                            <li class="list-inline-item">
                                <a href="#">{{ $artikel->user->name }}</a>
                            </li>
                            <li class="list-inline-item">
                                {{  date('d M Y'), strtotime($artikel->created_at)}}
                            </li>
                        </ul>
                    </div>
                    <!-- Post Details -->
                    <div class="post-details">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>
                </article>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
                <article class="post-sm">
                    <!-- Post Image -->
                    <div class="post-thumb">
                        <a href="blog-single.html"><img class="w-100" src="{{ asset ('site') }}/images/blog/post-02.jpg" alt="Post-Image"></a>		
                    </div>
                    <!-- Post Title -->
                    <div class="post-title">
                        <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
                    </div>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <ul class="list-inline post-tag">
                            <li class="list-inline-item">
                                <img src="{{ asset ('site') }}/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Thomas Johnson</a>
                            </li>
                            <li class="list-inline-item">
                                August 8, 2017
                            </li>
                        </ul>
                    </div>
                    <!-- Post Details -->
                    <div class="post-details">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>
                </article>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
                <article class="post-sm">
                    <!-- Post Image -->
                    <div class="post-thumb">
                        <a href="blog-single.html"><img class="w-100" src="{{ asset ('site') }}/images/blog/post-03.jpg" alt="Post-Image"></a>		
                    </div>
                    <!-- Post Title -->
                    <div class="post-title">
                        <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
                    </div>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <ul class="list-inline post-tag">
                            <li class="list-inline-item">
                                <img src="{{ asset ('site') }}/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Thomas Johnson</a>
                            </li>
                            <li class="list-inline-item">
                                August 8, 2017
                            </li>
                        </ul>
                    </div>
                    <!-- Post Details -->
                    <div class="post-details">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>
                </article>
			</div>
		</div>
	</div>
</section>
<!--====  End of Related Article  ====-->


@endsection