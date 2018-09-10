<?php

namespace App\Http\Controllers;

use App\User;
use Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('user', [ "user" => $user ]);
    }



    public function update(Request $request)
    {

//        if($request->user()) {
//            $user = $request->user();
//        }

        $user = Auth::user();

        $this->validate(request(), [
            'name' => 'required',
            'surname' => 'required|string|max:255',
            'email' => 'unique:users,email,'.Auth::id().',id'


        ]);


        $user->name = Request::input('name');
        $user->surname = Request::input('surname');
        $user->email = Request::input('email');

//        var_dump(Request::input());exit();


        $user->save();

        return redirect('user');
    }
}
