<div class="box">
    @foreach ($articles as $article)
        <div class="col-md-6">
            <figure class="block-post">
                <a href="/{{ $article->slug }}"><img src="{{ asset('uploads/articles') . '/' . 'thumbnail_' . $article->main_image }}" class="img-fluid" alt=""></a>
                <figcaption>
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
    {{ $articles->links() }}
</div>
