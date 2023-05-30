<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = config("db.pages");
        foreach($pages as $page) {
            $newPage = new Page();
            $newPage -> name = $page;
            $newPage->save();
        }
    }
}
