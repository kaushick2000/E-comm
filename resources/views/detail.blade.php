@extends('master')
@section("content")
<div class= "container">
<div class="row">
<div class="col">
<img class="detail-img pt-4" src="{{$product['gallery']}}" alt="">

</div>
 <div class="col pt-4">
  <a href="/">Go Back</a>
  <h2>{{$product['name']}}</h2>
  <h3>Price : {{$product['price']}}</h4>
  <h4>Description : {{$product['description']}}</h3>
  <h4>Category : {{$product['category']}}</h3>
  <br><br>
  <form action="/add_to_cart" method="POST">
  @csrf
  <input type="hidden" name="product_id" value={{$product['id']}}>
  <button class="btn btn-primary pr-5 mr-3">Add to Cart </button>
  </form>
  <button class="btn btn-success">Buy Now </button>
 
  </div>

</div>

</div>
@endsection