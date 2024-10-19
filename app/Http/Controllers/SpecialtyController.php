<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Http\Requests\StoreSpecialtyRequest;
use App\Http\Requests\UpdateSpecialtyRequest;

class SpecialtyController extends Controller
{
    public function index()
    {
        $specialties = Specialty::paginate(2);
        return view('specialties.index')->with('specialties', $specialties);
    }

    public function create()
    {
        return view('specialties.create');
    }

    public function store(StoreSpecialtyRequest $request)
    {
        $specialty = Specialty::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('specialties.index')->with('success', 'Especialidad creada correctamente.');
    }

    public function edit(Specialty $specialty)
    {
        return view('specialties.edit', compact('specialty'));
    }

    public function update(UpdateSpecialtyRequest $request, Specialty $specialty)
    {
        $specialty->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('specialties.index')->with('success', 'Especialidad actualizada correctamente.');
    }

}
