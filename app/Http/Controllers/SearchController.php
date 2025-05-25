<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurService;
use App\Models\OurWork;
use App\Models\JobPost;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        
        // Determine which locale to search in
        $locale = app()->getLocale();
        $titleField = $locale == 'ar' ? 'title_ar' : 'title_en';
        $nameField = $locale == 'ar' ? 'name_ar' : 'name_en';
        $descriptionField = $locale == 'ar' ? 'description_ar' : 'description_en';
        
        // Search in services
        $services = OurService::where($nameField, 'LIKE', "%{$query}%")
            ->orWhere($titleField, 'LIKE', "%{$query}%")
            ->orWhere($descriptionField, 'LIKE', "%{$query}%")
            ->get();
            
        // Search in works
        $works = OurWork::where('client_name_' . $locale, 'LIKE', "%{$query}%")
            ->orWhere('description_' . $locale, 'LIKE', "%{$query}%")
            ->orWhere('content_' . $locale, 'LIKE', "%{$query}%")
            ->get();
            
        // Search in job posts
        $jobs = JobPost::where('title_' . $locale, 'LIKE', "%{$query}%")
            ->orWhere('description_' . $locale, 'LIKE', "%{$query}%")
            ->get();
        return view('search-results', compact('query', 'services', 'works', 'jobs'));
    }
}