<div>
    <div class="col-md-12">
        <div class="box">
            <h4 class="block-title">Search Filter <span class="la la-search"></span></h4>
            <div class="title-border"></div>
            <form class="row">
                <div class="col-lg-2 col-12 mb-3">
                    <label for="Category" class="mb-2">Category:</label>
                    <select wire:model="searchCategorisationId" class="form-select dash_select" aria-label="Category">
                        <option value="" selected>All</option>
                        @foreach ($categorisations as $categorisation)
                            <option value="{{ $categorisation->id }}">{{ $categorisation->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3 col-6 mb-3">
                    <label for="Title" class="mb-2">Title:</label>
                    <input wire:model="searchTitle" type="text" class="form-control dash_form" placeholder="Search title">
                </div>
                <div class="col-lg-2 col-6 mb-3">
                    <label for="dateFrom" class="mb-2">From:</label>
                    <input wire:model="dateFrom" type="date" class="form-control dash_form">
                </div>
                <div class="col-lg-2 col-6 mb-3" >
                    <label for="dateTo" class="mb-2">To:</label>
                    <input wire:model="dateTo" type="date" class="form-control dash_form">
                </div>
            </form>
        </div>
    </div>    

    <div class="col-md-12">
        <div class="box">
            <h4 class="block-title">Manage Post</h4>
            <div class="title-border"></div>
            <ul class="manage_post_list mt-auto">
                @foreach ($articles as $article) 
                <li>
                    <div class="manage_post">
                        <img src="{{ asset('uploads/articles') . '/' . 'thumbnail_' . $article->main_image }}" class="manage_post_image img-fluid" alt="Article Thumbnail">
                        <div class="manage_post_body">
                            <h5 class="manage_post_heading">{{ $article->title }}</h5>
                            <ul class="manage_post_meta">
                                <li><a href="#">{{ $article->categorisation->name }}</a></li>
                                <li><a href="#">{{ $article->created_at->format('Y-m-d') }}</a></li>
                            <ul class="manage_post_buttons">
                                <li><a href="/admin-article/{{ $article->id }}/edit"><button class="manage_post_button_left">Edit <span class="la la-pen"></span></button></a></li>
                                <li><button class="manage_post_button_right">Delete <span class="la la-trash"></span></button></li>
                            </ul>
                        </div>
                    </div>
                </li>    
    @endforeach
    {{ $articles->links() }}
            </ul>
        </div>    
    </div>    
</div>