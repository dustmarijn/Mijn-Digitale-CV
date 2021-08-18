<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FactsController extends Controller
{
    public function facts(){
        $facts = DB::select('SELECT * FROM random_facts ORDER BY RAND() LIMIT 1');
        return view('home',['fact'=>$facts]);
    }

}
