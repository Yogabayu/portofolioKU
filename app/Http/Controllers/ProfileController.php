<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $profile = Profile::where('user_uuid', Auth::user()->uuid)->first();

            return view('admin.pages.profile', compact('profile'))->with('success', 'Berhasil mendapatkan data profile');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileRequest $request, $id)
    {
        // dd($request->all());
        try {
            $request->validate([
                'website' => 'url|nullable',
                'twitter' => 'url|nullable',
                'facebook' => 'url|nullable',
                'instagram' => 'url|nullable',
                'linkedin' => 'url|nullable',
            ], [
                'website.url' => 'harus pakai https://',
                'twitter.url' => 'harus pakai https://',
                'facebook.url' => 'harus pakai https://',
                'instagram.url' => 'harus pakai https://',
                'linkedin.url' => 'harus pakai https://',
            ]);

            $profile = Profile::findOrFail($id);

            if ($request->hasFile('photo1')) {
                Storage::delete('public/' . $profile->photo1);
                $photo1Path = $request->file('photo1')->store('photos/photo1', 'public');
                $profile->photo1 = $photo1Path;
            }

            if ($request->hasFile('photo2')) {
                Storage::delete('public/' . $profile->photo2);
                $photo2Path = $request->file('photo2')->store('photos/photo2', 'public');
                $profile->photo2 = $photo2Path;
            }

            $profile->update([
                'name' => $request->input('name'),
                'desc' => $request->input('desc'),
                'telp' => $request->input('telp'),
                'website' => $request->input('website'),
                'twitter' => $request->input('twitter'),
                'facebook' => $request->input('facebook'),
                'instagram' => $request->input('instagram'),
                'linkedin' => $request->input('linkedin'),
                'freelance' => $request->input('freelance'),
                'address' => $request->input('address'),
                'tag' => $request->input('tag'),
            ]);

            if ($request->hasFile('photo1')) {
                Storage::delete('public/' . $profile->photo1);
                $photo1Path = $request->file('photo1')->storeAs('photos/photo1', 'photo1.jpg', 'public');
                $profile->photo1 = $photo1Path;
            }
    
            if ($request->hasFile('photo2')) {
                Storage::delete('public/' . $profile->photo2);
                $photo2Path = $request->file('photo2')->storeAs('photos/photo2', 'photo2.jpg', 'public');
                $profile->photo2 = $photo2Path;
            }

            $profile->save();

            return redirect()->back()->with('success', 'Profile updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
