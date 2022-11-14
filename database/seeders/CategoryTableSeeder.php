<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        \DB::table('categories')->insert(array (
            1 => array( 'name' => 'プログラミング' , 'thumbnail' => 'https://dime.jp/genre/files/2021/02/ea580fc5b8136f6da259d17b18e5d718.png','sort' => '1'),
            2 => array( 'name' => '音楽' , 'thumbnail' => 'https://gogen-yurai.jp/wp-content/uploads/335354449_675.jpg','sort' => '2'),
            3 => array( 'name' => '歴史' , 'thumbnail' => 'https://www.kyoiku-shuppan.co.jp/ml-jh/img/rekishi_r3h1.jpg','sort' => '3'),
            4 => array( 'name' => 'ビジネス' , 'thumbnail' => 'https://www.unitygamebox.com/wp-content/uploads/2022/06/150625.jpg','sort' => '4'),
            5 => array( 'name' => 'ゲーム' , 'thumbnail' => 'https://looop-denki.com/api/image?imageName=d5726c1634ea4f76914e133fa4a9b1d9/0f2d6519b641471b8ed005e4f4671157/game_kv_sp.jpg','sort' => '5'),            
            6 => array( 'name' => 'ラノベ' , 'thumbnail' => 'https://www.booksupply.jp/news/wp-content/uploads/2020/09/51KaVfEWEyL-211x300.jpg','sort' => '6'),
        ));
    }
}
