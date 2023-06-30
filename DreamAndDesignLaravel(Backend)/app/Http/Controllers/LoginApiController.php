<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DateTime;
use App\Models\Decorators;
use App\Models\DecoratorsApproveList;
use App\Models\DecoToken;

class LoginApiController extends Controller
{
    public function  login(Request $req){

        $user = Decorators::where('d_uname',$req->username)->where('d_password',$req->password)->first();
        if($user){
            $api_token = Str::random(64);
            $token = new DecoToken();
            $token->userid = $user->d_id;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
            return $token;
        }
        return "No user found";

    }

    public function logout(Request $request){
       
        
        $outtoken = DecoToken::latest('created_at', 'desc')->first();
        $outtoken->expired_at = new DateTime();
        $outtoken->save();
        return $outtoken;
    }

    public function  signup(Request $req){

        
            $u = new DecoratorsApproveList();
            $u->dapp_uname  = $req->username;
            $u->dapp_name = $req->name;
            $u->dapp_password = $req->password;
            $u->dapp_phone = $req->phone;
            $u->dapp_email = $req->emial;
            $u->dapp_address = $req->address;
            $u->dapp_yoe = $req->yoe;
            $u->save();
            return $u;
        

    }
}
