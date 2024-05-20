<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RequestService;
use Illuminate\Http\Request;

class Request_Service_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.request_sevice.request_services');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $request = RequestService::findOrFail($id);
        if ($request) {
            $request->opened_request = 1;
            $request->save();
        }
        return view("admin.request_sevice.viewrequest",["request"=>$request]);
    }


    public function editOnprocess($id)
    {
        $request = RequestService::findOrFail($id);
        if ($request) {
            $request->processed_request = 1;
            $request->save();
        }
        return view("admin.request_sevice.viewrequest",["request"=>$request]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        RequestService::findOrFail($id)->update($request->all());
        return back();
    }


    public function rollback($id)
    {
        $request = RequestService::findOrFail($id);
        if ($request) {
            $request->processed_request = 0;
            $request->save();
        }
        return view("admin.request_sevice.viewrequest",["request"=>$request]);
    }
}
