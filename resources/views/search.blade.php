@extends('master')
@section("content")
<div class="container">
<div class="row">
<h2>Results Products</h2>
            @foreach ($products as $item)
        <div class="col-sm-6"><a href="#">Filter</a></div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 }">
                <div class="card">
                    <a href="detail/{{$item['id']}}">
                    <img class="card-img-top" src="{{$item['gallery']}}">
                    </a>
                    <div class="card-body">
                        <h5><b>{{$item['name']}}</b> </h5>

                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">{{$item['price']}}</div>
                            <div class="ml-auto">
                                <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button>
                                <span class="px-sm-1">1</span>
                                <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>
                            </div>
                        </div> 
                       
                        <button class="btn w-100 rounded my-2">Add to cart</button>      
                    </div>
                </div>
            </div>
            @endforeach
</div>
</div>
@endsection