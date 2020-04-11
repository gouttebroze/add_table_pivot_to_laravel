<?php

use App\Produit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitsTableSeeder extends Seeder
{
    
    
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*
       DB::table('produits')->insert([
            'title' => 'Citizen Fish',
            'slug' => 'citizen_fish',
            'subtitle' => 'cit_fish_ten',
            'realisation' => 'Ten',
            'description' => 'Ska punk band from London.',
            'image' => 'https://via.placeholder.com/200x250',
            'year' => '1984',
            'price' => '6'*100,
        ])->categories()->attach(1)
        ;

        DB::table('produits')->insert([
            'title' => 'The Cure',
            'slug' => 'the_cure',
            'subtitle' => 'the_cure_three_imaginary_boys',
            'realisation' => 'Three Imaginary Boys',
            'description' => 'New wave, Post punk',
            'image' => 'https://via.placeholder.com/200x250',
            'year' => '1979',
            'price' => '7'*100,
        ])->categories()->attach(2)
        ;


        DB::table('produits')->insert([
            'title' => 'SHELLAC',
            'slug' => 'shellac',
            'subtitle' => 'shellac_1000hurts',
            'realisation' => '1000hurts',
            'description' => 'Noise music band from Chicago',
            'image' => 'https://via.placeholder.com/200x250',
            'year' => '1994',
            'price' => '20'*100,
        ])->categories()->attach(2)
        ;
    */
    
        Produit::create(
            [
                'title' => 'RAMONES',// 'Nirvana', 'Daniel Johnston',
                'slug' => 'ramones',
                'subtitle' => 'ramones_first_album',
                'realisation' => 'R.A.M.O.N.E.S.', //'In Utero', 'Pain',
                'description' => 'First album from Ramones. First punk rock band from New-York',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                'image' => 'https://via.placeholder.com/200x250',//'RAMONES.jpeg', //'in_utero.jpg', 'pain.jpg',
                //'category_id' => '1',// '2', '2',
                'year' => '1976',
                'price' => '25'*100,
                ])->categories()->attach(1);

                $produit = Produit::find(1);
                $produit->categories()->attach(2);

        Produit::create(
            [
                'title' => 'SHELLAC',// 'Nirvana', 'Daniel Johnston',
                'slug' => 'shellac',
                'subtitle' => 'shellac_1000hurts',
                'realisation' => '1000hurts', //'In Utero', 'Pain',
                'description' => 'Noise, Post-punk from Chicago',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                //'category_id' => '2',// '2', '2',
                'year' => '1994',// '1994', '1984',
                'price' => '20'*100,// '16', '19',   
                
                ]

            )->categories()->attach(2);

            Produit::create(
                [
                    'title' => 'PIXIES',// 'Nirvana', 'Daniel Johnston',
                    'slug' => 'bossanova',
                    'subtitle' => 'pixies_bossanova',
                    'realisation' => 'Bossanova', //'In Utero', 'Pain',
                    'description' => 'Bossanova is the fifth Pixies album.Pixies are an American alternative rock, Indie Rock, band formed in early 1986 in Boston.',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                    'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                    //'category_id' => '3',// '2', '2',
                    'year' => '1990',// '1994', '1984',
                    'price' => '19'*100,// '16', '19',   
                    
                    ]
    
                )->categories()->attach(3);
                    
                //next descriprtion of 'bossanova'
                
                /*The original lineup consisted of Black Francis (real name Charles Michael Kittridge Thompson IV) (vocals, guitar), Kim Deal (bass, vocals (1986 to 2013), Joey Santiago (guitar) and Dave Lovering (drums).
                Kim Deal left the band in 2013, and was briefly replaced for live performances by Kim Shattuck,
                Bossanova is the fifth Pixies album.Pixies are an American alternative rock, Indie Rock, band formed in early 1986 in Boston,  
                    Pixies are an American alternative rock, Indie Rock, band formed in early 1986 in Boston, Massachusetts.*/

                    
                    Produit::create(
                        [
                            'title' => 'La souris déglinguée',// 'Nirvana', 'Daniel Johnston',
                            'slug' => 'lsd_best_of',
                            'subtitle' => 'best_of',
                            'realisation' => 'best of', //'In Utero', 'Pain',
                            'description' => 'Les titres les plus connus sorties entre 1980 et 1984.',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                            'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                            //'category_id' => '1',// '2', '2',
                            'year' => '1985',// '1994', '1984',
                            'price' => '17'*100,// '16', '19',   
                           
                            ]  )->categories()->attach(1)
                                
                            
                    ; 
            
                        


            /*Produit::create(
                [
                    'artist_name' => 'Shellac',// 'Nirvana', 'Daniel Johnston',
                    'product_name' => '1000hurts', //'In Utero', 'Pain',
                    'desc_product' => 'Noise, Post-punk from Chicago',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                    'img_filename' => 'shellac1.jpeg', //'in_utero.jpg', 'pain.jpg',
                    'category_id' => '3',// '2', '2',
                    'year' => '1994',// '1994', '1984',
                    'price_product' => '20',// '16', '19',   
                    
                    ]
    
                );*/
    }
}