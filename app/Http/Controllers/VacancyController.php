<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;


class VacancyController extends Controller
{
    public function index()
    {
        return Vacancy::with('categories', 'employer.user')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employer_id' => 'required|exists:employers,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'nullable|string',
            'salary_range' => 'nullable|string',
            'location' => 'nullable|string',
        ]);

        return Vacancy::create($validated);
    }
}
