<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Categorisation;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleSearch extends Component
{   
    use WithPagination;

    public $categorisations;

    public $dateFrom; // assumed beginning of app launch, both date values passed from blade

    public $dateTo;

    public $searchCategorisationId = '';

    public $searchTitle = '';

    protected $paginationTheme = 'bootstrap';
    
    public function mount()
    {
        $this->categorisations = Categorisation::all()->sortBy('name');
    }    

    public function updating()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.article-search', [
            'articles' => Article::latest()
                                ->where('title', 'like', '%'.$this->searchTitle.'%')
                                ->where('categorisation_id', 'like', '%'.$this->searchCategorisationId.'%')
                                ->whereBetween('created_at', [$this->dateFrom . ' 00:00', $this->dateTo . ' 23:59'])
                                ->paginate(3),
        ]);
    }
}
