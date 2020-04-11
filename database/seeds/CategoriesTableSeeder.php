<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    Category::create(
        [
            'name' => 'Vinyls',
            'slug' => 'tours',
            

        ]
);

        Category::create(
        [
                'name' => 'CD',
                'slug' => 'c_d',
    
    
        ]
);

        Category::create(
            [
                'name' => 'Cassettes',
                'slug' => 'cassettes_audio',
            
    
            ]
);

        Category::create(
            [
                'name' => 'Livres: Graphzines',
                'slug' => 'livres_graphzines',
                
        
            ]
);
    }
}
