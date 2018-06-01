<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Post;

class subcookeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('food_mains')
                ->join('food_subs', 'food_mains.id', '=', 'food_subs.master_id')
                ->where('food_mains.food_name', '日式料理')
                ->orderBy('food_mains.order', 'asc')
                ->orderBy('food_subs.order', 'asc')
                ->select('food_subs.food_name')
                ->get();
                //->toSql();
        return ($data);
        //return view('welcome');
        
    }

}
