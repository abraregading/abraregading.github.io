@extends('site.layouts.index1')

@section('judul', 'Selamat datang di My - Porfolio')

@section('konten')


<!--=================================
=            Design Team            =
==================================-->
<section class="design-team section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Porfolio Saya</h2>
					<p><a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a> makes it easy to stay on top of your Life Style. No late tasks. No gimmicks.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<!-- Team -->
                <div class="team-sm">
                    <!-- Team Member Image -->
                    <div class="image">
                        <img class="w-100" src="{{ asset ('site') }}/images/team/design-team-01.jpg" alt="member-image">
                        <!-- Social Contacts -->
                        <div class="social-links">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Name -->
                    <h3>Jonathon Andrew</h3>
                    <!-- Position -->
                    <cite>Head Of Marketing</cite>
                    <!-- Description -->
                    <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Team -->
                <div class="team-sm">
                    <!-- Team Member Image -->
                    <div class="image">
                        <img class="w-100" src="{{ asset ('site') }}/images/team/design-team-02.jpg" alt="member-image">
                        <!-- Social Contacts -->
                        <div class="social-links">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Name -->
                    <h3>Jonathon Andrew</h3>
                    <!-- Position -->
                    <cite>Head Of Marketing</cite>
                    <!-- Description -->
                    <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Team -->
                <div class="team-sm">
                    <!-- Team Member Image -->
                    <div class="image">
                        <img class="w-100" src="{{ asset ('site') }}/images/team/design-team-03.jpg" alt="member-image">
                        <!-- Social Contacts -->
                        <div class="social-links">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Name -->
                    <h3>Jonathon Andrew</h3>
                    <!-- Position -->
                    <cite>Head Of Marketing</cite>
                    <!-- Description -->
                    <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Design Team  ====-->


<!--=====================================
=            Section comment            =
======================================-->

<section class="section cta-hire bg-gary">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- Hire Title -->
				<h2>We are hunting Genius Developers</h2>
				<!-- Job Description -->
				<p>Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque
					in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
				<!-- Action Button -->
				<a href="contact.html" class="mt-3 btn btn-main-md">Join the team</a>
			</div>
		</div>
	</div>
</section>

<!--====  End of Section comment  ====-->

@endsection