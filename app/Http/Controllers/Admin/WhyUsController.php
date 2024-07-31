<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCertificateRequest;
use App\Http\Requests\Admin\StoreWhyUsRequest;
use App\Models\Certificate;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function index() {

        $model = WhyUs::firstOrCreate([]);
        $certificates = Certificate::all();

        return view('admin.why-us.index', compact('model', 'certificates'));
    }

    public function update(StoreWhyUsRequest $request, WhyUs $whyU) {
        $whyU->update($request->validated());

        return redirect()->route('why-us.index')->with('success', trans('message.update'));
    }
}