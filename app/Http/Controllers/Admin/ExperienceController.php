<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::ordered()->paginate(10);
        return view('admin.experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        Experience::create($data);

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Experience added successfully.');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $data = $this->validated($request);
        $experience->update($data);

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Experience updated successfully.');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.experiences.index')
            ->with('success', 'Experience deleted.');
    }

    private function validated(Request $request): array
    {
        $validated = $request->validate([
            'title'              => 'required|string|max:120',
            'company'            => 'required|string|max:120',
            'location'           => 'nullable|string|max:100',
            'start_date'         => 'required|date',
            'end_date'           => 'nullable|date|after:start_date',
            'responsibilities'   => 'required|string',
            'is_current'         => 'nullable|boolean',
            'sort_order'         => 'nullable|integer|min:0',
            'is_active'          => 'nullable|boolean',
        ]);

        // Convert textarea lines to array
        $validated['responsibilities'] = array_filter(
            array_map('trim', explode("\n", $validated['responsibilities']))
        );

        $validated['is_current']  = $request->boolean('is_current');
        $validated['is_active']   = $request->boolean('is_active', true);
        $validated['sort_order']  = $validated['sort_order'] ?? 0;

        if ($validated['is_current']) {
            $validated['end_date'] = null;
        }

        return $validated;
    }
}