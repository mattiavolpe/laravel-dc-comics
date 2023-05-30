<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteBanner;

class SiteBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = config("db.dcSitesBanner");
        foreach($links as $key => $link) {
            $newLink = new SiteBanner();
            $newLink -> name = $key;
            $newLink -> image = $link;
            $newLink->save();
        }
    }
}
