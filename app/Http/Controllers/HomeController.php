<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Menu;

use App\Models\Cart;

use App\Models\Order;

class HomeController extends Controller
{
    public function index()
{
    $data = menu::all();

    // Check if the user is logged in
    if (Auth::check()) {
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();
    } else {
        $count = 0; // or whatever default value you want
    }

    return view("home", compact("data", "count"));
}


    public function redirects()
    {
        $data=menu::all();

        $usertype= Auth::user()->usertype;
        
        if($usertype=='1')
        {
            return view('admin.adminhome');
        }

        else
        {

            $user_id=Auth::id();
            $count=cart::where('user_id' ,$user_id)->count();

            return view('home',compact('data','count'));
        }

    }


    public function addcart(Request $request,$id)
    {
    
        if (Auth::id()) 
        {
           
            $user_id=Auth::id();

            $item_id=$id;

            $quantity=$request->quantity;

            $cart=new cart;

            $cart->user_id=$user_id;
            $cart->item_id=$item_id;
            $cart->quantity=$quantity;
            $cart->save();
    
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }
    
    public function showcart(Request $request,$id)
    {

        $count=cart::where('user_id',$id)->count();

        $data2 = cart::select('*')->where('user_id', '=', $id)->get();

        $data=cart::where('user_id',$id)->join('menus', 'carts.item_id', '=', 'menus.id')->get();

        return view('showcart',compact('count','data','data2'));


    }
    
    public function remove($id)
    {

        $data=cart::find($id);

        $data->delete();

        return redirect()->back();

    }


    public function orderconfirm(Request $request)
    {

        foreach($request->item as $key => $item)

        {

            $data=new Order;

            $data->item=$item;
            $data->price=$request->price[$key]; 
            $data->quantity=$request->quantity[$key];

            $data->name=$request->name;
            $data->phone=$request->phone;
            $data->seat=$request->cinema_seat;

            $data->save();

        }

        return redirect()->back();

    }


}
