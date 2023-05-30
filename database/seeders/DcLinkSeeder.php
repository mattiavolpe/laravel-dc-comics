<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DcLink;

class DcLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = config("db.footerLinks.dc");
        foreach($links as $link) {
            $newLink = new DcLink();
            $newLink -> name = $link;
            $newLink->save();
        }
    }
}
