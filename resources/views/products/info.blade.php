@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            
           <h2>Today Gain or loss [ @if($product < 0) <font color="red">{{ $product }} </font>  @else <font color="#22d654">{{ $product }} </font>  @endif ]</h2> 

              
          
   
          </div>

          <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
   
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