<?php

namespace App\Http\Controllers;
use App\Models\store;
use App\Models\coupon;
use App\Models\category;
use App\Models\assigncoupon;

use Illuminate\Http\Request;

class StoreController extends Controller
{
  //  function AddStore(Request $req)
  //  {
  //       $s = new store;
  //       $s->store_name=$req->store_name;
  //       $s->store_id=$req->store_id;
  //       $s->store_score=$req->store_score;
  //       $s->store_category=$req->store_category;
  //       $s->save();
  //       // $req->session()->flash('status', "Store Added Successfully");
  //       return redirect('/addstore')->with('success','Store Added successfully.');;
  //  }

  public function AddStore(Request $request)
  {
      $request->validate([
          'store_name' => 'required',
          'store_id' => 'required',
          'store_score' => 'required',
          'store_category' => 'required',          
          'store_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
          'store_desc' => 'required',   
          'store_link' => 'required',             
      ]);

      
      $input = $request->all();     
          

      if ($image = $request->file('store_image')) {
          $destinationPath = 'storeimages/';
          $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
          $image->move($destinationPath, $profileImage);
          $input['store_image'] = "$profileImage";
      } 
   
      store::create($input);
   
      return redirect("/addstore")->with('success','Store Added Successfully.');
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
        return redirect('/coupon')->with('success','Coupon Added successfully.');;
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

function AddCategory(Request $req)
   {
        $s = new category;
        $s->category_name=$req->category_name;
        $s->save();
        return redirect('/addcategory')->with('success','Category Added successfully.');
   }
//********************************************/

public function ShowCategory()
{
    $category=category::all();
    return view('category/add_category',['category'=>$category]);
}
//########################################################
public function DisplayCategory()
{
    $category=category::all();
    return view('store/add_store',['dispcat'=>$category]);
}
//###########################################################
function EditCategory($id)
    {
      $category= category::find($id);
      return view('category/editcategory', ['category'=>$category]);

    }
//##############################################################
function deletecategory($id)
{
  $category= category::find($id);
  $category->delete();
  return redirect('/addcategory');
}

//########################################
function AssignCoupon($id)
    {
      $store= store::find($id);
      $coupon=coupon::all();
      $display1=assigncoupon::all()->where('storeid',$id);
      $display2=coupon::all();
      return view('store/assigncoupon',['store'=>$store,'coupon'=>$coupon,'display1'=>$display1,'display2'=>$display2]);

    }

    function AssignCouponToStore(Request $req)
   {
        $s = new assigncoupon;
        $s->storeid=$req->storeid;
        $s->couponid=$req->couponid;
        $s->save();
        $id=$req->storeid;
        return redirect('/store');
   }
//########################################

public function displayAllStores()
{
    $store=store::all();
    return view('store/all_stores_list',['store'=>$store]);
}
//########################################
function DisplayStoreCoupons($id)
    {
      $store= store::find($id);
      $display1=assigncoupon::all()->where('storeid',$id);
      $display2=coupon::all();
      return view('store/deals',['store'=>$store,'display1'=>$display1,'display2'=>$display2]);
    }

}
