<?php
use App\Http\Controllers\productcontroller;
$total=0;
if(Session::has('user')){
$total =productcontroller::cartitem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand display-4" href="/">E-comm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">Orders</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">

    <li class="pl-5" style="padding-right:20px"><a href="/cartlist">Cart({{$total}})</a></li>
    </ul>
    <div>
    <ul class="navbar-nav">
     @if(Session::has('user'))
    <li class="dropdown ">
            <a class="dropdown-toggle pl-3" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li ><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li style="padding-right:20px"><a href="/login">Login</a></li>
          <li style="padding-right:20px"><a href="/register">Register</a></li>
          @endif 
      </ul>

  </div>
</nav>