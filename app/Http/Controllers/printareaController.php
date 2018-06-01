<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Post;

class printareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('area_mains')
                ->join('area_subs', 'area_mains.id', '=', 'area_subs.master_id')
                ->where('area_mains.area_name', '台北市')
                ->orderBy('area_mains.order', 'asc')
                ->orderBy('area_subs.order', 'asc')
                ->get();
                //->toSql();
        return ($data);
        //return view('welcome');
        
    }

}
