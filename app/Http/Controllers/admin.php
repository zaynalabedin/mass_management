<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class admin extends Controller
{
   public function dashbord_show(){
    $data= member::get();
    return view('dashbord',compact('data'));
   }

   public function namesub(Request $request){
    $data = new member();
    $data->name = $request->input('name');
    $data->save();
    return redirect('dashbord');
   }

   public function mill_show(){
    $data1= member::get();
    return view('mill',compact('data1'));
   }

   public function mill_edit($id){
    $data3= member::find($id);
    return response()->json([
        'status' =>200,
        'data3' => $data3,
    ]);

   }
   public function mill_sub(Request $request){
    $id=$request->input('id');
    $data2 = member::find($id);
    // $data2->name = $request->input('name');
    $data2->mill = $request->input('mill');
    // dd($data2);
    $data2->save();
    return redirect('dashbord');


   }


   public function market_show(){
    $data4 = member::get();
    return view('market',compact('data4'));
   }



   public function market_edit($id){
    $data5= member::find($id);
    return response()->json([
        'status' =>200,
        'data5' => $data5,
    ]);
   }

   public function market_sub(Request $request){
    $id=$request->input('id');
    $data6 = member::find($id);
    // $data2->name = $request->input('name');
    $data6->joma = $request->input('market');
    // dd($data6);
    $data6->save();
    return redirect('market');

   }

}
