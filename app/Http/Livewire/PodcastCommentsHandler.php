<?php

namespace App\Http\Livewire;

use App\Models\PodcastComment;
use Livewire\Component;

class PodcastCommentsHandler extends Component
{
    public $podcast; // so I can get the $podcast->id from the collection the controller passed to the view
    public $podcastCommentSave; // save info of author and their comment
    public $commentsLoaded;
    public $author;
    public $newComment;
    public $comments;
    public $comments_count; // passed from view
    public $loadMoreStatus = FALSE;
    public $merge;
    public $skip = 0;
    public $take = 3; // so that I can access this value in functions mount and loadMore w/o having to redeclare it
    public $userComment;

    public function mount()
    {   
        if ($this->comments_count > $this->take)
        {
            $this->loadMoreStatus = TRUE;
        }

        $this->comments = PodcastComment::where('podcast_id', $this->podcast->id)->take($this->take)->get(); 
        // if not using function get(), returns collection and not array and livewire refutes that
    }

    /**
     * Store a newly created resource in storage.
     */  
    public function addComment()
    {
        $this->podcastCommentSave = new PodcastComment([
            'podcast_id' => $this->podcast->id,
            'author' => $this->author,
            'body' => $this->newComment
        ]); 

        $this->podcastCommentSave->save();

        $this->author = ""; // clear the fields after this is run
        $this->newComment = "";

        // Fetch the added comment
        $this->userComment = PodcastComment::find($this->podcastCommentSave->id);

        // update comment count
        $this->comments_count = PodcastComment::where('podcast_id', $this->podcast->id)->count();

        // if this is the first comment on the post then update value of object comments
        if ($this->comments_count === 1)
        {
            $this->comments = PodcastComment::where('podcast_id', $this->podcast->id)->get();
        }
    }
    
    public function loadMore()
    {   
        /**
         * TLDR, skip is initially 0 so that when we add value of what has been taken we skip just what has already been taken
         * If comments an article has exceed the number($this->take) that can be loaded in view
         * then set loadMoreStatus to true.
         * The value of skip when added to take exposes the total number of comments loaded.
         * If the value of this stored in $commentsLoaded is less than the comment count then
         * display the loadMore button.
         */
        $this->skip += $this->take;

        $this->commentsLoaded = $this->skip + $this->take;
        if ($this->commentsLoaded < $this->comments_count)
        {
            $this->loadMoreStatus = TRUE;
        } else {
            $this->loadMoreStatus = FALSE;
        }

        $nextSet = PodcastComment::where('podcast_id', $this->podcast->id)->skip($this->skip)->take($this->take)->get();
        $this->comments = $this->comments->merge($nextSet); // merge the collections
    }

    public function render()
    {
        return view('livewire.podcast-comments-handler');
    }
}
