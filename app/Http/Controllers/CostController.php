<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    function cost_intra()
    {
        $cast_info=Cost::all();
        return view('admin.cost',
        ['cast_info'=>$cast_info]
    );
    }
    function cost_info(Request $request)
    {
        if (Cost::all()=='[]') {
            Cost::insert([
                'room_rent'=>$request->room_rent,
                'gas_current'=>$request->gas_current,
                'aunty_salary'=>$request->aunty_salary,
                'wi_fi'=>$request->wi_fi,
                'water'=>$request->water,
                'caretaker'=>$request->caretaker,
                'exta'=>$request->exta,
                'total'=>($request->gas_current+$request->aunty_salary+$request->wi_fi+$request->water+$request->caretaker+$request->exta+500)/7,
                'per_new_total'=>($request->gas_current+$request->wi_fi+$request->water+$request->caretaker+500)/7,
                'per_old_total'=>($request->aunty_salary+$request->exta)/7,
                'created_at'=>now(),
    
            ]);
            $notification = array(
                'message' => 'Cost  Intra Insert Done Successfully',
                'alert-type' => 'success'
            );
            return back()->with($notification);
          
        }
        else {
            Cost::all()->first()->update([
                'room_rent'=>$request->room_rent,
                'gas_current'=>$request->gas_current,
                'aunty_salary'=>$request->aunty_salary,
                'wi_fi'=>$request->wi_fi,
                'water'=>$request->water,
                'caretaker'=>$request->caretaker,
                'exta'=>$request->exta,
                'total'=>($request->gas_current+$request->aunty_salary+$request->wi_fi+$request->water+$request->caretaker+$request->exta+500)/7,
                'per_new_total'=>($request->gas_current+$request->wi_fi+$request->water+$request->caretaker+500)/7,
                'per_old_total'=>($request->aunty_salary+$request->exta)/7,
                'updated_at'=>now(),
    
            ]);
            $notification = array(
                'message' => 'Cost  Intra Update Done Successfully',
                'alert-type' => 'success'
            );
            return back()->with($notification);
          
            }
    }
       
      
      
    
    function edit_cast_info($id)
    {
       $cost_info=Cost::find($id);
      return view('admin.edit_cost',['cost_info'=>$cost_info]);
      
    }
    function update_cost_info(Request $request)
    {
     
        Cost::find($request->id)->update([
            'room_rent'=>$request->room_rent,
            'gas_current'=>$request->gas_current,
            'aunty_salary'=>$request->aunty_salary,
            'wi_fi'=>$request->wi_fi,
            'water'=>$request->water,
            'caretaker'=>$request->caretaker,
            'exta'=>$request->exta,
            'total'=>($request->gas_current+$request->aunty_salary+$request->wi_fi+$request->water+$request->caretaker+$request->exta+500)/7,
            'per_new_total'=>($request->gas_current+$request->wi_fi+$request->water+$request->caretaker+500)/7,
            'per_old_total'=>($request->aunty_salary+$request->exta)/7,
            'updated_at'=>now(),

        ]);
        $notification = array(
            'message' => 'Cost  Intra Update Done Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
      
    }
}
