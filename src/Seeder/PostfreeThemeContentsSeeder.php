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
                    'value' =>
                    '{"title":{"name":"title","label":"Title","type":"group","data":{"heading":{"name":"heading","label":"Heading","type":"text","data":"Daftar harga hp asus terbaru"},"subheading":{"name":"subheading","label":"SubHeading","type":"text","data":"Daftar harga hp asus terbaru dan paling update"}}},"footer":{"name":"footer","label":"Footer","type":"text","data":"Designed and Developed by  UASOFT © 2024"}}',
                    'created_at' => '2024-01-30 06:16:40',
                    'updated_at' => '2024-01-31 06:25:22',
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
