<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Http\Requests\EditRequest;
class ProfileConttroller extends Controller
{
    public function index(){

   		$Usr = \DB::table('users')
                     ->select('*')
                     ->where('id', '=', \Auth::user()->id)
                     ->get();
    	return view('Profile',["LUsr" => $Usr]);
    }
     public function edit(){

   		$Usr = \DB::table('users')
                     ->select('*')
                     ->where('id', '=', \Auth::user()->id)
                     ->get();
                    // var_dump($Usr);
    	return view('EditProfile',["usr" => $Usr]);
    }
     public function EditProfile(EditRequest $req){
     	$User = User::find(\Auth::user()->id);
  		if (Input::hasFile('img')) {
  			$file = Input::file('img');
  			$file->move('ImagePrfl',$file->getClientOriginalName());
  			$User->image = $file->getClientOriginalName();
  		}
  		if(!empty($req->input('PassU'))) {
	        $new_password = bcrypt($req->input('PassU'));
	        $User->password = $new_password;
	        
    	}
    	$User->name = $req->input('nomU');
    	$User->email = $req->input('emailU');
    	$User->save();
  		
		return redirect('Profile');
    }
}
