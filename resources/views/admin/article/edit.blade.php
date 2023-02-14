<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/la/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/device.css') }}">
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed ml-5" type="button"
            data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
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
                            <a class="nav-link active" href="artpost.html">
                                Article
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ytpod.html">
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
                <div class="row mt-4">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard"><span class="la la-home"></span>
                                        Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Article</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-8">
                        <div class="box">
                            <h4 class="block-title">Edit Article <span class="la la-book"></span></h4>
                            <div class="title-border"></div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="/admin-article/{{ $article->id }}" method="POST" class="row">
                                @csrf
                                @method('PUT')
                                <div class="col-md-12 mb-4">
                                    <label class="mb-2" for="post_title">Post Title:</label>
                                    <input type="text" class="form-control dash_form" name="title" value="{{ $article->title }}">
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="mb-2" for="post_title">Click Bait:</label>
                                    <input type="text" class="form-control dash_form" name="click_bait" value="{{ $article->click_bait }}" id="">
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="mb-2" for="body">Article Body:</label>
                                    <textarea name="body" class="form-control dash_text" id="" cols="30" rows="10">{!! $article->body !!}</textarea>
                                    <script>
                                            CKEDITOR.replace( 'body', {
                                            filebrowserUploadUrl: "{{ route('ckeditor.image-upload', ['_token' => csrf_token() ]) }}",
                                            filebrowserUploadMethod: 'form'
                                            });
                                    </script>    
                                </div>
                                <div class="col-md-6 mb-4">
                                    <select name="categorisation_id" class="form-select dash_select" aria-label="Category Select" required>
                                        <option value="{{ $article->categorisation_id }}">{{ $article->categorisation->name }}</option>
                                        @foreach ($categorisations as $categorisation)
                                            <option value="{{ $categorisation->id }}" }}>{{ $categorisation->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <select name="writer_id" class="form-select dash_select" aria-label="Author Select" required>
                                        <option value="{{ $article->writer_id }}">{{ $article->writer->name }}</option>
                                        @foreach ($writers as $writer)
                                            <option value="{{ $writer->id }}">{{ $writer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="artup_btn" type="submit">Save <span class="la la-upload"></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
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