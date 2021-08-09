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
@include('sweetalert::alert')
	
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
			<p class="title">Favorite Verse</p>
			<form action="{{ route('verses.store') }}" method="POST">
				@csrf
				<div class="mb-3">
				  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Verse" name="the_verse">
				</div>
				<div class="mb-3">
				  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Content" name="the_content"></textarea>
				</div>
				<button type="submit" class="btn btn-danger float-end">Save</button>
				<div class="clearfix"></div>
			</form>
		</section>
	</div>
	<div class="container-fluid">
		<section class="myfav">
			<p class="verses">Verses <span class="no-verses float-end">{{ $verses->count() }}</span></p>
			<div class="clearfix"></div>
			<ul>

				@forelse ($verses as $verse)
					
				<li>
					<div class="verse-content">
						<div>
							<p class="verse">{{ $verse->the_verse }}</p>
						</div>
						<div>
							<p class="content">{{ $verse->the_content }}</p>
						</div>
					</div>
					<div class="verse-actions">
						<div class="container-fluid">
							<div class="row">
								<div class="col text-center">
									<a href="{{route('verses.edit', $verse->id)}}">Edit</a>
								</div>
								<div class="col text-center">
									<form action="{{ route('verses.destroy', $verse->id)}}" id="my_form_{{$verse->id}}" method="POST">
										@csrf
										@method('DELETE')
										<a href="javascript:{}" onclick="document.getElementById('my_form_{{$verse->id}}').submit();">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</li>

				@empty

    			<li>
					<p>No verses yet.</p>
				</li>

				@endforelse

			</ul>
		</section>
		<section class="myfav">
			<div class="pagination row">
				{{ $verses->links() }}
			</div>
		</section>
	</div>

	<script src="{{asset('assets/script/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap5.0.2/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/script/scripts.js')}}"></script>
</body>
</html>