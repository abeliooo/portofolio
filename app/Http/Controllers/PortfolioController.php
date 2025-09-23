<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Education;
use App\Models\Technology;
use App\Models\Experience;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        $educations = Education::orderBy('end_year', 'desc')->get();
        $technologies = Technology::all();
        $experiences = Experience::orderBy('end_year')->get();
        $groupedExperiences = $experiences->groupBy('organization_name');
        return view('portfolio.index', [
            'projects' => $projects,
            'educations' => $educations,
            'technologies' => $technologies,
            'experiences' => $experiences,
            'groupedExperiences' => $groupedExperiences,
        ]);
    }
}
