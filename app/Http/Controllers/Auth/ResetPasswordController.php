<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    function changePassword(){
        return view('auth.password');
    }

    function update_password(Request $request){
        $userId = Auth::User()->id;
      $oldpass=  $request->old_password;
       $newPass= $request->new_password;
       $confpass= $request->Confrim_password;
       
       $db_pass=Auth::User()->password;

       if(Hash::check($oldpass,$db_pass)){
            
       if($newPass === $confpass){

           $getId= User::find($userId);
           $getId->password=Hash::make($request->Confrim_password);

           return redirect()->back()->with("success","Your password Update SuccessFull");
            }else {
                return redirect()->back()->with("error_comfrom","New Password And Comfrim password Not Same");
            } 

       }else{
           return redirect()->back()->with("error","Old Passsword Not Match..");
       }
    }
}
