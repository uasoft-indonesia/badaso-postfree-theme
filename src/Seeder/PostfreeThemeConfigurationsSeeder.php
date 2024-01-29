<?php

namespace Database\Seeders\Badaso\PostfreeTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Models\Configuration;

class PostfreeThemeConfigurationsSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @throws Exception
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $settings = [
                0 => [
                    'key'          => 'postfreeThemeSiteTitle',
                    'display_name' => 'Site Title',
                    'value'        => 'Postfree Theme',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 1,
                    'group'        => 'postfreeTheme',
                    'can_delete'   => 0,
                ],
                1 => [
                    'key'          => 'postfreeThemeFavicon',
                    'display_name' => 'Favicon Website',
                    'value'        => 'photos/1/favicon.png',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 2,
                    'group'        => 'postfreeTheme',
                    'can_delete'   => 0,
                ],
                2 => [
                    'key'          => 'postfreeThemeNavbarIcon',
                    'display_name' => 'Navbar Icon Theme',
                    'value'        => 'photos/1/Full-logo-badaso-1.png',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 3,
                    'group'        => 'postfreeTheme',
                    'can_delete'   => 0,
                ],
                3 => [
                    'key'          => 'postfreeThemeFooterIcon',
                    'display_name' => 'Footer Icon Theme',
                    'value'        => 'photos/1/full-logo-badaso.png',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 4,
                    'group'        => 'postfreeTheme',
                    'can_delete'   => 0,
                ],

            ];

            foreach ($settings as $key => $value) {
                Configuration::where('key', $value['key'])->delete();
                Configuration::create($value);
            }

            DB::commit();
        } catch (Exception $e) {
            throw new Exception('Exception occur '.$e);
            DB::rollBack();
        }
    }
}
