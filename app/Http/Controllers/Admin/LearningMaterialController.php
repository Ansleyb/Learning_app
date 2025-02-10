<?php

// app/Http/Controllers/Admin/LearningMaterialController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LearningMaterial;
use Illuminate\Http\Request;

class LearningMaterialController extends Controller
{
    // Other methods...

    public function create()
    {
        // Return the view for creating a new learning material
        return view('admin.learning-materials.create');  // Ensure the view exists at this path
    }
    
    public function store(Request $request)
    {
        // Validate and store the learning material data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        LearningMaterial::create($request->all());

        return redirect()->route('admin.learning-materials.index');
    }
}

