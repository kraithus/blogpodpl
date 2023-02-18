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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/device.css') }}">
    <title>{{ $title }}</title>
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">10 May.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
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
    <div class="offcanvas canvas-custom offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="margin: 0; padding: 0;">
                <div class="owl-carousel owl-theme owl-intro">
                    @foreach ($carouselArticles as $article)    
                    <div class="intro-item">
                        <figure class="item-content">
                            <a href="/{{ $article->slug }}"><img class="img-fluid" src="{{ asset('uploads/articles') . '/' . $article->main_image }}" alt="Article Image"></a>
                            <figcaption class="item-caption" data-aos="fade-left">
                                <a class="category-badge" href="/{{$article->categorisation->slug}}">{{ $article->categorisation->name }}</a>
                                <h4><a href="/{{ $article->slug }}">{{ $article->title }}</a></h4>
                                <ul class="intro-list">
                                    <li><a href=""><span class="la la-user"></span>{{ $article->writer->name }}</a></li>
                                    <li><a href=""><span class="la la-clock-o"></span>{{ $article->created_at->diffForHumans() }}</a></li>
                                    <li><a href=""><span class="la la-comments"></span> {{ $article->comments_count }}</a></li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box" data-aos="fade-up">
                            <h4 class="block-title">Podcasts <span class="la la-microphone"></span></h4>
                            <div class="title-border"></div>
                            <div class="row">
                                @foreach ($latestPodcasts as $podcast)
                                <div class="col-md-6">
                                <a href="/{{ $podcast->slug }}"><img src="{{ asset('uploads/podcasts') . '/' . 'thumbnail_' . $podcast->image }}" class="img-fluid home_pod" alt="Podcast Thumbnail"></a>
                                    <div class="pod_post">
                                        <a class="category-badge" href="category.html">{{ $podcast->categorisation->name }}</a>
                                        <h4><a href="/{{ $podcast->slug }}">{{ $podcast->title }}</a></h4>
                                        <p>{{ $podcast->click_bait }}</p>
                                        <ul class="blockPost_meta">
                                            <li><a href=""><span class="la la-user"></span>{{ $podcast->host }}</a></li>
                                            <li><a href=""><span class="la la-clock-o"></span>{{ $podcast->created_at->diffForHumans(); }}</a>
                                            </li>
                                            <li><a href=""><span class="la la-comments"></span> {{ $podcast->comments_count }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box" data-aos="fade-up">
                            <h4 class="block-title">Whats Happening<span class="la la-new"></span></h4>
                            <div class="title-border"></div>
                            <div class="row">
                                @foreach ($nextLatestArticles as $article)
                                <div class="col-md-6">
                                    <figure class="block-post">
                                        <a href="/{{ $article->slug }}"><img src="{{ asset('uploads/articles') . '/' . 'thumbnail_' . $article->main_image }}" class="img-fluid" alt="Article Thumbnail"></a>
                                        <figcaption>
                                            <a class="category-badge" href="{{ $article->categorisation->slug }}">{{ $article->categorisation->name }}</a>
                                            <h4><a href="/{{ $article->slug }}">{{ $article->title }}</a></h4>
                                            <p>{{ $article->click_bait }}</p>
                                            <ul class="blockPost_meta">
                                                <li><a href=""><span class="la la-user"></span>{{ $article->writer->name }}</a></li>
                                                <li><a href=""><span class="la la-clock-o"></span>{{ $article->created_at->diffForHumans() }}</a>
                                                </li>
                                                <li><a href=""><span class="la la-comments"></span> {{ $article->comments_count }}</a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-oas="fade-up">
                        <div class="box" data-aos="fade-up">
                            <h4 class="block-title">Category</h4>
                            <div class="title-border"></div>
                        </div>
                    </div>
                    <div class="col-md-6" data-oas="fade-up">
                        <div class="box" data-aos="fade-up">
                            <h4 class="block-title">Category</span></h4>
                            <div class="title-border"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box" data-aos="fade-up">
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
                </div>
                <div class="row">
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
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box" data-aos="fade-up">
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
                        <li><a href=""><span class="la la-angle-double-right"></span> Home</a></li>
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
    <script>
    AOS.init({
        easing: 'ease-in-out-sine'
    });
    </script>
</body>

</html>