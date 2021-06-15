@extends('master')
@section("content")
<div class="custom-product">

<div class="col-sm-10 col-lg-12">
<h4>Result for products</h4>
<br>
<a href="ordernow" class="btn btn-success">Order Now</a>
<br>
<br>
@foreach($products as $item)
<div class="row searched-item cart-list">
<div class="col-sm-2">
<a href="detail/{{$item->id}}">
<img class="trending-image mr-4 " style="height:100px" src="{{$item->gallery}}">
</a>
</div>
<div class="col-sm-2">
<a href="detail/{{$item->id}}">
<h2 >{{$item->name}}</h2>
<h5>{{$item->description}}</h5>
</a>
</div>
<div class="col-sm-2">
<a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove Item</a>
</div>
</div>
</div>

@endforeach
</div>
</div>
@endsection