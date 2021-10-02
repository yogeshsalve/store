@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-white bg-primary">{{ __('Add New Coupon') }}</div>
                <div class="card-body">

                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <h6>{{ $message }}</h6>
        </div>
    @endif 
                   
                    <form action="/addcoupon" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Coupon Name</label>
                            <input type="text" class="form-control" name="couponname" id="couponname" required aria-describedby="nameHelp">
                            <div id="nameHelp" class="form-text">Add name for new store</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Coupon Code</label>
                            <input type="text" class="form-control" name="couponcode" id="couponcode" rquired >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <input type="text" class="form-control" name ="description" id="description" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Discount</label>
                            <input type="text" class="form-control" name ="discount" id="discount" placeholder="Enter Discount in percentage e.g. 10" required>
                        </div>
                        <center><button type="submit" class="btn btn-primary">Add Coupon</button></center>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection