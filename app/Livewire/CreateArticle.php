<?php
    
    namespace App\Livewire;
    
    use App\Models\Article;
    use Livewire\Component;
    
    class CreateArticle extends Component
    {
        
        public string $name;
        
        public function save(): void
        {
            Article::create([
                'name' => $this->name
            ]);
            
            $this->redirect('/articles');
        }
        
        public function render(
        ): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
        {
            return view('livewire.create-article');
        }
        
    }