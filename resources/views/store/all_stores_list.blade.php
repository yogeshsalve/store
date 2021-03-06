@extends('layouts.app')
@section('content')

<div class="container">


<form class="form-inline" action="/allstores" method="GET">
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="inputPassword2" placeholder="Enter Store name" name="storename">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Search</button>
  <button type="submit" class="btn btn-primary mb-2 ml-2" onClick="window.location.reload();">Refresh</button>
</form>


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3  style="color:blue;text-align:center;">Choose a store to view deals and coupons</h3></div>

                <div class="card-body">
                   

                
                <?php

//$array = ['0','1','2','3','4','5','6','7'];
$table = "<table class='table'><tbody><tr>";
                                    //^^^^ See here the start of the first row
foreach($store as $a => $s) {

    $table .= "<td style='border: 0;'><a href='/deals/$s->id' style='text-decoration: none;'><span style='display: inline-block;width: 180px;white-space: nowrap;overflow: hidden !important;text-overflow: ellipsis;'> $s->store_name </span></a></td>";
            //^           ^ double quotes for the variables
    if(($a+1) % 4 == 0)
        $table .= "</tr><tr>";

}
$table .= "</tr></tbody></table>"; 
     //^   ^^^^^ end the row
     //| append the text and don't overwrite it at the end
echo $table;

?>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
