@extends('login.layouts')

@section('judul','Halaman Login User')
@section('login')
<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="{{ asset ('site') }}/images/Login/front-desk-sign-in.jpg"
							alt="desk-image"></div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="index.html"><img src="{{ asset ('site') }}/images/logo.png" alt=""></a>
						</div>
						<div class="title-text">
							<h3>Silahkan Login Disini</h3>
						</div>
						<form action="{{url ('proses_login') }}" method="post">
              @csrf
							<!-- Username -->
							<input class="form-control main" type="text" name="username" placeholder="Username" required>
							<!-- Password -->
							<input class="form-control main" type="password" name="password" placeholder="Password" required>
							<!-- Submit Button -->
							<button type="submit" class="btn btn-main-sm">Log In</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection