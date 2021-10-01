@extends('layouts.app')

@section('content')
<div class="card mx-3">
    <div class="row justify-content-center">
        <div class="col-md-12" style="background-color: #f8fafc;border: none">
            <div class="card" style="background-color: #f8fafc;border: none">
                <div class="card-header"><b>{{$store->store_name}}</b></div>
                <div class="card-body">
                   <!-- row start -->
                <div class="row">
                    <!-- ***************** LEFT COLUMN START******************* -->
                    <div class="col-sm-3 ">
                        <div class="card mb-3 shadow">
                             <div class="card-header"><b> About {{$store->store_name}}</b></div>
                             <div class="card  m-2">
                             <img class="card-img-top" src="https://t4.ftcdn.net/jpg/02/87/31/61/360_F_287316112_M5wI7vXSLf1IWyAb4O5ZmR3RJqKuglzs.jpg" alt="Card image">
                             </div>  
                             <div class="card-body">
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Do you want to boost your Shopify conversion rate? Make sure you get the booster theme which helps your online business to get the best sale and conversions. It helps to boost average order value and also increases profit with the product upsell pop up. The best part is you don’t need any technical skills or coding to set up the tool. Your viewers will also get an option like the related product and smart mega menu which is super easy to set up and increases your profit in no time. It offers a wide range of features at a much less price than the competitors. </p>
                                </div>
                            </div>
                        </div>
                    <!-- ***************** LEFT COLUMN END******************* -->
                    <!-- ***************** RIGHT COLUMN START******************* -->
                    <div class="col-sm-9">
                            <div class="card shadow mb-3">
                                <div class="card-header"><h3><B> {{$store->store_name}} COUPONS </B></h3></div>
                                <div class="card-body">
                                @foreach($display1 as $d1)
                                @foreach($display2 as $d2)
                                @if($d1->couponid==$d2->id)
                                <!-- COUPON DETAIL CARD -->
                                <div class="card shadow mb-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-2" style="border-right: 1px dashed #333;">
                                            <h2>10% OFF</h2><br>
                                            <center><button type="button" class="btn btn-info">Coupon</button></center>
                                        </div>
                                        <div class="col-sm-8">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                        <div class="col-sm-2"style="border-left: 1px dashed #333;">
                                        <center>
                                        <!-- <button type="button" class="btn btn-outline-success mt-3">SHOW CODE</button><br> -->
                                        <br>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">SHOW CODE</button> <br>
                                        <p class="mt-3">verified and tested </p>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- MODAL -->
                                <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"><b>Copy the coupon code</b></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                            <input type="text" value="{{$d2->couponcode}}" id="myInput">

                                            <!-- The button used to copy the text -->
                                            <button onclick="myFunction()">Copy text</button>
                                            
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