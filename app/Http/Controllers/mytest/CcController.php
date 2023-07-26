<?php

namespace App\Http\Controllers\mytest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CcController extends Controller
{
    public function cc(Request $request){
        $abc = '123456';

        return $abc;
    }
}
