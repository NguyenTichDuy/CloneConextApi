<?php

namespace App\Http\Controllers;

use App\Http\Resources\BussinessResource;
use App\Models\Bussiness;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use PHPUnit\Util\Json;

class BussinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(Bussiness::paginate());
        $bussiness = BussinessResource::collection(Bussiness::paginate())->toJson();
        return $bussiness;
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
        //
        $bussiness = Bussiness::create($request->all());
        return new JsonResource($bussiness);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bussiness  $bussiness
     * @return \Illuminate\Http\Response
     */
    public function show(Bussiness $bussiness)
    {
        return new JsonResource($bussiness);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bussiness  $bussiness
     * @return \Illuminate\Http\Response
     */
    public function edit(Bussiness $bussiness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bussiness  $bussiness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bussiness $bussiness)
    {
        //
        $bussiness->update($request->all());
        return new JsonResource($bussiness);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bussiness  $bussiness
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bussiness $bussiness)
    {
        //
        // $bussiness = Bussiness::findOrFail($id);
        $bussiness->delete();
        return response("success");
    }
}
