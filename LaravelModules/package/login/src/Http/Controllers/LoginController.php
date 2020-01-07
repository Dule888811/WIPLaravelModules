<?php

namespace Dule\Login\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use DB;
use Dule\Login\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller 
{
    public function index()
    {
        return view('login::login');
    }

    public function login(Request $request)
    {
        $email =  $request->email;
        $passwrod = $request->psw;
        $user = DB::table('users')->where('email', '=', $email)
        ->where('password', '=', $passwrod)->first();
        if($user != null)
        {
          //  return view('login::home', compact('user'));
          return redirect()->route('home', ['id' => $user->id]);
        }
        
       
        
    }

    public function home($id)
    {
        return view('login::home', compact('id'));
    }

    public function getAPIMethods( )
	{
		return $this->setRequest(
			array(
				'login' => 'api.methods',
				'method' => 'GET'
			)
		);
	}
}