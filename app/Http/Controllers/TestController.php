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
        $goutte->filter('div p.ClapLv2CategoryList_Chie-CategoryList__Category0Text__1xqHH')->each(function ($node) use (&$title) {
            // echo '<pre>';
            // var_export($node->text());
            // echo '</pre>';
            $title[] = $node->text();
        });

        return view('test', ['title' => $title]);
    }
}