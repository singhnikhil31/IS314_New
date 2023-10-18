<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;

use App\Models\Menu;

use App\Models\Feedback;

use App\Models\Order;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function menu()
    {
        $data = menu::all();
        return view("admin.menu",compact("data"));
    }

    public function upload(Request $request)
    {
        
        $data = new menu;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

                $request->image->move('menuimage',$imagename);

                $data->image=$imagename;

                $data->item=$request->item;
                $data->price=$request->price;
                $data->description=$request->description;

                $data->save();

                return redirect()->back();

    }

    public function deleteitem($id)
    {
        $data=menu::find($id);
        $data->delete();
        
        return redirect()->back();
    }

    public function updateview($id)
    {
        $data=menu::find($id);
        return view("admin.updateview",compact("data"));
    }

    public function update(Request $request,$id)
    {
        $data=menu::find($id);
        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

                $request->image->move('menuimage',$imagename);

                $data->image=$imagename;

                $data->item=$request->item;
                $data->price=$request->price;
                $data->description=$request->description;

                $data->save();

                return redirect()->back();
    }



    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function feedback(Request $request)
    {
        
        $data = new feedback;

                $data->name=$request->name;
                $data->email=$request->email;
                $data->message=$request->message;

                $data->save();

                return redirect()->back();

    }

    public function viewfeedback()
    {
        $data=feedback::all();
        return view("admin.adminfeedback",compact("data"));
    }

    public function orders()
    {
        $data = order::all();
        return view('admin.orders', compact('data'));
    }
    

}
