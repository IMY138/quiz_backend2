<?php

namespace Database\Seeders;
use App\Models\Quiz;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::truncate();

        \DB::table('quizzes')->insert(array (
            1 => array( 'title_id' => '1' , 'question' => 'Googleが作ったフレームワークは次のうちどれ？','answer1' => 'Vue.js','answer2' => 'AngularJS','answer3' => 'React','answer4' => 'jQuery','answer' => '2','description' => 'AngularJSですよー'),
            2 => array( 'title_id' => '1' , 'question' => 'HTTP通信を行うためによく使われるライブラリはどれ？','answer1' => 'axios','answer2' => 'Lodash','answer3' => 'Moment.js','answer4' => 'D3.js','answer' => '1','description' => '他の選択肢は全然Ajaxのライブラリではないですよ。'),
            3 => array( 'title_id' => '1' , 'question' => 'JavaScript以外のプログラミング言語でフロントエンドを構築するための技術は何？','answer1' => 'Web3.0','answer2' => 'NoCode','answer3' => 'WebAssembly','answer4' => 'PWA','answer' => '1','description' => 'ちょっと難しかったかなぁ？'),
            4 => array( 'title_id' => '1' , 'question' => '次のうち、最終的にJavaScriptにコンパイルされる言語でないものはどれ？','answer1' => 'TypeScript','answer2' => 'CoffeScript','answer3' => 'Dart','answer4' => 'PureScript','answer' => '3','description' => ''),
            5 => array( 'title_id' => '1' , 'question' => '次のうち、TypeScriptの特徴でないものはどれ？','answer1' => '性的型付け言語である','answer2' => 'enumが使える','answer3' => 'JavaScriptのスーパーセットである','answer4' => 'オブジェクト志向的書き方ができる','answer' => '1','description' => '性的とかw'),
            6 => array( 'title_id' => '2' , 'question' => '一般的にギターには何本の弦が張られている？','answer1' => '4本','answer2' => '3本','answer3' => '5本','answer4' => '6本','answer' => '4','description' => '4本はベースかな。3本は三味線かな。'),
            7 => array( 'title_id' => '2' , 'question' => '3弦の開放弦の音は何？','answer1' => 'C','answer2' => 'E','answer3' => 'D','answer4' => 'G','answer' => '4','description' => 'ソの音だね。'),
            8 => array( 'title_id' => '2' , 'question' => 'ベース音と5度の2音だけを出すコードのことを何という？','answer1' => 'アッパーストラクチャー','answer2' => 'テンションコード','answer3' => 'パワーコード','answer4' => 'トライアドコード','answer' => '3','description' => 'ロックでよく使われるけど、くるりのボーカルの人は使わないよ。'),
            9 => array( 'title_id' => '2' , 'question' => '布袋寅泰やJudy&MaryのTAKUYAが使うギターの種別は何？','answer1' => 'ストラトキャスター','answer2' => 'テレキャスター','answer3' => 'レスポール','answer4' => 'アコースティック','answer' => '2','description' => 'まぁアコギも使うんだろうけどさ。'),
            10 => array( 'title_id' => '2' , 'question' => 'ピッキングせずに指を弦に押さえつけるだけで音を出す奏法を何という？','answer1' => 'ハンマリングオン','answer2' => 'プリングオフ','answer3' => 'チョーキング','answer4' => 'アーミング','answer' => '1','description' => 'どうなんやろね。'),
            11 => array( 'title_id' => '3' , 'question' => 'サピエンス全史の作者は誰？','answer1' => 'ジャスティン・ビーバー','answer2' => '山川出版社','answer3' => 'ユヴァル・ノア・フラリ','answer4' => 'ユヴァル・ノア・ハラリ','answer' => '4','description' => '覚えにくい名前だよね。'),
            12 => array( 'title_id' => '3' , 'question' => '私達サピエンスがみんなで力を合わせるきっかけになるのは何？','answer1' => '虚構','answer2' => '会話','answer3' => '知能','answer4' => '協調性','answer' => '1','description' => 'フィクション'),
            13 => array( 'title_id' => '3' , 'question' => '次のうち二足歩行が原因となる事柄でないものはどれ？','answer1' => 'まだ未熟な状態で赤ちゃんが生まれる','answer2' => '背中を掻くことができる','answer3' => '道具を作ることができる','answer4' => '腰痛や肩こりになりやすい','answer' => '1','description' => 'なるほどね。'),
            14 => array( 'title_id' => '4' , 'question' => '「イノベーション」の説明として正しいものを選べ','answer1' => '2声体の鍵盤楽曲','answer2' => '手を加えて良くすること','answer3' => '人が何かする際の動機づけ','answer4' => '新しい技術や考え方を取り入れて社会的に大きな変化を起こすこと','answer' => '4','description' => 'その他はインベンション・リノベーション・モチベーションの説明だったよ。'),
            15 => array( 'title_id' => '4' , 'question' => '次のうち「貸借対照表」の説明はどれ？','answer1' => '企業のある一定時点における資産、負債、純資産の状態を表すもの','answer2' => '企業のある一定期間における収益と費用の状態を表すもの','answer3' => '会計期間における資金の増減、つまり収入と支出を表示する','answer4' => '純資産の変動状況を表すもの','answer' => '1','description' => '難しいね・・。'),
            16 => array( 'title_id' => '4' , 'question' => '次のうち「資産」でないものはどれ？','answer1' => '現金','answer2' => '手形','answer3' => '借入金','answer4' => '貸付金','answer' => '3','description' => '会計のお話です。'),
            17 => array( 'title_id' => '5' , 'question' => 'ヒューマン制作「セプテントリオン（SFC）」の主人公の一人、ルーク=ハインズの職業は何か？','answer1' => '観光客','answer2' => '牧師','answer3' => '航海士','answer4' => '医師','answer' => '3','description' => '生存者の行動パターンがあまり賢くない こともあり、ベストエンドに至った時の達成感の凄まじさはSFCのゲームでも随一。'),
            18 => array( 'title_id' => '5' , 'question' => '上海アリス幻樂団制作「東方紅魔郷（PC）」の弾数表示限界は何か？','answer1' => '127','answer2' => '512','answer3' => '640','answer4' => '9999','answer' => '3','description' => '攻撃力の最大値が127、アイテム表示限界が512、弾数表示限界が640、グレイズ表示限界が9999。'),
            19 => array( 'title_id' => '5' , 'question' => 'カプコン制作「大魔界村（MD）」の登場武器の内、唯一3発まで同時に発射できるものは何か？','answer1' => '槍','answer2' => '短剣','answer3' => 'たいまつ','answer4' => '大鎌','answer' => '2','description' => 'おそらく攻略最適解の武器。いかに短剣を失わずに最終面までたどり着けるかの勝負になる。'),
            20 => array( 'title_id' => '5' , 'question' => 'パズルゲーム「ハノイの塔」の64枚verの最低所要時間はいくつか？','answer1' => '約639年','answer2' => '約5億4200万年','answer3' => '約137億年','answer4' => '約5845億年','answer' => '4','description' => 'ジョン・ケージの楽曲「ASLSP」の演奏時間が約639年、カンブリア紀の始まりが約5億4200万年前、ビッグバンの発生が約137億年前と言われている。'),
            21 => array( 'title_id' => '5' , 'question' => 'SNK制作「怒（FC）」の復活コマンドは何か？','answer1' => 'AABB','answer2' => 'BBAA','answer3' => 'ABBA','answer4' => 'BAAB','answer' => '3','description' => 'この当時のSNK作品のお約束として難易度が狂ったように高いので5秒に1回のペースで入力することになる。'),
            22 => array( 'title_id' => '6' , 'question' => 'Skrrskrr制作チームの名前は何か？','answer1' => 'チーム・山本信也','answer2' => 'チーム・寺子屋2000','answer3' => 'チーム・赤踵','answer4' => 'チーム・オバタリアンX','answer' => '3','description' => 'どうせAGSに入賞しないだろうし、もし入賞したときに司会者が発音しにくい名前にしよう！という若干の嫌がらせからつけた。'),
            23 => array( 'title_id' => '6' , 'question' => 'Skrrskrrのプレイヤーの見た目は何か？','answer1' => 'ロボット','answer2' => '緑色のボール','answer3' => 'ホロウナイトのパチモノみたいなやつ','answer4' => '西洋風の騎士鎧','answer' => '2','description' => '回転しているのがわかるように十字線を入れたボールになった。試作用にGimpで30秒で作った素材のままでAGS入賞したのは驚きだが、他の上位2チームよりグラフィックがしょぼすぎたのが敗因か。'),
            24 => array( 'title_id' => '6' , 'question' => 'Skrrskrrの総ステージ数はいくつか？','answer1' => '3','answer2' => '5','answer3' => '10','answer4' => '20','answer' => '4','description' => 'カメラ移動が面倒で一画面に収まるようにしたかったのが本音。難易度の差が激しいとの意見が多すぎたのでステージ数を増やしまくって各ステージごとの難易度差を無理やり緩和させた結果、20ステージになった。正直ネタ切れお疲れサンバ状態。'),
            25 => array( 'title_id' => '6' , 'question' => 'Skrrskrrのモチーフはアイワナとチェルノブと何か？','answer1' => 'VVVVVV','answer2' => 'Neptunian Donut','answer3' => '人生オワタの大冒険','answer4' => 'Super Meat Boy','answer' => '1','description' => '度重なる企画却下に腐って自分が好きなゲーム3つを足し合わせたのが始まり。「I Wanna Be The Guy」の孔明トラップと「チェルノブ」の強制移動と「VVVVVV」の反射要素という3つの鬼畜要素をブレンドしたのでクッソ難しくなったのは自明の理か。'),
            26 => array( 'title_id' => '6' , 'question' => 'Skrrskrrは何で制作されたものか？','answer1' => 'DxLib','answer2' => 'Unity','answer3' => 'Unreal Engine 4','answer4' => 'Faith SFX','answer' => '2','description' => 'C#のコルーチンが便利すぎて吐血するレヴェル。prefab化ができるのでステージが量産しやすく、scene管理がクッソ楽なので余計な気を回さずにゲーム部分の作りこみに没頭できた。ただプログラマとしてのアピールが弱くなるのは失敗だった希ガス。ちなみに選択肢の「Faith SFX」はイギリスのビートボクサーなのでライブラリではないです。'),
            27 => array( 'title_id' => '6' , 'question' => 'Skrrskrrの全体的なテーマは何か？','answer1' => '愛','answer2' => '欲望','answer3' => '実利主義に満ちあふれた現代社会への糾弾','answer4' => 'HIPHOP','answer' => '4','description' => '跳ねるボールといえばバスケ。バスケといえばストリート。ストリートといえばグラフィティー。グラフィティーといえばHIPHOP。はい。そーゆーことです。なので音楽も少しだけこだわって制作しました。'),
            28 => array( 'title_id' => '6' , 'question' => 'Skrrskrrの意味は何か？','answer1' => 'シュクルルシュクルル','answer2' => 'アクセルを踏み続ける','answer3' => '過去を振り返らない','answer4' => '特に意味はない','answer' => '2','description' => '強制的に移動し続けるゲームなので英語圏のオノマトペである「skrr skrr」を採用。一応、海外のHIPHOP界隈で2,3年前に流行ってたのでテーマ的にも丁度よかった。'),
            
        ));
    }
}
