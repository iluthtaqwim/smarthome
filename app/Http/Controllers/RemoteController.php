<?php

namespace App\Http\Controllers;

use App\Models\Remote;
use App\Http\Requests\StoreRemoteRequest;
use App\Http\Requests\UpdateRemoteRequest;

class RemoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remotes = Remote::all();

         return response()->json($remotes, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'label' => 'required|string|max:255',
            'hadware_code' => 'string|max:255',
            'item_id' => 'integer|max:255',
            'flag' => 'required',
        ]);
        $create = Remote::create($request->all());
        if($create) {
            return response()->json($create, 201);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRemoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRemoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Remote  $remote
     * @return \Illuminate\Http\Response
     */
    public function show(Remote $remote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Remote  $remote
     * @return \Illuminate\Http\Response
     */
    public function edit(Remote $remote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRemoteRequest  $request
     * @param  \App\Models\Remote  $remote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRemoteRequest $request, Remote $remote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Remote  $remote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remote $remote)
    {
        //
    }
}
