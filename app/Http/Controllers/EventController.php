<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Events;
use App\Http\Resources\EventResource;
use Facade\FlareClient\Http\Response;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        //
        $event = Events::create($request->all());
        return new EventResource($event);
    }

    /**
     * Display the specified resource.EventController
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return EventResource::collection(Events::where('id', $id)->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        //
        $event = Events::findOrFail($id);
        $event->update($request->all());

        return new EventResource($event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $event = Events::findOrFail($id);
        $event->delete();
        return response("success");
    }
}
