<div class="col-md-12">
    <div class="box">
    <h4 class="block-title">Comments <span class="la la-comments"></span> {{ $comments_count }}</h4>
    <div class="title-border"></div>
        @if ($comments_count > 0)
        @foreach ($comments as $comment)
        <div class="comment">
            <div class="comm-body">
                <h5 class="comm_name">{{ $comment['author'] }}</h5>
                <p>{{ $comment['body'] }}</p>
            </div>    
        </div>   
        @endforeach 
        @if (!empty($userComment && $comments_count > 1))
        <div class="comment">
            <div class="comm-body">
                <h5 class="comm_name">{{ $userComment['author'] }}</h5>
                <p>{{ $userComment['body'] }}</p>
            </div>    
        </div>
        @endif
            @if ($loadMoreStatus === TRUE)
                <button wire:click.prevent="loadMore" class="btn btn-primary">View more</button>
            @endif    
        @else
            <p>Be the first to comment</p>    
        @endif  
        <h4 class="block-title">Leave a Reply <span class="la la-comment-alt"></span></h4>
            <div class="title-border"></div>
            <form class="row">
                <div class="col-md-12 mb-4">
                    <label for="name" class="mb-2">Name:</label>
                    <input type="text" class="form-control comm_form" wire:model="author">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="comment" class="mb-2">Comment:</label>
                    <textarea class="form-control comm_text" id="" cols="30"
                        rows="10" wire:model="newComment"></textarea>
                </div>
                <button class="comm_btn" type="submit" wire:click.prevent="addComment">Reply <span
                        class="la la-paper-plane"></span></button>
            </form> 
    </div>
</div>

