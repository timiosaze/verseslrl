<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Favorite Verses</title>
	<link rel="stylesheet" href="{{asset('assets/bootstrap5.0.2/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/styles/stylesheet.css')}}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container">
	    <a class="navbar-brand" id="logo" href="#">FV</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
		@if (Route::has('login'))
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ms-auto">
				@auth
					<a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
				@else
					<li class="nav-item">
						<a href="{{ route('login') }}" class="nav-link">Log in</a>
					</li>
					
					@if (Route::has('register'))
					<li class="nav-item">
						<a href="{{ route('register') }}" class="nav-link">Register</a>
					</li>
					@endif
				@endauth
				</ul>
			</div>
		@endif
	  </div>
	</nav>
	<section class="auth-pages">

		<div class="project-name">
			<p>Favorite Verses</p>			
		</div>
		<div>
			<p class="font-weight-bold indent">A site for storing favorite scriptures you love with their content</p>
		</div>
	</section>
	<script src="{{asset('assets/bootstrap5.0.2/js/bootstrap.min.js')}}"></script>
</body>
</html>