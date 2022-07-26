<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Tone-up Cream 50ml',
                'price'=>'12$',
                'category'=>'inisfree',
                'description'=>'A lightweight cream formulated with Jeju Cherry Blossom leaf extracts and naturally-derived Betaine which leaves you with a natural, glowing finish after application.',
                'gallery'=>'https://static.wixstatic.com/media/92e661_dcee04770865423f8cc9acd18b335191~mv2.jpg/v1/fill/w_500,h_500,al_c,lg_1,q_85/92e661_dcee04770865423f8cc9acd18b335191~mv2.webp'
                
            ],
            [
                'name'=>'Green Tea Seed Cream 50 m',
                'price'=>'16$',
                'category'=>'inisfree',
                'description'=>'A daily moisturizer infused with a blend of Jeju green tea and green tea seed oil to leave skin feeling quenched with intense hydration.',
                'gallery'=>'https://static.wixstatic.com/media/92e661_52ac64578bba4e29a32936cdcafa0903~mv2.jpg/v1/fill/w_500,h_500,al_c,lg_1,q_85/92e661_52ac64578bba4e29a32936cdcafa0903~mv2.webp'
            ],
            [
                'name'=>'Green Tea Balancing Cream EX 50 mL',
                'price'=>'15$',
                'category'=>'inisfree',
                'description'=>'A lightweight gel-cream with a non-greasy feel that helps lock in refreshing hydration from Jeju green tea',
                'gallery'=>'https://static.wixstatic.com/media/92e661_f7ba23c74dcc4c68a18194339cb2f357~mv2.jpg/v1/fill/w_500,h_500,al_c,lg_1,q_85/92e661_f7ba23c74dcc4c68a18194339cb2f357~mv2.webp'
                
            ]

        ]);
    }
}
