<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;

class InventoriesController extends Controller
{
    protected $inventories;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $inventories = $request->user()->inventories()->get();
        return view('inventories.index')->with('inventories', $inventories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\StoreInventoryRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreInventoryRequest $request)
    {
        $inventory = $request->user()->inventories()->create([
            'name' => $request->input('name')
        ]);
        return redirect()->route('inventories.show', $inventory->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param Request $request
     * @return Factory|\Illuminate\View\View
     */
    public function show($id, Request $request)
    {
        $inventory = $request->user()->inventories()->findOrFail($id);
        return view('inventories.show')->with('inventory', $inventory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\UpdateInventoryRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateInventoryRequest $request, $id)
    {
        //
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
    }
}
