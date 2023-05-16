<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/la/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/device.css') }}">
    @livewireStyles
    <title>{{ $podcast->title }}</title>
</head>    

<body>

    <nav class="navbar sticky-top navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BlogPodPlay</a>
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
                <div>
                    <form class="navigation_form">
                        <input class="navigation_input" type="search" placeholder="Search...">
                        <button class="navigation_btn" type="submit">Search</button>
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
                <li><a href="">Home</a></li>
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
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-md-8" data-oas="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/"><span class="la la-home"></span> Home</a> </li>
                                    <li class="breadcrumb-item"><a href="#"><span class="la la-microphone"></span> Podcasts</a> </li>
                                    <li class="breadcrumb-item"><a href="#"><span class="la la-folder-open"></span>Podcast - {{ $podcast->categorisation->name }}</a>
                                    </li>
                                </ol>
                            </nav>
                            <article>
                                <figure class="post_body">
                                <iframe class="pod_frame" src="{{ 'https://www.youtube.com/embed' . '/' . $podcast->video_id }}" title="YouTube video player" frameborder="0"></iframe>
                                    <figcaption class="post_head">
                                        <h4>{{ $podcast->title }}</h4>
                                    </figcaption>
                                </figure>
                                <div class="author_body mb-4">
                                    <img src="{{ asset('placeholder-images/usr.png') }}" alt="..." class="img-fluid">
                                    <div class="media-body">
                                        <h5 class="author_name">{{ $podcast->host }}</h5>
                                    </div>
                                </div>
                                <div>{!! $podcast->body !!}</div>  
                            </article>  
                        </div>
                    </div>
                    <!-- podcast comments handler -->
                    <livewire:podcast-comments-handler :podcast="$podcast" :comments_count="$podcast->comments_count" />
                    <!-- end podcast comments handler -->                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12" data-oas="fade-up">
                        <div class="box">
                            <h4 class="block-title">Simiral Posts</h4>
                            <div class="title-border"></div>
                        </div>
                    </div>
                    <div class="col-md-12" data-oas="fade-up">
                        <div class="box">
                            <h4 class="block-title">Podcasts <span class="la la-microphone"></span></h4>
                            <div class="title-border"></div>
                        </div>
                    </div>
                    <div class="col-md-12" data-oas="fade-up">
                        <div class="box">
                            <h4 class="block-title">Weekly Chart <span class="la la-spotify"></span></h4>
                            <div class="title-border"></div>
                            <div>
                                <iframe style="border-radius:12px"
                                    src="https://open.spotify.com/embed/playlist/30tVuFNNRCTfRqfz7Snxue?utm_source=generator"
                                    width="100%" height="380" frameBorder="0" allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-section">
        <div class="container">
            <div class="row first_row">
                <div class="col-lg-6 col-12 company-block">
                    <h4 class="company-details">BlogPodPlay</h4>
                    <p class="company-slogan">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi quo laboriosam odit pariatur.
                        Amet tenetur blanditiis excepturi necessitatibus magnam dolore error dicta,
                    </p>
                    <ul class="footer-social">
                        <li><a href=""><span class="la la-facebook"></span></a></li>
                        <li><a href=""><span class="la la-twitter"></span></a></li>
                        <li><a href=""><span class="la la-instagram"></span></a></li>
                        <li><a href=""><span class="la la-spotify"></span></a></li>
                        <li><a href=""><span class="la la-youtube"></span></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 footer-links">
                    <h4 class="block-title">Our Services <span class="la la-hand-holding"></span></h4>
                    <div class="title-border"></div>
                    <ul class="footer-list">
                        <li><a href="">Our Work</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">Partnership</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6">
                    <h4 class="block-title">Company <span class="la la-briefcase"></span></h4>
                    <div class="title-border"></div>
                    <ul class="footer-list">
                        <li><a href="">About</a></li>
                        <li><a href="">Terms</a></li>
                        <li><a href="">Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p id="copyright" class="copyright">
                        &copy; Company Name  <span id="currentYear"></span>. <br> 
                        Designed by <a href="https://www/wa.me/265993996717" class="text-decoration-none">Gabriel Munthali  <span class="ml-2 fa fa-cog fa-spin"></span></a>.
                    </p>
                </div>
                <div class="col-md-6">

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
    <script>
    AOS.init({
        easing: 'ease-in-out-sine'
    });
    </script>
    @livewireScripts
</body>

</html>