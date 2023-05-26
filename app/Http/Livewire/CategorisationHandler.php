<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Categorisation;
use Livewire\Component;
use Livewire\WithPagination;

class CategorisationHandler extends Component
{

   
    use WithPagination;

    public $categorisation;
    public $slug;
    
    protected $paginationTheme = 'bootstrap';

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->categorisation = Categorisation::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.categorisation-handler', [
            'articles' => Article::where('categorisation_id', $this->categorisation->id)->withCount('comments')->paginate(2)
        ]);
    }
}
