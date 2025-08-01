<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    private const DIR = "admin.services.";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(config('pagination.count'));
        return view(self::DIR .'index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( self::DIR . 'create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        Service::create($data);
        return to_route( self::DIR . 'index')->with('status','Your record created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view( self::DIR . 'show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view( self::DIR . 'edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);
        return to_route( self::DIR . 'index')->with('status','Your record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return to_route(self::DIR . 'index')->with('status','Your record deleted successfully');
    }
}
