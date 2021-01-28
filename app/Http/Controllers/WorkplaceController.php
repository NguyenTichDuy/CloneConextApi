<?php

namespace App\Http\Controllers;

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
        $eventAll = EventResource::collection(Events::paginate());
        return $eventAll;
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
        $event = Events::create($request->all());
        return new EventResource($event);
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
        return VoucherResource::collection(Voucher::where('id', $id)->get());
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
        $voucher = Voucher::findOrFail($id);
        $voucher->update($request->all());

        return new VoucherResource($voucher);
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
                $event = Voucher::findOrFail($id);
        $event->delete();
        return response("success");
    }
}
