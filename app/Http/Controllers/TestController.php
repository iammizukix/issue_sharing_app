<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade as GoutteFacade;

class TestController extends Controller
{
    public function index()
    {
        $goutte = GoutteFacade::request('GET', 'https://chiebukuro.yahoo.co.jp/category');
        $texts = array();
        $goutte->filter('.rapid-noclick-resp')->each(function ($node) use (&$texts) {
            $texts[] = $node->text();
        });
        return view('test', $texts);
    }
}