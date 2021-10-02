@extends('layouts.app')

@section('content')


<div class="row m-5">
    <div class="col-sm-4">
    
            <div class="card">
                <div class="card-header text-white bg-primary">{{ __('Assign Coupon') }} </div>
                <div class="card-body">

                <!-- @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <h6>{{ $message }}</h6>
                    </div>
                @endif  -->

                @if(Session::get('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @endif 


                        @if(Session::get('status1'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{Session::get('status1')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
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
                       <hr>
                         <div class="form-group">
                                <label><strong>Select Coupon:</strong></label><br>
                               
                                <select name="couponid" id="" class="form-control">
                                @foreach($coupon as $c)
                                    <option value="{{$c->id}}">{{$c->id}}</option>
                                @endforeach
                                </select>
                                </div>
                        <button type="submit" class="btn btn-primary">Add Coupon</button>
                    </form>
                    
                </div>
            </div>
         </div>
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <div class="col-sm-8">
    <div class="card">
        <div class="card-header text-white bg-primary">
      <center>Coupons List </center>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Coupon Name</th>
                            <th>Coupon Code</th>
                            <th>Action</th>
                        </tr>
                        @foreach($display1 as $d1)
                            @foreach($display2 as $d2)
                                @if($d1->couponid==$d2->id)
                                <tr>
                                    <td>{{$d2->couponname}}</td>
                                    <td>{{$d2->couponcode}}</td>
                                    <td><a  href="/deleteAssignedCoupon/{{$d1->id}}"  class="btn btn-danger m-1" onclick="return confirm('Are you sure?')">Delete</a></td>
                                </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </table>
                </div>
                </div>
            </div>
            </div>





@endsection