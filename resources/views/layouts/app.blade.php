<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        window.onload = function () {
        
        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          theme: "light2",
          title:{
            text: "Simple Line Chart"
          },
          axisY:{
            includeZero: false
          },
          data: [{        
            type: "line",       
            dataPoints: [
              { y: 450 },
              { y: 414},
              { y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
              { y: 460 },
              { y: 450 },
              { y: 500 },
              { y: 480 },
              { y: 480 },
              { y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
              { y: 500 },
              { y: 480 },
              { y: 510 }
            ]
          }]
        });
        chart.render();
        
        }
        </script>
</head>
<body>



        <div class="d-flex" id="wrapper">

                <!-- Sidebar -->
                <div class="bg-light border-right" id="sidebar-wrapper">
                  <div class="sidebar-heading">Start Bootstrap </div>
                  <div class="list-group list-group-flush">
                    <a href="{{ url('/home') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <a href="{{ url('/products/add') }}" class="list-group-item list-group-item-action bg-light">Add Product</a>
                    <a href="{{ url('/products') }}" class="list-group-item list-group-item-action bg-light">Products</a>
                    <a href="{{ url('/products/sold') }}" class="list-group-item list-group-item-action bg-light">Sold Products</a>
                    <a href="{{ url('/products/info') }}" class="list-group-item list-group-item-action bg-light">Info</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
                  </div>
                </div>
                <!-- /#sidebar-wrapper -->
            
                <!-- Page Content -->
                <div id="page-content-wrapper">
            
                  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
            
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>


                          </div>
                        </li>
                      </ul>
                    </div>
                  </nav>
            
                  <div class="container-fluid">

                        {{-- {{ Auth::user()->name }} --}}
                        @yield('content')

            
                
                
                </div>
                </div>
                <!-- /#page-content-wrapper -->
            
              </div>




              <script src="{{ asset('js/canvasjs.min.js') }}"></script>
              <script src="{{ asset('js/jquery.min.js') }}"></script>
              {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}


              <script>
                $(document).ready(function(){
                
                  function getData(query = '')
                  {
                    $.ajax({
                 url:"{{ route('search.search') }}",
                 method:'GET',
                 data:{query:query},
                 dataType:'json',
                 success:function(data)
                 {
                $('tbody').html(data.table_data);
                 }
                      });
                  }
                
                $(document).on('keyup' , '#search' , function(){
                  var query = $(this).val();
                  getData(query);
                })
                

   $(".maintr").click(function(event){
   
  let id = $(this).data("id");
  let name = $(this).data("name");
  let color = $(this).data("color");
  let size= $(this).data("size");
  let count = $(this).data("count");
  let price = $(this).data("price");
  let dis = $(this).data("dis");
  $(".handleCount").val(count);
  $("#idprod").val(id);
  
    
    $("#itemPrice").val(price);
    $(".price").text(price);
  
 
$(".name").text(name);
$(".colorspan").text(color);
$(".colorspan").css("background-color" , color);
$(".size").text(size);
$(".count").text(count);
$(".discount").text(dis);



  var object = {"id":id , "name":name , "color":color ,
   "size":size , "count":count , "price":price , "dis":dis};
 
  console.log(object);





   });

  
  $("#numItems").keyup(function(){
    
   var num =  $("#numItems").val();  //change
 
   var  price =  $("#itemPrice").val();  //const
   
   var count = $(".count").text();  //change

   var realnum = $(".handleCount").val();  //const
   if(num == ""){
   
   $(".count").text(realnum);
   $(".totalprice").text("0");
  }else{

  
   let totalCount = realnum - num;

   
   

   $(".count").text(totalCount);
   $(".totalprice").text(num * price);
if(parseInt(num) > parseInt(realnum)){
  $(".count").text(realnum);
  $(".totalprice").text("0");
  $("#numItems").css("border-color" , "red");
  
}else{
  
  $("#numItems").css("border-color" , "#ced4da");

}



  }

  //  if(num >= realnum){
  //   $(".count").text(realnum);
  //   num = realnum;
  //  }


  //  else if(num > realnum){
  //   $(".count").text(realnum);
  //   $("#numItems").css("border-color" , "red");
  //  }else{
  //   $(".count").text(count);
  //  }

   
    
   
  });

//   $("#itemPrice").keyup(function(){
//     let price =  $("#itemPrice").val();
//    let num =  $("#numItems").val();
//    let count = $(".count").text();
//    $(".handleCount").val(count);
//    let realnum = $(".handleCount").val();

//    let totalCount = count - num;
//  $(".count").text(totalCount);
//    $(".totalprice").text(num * price);
//   });




$(".sell").click(function(){
  let num =  $("#numItems").val();  //change
   let   price =  $("#itemPrice").val();  //const
   let  id = $("#idprod").val();
  let orgin_price = $(".discount").text();
   var obj = {"id":parseInt(id) , "number":parseInt(num) , "price":parseFloat(price)  , "orgin":parseFloat(orgin_price)};
console.log(obj);
$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
             $.ajax({
                 url:"{{ route('sell.sell') }}",
                 method:'POST',
                 data:obj,
                 dataType:'json',
                 success:function(data)
                 {
               console.log(data);
                 },error:function(data){
                  console.log(data);
                 }
                      });


});

  
  


                });
                
                </script>





</body>
</html>
