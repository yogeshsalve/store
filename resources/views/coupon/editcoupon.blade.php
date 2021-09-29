@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Add New Coupon') }}</div>
                <div class="card-body">

                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <h6>{{ $message }}</h6>
        </div>
    @endif 
                   
                    <form action="/editcoupon" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Coupon Name</label>
                            <input type="hidden" class="form-control" name="id" id="couponname" required aria-describedby="nameHelp" value="{{$coupon->id}}">
                            <input type="text" class="form-control" name="couponname" id="couponname" required aria-describedby="nameHelp" value="{{$coupon->couponname}}">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Coupon Code</label>
                            <input type="text" class="form-control" name="couponcode" id="couponcode" rquired value="{{$coupon->couponcode}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <input type="text" class="form-control" name ="description" id="description" required value="{{$coupon->description}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Coupon</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection