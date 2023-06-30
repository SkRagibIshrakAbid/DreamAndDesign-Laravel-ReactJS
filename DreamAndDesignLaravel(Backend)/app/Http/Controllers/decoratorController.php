<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Decorators;
use App\Models\Adds;
use App\Models\Orders;
use App\Models\AcceptOrders;
use App\Models\RejectOrders;
use App\Models\Wantedpost;

class decoratorController extends Controller
{
    //decorator
    public function decoratorDash(Request $request){
        $uname = $request->session()->get('user');
        $d = Decorators::where('d_uname',$uname)
                            ->first();
        return view('pages.decorator.decoratordash')->with('d',$d);
    }

    public function decoEdit(Request $request){
        $uname = $request->session()->get('user');
        $d = Decorators::where('d_uname',$uname)
                            ->first();
        return view('pages.decorator.decoratoredit')->with('d',$d);
    }

    public function decoEditCheck(Request $request){
        $validate = $request->validate([
                'name'=>'required|min:5|max:15',
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
        $id_entered = $request->id;
        $d = Decorators::where('d_id',$id_entered)->first();
        $d->d_uname = $request->uname;
        $d->d_name = $request->name;
        $d->d_password = $request->password;
        $d->d_phone = $request->pn;
        $d->d_email = $request->email;
        $d->d_address = $request->address;
        $d->d_yoe = $request->yoe;
        $d->save();
        $uname_entered = $request->uname; 
        $request->session()->put('user',$uname_entered);
        return redirect()->route('decoratorDash');

    }

    //add
    

    public function decoratorPostAdd(){
        return view('pages.decorator.postadd');
    }
    public function decoratorPostAddCheck(Request $request){
        $validate = $request->validate([
            'name'=>'required',
            'type'=>'required',
            'price'=>'required',
            'desc'=>'required',
            'iimage'=>'required'
        ],
        [
            
            'name.required'=>'Please enter a name',
            'type.required'=>'Please enter type of the add',
            'price.required'=>'Please enter a price for the add',
            'desc.required'=>'Please write description of the add',
            'iimage.required'=>'Please upload a image',
          
            ]
        );
        $uname = $request->session()->get('user');
        $add = new Adds();
        $add->add_name = $request->name;
        $add->add_type = $request->type;
        $add->add_price = $request->price;
        $add->add_desc = $request->desc;
        $add->posted_byname = $uname;
        if($request->hasfile('iimage'))
        {
            $file = $request->file('iimage');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/add/', $filename);
            $add->add_image = $filename;
        }
        $add->save();
        $uname = $request->session()->get('user');
        $Adds = Adds::where('posted_byname',$uname)->get();
        return view('pages.decorator.adds')->with('Adds',$Adds);

    }

    public function viewadd(Request $request){
        $uname = $request->session()->get('user');
        $Adds = Adds::where('posted_byname',$uname)->get();
        return view('pages.decorator.adds')->with('Adds',$Adds);
    }

    public function editadd(Request $request){
        
        $id = $request->id;
        $Add = Adds::where('id',$id)->first();
        return view('pages.decorator.editadd')->with('Add', $Add);

    }

    public function Editcheck(Request $request){
        $validate = $request->validate([
                'name'=>'required',
                'type'=>'required',
                'price'=>'required',
                'desc'=>'required',
                'iimage'=>'required'
            ],
            [
                
                'name.required'=>'Please enter a name',
                'type.required'=>'Please enter type of the add',
                'price.required'=>'Please enter a price for the add',
                'desc.required'=>'Please write description of the add',
                'iimage.required'=>'Please upload a image',
          
            ]
        );
        $uname = $request->session()->get('user');
        $add = Adds::where('id',$request->id)->first();
        $add->add_name = $request->name;
        $add->add_type = $request->type;
        $add->add_price = $request->price;
        $add->add_desc = $request->desc;
        $add->posted_byname = $uname;
        if($request->hasfile('iimage'))
        {
            $file = $request->file('iimage');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/add/', $filename);
            $add->add_image = $filename;
        }
        $add->save();
        $id = $request->id;
        $Add = Adds::where('id',$id)->first();
        return view('pages.decorator.editadd')->with('Add', $Add);

    }


    //order
    public function decoratorViewOrder(Request $request){
        $uname = $request->session()->get('user');
        $Orders = Orders::where('o_posted_byname',$uname)->get();
        return view('pages.decorator.orderlist')->with('Orders',$Orders);
    }
    public function accept(Request $request){
        
        $id = $request->id;
        $Order = Orders::where('o_id',$id)->first();

        $AOrder = new AcceptOrders();
        $AOrder->o_name = $Order->o_name;
        $AOrder->o_type = $Order->o_type;
        $AOrder->o_description = $Order->o_description;
        $AOrder->o_price = $Order->o_price;
        $AOrder->o_ordered_by = $Order->o_ordered_by;
        $AOrder->o_posted_by = $Order->o_posted_by;
        $AOrder->save();

        $Order -> delete();
        $uname = $request->session()->get('user');
        $Orders = Orders::where('o_posted_byname',$uname)->get();
        return view('pages.decorator.orderlist')->with('Orders',$Orders); 
    }
    public function reject(Request $request){
        
        $id = $request->id;
        $Order = Orders::where('o_id',$id)->first();

        $AOrder = new RejectOrders();
        $AOrder->o_name = $Order->o_name;
        $AOrder->o_type = $Order->o_type;
        $AOrder->o_description = $Order->o_description;
        $AOrder->o_price = $Order->o_price;
        $AOrder->o_ordered_by = $Order->o_ordered_by;
        $AOrder->o_posted_by = $Order->o_posted_by;
        $AOrder->save();

        $Order -> delete();
        $uname = $request->session()->get('user');
        $Orders = Orders::where('o_posted_byname',$uname)->get();
        return view('pages.decorator.orderlist')->with('Orders',$Orders);
    }

    //wantedpost
    public function wantedpost(){
        $wps = Wantedpost::all();
        return view('pages.decorator.wantedposts')->with('wps',$wps);
    }



}
