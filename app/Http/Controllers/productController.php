<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('products.products');
    }

    public function add()
    {
        return view('products.add');
    }


   public function validatorr($data)
    { 
        return Validator::make($data->all(), [
            'name' => ['required', 'string', 'max:255'],
            'color' => ['required' ],
            'size' =>  ['required' , 'string'],
            'count' => ['required' ],
            'discount' => ['required' ],
            'price' => ['required' ],
           
        ]);
    }


    public function create(Request $dataa)
    {

      $data = $this->validatorr($dataa);
        // print_r($data);
        if($data->fails()){

            return redirect('products/add')
            ->withErrors($data)
            ->withInput();

        }

        products::create([
            'name' => $dataa['name'],
            'color' => $dataa['color'],
            'size' => $dataa['size'],
            'count' => $dataa['count'],
            'discount' => $dataa['discount'],
            'price' => $dataa['price'],

            
        ]);

        $dataa->session()->flash('status', 'Task was successful!');

        return redirect('products/add');

    }


}
