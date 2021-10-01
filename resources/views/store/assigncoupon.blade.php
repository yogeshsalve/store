@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Assign Coupon') }} </div>
                <div class="card-body">

                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <h6>{{ $message }}</h6>
        </div>
    @endif 
                   
                    <form action="/assigncoupon" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Store Name</label>
                            <input type="hidden" class="form-control" name="storeid" id="store_name" required aria-describedby="nameHelp" value="{{$store->id}}">
                            <input type="text" class="form-control" name="store_name" id="store_name" readonly aria-describedby="nameHelp" value="{{$store->store_name}}">
                            <!-- <div id="nameHelp" class="form-text">Add name for new store</div> -->
                        </div>
                        <!-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Store ID</label>
                            <input type="text" class="form-control" name="store_id" id="store_id" rquired value="{{$store->store_id}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Score</label>
                            <input type="text" class="form-control" name ="store_score" id="store_score" required value="{{$store->store_score}}">
                        </div> -->
                        <hr>
                        
                           
                            <div class="form-group">
                                <label><strong>Select Coupon:</strong></label><br>
                               
                                <select name="couponid" id="" class="form-control">
                                @foreach($coupon as $c)
                                    <option value="{{$c->id}}">{{$c->id}}</option>
                                @endforeach
                                </select>
                                
                            </div>  
                            
                       
                        <button type="submit" class="btn btn-primary">Add Store</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<!-- ******************************************************************* -->
<div class="container">
<div class="card">
  <div class="card-header">
      <center>
      Coupons List
      </center>
    
  </div>
  <div class="card-body">
    <table class="table table-striped">
        <tr>
            <th>Coupon Name</th>
            <th>Coupon Name</th>
        </tr>
        @foreach($display1 as $d1)
            @foreach($display2 as $d2)
                @if($d1->couponid==$d2->id)
                <tr>
                    <td>{{$d2->couponname}}</td>
                    <td>{{$d2->couponcode}}</td>
                </tr>
                @endif
            @endforeach
        @endforeach
    </table>
  </div>
</div>
</div>

<!-- ******************************************************************* -->


@endsection