<?php

use Carbon\Traits\Timestamp;
use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 10件のテスト文書を登録する
        for ($i = 1; $i <= 10; $i++) {
					DB::table('documents')->insert([
						'title' => 'テストタイトル' . $i,
						'body' => 'テスト本文' . $i,
						'user_id' => 1,
						'created_at' => new DateTime(),
						'updated_at' => new DateTime(),
					]);
				}
    }
}
