@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            
                
                <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col">count</th>
                            <th scope="col">Discount</th>
                            <th scope="col">price</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>Otto</td>
                          </tr>
                      
                    
                        </tbody>
                      </table>
{{--      
                    if (session('status'))



                       
                   endif --}}

              
           
    </div>
</div>
@endsection