<?php

namespace App\Http\Controllers;

use App\Models\Masukan;
use App\Models\Postingan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostinganController extends Controller
{
    public function admin_url($admin_url, Request $request): View
    {
        $order = $request->query('filter') == 'terlama' ? 'ASC' : 'DESC';
        $filter = $request->query('filter') == 'terlama' ? 'Terlama' : 'Terbaru';
        $filter_list = $request->query('filter') == 'terlama' ? 'Terbaru' : 'Terlama';
        return view('admin.' . $admin_url, [
            'postingans' => Postingan::orderBy('id_postingan', $order)->get(),
            'postingans_diajukan' => Postingan::where(['status' => 1])->orderBy('id_postingan', $order)->get(),
            'postingans_dipublikasi' => Postingan::where(['status' => 2])->orderBy('id_postingan', $order)->get(),
            'masukans' => Masukan::orderBy('created_at', $order)->get(),
            'faqs' => Masukan::where(['faq' => 1])->orderBy('updated_at', $order)->get(),
            'filter' => $filter,
            'filter_list' => $filter_list
            // 'postingans' => Postingan::latest('id_postingan')->get(),
            // 'postingans_diajukan' => Postingan::where(['status' => 1])->get(),
            // 'postingans_dipublikasi' => Postingan::where(['status' => 2])->get(),
            // 'masukans' => Masukan::latest('created_at')->get(),
            // 'faqs' => Masukan::where(['faq' => 1])->get()
        ]);
    }

    public function update($id_postingan): RedirectResponse
    {
        if (request('status') == 'publikasi') {
            $postingan = Postingan::find($id_postingan);
            $postingan->update(['status' => 2]);
            return redirect()->back()->with("success", "Postingan telah dipublikasi");
        } elseif (request('status') == 'tolak') {
            $postingan = Postingan::find($id_postingan);
            $postingan->update(['status' => 3]);
            return redirect()->back()->with("success", "Postingan ditolak");
        }
    }

    public function filter(): View
    {
        return view('admin.postingan', [
            'postingans' => Postingan::get(),
            'postingans_diajukan' => Postingan::where(['status' => 1])->get(),
            'postingans_dipublikasi' => Postingan::where(['status' => 2])->get(),
            'masukans' => Masukan::get(),
            'faqs' => Masukan::where(['faq' => 1])->get()
        ]);
    }

    // public function dashboard(): View
    // {
    //     return view('admin.dashboard', [
    //         'postingans' => Postingan::latest('id_postingan')->get(),
    //         'postingans_diajukan' => Postingan::where(['status' => 1])->get(),
    //         'postingans_dipublikasi' => Postingan::where(['status' => 2])->get(),
    //         'masukan' => Masukan::get(),
    //         'faq' => Masukan::where(['faq' => 1])->get()
    //     ]);
    // }

    // public function postingan(): View
    // {
    //     return view('admin.postingan', [
    //         'postingans' => Postingan::latest('id_postingan')->get(),
    //         'postingans_diajukan' => Postingan::where(['status' => 1])->get(),
    //         'postingans_dipublikasi' => Postingan::where(['status' => 2])->get(),
    //         'masukan' => Masukan::get(),
    //         'faq' => Masukan::where(['faq' => 1])->get()
    //     ]);
    // }

    public function store(): RedirectResponse
    {
        Postingan::create([
            'status' => request('status'),
            'judul_postingan' => request('judul_postingan'),
            'judul_postingan' => request('judul_postingan'),
            'no_telp' => request('no_telp'),
            'lokasi_kehilangan' => request('lokasi_kehilangan'),
            'tanggal' => request('tanggal'),
            'deskripsi_postingan' => request('deskripsi_postingan'),
            'foto_barang' => request('foto_barang')
        ]);
        if (request('status') == 1) {
            return redirect()->back()->with("success", "Berhasil mengajukan postingan");
        } elseif (request('status') == 2) {
            return redirect('postingan')->with("success", "Berhasil membuat postingan");
        } else {
            return redirect()->back()->with("success", "Gagal membuat postingan");
        }
    }

    // public function store(Request $request)
    // {
    //     $incomingField = $request->validate([
    //         'id_akun'=> 'required',
    //         'status'=> 'required',
    //         'judul_postingan' => 'required',
    //         'lokasi_kehilangan'=> 'required',
    //         'no_telp'=> 'required',
    //         'tgl_kehilangan' => 'required',
    //         'deskripsi' => 'nullable',
    //         'foto' => 'nullable',
    //     ]);

    //     Postingan::create($incomingField);
    //     return redirect('/');
    // }
}
