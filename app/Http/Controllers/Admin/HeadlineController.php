<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreHeadlineRequest;
use App\Models\Headline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Headline::all();
        return view('admin.headlines.index', compact('sections'));
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
    public function show(Headline $headline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Headline $headline)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreHeadlineRequest $request, Headline $headline)
    {
        $headline->update($request->validated());

        Cache::forget('headlines');

        return redirect()->route('headlines.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Headline $headline)
    {
        //
    }
}