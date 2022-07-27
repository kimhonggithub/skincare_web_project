@extends('master')
@section("content")
<div class="container "> 

    <section id="products">
        <div class="container">
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">Showing 44 results</div>
            <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-1 m-1">
                    <span class="text-muted">Sort by</span>
                    <select name="sort" id="sort">
                        <option value="popularity"><b>Popularity</b></option>
                        <option value="prcie"><b>Price</b></option>
                        <option value="rating"><b>Rating</b></option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($products as $item)
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 }">
                <div class="card">
                    <a href="detail/{{$item['id']}}">
                    <img class="card-img-top" src="{{$item['gallery']}}">
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
                        </a>
                        <button class="btn w-100 rounded my-2">Add to cart</button>      
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>    
    </section>

</div>
@endsection

