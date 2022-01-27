<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use App\models\ourour;
use App\models\Reservation;
use App\models\Partenaires;
use App\models\Order;

class AdminController extends Controller
{
    public function user(){
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function ourour(){

        $data=ourour::all();
        return view("admin.ourourmenu",compact('data'));
    }

    public function upload(Request $request){
         $data = new ourour;

         $image = $request->image;

         $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('ourourimage',$imagename);
            $data->image=$imagename;
            $data->title=$request->title;
            $data->price=$request->price;
            $data->description=$request->description;
            $data->save();
            return redirect()->back();
    }


    public function deletemenu($id){
        $data=ourour::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateview($id){
        $data=ourour::find($id);
        return view("admin.updateview",compact("data"));
    }

    public function update(Request $request,$id){
        $data=ourour::find($id);
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
           $request->image->move('ourourimage',$imagename);
           $data->image=$imagename;
           $data->title=$request->title;
           $data->price=$request->price;
           $data->description=$request->description;
           $data->save();
           return redirect()->back();
    }





    public function reservation(Request $request){
        $data = new reservation;

        
           $data->name=$request->name;
           $data->phone=$request->phone;
           $data->email=$request->email;
           $data->guest=$request->guest;
           $data->dateD=$request->dateD;
           $data->dateF=$request->dateF;
           $data->message=$request->message;
           $data->save();
           return redirect()->back();
   }


   public function viewreservation(){
        $data=reservation::all();
        return view('admin.adminreservation',compact('data'));
   }

   
   
   
   public function viewpartenaires(){
       $data=partenaires::all();
        return view('admin.adminpartenaires',compact("data"));
    }





    public function uploadpartenaires(Request $request){
        $data = new partenaires;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
           $request->image->move('partenairesimage',$imagename);
           $data->image=$imagename;
           $data->name=$request->name;
           $data->location=$request->location;
           $data->save();
           return redirect()->back();
   }



   public function updatepartenaires($id){
       $data = partenaires::find($id);
       return view('admin.updatepartenaires',compact('data'));
   }

   public function updateFoodpartenaires(Request $request,$id){
    $data = partenaires::find($id);

    $image = $request->image;
        if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
           $request->image->move('partenairesimage',$imagename);
           $data->image=$imagename;
        }
           $data->name=$request->name;
           $data->location=$request->location;
           $data->save();
           return redirect()->back();
    }

    public function deletepartenaires($id){
        $data=partenaires::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders(){
        $data=order::all();
        return view('admin.orders',compact('data'));
    }

    public function search(Request $request){
        $search=$request->search;
        $data=order::where('name','like','%'.$search.'%')->orWhere('title','like','%'.$search.'%')->get();
        return view('admin.orders',compact('data'));
    }
}
