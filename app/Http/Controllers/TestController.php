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
        $goutte->filter('h1')->each(function ($node) use (&$title) {
            $title[] = $node->text();
        });
        return view('test', ['title' => $title]);
    }
}