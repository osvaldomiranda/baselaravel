<?php

namespace App\Http\Controllers;

use App\equipment;
use Illuminate\Http\Request;



class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return Equipment::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        info($request);

        return Equipment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(equipment $equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, equipment $equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(equipment $equipment)
    {
        $obj = json_decode($equipment);
        info($obj->id);
        
    
        $data=[
            'status'=>'0',
            'msg'=>'fail'
        ];

        $res=Equipment::where('id',$obj->id)->delete();
        if ($res){
            $data=[
                'status'=>'1',
                'msg'=>'success'
            ];
        }

        return $data;
    }
}
