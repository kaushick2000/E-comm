@extends('master')
@section("content")
<div class="custom-product">
  <div class="col-sm-10">
  <table class="table">
  
  <tbody>
    <tr>
      <td>Amount</td>
      <td>${{$total}}</td>
      
    </tr>
    <tr>
      <td>Tax</td>
      <td>$ 0</td>
      
    </tr>
    <tr>
      <td>Delivery</td>
      <td>$ 10</td>
    
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>$ {{$total+10}}</td>
    
    </tr>
  </tbody>
</table>
<div>
<form action="/order" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <textarea name='address' class="form-control"  placeholder="Enter your adrress"></textarea>
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Payment Method</label><br>
    <input type="radio" value="cash" name="payment" id=""><span >Online Payment</span><br>
    <input type="radio" value="cash" name="payment" id=""><span >EMI payment</span><br>
    <input type="radio" value="cash" name="payment" id=""><span >Cash On Delivery</span><br>
  </div>

  <button type="submit" class="btn btn-primary">Order Now</button>
</form>

</div>
  </div>
</div>
@endsection