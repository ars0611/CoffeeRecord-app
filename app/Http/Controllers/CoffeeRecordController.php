<?php

namespace App\Http\Controllers;

use App\Models\CoffeeRecord;
use Illuminate\Http\Request;

class CoffeeRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coffee_records = CoffeeRecord::all();
        $data = ['coffee_records' => $coffee_records];
        return view('coffee_records.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coffee_record = new CoffeeRecord();
        $data = ['coffee_record' => $coffee_record];
        return view('coffee_records.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'bean_name' =>'required|max:255',
            'roast_level' =>'required',
            'grind_level' =>'required',
            'bean_amount' =>'required',
            'water_amount' =>'required',
            'brew_sec' =>'required',
            'interval_sec' =>'required',
            'flavor' =>'required',
            'rating' =>'required',
            'impression'=>'required|max:255'
        ]);
        $coffee_record = new CoffeeRecord();
        $coffee_record->user_id = \Auth::id();
        $coffee_record->bean_name = $request->bean_name;
        $coffee_record->roast_level = $request->roast_level;
        $coffee_record->grind_level = $request->grind_level;
        $coffee_record->bean_amount = $request->bean_amount;
        $coffee_record->water_amount = $request->water_amount;
        $coffee_record->brew_sec = $request->brew_sec;
        $coffee_record->interval_sec = $request->interval_sec;
        $coffee_record->flavor = $request->flavor;
        $coffee_record->rating = $request->rating;
        $coffee_record->impression = $request->impression;
        $coffee_record->save();

        return redirect(route('coffee_records.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoffeeRecord  $coffee_record
     * @return \Illuminate\Http\Response
     */
    public function show(CoffeeRecord $coffee_record)
    {
        $data = ['coffee_record' => $coffee_record];
        return view('coffee_records.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoffeeRecord  $coffee_record
     * @return \Illuminate\Http\Response
     */
    public function edit(CoffeeRecord $coffee_record)
    {
        $this->authorize($coffee_record);
        $data = ['coffee_record' => $coffee_record];
        return view('coffee_records.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoffeeRecord  $coffee_record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoffeeRecord $coffee_record)
    {
        $this->authorize($coffee_record);
        $this->validate($request,[
            'bean_name' =>'required|max:255',
            'roast_level' =>'required',
            'grind_level' =>'required',
            'bean_amount' =>'required',
            'water_amount' =>'required',
            'brew_sec' =>'required',
            'interval_sec' =>'required',
            'flavor' =>'required',
            'rating' =>'required',
            'impression'=>'required|max:255'
        ]);
        $coffee_record->bean_name = $request->bean_name;
        $coffee_record->roast_level = $request->roast_level;
        $coffee_record->grind_level = $request->grind_level;
        $coffee_record->bean_amount = $request->bean_amount;
        $coffee_record->water_amount = $request->water_amount;
        $coffee_record->brew_sec = $request->brew_sec;
        $coffee_record->interval_sec = $request->interval_sec;
        $coffee_record->flavor = $request->flavor;
        $coffee_record->rating = $request->rating;
        $coffee_record->impression = $request->impression;
        $coffee_record->save();

        return redirect(route('coffee_records.show',$coffee_record));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoffeeRecord  $coffee_record
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoffeeRecord $coffee_record)
    {
        $this->authorize($coffee_record);
        $coffee_record->delete();
        return redirect(route('coffee_records.index'));
    }
}
