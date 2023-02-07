<?php

namespace App\Http\Controllers\Test\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class FileTestController extends Controller
{
    //
    public function file()
    {
        return view('test.form.file');
    }

    public function subir_imagen(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);

        /* $imagenes = $request->file('file')->store('public/test');

        $url = Storage::url($imagenes);

        return $url; */

        $img = $request->file('file');
        $ext = $img->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = public_path('\img\uploads');
        $img->move($path, $name);
        /*   User::where('id', $user->id)->update([
            'image' => $name
        ]); */
    }
}
