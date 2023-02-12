<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/la/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/device.css') }}">
    @livewireStyles
    <title>{{ $categorisation->name }} | Articles</title>
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">10 May.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="la la-bars"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active-underline" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu customnav_drop">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <div class="">
                    <form class="nav_form">
                        <input class="nav_input" type="search" placeholder="Search Me">
                        <button class="nav_btn" type="submit">Search</button>
                    </form>
                </div>
            </div>

        </div>
    </nav>
    <div class="offcanvas canvas-custom offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="myCanvas_list mb-5">
                <li><a href="/">Home</a></li>
                <li><a href="">Link</a></li>
                <li><a href="">Link</a></li>
                <li><a href="">Link</a></li>
                <li><a href="">Link</a></li>
            </ul>
            <ul class="myCanvas_socials">
                <li><a href=""><span class="la la-facebook"></span></a></li>
                <li><a href=""><span class="la la-twitter"></span></a></li>
                <li><a href=""><span class="la la-instagram"></span></a></li>
                <li><a href=""><span class="la la-whatsapp"></span></a></li>
                <li><a href=""><span class="la la-youtube"></span></a></li>
                <li><a href=""><span class="la la-spotify"></span></a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <livewire:categorisation-handler :slug="$slug" :categorisation="$categorisation" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box" data-aos="fade-up">
                            <h4 class="block-title">Archived Posts</h4>
                            <div class="title-border"></div>
                            <ul class="archive-list">
                                <li><a href=""><span class="la la-calendar-alt"></span> 02. 05. 2001</a></li>
                                <li><a href=""><span class="la la-calendar-alt"></span> 02. 05. 2002</a></li>
                                <li><a href=""><span class="la la-calendar-alt"></span> 02. 05. 2003</a></li>
                                <li><a href=""><span class="la la-calendar-alt"></span> 02. 05. 2004</a></li>
                                <li><a href=""><span class="la la-calendar-alt"></span> 02. 05. 2005</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box" data-aos="fade-up">
                            <h4 class="block-title">Subscribe to Newsletters</h4>
                            <div class="title-border"></div>
                            <form action="">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control newsletter-form" placeholder="Enter Name">
                                </div>
                                <div class="form-group col-12">
                                    <input type="email" class="form-control newsletter-form" placeholder="Enter E-mail">
                                </div>
                                <button type="submit" class="nl-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box" data-aos="left">
                            <h4 class="block-title">Get Connected</h4>
                            <div class="title-border"></div>
                            <ul class="social-list">
                                <li class="fb"><a href=""><span class="la la-facebook"></span></a></li>
                                <li class="tw"><a href=""><span class="la la-twitter"></span></a></li>
                                <li class="ig"><a href=""><span class="la la-instagram"></span></a></li>
                                <li class="wa"><a href=""><span class="la la-whatsapp"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-3 company-block">
                    <h4 class="company-details">10May.</h4>
                    <p class="company-slogan">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi quo laboriosam odit pariatur.
                        Amet tenetur blanditiis excepturi necessitatibus magnam dolore error dicta,
                    </p>
                    <ul class="footer-social">
                        <li><a href=""><span class="la la-facebook"></span></a></li>
                        <li><a href=""><span class="la la-twitter"></span></a></li>
                        <li><a href=""><span class="la la-instagram"></span></a></li>
                        <li><a href=""><span class="la la-telegram"></span></a></li>
                    </ul>
                </div>
                <div class="col-9 footer-links">
                    <ul class="footer-list">
                        <li><a href="/"><span class="la la-angle-double-right"></span> Home</a></li>
                        <li><a href=""><span class="la la-angle-double-right"></span> Artists</a></li>
                        <li><a href=""><span class="la la-angle-double-right"></span> Genre</a></li>
                        <li><a href=""><span class="la la-angle-double-right"></span> Chart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/sliders.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @livewireScripts
</body>

</html>