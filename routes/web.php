<?php

use Illuminate\Support\Facades\Route;
use Youaoi\MeCab\MeCab;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // MeCab::setDefaults([
    //     // 独自の辞書ディレクトリを利用する場合に設定(default: null)
    //     'dictionaryDir' => '/usr/local/lib/mecab/dic/mecab-ipadic-neologd',
    // ]);
    // $mecabOoj = MeCab::parse('8月3日に放送された「中居正広の金曜日のスマイルたちへ」(TBS系)で、1日たった5分でぽっこりおなかを解消するというダイエット方法を紹介。キンタロー。のダイエットにも密着。');
    // echo "<pre>";
    // var_dump($mecabOoj[0]->speech);
    // echo "</pre>";
    return view('welcome');
});
Route::get('test', 'App\Http\Controllers\TestController@index');