<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Get all sections with their contents.
     */
    public function index()
    {
        $sections = Section::with('contents')
            ->active()
            ->ordered()
            ->get();

        return response()->json([
            'success' => true,
            'data' => $sections,
        ]);
    }

    /**
     * Get a specific section with contents.
     */
    public function show($key)
    {
        $section = Section::with('contents')
            ->where('key', $key)
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'data' => $section,
        ]);
    }

    /**
     * Update section content.
     */
    public function updateContent(Request $request, $key)
    {
        $section = Section::where('key', $key)->firstOrFail();

        $validated = $request->validate([
            'contents' => 'required|array',
            'contents.*.key' => 'required|string',
            'contents.*.value' => 'required',
            'contents.*.type' => 'nullable|string',
        ]);

        foreach ($validated['contents'] as $content) {
            $section->updateContent(
                $content['key'],
                $content['value'],
                $content['type'] ?? 'text'
            );
        }

        return response()->json([
            'success' => true,
            'message' => 'Section updated successfully!',
            'data' => $section->fresh(['contents']),
        ]);
    }

    /**
     * Toggle section active status.
     */
    public function toggleActive($key)
    {
        $section = Section::where('key', $key)->firstOrFail();
        $section->is_active = !$section->is_active;
        $section->save();

        return response()->json([
            'success' => true,
            'message' => 'Section status updated!',
            'is_active' => $section->is_active,
        ]);
    }

    /**
     * Reorder sections.
     */
    public function reorder(Request $request)
    {
        $validated = $request->validate([
            'sections' => 'required|array',
            'sections.*.key' => 'required|string',
            'sections.*.order' => 'required|integer',
        ]);

        foreach ($validated['sections'] as $sectionData) {
            Section::where('key', $sectionData['key'])
                ->update(['order' => $sectionData['order']]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Sections reordered successfully!',
        ]);
    }
}