<?php

namespace Database\Seeders\Badaso\PostfreeTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Module\Content\Models\Content;

class PostfreeThemeContentsSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();
        try {
            $contents = [
                0 => [
                    'slug' => 'postfree-theme',
                    'label' => 'Postfree Theme',
                    'value' => '{

                    }'
                ],
            ];



            foreach ($contents as $key => $content) {
                Content::where('slug', $content['slug'])->delete();
                Content::create($content);
            }

            DB::commit();
        } catch (Exception $e) {
            \DB::rollBack();

            throw new Exception('Exception occur ' . $e);
        }
    }
}
