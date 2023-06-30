<?php

namespace App\Http\Controllers;
use App\Models\Adds;
use App\Models\Decorators;
use App\Models\Wantedpost;
use App\Models\Orders;
use App\Models\AcceptOrders;
use App\Models\RejectOrders;


use Illuminate\Http\Request;

class apiController extends Controller
{
    public function viewadd(Request $request){
       
        
        return Adds::all();
    }
    public function decoratorPostAddCheck(Request $request){
        $u = $request->userdid;
        $d = Decorators::where('d_id',$u)->first();
        $add = new Adds();
        $add->add_name = $request->Name;
        $add->add_type = $request->Type;
        $add->add_price = $request->Price;
        $add->add_desc = $request->Description;
        $add->posted_byname = $d->d_uname;
        $add->posted_by = $u;
        if($request->hasfile('Image'))
        {
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/add/', $filename);
            $add->add_image = $filename;
        }
        $add->save();
        return $add;

    }
    public function vieworder(Request $request){
       
        
        $uname = $request->userdid;
        $Orders = Orders::where('o_posted_by',$uname)->get();
        return $Orders;
    }
    public function viewwantedpost(Request $request){
       
        
        return Wantedpost::all();
    }
    public function accept(Request $request){
        
        $id = $request->oid;
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
    }
    public function reject(Request $request){
        
        $id = $request->oid;
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
    }
    public function edit(Request $request){
       
        
        $aid = $request->aid;
        $a = Adds::where('id',$aid)->first();
        return $a;
    }
    public function editpost(Request $request){
        $u = $request->userdid;
        $adid = $request->adddid;

        $d = Decorators::where('d_id',$u)->first();
        $add = Adds::where('id',$adid)->first();
        $add->add_name = $request->Name;
        $add->add_type = $request->Type;
        $add->add_price = $request->Price;
        $add->add_desc = $request->Description;
        $add->posted_byname = $d->d_uname;
        $add->posted_by = $u;
        if($request->hasfile('Image'))
        {
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/add/', $filename);
            $add->add_image = $filename;
        }
        $add->save();
        return $add;
    }
    public function deletepost(Request $request){
        $adid = $request->aid;

        $add = Adds::where('id',$adid)->first();
        $add -> delete();
        
    }
    

}
