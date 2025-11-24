<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class MediaController extends Controller
{
    /**
     * Get all media files.
     */
    public function index(Request $request)
    {
        $query = Media::query();

        // Filter by type
        if ($request->has('type')) {
            $query->where('type', $request->type);
        }

        // Search
        if ($request->has('search')) {
            $query->where('original_name', 'like', '%' . $request->search . '%');
        }

        $media = $query->latest()->paginate(20);

        return response()->json([
            'success' => true,
            'data' => $media,
        ]);
    }

    /**
     * Upload media file.
     */
    public function upload(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required|file|max:10240', // Max 10MB
            'type' => 'nullable|in:image,video',
            'alt_text' => 'nullable|string|max:255',
        ]);

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $mimeType = $file->getMimeType();
        $size = $file->getSize();

        // Determine type from mime
        $type = $validated['type'] ?? (
            str_starts_with($mimeType, 'image/') ? 'image' : 'video'
        );

        // Generate unique filename
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        
        // Storage path
        $path = $type . 's/' . date('Y/m');
        
        // Store file
        $storedPath = $file->storeAs($path, $filename, 'public');

        // For images, create WebP version if needed
        if ($type === 'image' && $mimeType !== 'image/webp') {
            $this->convertToWebP($storedPath);
        }

        // Create media record
        $media = Media::create([
            'filename' => $filename,
            'original_name' => $originalName,
            'mime_type' => $mimeType,
            'size' => $size,
            'path' => $storedPath,
            'type' => $type,
            'alt_text' => $validated['alt_text'] ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'File uploaded successfully!',
            'data' => $media,
        ]);
    }

    /**
     * Delete media file.
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        $media->delete();

        return response()->json([
            'success' => true,
            'message' => 'Media deleted successfully!',
        ]);
    }

    /**
     * Convert image to WebP format.
     */
    private function convertToWebP($path)
    {
        try {
            $fullPath = Storage::disk('public')->path($path);
            $webpPath = preg_replace('/\.[^.]+$/', '.webp', $fullPath);

            Image::make($fullPath)
                ->encode('webp', 90)
                ->save($webpPath);

            return true;
        } catch (\Exception $e) {
            // Log error but don't fail
            \Log::error('WebP conversion failed: ' . $e->getMessage());
            return false;
        }
    }
}