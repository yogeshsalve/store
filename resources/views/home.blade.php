@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   

                <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="https://t4.ftcdn.net/jpg/02/87/31/61/360_F_287316112_M5wI7vXSLf1IWyAb4O5ZmR3RJqKuglzs.jpg" alt="Card image">
        <a href="/store" class="btn btn-primary">Manage Store</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="https://t4.ftcdn.net/jpg/02/87/31/61/360_F_287316112_M5wI7vXSLf1IWyAb4O5ZmR3RJqKuglzs.jpg" alt="Card image">
      <a href="/coupon" class="btn btn-primary">Manage Coupons</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="https://t4.ftcdn.net/jpg/02/87/31/61/360_F_287316112_M5wI7vXSLf1IWyAb4O5ZmR3RJqKuglzs.jpg" alt="Card image">
      <a href="/addcategory" class="btn btn-primary">Manage Category</a>
      </div>
    </div>
  </div>
</div>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
