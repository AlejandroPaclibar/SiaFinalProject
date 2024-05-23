<?php

namespace Database\Seeders;

use App\Models\Artwork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'imageUrl' => 'https://static.toiimg.com/imagenext/toiblogs/photo/readersblog/wp-content/uploads/2020/08/1597814870881.jpg',
                'art_name' => 'Legend Of The Northen Blade',
                'description' => 'Legend Of The Northern Blade (북검전기) is a Korean novel series created by Woo-Gak. ',
                'price' => '300.0 ',
                
            ],
            

            [
                'imageUrl' => 'https://i.pinimg.com/564x/93/0d/5c/930d5cc3be09a6a9cd824db0265e03db.jpg',
                'art_name' => "Academy's Genuis Women",
                'description' => 'Ronan lived a wasteful life filled with regrets. A second chance befalls him at the end of his futile life. ',
                'price' => '90.0',
                
            ],

            [
                'imageUrl' => 'https://cdn.britannica.com/31/183031-050-8FAE6C2C/Artist-Jeanne-Sister-graphite-watercolour-paper-Edma-1872.jpg',
                'art_name' => 'Return Of The Crazy Demon',
                'description' => 'The Mad Demon, Jaha Lee, dreams of becoming the God of Martial Arts ',
                'price' => '55.0',
         
            ],
            
            [
                'imageUrl' => 'https://weblinks.nationalmuseum.gov.ph/wp-content/uploads/2021/09/01121956/NMG0411_Vicente-Manansala_Calesa-1951-copy-scaled.jpg',
                'art_name' => 'Ang Bahay ni Kuya',
                'description' => 'Chung Myung, The 13th Disciple of the Great Flowery Mountain Sect, One of the 3 Great Swordsmen,',
                'price' => '99.0',
         
            ],
             
            [
                'imageUrl' => 'https://i.pinimg.com/550x/6d/6c/a8/6d6ca8ce57ebe71498c8fdfc0b405893.jpg',
                'art_name' => 'Girl that we all want',
                'description' => 'Chung Myung, The 13th Disciple of the Great Flowery Mountain Sect, One of the 3 Great Swordsmen,',
                'price' => '199.0',
         
            ],
            
            [
                'imageUrl' => 'https://i.pinimg.com/564x/78/94/aa/7894aa8be769241186af8c2193d5689a.jpg',
                'art_name' => "Sun And Moon Beauty",
                'description' => 'Ronan lived a wasteful life filled with regrets. A second chance befalls him at the end of his futile life. ',
                'price' => '120.0',
                
            ],

            [
                'imageUrl' => 'https://render.fineartamerica.com/images/rendered/search/print/8/6.5/break/images/artworkimages/medium/1/27-birds-jennifer-lommers.jpg',
                'art_name' => 'Cool arts of A birds',
                'description' => 'The Mad Demon, Jaha Lee, dreams of becoming the God of Martial Arts ',
                'price' => '55.0',
         
            ],
            [
                'imageUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgYP5p7ZcRf7AQ6Ono225Pb6sGXXQQIhCIyV0She1rIw&s',
                'art_name' => 'Legend Of The Sun And Moon',
                'description' => 'Legend Of The Northern Blade (북검전기) is a Korean novel series created by Woo-Gak. ',
                'price' => '300.0 ',
                
            ],
            

            [
                'imageUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF5v6734vme3-zFsecTwLQNaSNimhSMeYRAUb4KYGilg&s',
                'art_name' => "Cool Mountain Sketch ",
                'description' => 'Ronan lived a wasteful life filled with regrets. A second chance befalls him at the end of his futile life. ',
                'price' => '150.0',
                
            ],
            
        ];

        foreach ($data as $d) {
            Artwork::create($d);
        }
    }
}
