<?php
    
    namespace App\Livewire;
    
    use App\Models\Article;
    use Livewire\Component;
    
    class ShowArticles extends Component
    {
        
        public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
        {
            return view('livewire.show-articles', [
                'articles' => Article::latest()->get()
            ]);
        }
        
    }