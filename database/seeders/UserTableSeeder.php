<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->insert(array (
            1 => array( 'id' => '1' , 'name' => '田中 隆','age' => '36','address' => '福井県坂井市春江町江留下相田579-20'),
            2 => array( 'id' => '2' , 'name' => '佐藤 茂','age' => '33','address' => '京都府南丹市八木町鳥羽844-5'),
            3 => array( 'id' => '3' , 'name' => '村田 学','age' => '26','address' => '岩手県紫波郡紫波町星山385-16'),
            4 => array( 'id' => '4' , 'name' => '高橋 武士','age' => '24','address' => '福井県福井市中平町644-11'),
            5 => array( 'id' => '5' , 'name' => '大塚 茂','age' => '56','address' => '京都府京都市左京区下鴨北茶ノ木町658-9'),
            6 => array( 'id' => '6' , 'name' => '岡本 亨','age' => '40','address' => '大阪府岸和田市小松里町896-13'),
            7 => array( 'id' => '7' , 'name' => '鈴木 貴子','age' => '23','address' => '和歌山県日高郡印南町樮川499-11'),
            8 => array( 'id' => '8' , 'name' => '鈴木 奈津子','age' => '27','address' => '宮城県伊具郡丸森町滝原748-17'),
            9 => array( 'id' => '9' , 'name' => '池田 美香','age' => '33','address' => '京都府京都市中京区石橋町195-15'),
            10 => array( 'id' => '10' , 'name' => '渡辺 知子','age' => '19','address' => '栃木県大田原市浅香3-743-4'),
        ));
    }
}
