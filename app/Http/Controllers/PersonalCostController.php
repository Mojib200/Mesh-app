<?php

namespace App\Http\Controllers;

use App\Models\Name;
use App\Models\PersonalCost;
use Illuminate\Http\Request;

class PersonalCostController extends Controller
{
    function personal_cost()
    {
        $value_person = PersonalCost::all();
        return view('admin.personal_cost',['value_person'=>$value_person]);
    }
    function edit_value_person($id)
    {
        $per_person_cost = PersonalCost::find($id);
        return view('admin.edit_personal_cost',['per_person_cost'=>$per_person_cost]);
    }
    function personal_cost_update(Request $request)
    {
        PersonalCost::find($request->id)->update([
            'person_id' => $request->person_id,
            'cost_id' => $request->cost_id,
            'member_id' => $request->member_id,
            'meal' => $request->meal,
            'rome_rent_per' => $request->rome_rent_per,
            'amount' => $request->amount,
            'updated_at' => now(),

        ]);
        $notification = array(
            'message' => 'Personal Information Update Done Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
        
    }
    function personal_cost_view()
    {
        $person_cost_info = PersonalCost::all();

        $total_amount = $person_cost_info->sum('amount');
        $total_meal = $person_cost_info->sum('meal');
        $total_meal_rate=number_format($total_amount/$total_meal,2, '.', '');
        //   echo $total_amount;
        //   die();


        return view('admin.personal_cost_view', [
            'person_cost_info' => $person_cost_info,
            'total_amount' => $total_amount,
            'total_meal' => $total_meal,
            'total_meal_rate' => $total_meal_rate,
        ]);
    }
    function per_person_view_cost_info($id)
    {
        $per_person_cost_info = PersonalCost::all();
        $per_person_info = PersonalCost::find($id);

        $total_amount = $per_person_cost_info->sum('amount');
        $total_meal = $per_person_cost_info->sum('meal');
        $total_meal_rate=number_format($total_amount/$total_meal,2, '.', '');
        //   echo $total_amount;
        //   die();


        return view('admin.per_person_view', [
            'per_person_cost_info' => $per_person_cost_info,
            'total_amount' => $total_amount,
            'total_meal' => $total_meal,
            'total_meal_rate' => $total_meal_rate,
            'per_person_info' => $per_person_info,
        ]);
    }

    function person_cost_info(Request $request)
    {
        PersonalCost::insert([
            'person_id' => $request->person_id,
            'cost_id' => $request->cost_id,
            'member_id' => $request->member_id,
            'meal' => $request->meal,
            'rome_rent_per' => $request->rome_rent_per,
            'amount' => $request->amount,
            'created_at' => now(),

        ]);
        $notification = array(
            'message' => 'Personal Information Insert Done Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}
