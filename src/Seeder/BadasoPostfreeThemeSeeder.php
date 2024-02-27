<?php

namespace Database\Seeders\Badaso\PostfreeTheme;

use Illuminate\Database\Seeder;

class BadasoPostfreeThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostfreeThemeMenusSeeder::class);
        $this->call(PostfreeThemeFixedMenuItemSeeder::class);
        $this->call(PostfreeThemePermissionsSeeder::class);
        $this->call(PostfreeThemeContentsSeeder::class);
        $this->call(PostfreeThemeConfigurationsSeeder::class);
        $this->call(PostfreeThemeRolePermissionSeeder::class);
    }
}
