<?php

namespace App\Http\Controllers\mytest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CcController extends Controller
{
    public function cc(Request $request){
        $abc = '123456';
        $abc = '平台上編輯';
        return $abc;
    }
}
