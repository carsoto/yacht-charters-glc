<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Broker;
use Illuminate\Http\Request;

class BrokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brokers = Broker::all();
        return response()->json($brokers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $broker = Broker::create($request->post());
        return response()->json(['broker' => $broker]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function show(Broker $broker)
    {
        return response()->json($broker);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Broker $broker)
    {
        $broker->fill($request->post())->save();
        return response()->json(['broker' => $broker]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Broker $broker)
    {
        $blog->delete();
        return response()->json(['msg' => 'Broker deleted']);
    }
}
