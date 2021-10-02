@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">{{ __('Store') }}</div>
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/addstore" class="btn btn-primary">Add Store</a>
                        <!-- <button class="btn btn-primary" type="button">Button</button> -->
                    </div>
                    <br>


                    <table class="table">
  <thead>
    <tr>
      <th class="col-3">Store Name</th>
      <th class="col-3">Store id</th>
      <th class="col-2">Score</th>
      <th class="col-4">Action</th>
    </tr>
  </thead>
  <tbody>   
      @foreach($store as $s)

    <tr>

      <td class="col-3">{{$s->store_name}}</td>
      <td class="col-3">{{$s->store_id}}</td>
      <td class="col-2">{{$s->store_score}}</td>
      <td class="col-4">
           <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> -->
                    <a href="/editstore/{{$s->id}}" class="btn btn-success m-1">Modify</a>
                    <a  href="/deletestore/{{$s->id}}"  class="btn btn-danger m-1" onclick="return confirm('Are you sure?')">Delete</a>
                    <a  href="/assigncoupon/{{$s->id}}"  class="btn btn-primary m-1" >Assign Coupon</a>
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