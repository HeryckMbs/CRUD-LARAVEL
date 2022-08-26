<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public function index(){
        $pessoas = DB::table('usuarios')->select('id','name','numero')->get()->toArray();
        $condominios = DB::table('condominios')->select('id','name')->get()->toArray();
        return view('index',compact('pessoas','condominios'));
    }



    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
