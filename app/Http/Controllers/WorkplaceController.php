<?php

namespace App\Http\Controllers;

use App\Http\Resources\WorkplaceResource;
use App\Models\Workplace;
use Illuminate\Http\Request;

class WorkplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workplaceAll = WorkplaceResource::collection(Workplace::paginate());
        return $workplaceAll;
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
        $workplace = Workplace::create($request->all());
        return new WorkplaceResource($workplace);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function show(Workplace $workplace)
    {
        //
        return WorkplaceResource::collection($workplace);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function edit(Workplace $workplace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workplace $workplace)
    {
        //
        $workplace->update($request->all());

        return new WorkplaceResource($workplace);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workplace $workplace)
    {
        //
        $workplace->delete();
        return response("success");
    }
}
