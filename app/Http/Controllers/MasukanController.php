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

    public function update($id_masukan): RedirectResponse
    {
        $masukan = Masukan::find($id_masukan);
        if (request('jawaban')) {
            $masukan->update(['jawaban' => request('jawaban')]);
            return redirect()->back()->with("jawaban", "Berhasil menjawab masukan pengguna");
        } else if (request('faq')) {
            $masukan->update(['faq' => request('faq')]);
            return redirect()->back()->with("jawaban", "Berhasil menambahkan FAQ");
        } 
        else if (!request('faqOut')) {
            $masukan->update(['faq' => request('faqOut')]);
            return redirect()->back()->with("jawaban", "Berhasil mengeluarkan FAQ");
        }
    }

    public function delete($id_masukan): RedirectResponse
    {
        Masukan::find($id_masukan)->delete();
        return redirect()->back()->with("success", "Pesan telah dihapus");
    }
}
