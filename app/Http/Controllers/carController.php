<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;

class carController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Car::all()->toArray();
        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addcar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'carname'    =>  'required',
            'type'    =>  'required',
            'price'     =>  'required'
        ]);
         $car = new Car([
            'carname'    =>  $request->get('carname'),
            'type'    =>  $request->get('type'),
            'price'     =>  $request->get('price')
        ]);
         $car->save();
        return redirect('/addcar')->with('success', 'Car Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('car.edit', compact('car', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'carname'    =>  'required',
            'type'    =>  'required',
            'price'     =>  'required'
        ]);
        $car = Car::find($id);
        $car->carname = $request->get('carname');
        $car->type = $request->get('type');
        $car->price = $request->get('price');
        $car->save();
        return redirect('/car.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('/car.index')->with('success', 'Data Deleted');
    }
}
