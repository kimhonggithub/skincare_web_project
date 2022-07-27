@extends('master')
@section("content")
<!-- <div class="custainer">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">

        </div>
    </div>
</div> -->
<div class="container card mb-3 mt-3 pt-3 pb-3" >
  <div class="row mg-0">
        <div class="col-sm-4">
        <img src="{{$product['gallery']}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <button><a href="/">Go Back</a></button>
            <div class="card-body">
                <h4>{{$product['category']}} Product</h4>
                <h4 class="card-title">{{$product['name']}}</h4>
                <p class="card-text">{{$product['description']}}</p>
                <h5>Price : {{$product['price']}}</h5>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <div class="ml-auto">
                        <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button>
                        <span class="px-sm-1">1</span>
                        <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>
                </div>
    
            </div>
            <div class="card-body">
               <form action="/add_to_cart" method="POST">
                     @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button class="col-sm-6  btn btn-outline-primary">Add to Card</button> 
               </form> 
                <button type="button" class="mt-2 col-sm-6  btn btn-primary">Buy now</button>  
            </div>
   
            
        </div>
   </div>

</div>
@endsection