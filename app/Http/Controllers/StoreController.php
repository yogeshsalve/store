<?php

namespace App\Http\Controllers;
use App\Models\store;
use App\Models\coupon;

use Illuminate\Http\Request;

class StoreController extends Controller
{
   function AddStore(Request $req)
   {
        $s = new store;
        $s->store_name=$req->store_name;
        $s->store_id=$req->store_id;
        $s->store_score=$req->store_score;
        $s->save();
        // $req->session()->flash('status', "Store Added Successfully");
        return redirect('/addstore')->with('success','Store Added successfully.');;
   }
//########################################
   public function ShowStores()
    {
        $store=store::all();
        return view('store/store',['store'=>$store]);
    }
//########################################
    function deletestore($id)
    {
      $store= store::find($id);
      $store->delete();
      return redirect('/store');
    }

//########################################


function EditStore($id)
    {
      $store= store::find($id);
      return view('store/editstore', ['store'=>$store]);

    }


// #######################################
function updatestore(Request $req)
{
    
    $store=store::find($req->id);
    $store->store_name=$req->store_name;
    $store->store_id=$req->store_id;
    $store->store_score=$req->store_score;
    $store->save();
    return redirect('/store');
}
//########################################

    function AddCoupon(Request $req)
   {
        $s = new coupon;
        $s->couponname=$req->couponname;
        $s->couponcode=$req->couponcode;
        $s->description=$req->description;
        $s->save();
        // $req->session()->flash('status', "Store Added Successfully");
        return redirect('/addcoupon')->with('success','Coupon Added successfully.');;
   }

   public function ShowCoupon()
    {
        $coupon=coupon::all();
        return view('coupon/coupon',['coupon'=>$coupon]);
    }

    //########################################
    function deletecoupon($id)
    {
      $coupon= coupon::find($id);
      $coupon->delete();
      return redirect('/coupon');
    }


    //########################################


function EditCoupon($id)
{
  $coupon= coupon::find($id);
  return view('coupon/editcoupon', ['coupon'=>$coupon]);

}


// #######################################
function updatecoupon(Request $req)
{

$coupon=coupon::find($req->id);
$coupon->couponname=$req->couponname;
$coupon->couponcode=$req->couponcode;
$coupon->description=$req->description;
$coupon->save();
return redirect('/coupon');
}
//########################################

}
