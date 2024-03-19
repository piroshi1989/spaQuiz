<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert(
            [
              [
                'title' => 'パソコン(PC)は何の略か。',
                'answer_id' => 1,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => 'アプリケーションをコンピュータで使用可能にするための作業のことを何と言うか。',
                'answer_id' => 2,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => '中央処理装置とも訳されるコンピュータの情報処理の性能に影響する部分の略称は。Intel社製が多い。',
                'answer_id' => 3,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => '情報を記録し読み出す代表的な記憶装置の一つ。PCに内蔵されている円盤状の磁気ディスク。',
                'answer_id' => 4,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => 'アメリカのマーク・ザッカーバーグらによって開設された国際的なSNSは？',
                'answer_id' => 5,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => 'インターネット上で自分の名前の代わりに表示するニックネーム。',
                'answer_id' => 6,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => 'マイクロソフト社製のWEBブラウザは？',
                'answer_id' => 7,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => 'アップルの創業者は。',
                'answer_id' => 8,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => '検索エンジンで上位表示を狙うための対策のことをアルファベット3文字で何対策というか？',
                'answer_id' => 9,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => 'Windowsのショートカットキー「Ctrl＋C」は何をするか?',
                'answer_id' => 10,
                'category_id' => 5,
                'image_src' => NULL,
              ],
              [
                'title' => '発がん性や催奇形性を有し、人類が作った最悪と呼ばれる毒物は？',
                'answer_id' => 11,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => '10億分の1mの物質世界で、新たな機能を創出する技術の総称を何と呼ぶか。',
                'answer_id' => 12,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => '日本の工学実験探査機「はやぶさ」が、初めて着陸した小惑星の名称は。',
                'answer_id' => 13,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => '人類初の月面着陸やハッブル宇宙望遠鏡によるデータ収集活動などアメリカの宇宙開発を行っている組織名は？',
                'answer_id' => 14,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => '不景気で消費が減少、商品の供給超過となって物価が下落する経済現象を何と呼ぶ。',
                'answer_id' => 15,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => 'GDPは何の略称か？',
                'answer_id' => 16,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => '企業が成長するために他のの企業の吸収や合併を行うことを何と呼ぶか。',
                'answer_id' => 17,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => '株価に重大な影響を及ぼす会社内の未公開情報を利用した株式の取引は禁止されている。その取引名は何か？',
                'answer_id' => 18,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => '自国の産業が海外からの安い製品の輸入で損害を受けることを避けるため、貿易制限を行う考え方を何と呼ぶか。',
                'answer_id' => 19,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => '企業は寄付やボランティア活動への資金援助などの公益活動を行っている。これを何と呼ぶか。',
                'answer_id' => 20,
                'category_id' => 2,
                'image_src' => NULL,
              ],
              [
                'title' => '次のお茶出しについての説明で、間違っているものを１つ選択せよ。',
                'answer_id' => 21,
                'category_id' => 1,
                'image_src' => NULL,
              ]
            ]
          );
        }
}
