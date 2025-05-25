<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.reviews.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|min:3',
            'name_en' => 'required|string|min:3',
            'comment_ar' => 'required|string',
            'comment_en' => 'required|string',
            'rate' => 'required|numeric',
            'status' => 'required|int',
        ]);

        Review::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'comment_ar' => $request->comment_ar,
            'comment_en' => $request->comment_en,
            'rate' => $request->rate,
            'status' => $request->status,
        ]);

        return redirect()->route('reviews.index')->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name_ar' => 'required|string|min:3',
            'name_en' => 'required|string|min:3',
            'comment_ar' => 'required|string',
            'comment_en' => 'required|string',
            'rate' => 'required|numeric',
            'status' => 'required|int',
        ]);

        $review->update($request->all());

        return redirect()->route('reviews.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index')->with('success', trans('message.delete'));
    }
}