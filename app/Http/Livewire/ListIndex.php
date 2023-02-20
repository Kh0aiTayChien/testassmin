<?php

namespace App\Http\Livewire;
use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ListIndex extends Component
{
    use WithPagination;

    public $perPage = 2;

    public function render()
    {
        $news = Article::Simplepaginate($this->perPage);
        return view('livewire.list-index', [
            'news' => $news
        ]);
    }
}
