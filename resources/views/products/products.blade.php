@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
 <div class="form-group"> 
  <input type="text" name="search" id="search" class="form-control" placeholder="search Customer Data">
 </div>
            
               
                <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col">count</th>
                            <th scope="col">Asset Price</th>
                            <th scope="col">price</th>

                          </tr>
                        </thead>
                        <tbody>

                                @foreach ($product as $item)
                                
                                
                          <tr  class="maintr" data-toggle="modal" data-target="#myModal" 
                          
                          data-id="{{ $item->id_product }}" data-name="{{ $item->name }}" data-color="{{ $item->color }}" data-size="{{ $item->size }}"
                           data-count="{{ $item->count }}" data-price="{{ $item->price}}" data-dis="{{ $item->discount}}">
                            <th scope="row" class="prod">{{ $item->id_product }}</th>
                            <td class="prod">{{ $item->name }}</td>
                            <td class="prod"> <span style="background-color:{{ $item->color }}; color:white;">{{ $item->color }}</span> </td>
                            <td class="prod">{{ $item->size }}</td>
                            <td class="prod">{{ $item->count }}</td>
                            <td class="prod">{{ $item->discount}}</td>
                            <td class="prod">{{ $item->price}}</td>
                          </tr>
                          @endforeach
                    
                        </tbody>
                      </table>


              
           
    </div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <input type="hidden" id="idprod">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <table class="table">
            <tr>
                <th class="thm" scope="col">Name</th>
                <th  class="thm" scope="col">Color</th>
          
           </tr>

           <tr>
          
            <td class="name tdhd">Mobile</td>


            <td class="color "> <span class="colorspan"></span> </td>
         </tr>

         <tr>
            <th  class="thm" scope="col">Size</th>
            <th  class="thm" scope="col">Count</th>
      
       </tr>

       <tr>
      
        <td class="size tdhd">Larg</td>

  <input type="hidden" class="handleCount">
        <td class="count tdhd">50</td>
     </tr>


     <tr>
        <th class="thm" scope="col">Asset</th>
        <th  class="thm " scope="col">Price</th>
  
   </tr>

   <tr>
  
    <td class="discount tdhd">10%</td>


    <td class="price tdhd">100</td>
 </tr>




         
              

                </table>

        </div>
        <div class="modal-body">
<div class="row">
  <div class="col-sm">
      <div class="form-group"> 
          <label>Number Of Items</label>  <input type="number"  id="numItems"  class="form-control " placeholder="Write Your Price">
           </div>
  </div>

  <div class="col-sm">
      <div class="form-group"> 
          <label>Selling Price</label>  <input type="number" id="itemPrice" class="form-control" placeholder="">
           </div>
  </div>

</div>
        
<center><label class="totalprice">0</label></center>
        


        </div>
        <div class="modal-footer">
        <center>  <button type="button" class="btn btn-default sell" data-dismiss="modal">Sell</button></center>
       
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
        </div>
      </div>
      
    </div>
  </div>
<style>
.colorspan{
color: aliceblue;
}
.tdhd{
  color: #0003b5;
}
</style>
 

@endsection