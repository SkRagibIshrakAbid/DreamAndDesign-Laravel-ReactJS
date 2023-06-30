<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DecoratorsApproveList;
use App\Models\Decorators;

class snlController extends Controller
{
    //signup stuffs
    public function Signup(){
        return view('pages.decorator.signup');
    }

    public function SignupCheck(Request $request){
        $validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'password'=>'required|confirmed|min:6',
                'uname'=>'required',
                'email'=>'required',
                'address'=>'required',
                'yoe'=>'required',
                'password_confirmation'=>'required',
                'pn'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 5 charcters',
                'name.max'=>'Name must be less than 15 charcters',
                'password.required'=>'Please enter a password',
                'password.confirmed'=>'Password did not match',
                'uname.required'=>'Please enter a username',
                'email.required'=>'Please enter a email',
                'address.required'=>'Please enter the address',
                'yoe.required'=>'Please enter years of experience',
                'pn.required'=>'Please enter phone number',
            ]
        );
        $d = new DecoratorsApproveList();
        $d->dapp_uname = $request->uname;
        $d->dapp_name = $request->name;
        $d->dapp_password = $request->password;
        $d->dapp_phone = $request->pn;
        $d->dapp_email = $request->email;
        $d->dapp_address = $request->address;
        $d->dapp_yoe = $request->yoe;
        $d->save();
        return "OK"; 

    }


    //login stuffs
    public function Login(){
        return view('pages.decorator.login');
    }

    public function Logincheck(Request $request){
        
        $validate = $request->validate([
                'uname'=>'required|min:5|max:10',
                'password'=>'required|min:6'
                
            ],
            [
                'uname.required'=>'Please put your name',
                'uname.min'=>'Name must be greater than 5 charcters',
                'uname.max'=>'Name must be less than 10 charcters',
                'password.required'=>'Please enter a password',
                
            ]
        );
        $uname_entered = $request->uname; 
        $password_entered = $request->password;
        if($uname_entered[0]=="d" && $uname_entered[1]=="_"){
            $d = Decorators::where('d_uname',$uname_entered)
            ->where('d_password',$password_entered)
            ->first();
            if($d){
            $request->session()->put('user',$uname_entered);
            $identered = $d->dapp_id;
            $request->session()->put('userid',$identered);
            return redirect()->route('decoratorDash');

            }
            else{
                return redirect()->route('login');
            }
        }
            
    }


    //logout
    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
}
