<?php
namespace App\Http\Controllers;
use Request;
use App\Coupons;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class CouponsController extends Controller
{
    public function index(){
      $coupons =\App\Coupons::orderBy('date','DESC')->get();
      return view('coupons.index')
          ->with('coupons',$coupons);
      }

    public function show($slug){
      $coupons = \App\Coupons::whereSlug($slug)->firstOrFail();
      return view('coupons.show')
          ->with('coupons',$coupons);
    }

    public function create(){
      return view('coupons.create');
    }

    public function store(Requests\CreateCouponRequest $request){
      $input = Request::all();
      Coupons::create($input);
      return redirect('coupons/');
    }

    public function delete($id){
      $coupon = Coupons::find($id);
      $coupon->delete();
      return redirect('coupons/');
    }


    public function edit($id){
      $coupon = Coupons::findOrFail($id);
      return view('coupons.edit', compact('coupon'));
    }

    public function update(Requests\CouponRequest $request,$id){
      $input = $request->all();
      $coupon = Coupons::find($id);
      // Set inputs to update
      $coupon->p1 =  $input['p1'];
      $coupon->p2 =  $input['p2'];
      $coupon->title =  $input['title'];
      $coupon->size =  $input['size'];
      $coupon->date =  $input['date'];
      $coupon->industry =  $input['industry'];
      $coupon->settlement =  $input['settlement'];
      $coupon->judge =  $input['judge'];
      $coupon->jurisdiction =  $input['jurisdiction'];
      $coupon->court_type =  $input['court_type'];
      $coupon->{'case-status'} =  $input['case_status'];
      $coupon->{'case-type'} =  $input['case_type'];
      $coupon->{'case-number'} =  $input['case_number'];
      // Save New Coupon
      $coupon->save();
      // Set Flash Message Success Text
      session()->flash('flash_message',''.$coupon->title.' Updated!');
      return redirect('cases/'.$coupon->slug.'');
    }
}
