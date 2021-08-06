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
	    <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ms-auto">
				{{-- <li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="#">Login</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Register</a>
				</li> --}}
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					{{ Auth::user()->name }}
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<li>
						<!-- Authentication -->
						<form method="POST" action="{{ route('logout') }}">
							@csrf
	
							<a class="dropdown-item" href="route('logout')"
									onclick="event.preventDefault();
												this.closest('form').submit();">
								{{ __('Log Out') }}
							</a>
						</form>
					</li>
				  </ul>
				</li>
			  </ul>
	    </div>
	  </div>
	</nav>
	<div class="container-fluid">
		<section class="myfav">
			<p class="title">Edit Favorite Verse</p>
			<form action="" class="fav-form">
				<div class="mb-3">
				  <input type="text" class="form-control" id="exampleFormControlInput1" value="Jeremiah 7:23">
				</div>
				<div class="mb-3">
				  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">But this thing commanded I them, saying, Obey my voice, and I will be your God, and ye shall be my people: and walk ye in all the ways that I have commanded you, that it may be well unto you.</textarea>
				</div>
				<button type="submit" class="btn btn-danger float-end">Update</button>
				<div class="clearfix"></div>
			</form>
		</section>
	</div>
	
	<script src="{{asset('assets/script/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap5.0.2/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/script/scripts.js')}}"></script>
</body>
</html>