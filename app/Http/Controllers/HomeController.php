<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {

        $data=menu::all();
        return view("home",compact("data"));
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
            return view('home',compact('data'));
        }

    }


    public function addcart()
    {
    
        if ($user = Auth::user())  // Check if the user is logged in
        {
            // Your logic for adding to cart using $id
    
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }
    
    
    


}
