<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\solds;
use DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\functionController;

class productController extends Controller
{
    //
   private  $fun;
    public function __construct()
    {
        $this->fun = new functionsController();
        $this->middleware('auth');
    }


    public function index()
    {
        $products = DB::table('products')->select( 'id_product', 'name', 'color' , 'size' , 'count' , 'discount' , 'price')->get(); //paginate(2);
        return view('products.products' , ['product'=>  $products ]);
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



    public function search(Request $request)
    {
   
 if($request->ajax())
 {
$query = $request->get('query');


if($query != ''):

$data = $this->fun->MatchProduct($query);

else:

    $data = DB::table('products')
    ->select( 'id_product', 'name', 'color' , 'size' , 'count' , 'discount' , 'price')->get();

endif;

 $total = $data->count();

   if($total > 0): 
    $out = '';
    foreach($data as $item):
        $out .=' 
        <tr>
        <th scope="row">'.$item->id_product .'</th>
        <td>'.$item->name.'</td>
        <td> <span style="background-color:'.$item->color.'">'. $item->color.'</span> </td>
        <td>'.$item->size .'</td>
        <td>'.$item->count .'</td>
        <td>'.$item->discount .'</td>
        <td>'. $item->price  .'</td>
      </tr>';

    endforeach;

  else: 

     $out = '<tr><td align="center" colspan="5">No Data Found</td></tr>';


   endif;

   $data = array(
       'table_data'  => $out 
      
   );

   echo json_encode( $data );



 }


    }



    public function sell(Request $req){
        if($req->ajax())
        {
     
   
       
         solds::create([
            'id_product_sold' => $req->get('id'),
            'number_sold' =>$req->get('number'),
            'price_sold' => $req->get('price'),
            'price_org' => $req->get('orgin'),
            'date'  => date("Y-m-d"),
           
         ]);

        }


    }

    public function soldview(){

        $row = $this->fun->getSold();
        $dates = $this->fun->getListDates();
        return view('products.sold', ['product'=>  $row  , 'dates' => $dates]);  
    }

    public function getInfo(){

         $date = $this->fun->getDate("Y-m-d");
         $row = $this->fun->getDataG($date);
         $total = $this->fun->getGain($row);
       
      
        // SELECT DISTINCT solds.date from solds WHERE solds.date = "2019-08-23";
        return view('products.info', ['product'=>  $total  ]);  
   
    }









}
