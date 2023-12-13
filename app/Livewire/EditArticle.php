<?php
    
    namespace App\Livewire;
    
    use App\Models\Article;
    use Livewire\Component;
    
    class EditArticle extends Component
    {
        
        public Article $article;
        
        public $name;
        
        public function mount()
        {
            $this->name = $this->article->name;
        }
        
        public function update()
        {
            $this->article->update([
                'name' => $this->name
            ]);
            
            $this->redirect('/articles');
        }
        
        public function render()
        {
            return view('livewire.edit-article');
        }
        
    }