@extends('master')
@section("content")
<div class="custom-product">

<div class="col-sm-10 col-lg-12">
<h4>my orders</h4>
<br>
<br>
<br>
@foreach($orders as $item)
<div class="row searched-item cart-list">
<div class="col-sm-2">
<a href="detail/{{$item->id}}">
<img class="trending-image mr-4 " style="height:100px" src="{{$item->gallery}}">
</a>
</div>
<div class="col-md-6">
<a href="detail/{{$item->id}}">
<h2 >Name :{{$item->name}}</h2>
<h5>Address : {{$item->address}}</h5>
<h5>Payment Status : {{$item->payment_status}}</h5>
<h5>Payment Method : {{$item->payment_method}}</h5>

</a>
</div>

</div>
</div>

@endforeach
</div>
</div>
@endsection