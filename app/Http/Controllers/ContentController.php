<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\SectionContent;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Update single content item.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'section_key' => 'required|string',
            'content_key' => 'required|string',
            'value' => 'required',
            'type' => 'nullable|string',
        ]);

        $section = Section::where('key', $validated['section_key'])->firstOrFail();

        $content = $section->updateContent(
            $validated['content_key'],
            $validated['value'],
            $validated['type'] ?? 'text'
        );

        return response()->json([
            'success' => true,
            'message' => 'Content updated successfully!',
            'data' => $content,
        ]);
    }

    /**
     * Bulk update content items.
     */
    public function bulkUpdate(Request $request)
    {
        $validated = $request->validate([
            'section_key' => 'required|string',
            'contents' => 'required|array',
        ]);

        $section = Section::where('key', $validated['section_key'])->firstOrFail();

        foreach ($validated['contents'] as $key => $value) {
            $type = is_array($value) ? 'json' : 'text';
            $section->updateContent($key, $value, $type);
        }

        return response()->json([
            'success' => true,
            'message' => 'Contents updated successfully!',
            'data' => $section->fresh(['contents']),
        ]);
    }

    /**
     * Delete content item.
     */
    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'section_key' => 'required|string',
            'content_key' => 'required|string',
        ]);

        $section = Section::where('key', $validated['section_key'])->firstOrFail();
        $content = $section->getContent($validated['content_key']);

        if ($content) {
            $content->delete();
            return response()->json([
                'success' => true,
                'message' => 'Content deleted successfully!',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Content not found!',
        ], 404);
    }
}