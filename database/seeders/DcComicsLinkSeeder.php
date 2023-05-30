<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DcComicsLink;

class DcComicsLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = config("db.footerLinks.dc comics");
        foreach($links as $link) {
            $newLink = new DcComicsLink();
            $newLink -> name = $link;
            $newLink->save();
        }
    }
}
