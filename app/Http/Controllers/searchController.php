<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Post;

class searchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::paginate(3);

        $data = DB::table('shop_mains')
            ->join('area_mains', 'shop_mains.main_area', '=', 'area_mains.id')
            ->join('area_subs', 'shop_mains.sub_area', '=', 'area_subs.id')
            ->join('shop_photos', 'shop_mains.id', '=', 'shop_photos.shop_table_id')
            ->join('shop_foods', 'shop_mains.id', '=', 'shop_foods.shop_table_id')
            ->join('food_mains', 'shop_mains.main_food', '=', 'food_mains.id')
            //->join('food_subs', 'food_mains.id', '=', 'food_subs.master_id')
            ->skip(10)->take(5)
            ->orderBy('shop_mains.id', 'desc')
            ->paginate(20);
            //->get();

foreach($data as $key => $value) {
    $temp = $value->food_name;

    $subdata = DB::table('food_mains')
                ->join('food_subs', 'food_mains.id', '=', 'food_subs.master_id')
                ->where('food_mains.food_name', $temp)
                ->get();
                foreach($subdata as $key2 => $value2) {
                    $data2[$key]['food_name'][] = $value2->food_name;
                    //print_r($value2->food_name);
                }
}
//print_r($data2);
//exit;

            //print_r($posts);
        return view('search', ['data' => $data, 'interval' => 2,'data2' => $data2]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
