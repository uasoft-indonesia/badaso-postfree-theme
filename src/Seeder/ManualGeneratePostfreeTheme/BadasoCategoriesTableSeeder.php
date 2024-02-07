<?php

namespace Database\Seeders\Badaso\PostfreeTheme\ManualGeneratePostfreeTheme;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class BadasoCategoriesTableSeeder extends Seeder
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
			\DB::table('badaso_categories')->delete();

			\DB::table('badaso_categories')->insert(array (
                0 =>
                array (
                    'id' => 2,
                    'parent_id' => NULL,
                    'title' => 'Postfree',
                    'meta_title' => NULL,
                    'slug' => 'postfree',
                    'content' => NULL,
                    'created_at' => '2024-01-30 05:32:02',
                    'updated_at' => '2024-01-30 05:32:02',
                ),
            ));

			\DB::commit();
		} catch(Exception $e) {
			\DB::rollBack();

			throw new Exception('Exception occur ' . $e);
		}
	}
}
