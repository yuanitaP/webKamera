<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\kamera;

class PageController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function master()
    {
        $master = kamera::orderBy('id', 'desc')->get();
        return view("master", ["key" => "master", "km" => $master]);
    }

    public function about()
    {
        return view("about", ["key" => "about"]);
    }

    public function faq()
    {
        return view("faq", ["key" => "faq"]);
    }

    public function addFormMaster()
    {
        return view("form-add", ["key" => "master"]);
    }  
    
    public function editFormMaster($id)
    {
        $master = kamera::find($id);
        return view("form-edit", ["key" => "master", "km" => $master]);
    }

    public function saveMaster(Request $request)
    {
        $file_name = time().'-'.$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('foto', $file_name, 'public');

        kamera::create([
            'merk' => $request->merk,
            'jenis' => $request->jenis,
            'foto' => $path,
            'harga' => $request->harga
        ]);
        return redirect('/master')->with('alert', 'Data Berhasil Disimpan');
    }

    public function updateMaster($id, Request $request)
    {
        $master = kamera::find($id);

        $master->merk = $request->merk;
        $master->jenis = $request->jenis;
        if($request->foto)
        {
            if($master->foto)
            {
                Storage::disk('public')->delete($master->foto);
            }
            $file_name = time().'-'.$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('foto', $file_name, 'public');
            $master->foto = $path;
        }
        $master->harga = $request->harga;
        
        $master->save();

        return redirect("/master")->with('alert', 'Data Berhasil Diubah');
    }

    public function deleteMaster($id)
    {
        $master = kamera::find($id);
        if($master->foto)
        {
            Storage::disk('public')->delete($master->foto);
        }

        $master->delete();
        return redirect("/master")->with('alert', 'Data Berhasil Dihapus');
    }

    public function editFormUser()
    {
        return view("form-editUser", ["key" => ""]);
    }

    public function updateUser(Request $request)
    {
        if ($request->password_baru == $request->konfirmasi_password)
        {
            $user = Auth::user(); //untuk mengambil informasi user yang login --> menggunakan session
            $user->password = bcrypt($request->password_baru); //untuk mengubah password lama dengan password baru
            $user->save();

            return redirect("/user")->with('info', 'Password berhasil diubah');
        }
        else
        {
            return redirect("/user")->with('info', 'Password gagal diubah');
        }
    }
}
