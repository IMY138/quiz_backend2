<?php

namespace Database\Seeders;
use App\Models\Title;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::truncate();

        \DB::table('titles')->insert(array (
            1 => array( 'category_id' => '1' , 'title' => 'フロントエンドクイズ','description' => 'フロントエンドにまつわるクイズです。','thumbnail' => 'https://jp.vuejs.org/images/logo.svg'),
            2 => array( 'category_id' => '2' , 'title' => 'ギタークイズ','description' => 'ギターにまつわるクイズです。','thumbnail' => 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61NB66KWnCL.__AC_SX300_SY300_QL70_ML2_.jpg'),
            3 => array( 'category_id' => '3' , 'title' => 'サピエンス全史クイズ','description' => '「サピエンス全史」に関するクイズです。','thumbnail' => 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/81hM97aWX+L.jpg'),
            4 => array( 'category_id' => '4' , 'title' => 'ビジネスパーソンの常識クイズ','description' => '現在社会に生きるビジネスパーソンの常識に関するクイズです。','thumbnail' => 'https://www.smrj.go.jp/sme/overseas/strategy/frr94k0000000z9d-img/A5-3_L3.jpg'),
            5 => array( 'category_id' => '5' , 'title' => '管理人が遊んだゲームクイズ','description' => '管理人がプレイした経験のあるゲームの中から出題されるオタク感満載のクイズです。','thumbnail' => 'https://rocketnews24.com/wp-content/uploads/sites/2/2021/06/%E5%90%8D%E7%A7%B0%E6%9C%AA%E8%A8%AD%E5%AE%9A-3.jpg'),
            6 => array( 'category_id' => '5' , 'title' => 'Skrrskrrクイズ','description' => '管理人制作の死にゲー「Skrrskrr」に関するクイズです。AGS2022夏のシルバー賞作品、GC甲子園9月上旬の週間新着ランキング2位作品です（自画自賛）。全7問あります。','thumbnail' => 'https://www.foodomejapan.com/upload/save_image/Y004489_01.jpg'),
            7 => array( 'category_id' => '2' , 'title' => 'Beatboxクイズ','description' => 'Beatboxに関するクイズです。','thumbnail' => 'https://static.wikia.nocookie.net/beatbox/images/2/26/Grand_Beatbox_Battle_2021_Promo.jpg/revision/latest/scale-to-width-down/1000?cb=20201112224835'),
            
        ));
    }
}
