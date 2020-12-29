<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
                'name'=>'LG Mobile',
                'price'=>'200',
                'description'=>'This is LG Mobile',
                'category'=>'mobile',
                'gallery'=>'https://phoneaqua.com/products/LG-K50-Price.webp'
            ],
            [
                'name'=>'Samsung S20',
                'price'=>'850',
                'description'=>'This is Samsung Mobile',
                'category'=>'mobile',
                'gallery'=>'https://www.91-img.com/pictures/133378-v3-samsung-galaxy-s11-mobile-phone-large-1.jpg?tr=q-60'
            ],
            [
                'name'=>'Samsung TV',
                'price'=>'1000',
                'description'=>'This is new Samsung TV',
                'category'=>'tv',
                'gallery'=>'https://images.samsung.com/is/image/samsung/in-fhdtv-n5200-ua32n5200arxxl-frontblack-184404442?$PD_GALLERY_L_JPG$'
            ],
            [
                'name'=>'New Samsung TV',
                'price'=>'1500$',
                'description'=>'This is new Samsung TV 2021',
                'category'=>'mobile',
                'gallery'=>'https://cdn.vox-cdn.com/thumbor/evkCpOkPXhTNnkfTdi98fJsZ7fk=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/13671970/Samsung_TV_iTunes_Movies_and_TV_shows.jpg'
            ],
            [
                'name'=>'Iphone 12',
                'price'=>'1200',
                'description'=>'This is new Iphone 12',
                'category'=>'mobile',
                'gallery'=>'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-pro-family-hero?wid=940&amp;hei=1112&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1604021663000'
            ]
        ]);
    }
}
