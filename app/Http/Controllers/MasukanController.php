<?php

namespace App\Http\Controllers;

use App\Models\Masukan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MasukanController extends Controller
{
    public function store(): RedirectResponse
    {
        Masukan::create([
            'pesan' => request('pesan')
        ]);
        return redirect()->back()->with("success", "Berhasil mengirimkan pesan");
    }

    public function delete($id_masukan): RedirectResponse
    {
        Masukan::find($id_masukan)->delete();
        return redirect()->back()->with("success", "Pesan telah dihapus");
    }
}
