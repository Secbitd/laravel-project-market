<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ServiceProviderController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('service-provider.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'budget' => 'required|numeric|min:0',
            'description' => 'required|string|max:1000',
            'materials' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'deadline' => 'nullable|date',
            'volume' => 'nullable|string|max:255',
            'detailed_description' => 'nullable|string|max:2000',
            'urgent' => 'boolean',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $service = new Service();
        $service->user_id = Auth::id();
        $service->title = $validated['title'];
        $service->category_id = $validated['category_id'];
        $service->budget = $validated['budget'];
        $service->description = $validated['description'];
        $service->materials = $validated['materials'] ?? null;
        $service->location = $validated['location'] ?? null;
        $service->deadline = $validated['deadline'] ?? null;
        $service->volume = $validated['volume'] ?? null;
        $service->detailed_description = $validated['detailed_description'] ?? null;
        $service->urgent = $validated['urgent'] ?? false;
        $service->status = 'active';
        $service->save();

        // Обработка изображений
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('services', 'public');
                $service->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Объявление успешно создано!');
    }
}
