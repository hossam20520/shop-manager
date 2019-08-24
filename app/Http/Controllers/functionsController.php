<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class functionsController extends Controller
{
    //

    public function testa(){

    }

    public function getDate($format){
      return date($format);
    }

    public function getDataG($date){
        $query = "SELECT solds.id_sold ,solds.price_sold , solds.price_org , solds.number_sold , (solds.price_sold * solds.number_sold ) as sold , (solds.number_sold * solds.price_org) as assets ,(solds.price_sold * solds.number_sold ) - (solds.number_sold * solds.price_org) as sub from solds where solds.date = '$date'";
        $row = DB::select($query);
        return $row;
    }

    public function getGain($row){
        $total = 0;
        foreach ($row as $item):
       $total = $total + $item->sub; 
        endforeach;

        return $total;
    }

    public function getSold(){
        $query = "SELECT products.name , products.color , products.size , solds.price_sold , solds.price_org  , solds.number_sold , solds.id_sold   , (solds.price_sold * solds.number_sold ) as total from products INNER JOIN solds ON products.id_product = solds.id_product_sold";
        $row = DB::select($query );
        return $row;
    }

    
    public function MatchProduct($query){
        //search for product
       $all =  DB::table('products')
->where('name' , 'like' , '%'.$query.'%')->get();
return $all;
    }

    // get list date from sold products 
    public function getListDates(){
        $query = "SELECT DISTINCT solds.date from solds ";
        $row = DB::select($query );
        return $row;
    }



}
