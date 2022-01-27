<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\ourour;
use App\Models\User;
use App\Models\Partenaires;
use App\Models\cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            return redirect('redirects');
        }
        else{
            $data=ourour::all();
            $data2=partenaires::all();
            return view("home",compact("data","data2"));
        }
    }

    public function redirects(){

        $data=ourour::all(); 
        $data2=partenaires::all();
        $usertype=Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.adminhome');
        }
        else{
            $user_id=Auth::id();
            $count=cart::where('user_id',$user_id)->count();

            return view('home',compact('data','data2','count'));
        }
    }



    public function addcart(Request $request,$id){
       
       
        if(Auth::id()){
            $user_id=Auth::id();

            $ourourid=$id;
            $nombre=$request->nombre;

            $cart = new cart;

            $cart->user_id=$user_id;
            $cart->ourourid=$ourourid;
            $cart->nombre=$nombre;
            $cart->save( );
           return redirect()->back(); 
        }
        
        else{
            return redirect('/login');
        }
    
    }

    public function showcart(Request $request,$id){
        $count=cart::where('user_id',$id)->count();
        if(Auth::id()==$id){
            $data2=cart::select('*')->where('user_id', '=' , $id)->get();
            $data=cart::where('user_id',$id)->join('ourours','carts.ourourid','=','ourours.id')->get();
            return view('showcart',compact('count','data','data2'));
        }
        else{
            return redirect()->back();
        }

    }

    public function remove($id){
        $data=cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orderconfirm(Request $request){
        foreach($request->title as $key =>$title){
            $data =new order;
            $data->title = $title;
            $data->price = $request->price[$key];
            $data->number = $request->nombre[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;

            $data->save();
        }
        return redirect()->back();
    }

}
