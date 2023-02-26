<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Spotify Playlist</title>
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
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
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

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="dashboard.html">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="artpost.html">
                                Article
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ytpod.html">
                                Youtube Podcast
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="spotplay.html">
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
                <div class="row mt-4">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard"><span class="la la-home"></span>
                                        Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Post Playlist</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-8">
                        <div class="box" data-aos="fade-up">
                            <h4 class="block-title">Spotify Playlist <span class="la la-spotify"></span></h4>
                            <div class="title-border"></div>
                            <form action="/spotify-playlist" method="POST" class="row">
                                @csrf
                                <div class="col-md-12 mb-4">
                                    <label class="mb-2" for="post_title">Playlsit ID:</label>
                                    <input type="text" class="form-control dash_form" name="playlist_id">
                                </div>
                                <button class="artup_btn" type="submit">Upload Playlist <span class="la la-upload"></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box" data-aos="fade-up">
                            <h4 class="block-title">Quick Info <span class="la la-info"></span></h4>
                            <div class="title-border"></div>
                        </div>
                    </div>
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