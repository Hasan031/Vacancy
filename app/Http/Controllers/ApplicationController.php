<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'vacancy_id' => 'required|exists:vacancies,id',
            'job_seeker_id' => 'required|exists:job_seekers,id',
            'status' => 'nullable|in:Pending,Reviewed,Rejected,Accepted',
        ]);

        return Application::create($validated);
    }

    public function index(Request $request, $vacancyId)
    {
        return Application::where('vacancy_id', $vacancyId)->with('jobSeeker.user')->get();
    }
}

