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

   public function ShowStores()
    {
        $store=store::all();
        return view('store/store',['store'=>$store]);
    }



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
}
