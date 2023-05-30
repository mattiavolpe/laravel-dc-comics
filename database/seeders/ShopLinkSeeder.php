<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShopLink;

class ShopLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = config("db.footerLinks.shop");
        foreach($links as $link) {
            $newLink = new ShopLink();
            $newLink -> name = $link;
            $newLink->save();
        }
    }
}
