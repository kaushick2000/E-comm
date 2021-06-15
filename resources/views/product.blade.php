@extends('master')
@section("content")

<h3>Trending Products</h3>
@foreach($products as $item)
<div class="trending-item">
 <a href="detail/{{$item['id']}}">
<img class="trending-image " src="{{$item['gallery']}}">
<div>
<h3 class="text-muted"> {{$item['name']}}</h3>
</div>
</div>
</a>
@endforeach
</div>
</div>
@endsection