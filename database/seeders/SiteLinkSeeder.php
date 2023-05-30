<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteLink;

class SiteLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = config("db.footerLinks.sites");
        foreach($links as $link) {
            $newLink = new SiteLink();
            $newLink -> name = $link;
            $newLink->save();
        }
    }
}
