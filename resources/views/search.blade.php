{{-- 使用 Default Layout  --}}
@extends('layouts.default')

{{-- 填入 content 內容 --}}
@section('content')
            <div class="mainWrap">
                <h2>查詢結果</h2>
                @include('pagination.default', ['paginator' => $data])
                <div class="m-shopList">
                    <ul>
                    @foreach($data as $key => $value)
                        <li class="shopData">
                            <div class="shopHead">
                                <a href="">{{$value->shop_name}}</a>
                            </div>
                            <div class="shopDetail">
                                <div class="photo">
                                    <img src="../img/shop/18.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="shopTitle">
                                        <p>{{$value->shop_text}}</p>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>分類</th>
                                            <td>{{$value->food_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>標籤</th>
                                            <td>
                                                <ul class="foodTags">
                                                    @foreach($data2[$key]['food_name'] as $key2 => $value2) 
                                                    <li>{{$value2}}</li>
                                                    @endforeach
{{--                                                     <li>{{$data2[$key]['food_name'][0]}}</li>
                                                    <li>居酒屋</li>
                                                    <li>綜合日式料理</li>
                                                    <li>生魚片、壽司</li>
 --}}
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>營業時間</th>
                                            <td>{{$value->holiday}}</td>
                                        </tr>
                                        <tr>
                                            <th>地址</th>
                                            <td>{{$value->address}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
                @include('pagination.default', ['paginator' => $data])                
            </div>    
@stop
