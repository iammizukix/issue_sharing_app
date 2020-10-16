<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Weidner\Goutte\GoutteFacade as GoutteFacade;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //子カテゴリー取得
        $goutte = GoutteFacade::request('GET', 'https://chiebukuro.yahoo.co.jp/category');
        $categories = array();
        $goutte->filter('div#ca_lst a')->each(function ($node) use (&$categories) {
            if ($node->text() == 'このカテゴリすべてのQ&A') {
                return;
            }
            $categories[]['ChildName'] = $node->text();
        });
        //親カテゴリー取得
        $goutte->filter('div p.ClapLv2CategoryList_Chie-CategoryList__Category0Text__1xqHH')->each(function ($node) use (&$categories) {
            $categories[]['ParentName'] = $node->text();
        });

        Category::insert($categories);
    }
}