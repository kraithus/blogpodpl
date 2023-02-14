<div>
@foreach ($articles as $article) 
    <div class="manage_post">
        <img src="{{ asset('uploads/articles') . '/' . 'thumbnail_' . $article->main_image }}" class="manage_post_image img-fluid" alt="Article Thumbnail">
        <div class="manage_post_body">
            <h5 class="manage_post_heading">{{ $article->title }}</h5>
            <ul class="manage_post_buttons">
                <li><a href="/admin-article/{{ $article->id }}/edit"><button class="manage_post_button_left">Edit <span class="la la-pen"></span></button></a></li>
                <li><button class="manage_post_button_right">Delete <span class="la la-trash"></span></button></li>
            </ul>
        </div>
    </div>
@endforeach
{{ $articles->links() }}
</div>