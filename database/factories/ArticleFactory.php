<?php
    
    namespace Database\Factories;
    
    use App\Models\Article;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;
    
    class ArticleFactory extends Factory
    {
        
        protected $model = Article::class;
        
        public function definition()
        {
            return [
                'name' => fake()->words(3, true),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        
    }