<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index medical page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/' . "bootstrap-logo.svg" )}}" alt="" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a href="./users" class="text-decoration-none nav-link">
                    <i class="bi bi-person"></i> Patients
                </a>
        </li>
        <li class="nav-item">
        <a href="./doctors" class="text-decoration-none nav-link">
                <span class="bi bi-activity"> Doctors</span>
            </a>
        </li>
        <li class="nav-item">
        <a href="./calendar" class="text-decoration-none nav-link">
                    <i class="bi bi-calendar"></i> Calendar
                </a>      
        </li>
        

        <li class="nav-item">
        <a href="./api/v1" class="text-decoration-none nav-link">
                    <i class="bi bi-box-arrow-in-up-left"></i> Api
                </a>     
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a href="#" class="text-decoration-none nav-link">
                    <i class="bi bi-person"></i> Patients menu
                </a>
        </li>
        <li class="nav-item">
        <a href="./doctorstopatients" class="text-decoration-none nav-link">
                <span class="bi bi-activity"> Doctors menu</span>
            </a>
        </li>
        
      </ul>
      <ul class="navbar-nav me-right mb-2 mb-lg-0">
      <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
				@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6  sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-decoration-none px-4 text-secondary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-decoration-none px-4 text-secondary">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-decoration-none px-4 text-secondary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
			</div>
        </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="bd-example">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" data-src="{{ asset('images/' . "med-main-page.jpg" )}}" alt="First slide [800x400]" src="{{ asset('images/' . "med-main-page.jpg" )}}" data-holder-rendered="true">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17fb7ec7e40%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17fb7ec7e40%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17fb7ec7e41%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17fb7ec7e41%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22276.9921875%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

	<div class="container">
		<div class="row">
			<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
				@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>&nbsp;

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
			</div>
		</div>
	

    <div class="container mt-5" style="max-width: 700px">
        <div class="row">
        <div class="col">
            <span class="">
                <a href="./users" class="text-decoration-none">
                    <i class="bi bi-person"></i> Patients
                </a>
            </span>
        </div>
        <div class="col">
            <a href="./doctors" class="text-decoration-none">
                <span class="bi bi-activity"> Doctors</span>
            </a>
        </div>
        <div class="col">
            <span class="">
                <a href="./calendar" class="text-decoration-none">
                    <i class="bi bi-calendar"></i> Calendar
                </a>
            </span>
        </div>
        <div class="col">
            <span class="">
                <a href="./api/v1" class="text-decoration-none">
                    <i class="bi bi-box-arrow-in-up-left"></i> Api
                </a>
            </span>
        </div>
        </div>
    </div>

    <div class="container mt-5" style="max-width: 700px">
        <div class="row">
        <div class="col">
            <span class="">
                <a href="./" class="text-decoration-none">
                    <i class="bi bi-person"></i> Patients menu
                </a>
            </span>
        </div>
        <div class="col">
            <a href="./doctorstopatients" class="text-decoration-none">
                <span class="bi bi-activity"> Doctors menu</span>
            </a>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
