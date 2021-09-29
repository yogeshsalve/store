@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Coupon') }}</div>
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/addcoupon" class="btn btn-primary">Add Coupon</a>
                        <!-- <button class="btn btn-primary" type="button">Button</button> -->
                    </div>
                    <br>


                    <table class="table">
  <thead>
    <tr>
      <th class="col-3">Coupon Name</th>
      <th class="col-3">Coupon Code</th>
      <th class="col-3">Description</th>
      <th class="col-3">Action</th>
    </tr>
  </thead>
  <tbody>   
      @foreach($coupon as $s)

    <tr>

      <td class="col-3">{{$s->couponname}}</td>
      <td class="col-3">{{$s->couponcode}}</td>
      <td class="col-3">{{$s->description}}</td>
      <td class="col-3">
           <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> -->
                    <a href="/addstore" class="btn btn-success m-1">Modify</a>
                    <a href="/addstore" class="btn btn-danger m-1">Delete</a>
                    <!-- </div> -->
                </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection