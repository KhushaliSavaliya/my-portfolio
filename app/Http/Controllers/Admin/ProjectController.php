<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::ordered()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $categories = Project::categories();
        return view('admin.projects.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['slug'] = Str::slug($data['title']);

        Project::create($data);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        $categories = Project::categories();
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $this->validated($request);
        $project->update($data);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted.');
    }

    public function toggleActive(Project $project)
    {
        $project->update(['is_active' => !$project->is_active]);
        return back()->with('success', 'Status updated.');
    }

    private function validated(Request $request): array
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:120',
            'tag'         => 'required|string|max:60',
            'category'    => 'required|in:' . implode(',', array_keys(Project::categories())),
            'description' => 'required|string|max:600',
            'tech_stack'  => 'required|string',   // comma-separated from textarea
            'icon'        => 'nullable|string|max:60',
            'is_featured' => 'nullable|boolean',
            'sort_order'  => 'nullable|integer|min:0',
            'is_active'   => 'nullable|boolean',
        ]);

        // Convert comma-separated tech stack to array
        $validated['tech_stack'] = array_filter(
            array_map('trim', explode(',', $validated['tech_stack']))
        );

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_active']   = $request->boolean('is_active', true);
        $validated['sort_order']  = $validated['sort_order'] ?? 0;
        $validated['icon']        = $validated['icon'] ?? 'fas fa-code';

        return $validated;
    }
}