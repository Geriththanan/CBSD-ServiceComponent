<?php

namespace App\Http\Controllers;

use App\Models\TimeLine;
use App\Http\Requests\StoreTimeLineRequest;
use App\Http\Requests\UpdateTimeLineRequest;
use App\Http\Resources\TimeLineResource;

class TimeLineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timelines = TimeLine::get();
        return (["timeline" => TimeLineResource::collection($timelines)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTimeLineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TimeLine $timeLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TimeLine $timeLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTimeLineRequest $request, TimeLine $timeLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TimeLine $timeLine)
    {
        //
    }
}
