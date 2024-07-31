<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCertificateRequest;
use App\Models\Certificate;
use App\Services\UploadFileService;
use Illuminate\Http\Request;

class CertificateController extends Controller
{

    public function __construct(protected UploadFileService $uploadFileService) {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCertificateRequest $request)
    {
        $request->validated();
        Certificate::create($request->safe()->except('image') + ['image' => $this->uploadFileService->store($request->image, 'images/sliders')]);
        return redirect()->route('why-us.index')->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCertificateRequest $request, Certificate $certificate)
    {
        $certificate->update($request->safe()->except('image') + ['image' => $this->uploadFileService->update($request->image,$certificate->image, 'images/sliders')]);
        return redirect()->route('why-us.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
        return redirect()->route('why-us.index')->with('success', trans('message.delete'));
    }
}