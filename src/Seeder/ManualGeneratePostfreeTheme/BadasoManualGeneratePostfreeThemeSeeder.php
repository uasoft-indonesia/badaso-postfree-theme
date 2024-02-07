<?php

namespace Database\Seeders\Badaso\PostfreeTheme\ManualGeneratePostfreeTheme;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoManualGeneratePostfreeThemeSeeder extends Seeder
{
    use Seedable;

    public function run()
    {
        $this->seed(BadasoCategoriesTableSeeder::class);
        $this->seed(BadasoPostsTableSeeder::class);
    }
}
