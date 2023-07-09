<?php

namespace App\Http\Controllers;

use App\Models\PetBoarding;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PetBoardingController extends Controller
{
    public function index()
    {
        $boardings = PetBoarding::orderBy('owner_name', 'asc')->get();
        return view('boarding.index', compact('boardings'));
    }

    public function create()
    {
        return view('boarding.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'owner_name' => 'required',
            'pet_name' => 'required',
            'pet_age' => 'required',
            'entry_date' => 'required|date',
            'exit_date' => 'required|date',
            'file' => 'nullable|image|mimes:jpeg,png|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('boarding.create')
                ->withErrors($validator)
                ->withInput();
        }
    
        $boarding = new PetBoarding();
        $boarding->owner_name = $request->input('owner_name');
        $boarding->pet_name = $request->input('pet_name');
        $boarding->pet_age = $request->input('pet_age');
        $boarding->entry_date = $request->input('entry_date');
        $boarding->exit_date = $request->input('exit_date');
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('public/files');
            $boarding->file = $path;
        }
    
        $boarding->save();
    
        return redirect()->route('boarding.index')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit($id)
    {
        $boarding = PetBoarding::findOrFail($id);
        return view('boarding.edit', compact('boarding'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'owner_name' => 'required',
            'pet_name' => 'required',
            'pet_age' => 'required',
            'entry_date' => 'required|date',
            'exit_date' => 'required|date',
            'file' => 'nullable|image|mimes:jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('boarding.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $boarding = PetBoarding::findOrFail($id);
        $boarding->owner_name = $request->input('owner_name');
        $boarding->pet_name = $request->input('pet_name');
        $boarding->pet_age = $request->input('pet_age');
        $boarding->entry_date = $request->input('entry_date');
        $boarding->exit_date = $request->input('exit_date');

        if ($request->hasFile('file')) {
            // Menghapus file lama jika ada
            if ($boarding->file) {
                Storage::delete($boarding->file);
            }

            $file = $request->file('file');
            $path = $file->store('public/files');
            $boarding->file = $path;
        }

        $boarding->save();

        return redirect()->route('boarding.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $boarding = PetBoarding::findOrFail($id);
        $boarding->delete();

        return redirect()->route('boarding.index')->with('success', 'Data berhasil dihapus');
    }
}
