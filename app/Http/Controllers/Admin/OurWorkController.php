<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOurWorkRequest;
use App\Models\OurWork;
use App\Services\UploadFileService;
use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    public function __construct(protected UploadFileService $uploadFileService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.our-works.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.our-works.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOurWorkRequest $request)
    {

        $request->validated();

        OurWork::create($request->safe()->except('image') + ['image' => $this->uploadFileService->store($request->image, 'images/our-works')]);
        return redirect()->route('our-works.index')->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(OurWork $ourWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurWork $ourWork)
    {
        return view('admin.our-works.edit', compact('ourWork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreOurWorkRequest $request, OurWork $ourWork)
    {

        $request->validated();

        $ourWork->update($request->safe()->except('image') + ['image' => $this->uploadFileService->update($request->image, $ourWork->image, 'images/our-works')]);

        return redirect()->route('our-works.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurWork $ourWork)
    {
        $this->uploadFileService->delete($ourWork->image);
        $ourWork->delete();

        return redirect()->route('our-works.index')->with('success', trans('message.delete'));
    }
}