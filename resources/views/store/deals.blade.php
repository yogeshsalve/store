@extends('layouts.app')

@section('content')


<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}
/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
}
</style>
<div class="card mx-3">
    <div class="row justify-content-center">
        <div class="col-md-12" style="background-color: #f8fafc;border: none">
            <div class="card" style="background-color: #f8fafc;border: none">
                <div class="card-header" style="font-family: Arial;"><b>{{$store->store_name}}</b></div>
                <div class="card-body">
                   <!-- row start -->
                <div class="row">
                    <!-- ***************** LEFT COLUMN START******************* -->
                    <div class="col-sm-3 ">
                        <div class="card mb-3 shadow">
                             <div class="card-header"><b> About {{$store->store_name}}</b></div>
                             <div class="card  m-2">
                             <img class="card-img-top p-2" src="/storeimages/{{$store->store_image}}">
                             </div>  
                             <div class="card-body">
                                    <h5 class="card-title" >Description</h5>
                                    <p class="card-text" style="font-family: Arial; color: #333; font-size: 16px; line-height: 1.7;" >{{$store->store_desc}}</p>
                                </div>
                            </div>
                        </div>
                    <!-- ***************** LEFT COLUMN END******************* -->
                    <!-- ***************** RIGHT COLUMN START******************* -->
                    <div class="col-sm-9">
                            <div class="card shadow mb-3">
                                <div class="card-header"><h3><B> {{$store->store_name}} Coupons </B></h3></div>
                                <div class="card-body">
                                @foreach($display1 as $d1)
                                @foreach($display2 as $d2)
                                @if($d1->couponid==$d2->id)
                                <!-- COUPON DETAIL CARD -->
                                <div class="card shadow mb-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-2" style="border-right: 1px dashed #333;">
                                            <h3 style="color:red"><b>10% OFF</b></h3><br>
                                            <center><button type="button" class="btn btn-danger">Coupon</button></center>
                                        </div>
                                        <div class="col-sm-7">
                                        <h5 class="card-title" style="font-family: Arial;"><b>{{$d2->couponname}}</b></h5>
                                        <p class="card-text" style="font-weight: 300; color: #222; font-family: verdana,Arial;line-height: 1.7;">{{$d2->description}}</p>
                                        </div>
                                        <div class="col-sm-3"style="border-left: 1px dashed #333;">
                                        <center>
                                        <!-- <button type="button" class="btn btn-outline-success mt-3">SHOW CODE</button><br> -->
                                        <br>
                                        <button type="button" class="btn btn-success p-3" data-toggle="modal" data-target="#exampleModalCenter{{$d2->id}}">SHOW CODE</button> <br>
                                        <p style="color: #8c8c8c; font-size: 12px; padding-top: 10px;"><i class="fa fa-check" stye="color: #87c824;"></i>&nbsp;verified and tested </p>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                                </div> 
                                <!-- MODAL -->                              
                                        <div class="modal fade" id="exampleModalCenter{{$d2->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header text-center bg-success">
                                                <h5 class="modal-title " id="exampleModalLongTitle" style="font-family: Arial;"><b>Copy the coupon code</b></h5><br>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <center><p style="color: #8c8c8c; font-size: 12px; padding-top: 10px;"><i class="fa fa-check" stye="color: #87c824;"></i>&nbsp;verified and tested </p></center>

                                            <center><p style="font-weight: 500; font-size: 16px; overflow-x: hidden;">GO to <a href=""><b>{{$store->store_name}}</b></a> and avail this offer </p></center>
                                           
                                            <div class="input-group mb-3">
                                            <input type="text"  value="{{$d2->couponcode}}" id="myInput" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button onclick="myFunction()" class="btn btn-outline-success" type="button">Copy</button>
                                            </div>
                                            </div>
                                            



                                            <!-- <input type="text" value="{{$d2->couponcode}}" id="myInput"> -->

                                            <!-- The button used to copy the text -->
                                            <!-- <button onclick="myFunction()">Copy text</button> -->
                                            
                                            <!-- <input type="text" class="form-control" name="store_id" value="{{$d2->couponcode}}">
                                            <button type="button" class="btn btn-primary float-right">COPY</button> -->
                                            </div>
                                            <!-- <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div> -->
                                            </div>
                                        </div>
                                        </div>
                                <!-- MODAL -->

                                <!-- COUPON DETAIL CARD -->
                                @endif
                                @endforeach
                                @endforeach

        

                                </div>
                            </div>
                    </div>
                    <!-- ***************** RIGHT COLUMN START******************* -->
                    </div>
                    <!-- row end -->

                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<script>
    function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>