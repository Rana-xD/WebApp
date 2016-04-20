<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Application;


class System extends Controller
{


    public function login(Request $request)
    {


         $id = $request->id;
         $password = $request->password;
        $result = DB::table('users')->where('id','=',$id,'and','password','=',$password)->get();

        if(empty($result))
        {
            return back();
        }
        else
        {
            Session::put('id',$id);

            return Redirect::action('System@menu',array('id'=> $id));
        }


    }
    public function menu($id)
    {
       $ID = $id;
        return view ('Menu',compact('ID'));
    }
    public function logout()
    {
        return redirect('/');
    }
}
