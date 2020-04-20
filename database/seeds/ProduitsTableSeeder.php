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
    /*
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
                    

                */


                //next descriprtion of 'bossanova'
                
                /*The original lineup consisted of Black Francis (real name Charles Michael Kittridge Thompson IV) (vocals, guitar), Kim Deal (bass, vocals (1986 to 2013), Joey Santiago (guitar) and Dave Lovering (drums).
                Kim Deal left the band in 2013, and was briefly replaced for live performances by Kim Shattuck,
                Bossanova is the fifth Pixies album.Pixies are an American alternative rock, Indie Rock, band formed in early 1986 in Boston,  
                    Pixies are an American alternative rock, Indie Rock, band formed in early 1986 in Boston, Massachusetts.*/

                /*    
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
*/
                    Produit::create(
                        [
                            'title' => 'Acid King',// 'Nirvana', 'Daniel Johnston',
                            'slug' => 'acid-king-the-early-years',
                            'subtitle' => 'Acid King',
                            'realisation' => 'The Early Years', //'In Utero', 'Pain',
                            'description' => 'A CD of this famous band of Stoner Rock from San Francisco, CA, formed in 1993. Official site: acidking.com. Listen on: https://youtu.be/1EbXKWN_RNE',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                            'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                            //'category_id' => '3',// '2', '2',
                            'year' => '2006',// '1994', '1984',
                            'price' => '118'*100,// '16', '19',   
                            
                            ]
            
                        )->categories()->attach(1);


                        Produit::create(
                            [
                                'title' => 'Eath (2)',// 'Nirvana', 'Daniel Johnston',
                                'slug' => 'earth_2_pentastar_in_the_style_of_demons',
                                'subtitle' => 'Earth (2) ‎– Pentastar: In The Style Of Demons',
                                'realisation' => 'Pentastar: In The Style Of Demons', //'In Utero', 'Pain',
                                'description' => 'This album has been released on the Sub Pop label. Earth are considered pioneers of stoner, drone doom genre 
                                (also minimalist, meditative psychedelic/post-rock with gospel and country influences. They are based in Seattle. ',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                                'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                                //'category_id' => '3',// '2', '2',
                                'year' => '1996',// '1994', '1984',
                                'price' => '14'*100,// '16', '19',   
                                
                                ]
                
                            )->categories()->attach(2);


                            Produit::create(
                                [
                                    'title' => 'Daniel Johnston',// 'Nirvana', 'Daniel Johnston',
                                    'slug' => 'dan_johnston_songs_of_pain',
                                    'subtitle' => 'Songs Of Pain',
                                    'realisation' => 'Songs Of Pain', //'In Utero', 'Pain',
                                    'description' => 'Daniel Johnston was the king of Lo-Fi music, an american singer-songwriter, and visual artist. 
                                    Born in 1961 and died in 2019. Sites: hihowareyou.com',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                                    'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                                    //'category_id' => '3',// '2', '2',
                                    'year' => '1982',// '1994', '1984',
                                    'price' => '05'*100,// '16', '19',   
                                    
                                    ]
                    
                                )->categories()->attach(3);
            
                        /*Earth are considered pioneers of drone doom genre. The band was founded 
                        in 1990, broke up in 1997 and re-united in 2003. Their musical style ranges 
                        from abrasive drone metal (Earth 2), to stoner rock (Pentastar) and lately,
                         more minimalist, meditative psychedelic/post-rock with gospel and country 
                         influences. They are based in Seattle, Washington.*/
                       
                       
                       
                         /* Daniel Johnston (born January 22, 1961, Sacramento, California, 
                        USA - died September 10, 2019, Waller, Texas, USA) was an American 
                        singer-songwriter, and visual artist. He was well known in Austin, 
                        Texas for painting the Hi How Are You? frog mural on the side of 
                        Sound Exchange, Austin, TX.*/


                        Produit::create(
                            [
                                'title' => 'GRAPHZINE GRAPHZONE',// 'Nirvana', 'Daniel Johnston',
                                'slug' => 'graphzine_graphzone',
                                'subtitle' => 'GRAPHZINE GRAPHZONE',
                                'realisation' => 'Xavier Gilles Néret', //'In Utero', 'Pain',
                                'description' => '21 cm /29,7 cm - 160 pages / couvrerture en sérigraphie / 2500 ex. 
                                Site: http://www.lederniercri.org/prod/xavier-gilles-neret-grafzine-grafzone-1357,324.html',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                                'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                                //'category_id' => '3',// '2', '2',
                                'year' => '2019',// '1994', '1984',
                                'price' => '25'*100,// '16', '19',   
                                  

                                ]
                
                            )->categories()->attach(4);
/*co édition dernier cri / editions du sandre
 
Transgressif, virtuose et désinvolte, mal connu du grand public mais désormais 
reconnu par les institutions, comme la Bibliothèque nationale qui lui consacre 
depuis peu un fonds, le graphzine désigne une mouvance graphique et éditoriale 
héritière du mouvement punk et de la culture de l’autonomie. Ce premier essai 
d’envergure sur le sujet, à la fois historique et critique, rassemble de nombreux 
témoignages d’acteurs de cette scène en rupture avec le marché de l’art. Publié 
en coédition avec Le Dernier Cri (Marseille), ce livre à la couverture sérigraphiée 
bénéficie d’une très riche iconographie, imprimée en bi et trichromie.*/
                            Produit::create(
                                [
                                    'title' => 'D)EVIL',// 'Nirvana', 'Daniel Johnston',
                                    'slug' => 'd_evil',
                                    'subtitle' => 'D)EVIL',
                                    'realisation' =>  'Anne Van der Linden, Francesco Defourny, Pakito Bolino, Marcel Ruijters, Mathias Lehmann, Marie-Pierre Brunel, P’tit Marc, Benjamin Monti.',
                                    'description' => ' 36 pages / 7 passages couleurs / 26cmx26cm + divers formats intérieurs / 200ex.',
                                    'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                                    //'category_id' => '3',// '2', '2',
                                    'year' => '2011',// '1994', '1984',
                                    'price' => '30'*100,// '16', '19',   
                                   
                                    ]
                    
                                )->categories()->attach(4); 
                               /* 
                                Produit::create(
                                    [
                                        'title' => 'Daniel Johnston',// 'Nirvana', 'Daniel Johnston',
                                        'slug' => 'dan_johnston_songs_of_pain',
                                        'subtitle' => 'Songs Of Pain',
                                        'realisation' => 'Songs Of Pain', //'In Utero', 'Pain',
                                        'description' => 'Daniel Johnston was the king of Lo-Fi music, an american singer-songwriter, and visual artist. 
                                        Born in 1961 and died in 2019. Sites: hihowareyou.com',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                                        'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                                        //'category_id' => '3',// '2', '2',
                                        'year' => '1982',// '1994', '1984',
                                        'price' => '05'*100,// '16', '19',   
                                        
                                        ]
                        
                                    )->categories()->attach(4); 
                                    
                                    
                                    Produit::create(
                                        [
                                            'title' => 'Daniel Johnston',// 'Nirvana', 'Daniel Johnston',
                                            'slug' => 'dan_johnston_songs_of_pain',
                                            'subtitle' => 'Songs Of Pain',
                                            'realisation' => 'Songs Of Pain', //'In Utero', 'Pain',
                                            'description' => 'Daniel Johnston was the king of Lo-Fi music, an american singer-songwriter, and visual artist. 
                                            Born in 1961 and died in 2019. Sites: hihowareyou.com',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                                            'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                                            //'category_id' => '3',// '2', '2',
                                            'year' => '1982',// '1994', '1984',
                                            'price' => '05'*100,// '16', '19',   
                                            
                                            ]
                            
                                        )->categories()->attach(4);  
                                        
                                        */

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