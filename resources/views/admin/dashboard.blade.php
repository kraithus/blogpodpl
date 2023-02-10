<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/la/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/device.css') }}">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name | {{ Auth::user()->name }}</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed ml-5" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="la la-bars"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
            </div>
        </div>
    </header>
    @if(session()->has('message'))
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
        </div>
	@endif
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.html">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin-article/create">
                                Article
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin-podcast/create">
                                Youtube Podcast
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="spotplay.html">
                                Spotify Playlist
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Uploaded Articles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Uploaded Podcasts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Comments Engagements
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row">
                    
                </div>
            </main>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/sliders.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>
    <script src="{{ asset('js/dash.js') }}"></script>
</body>

</html>