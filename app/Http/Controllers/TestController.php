<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade as GoutteFacade;

class TestController extends Controller
{
    public function index()
    {
        $goutte = GoutteFacade::request('GET', 'https://chiebukuro.yahoo.co.jp/category');
        $title = array();
        $goutte->filter('div#ca_lst a')->each(function ($node) use (&$title) {
            if ($node->text() == 'このカテゴリすべてのQ&A') {
                return;
            }
            // echo '<pre>';
            // var_export($node->text());
            // echo '</pre>';
            $title[] = $node->text();
        });
        $times = count($title);
        echo '<pre>';
        var_export($times);
        echo '</pre>';

        return view('test', ['title' => $title]);
    }
}