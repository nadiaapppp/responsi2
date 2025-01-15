<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller

{
    public function showForm()
    {
        return view('uploads'); // Pastikan nama ini sesuai dengan file di /resources/views/
        Route::get('/uploads', [PhotoController::class, 'showForm'])->name('uploads');
    }
    

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $photo = $request->file('photo');
        $photoName = time() . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('uploads/photos'), $photoName);

        return back()->with('success', 'Foto berhasil diupload!');
    }
}
