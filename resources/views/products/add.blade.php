@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @if (session('status'))


                <div class="alert alert-success" style="margin-top: 19px;">
                        <strong>Success!</strong> successful added.
                      </div>

                @endif
            <div class="card" style="/*! top: 13px; */margin-top: 25px;">
               
                <div class="card-header">{{ __('Add Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="/productadd">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>
    
                                <div class="col-md-6">
                                    <input id="color" type="color" class="form-control @error('name') is-invalid @enderror" name="color" value="{{ old('color') }}" required autocomplete="color" autofocus>
    
                                    @error('color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                    <label for="size" class="col-md-4 col-form-label text-md-right">{{ __('Size') }}</label>
        
                                    <div class="col-md-6">
                                        {{-- <input id="size" type="color" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}
                                      <select class="form-control" name="size">
                                         <option value="none" selected>None</option>
                                          <option value="large">Large</option>
                                          <option value="midum">Midum</option>
                                          <option value="small" >Small</option>
                                      </select>
                                        @error('size')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row">
                                        <label for="count" class="col-md-4 col-form-label text-md-right">{{ __('Count') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="count" type="number" class="form-control @error('count') is-invalid @enderror" name="count" value="{{ old('count') }}" required autocomplete="count" autofocus>
                                        
                                            @error('count')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                            <label for="Discount" class="col-md-4 col-form-label text-md-right">{{ __('Discount') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="Discount" type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount') }}" required autocomplete="discount" autofocus>
                                            
                                                @error('discount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                                <label for="Price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="Price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="Price" autofocus>
                                                
                                                    @error('price')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
