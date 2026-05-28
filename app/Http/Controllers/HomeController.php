<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects    = Project::active()->ordered()->get();
        $experiences = Experience::active()->ordered()->get();
        $skills      = Skill::active()->ordered()->get()->groupBy('category');

        // Skills with proficiency bars (only named ones for the bar chart)
        $proficiencySkills = Skill::active()
            ->whereIn('name', ['Laravel / PHP', 'MySQL / Database', 'Vue.js / Inertia.js', 'REST API Integration', 'Tailwind / Bootstrap'])
            ->orWhere(function($q) {
                $q->where('proficiency', '>=', 75)->where('is_primary', true);
            })
            ->ordered()
            ->take(5)
            ->get();

        return view('home', compact('projects', 'experiences', 'skills', 'proficiencySkills'));
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        ContactMessage::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Message sent! I\'ll get back to you soon.',
        ]);
    }
}