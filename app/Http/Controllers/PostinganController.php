<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Masukan;
use App\Models\Postingan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostinganController extends Controller
{
    public function beranda(Request $request)
    {
        $order = $request->query('filter') == 'terlama' ? 'ASC' : 'DESC';
        $filter = $request->query('filter') == 'terlama' ? 'Terlama' : 'Terbaru';
        $filter_list = $request->query('filter') == 'terlama' ? 'Terbaru' : 'Terlama';
        return view(request('search') ? 'user.pencarian' : 'user.beranda', [
            'postingans_ditemukan' => Postingan::where('status', '=', 2)
                ->where(function (Builder $query) {
                    $query->where('judul_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('deskripsi_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_kehilangan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_ditemukan', 'like', '%' . request('search') . '%');
                })
                ->where(function (Builder $query) {
                    $query->whereNotNull('tgl_ditemukan')
                        ->WhereNotNull('lokasi_ditemukan');
                })
                ->orderBy('tgl_publikasi', $order)
                ->get(),
            'postingans_kehilangan' => Postingan::where('status', '=', 2)
                ->where(function (Builder $query) {
                    $query->where('judul_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('deskripsi_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_kehilangan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_ditemukan', 'like', '%' . request('search') . '%');
                })
                ->where(function (Builder $query) {
                    $query->whereNull('tgl_ditemukan');
                    // ->whereNull('lokasi_ditemukan');
                })
                ->orderBy('tgl_publikasi', $order)
                ->get(),
            'filter' => $filter,
            'filter_list' => $filter_list,
            'keyword' => request('search'),
            'faqs' => Masukan::where('faq', 1)->get(),
        ]);
    }

    public function kehilangan(Request $request)
    {
        $order = $request->query('filter') == 'terlama' ? 'ASC' : 'DESC';
        $filter = $request->query('filter') == 'terlama' ? 'Terlama' : 'Terbaru';
        $filter_list = $request->query('filter') == 'terlama' ? 'Terbaru' : 'Terlama';
        return view('user.kehilangan', [
            'postingans_kehilangan' => Postingan::where('status', '=', 2)
                ->where(function (Builder $query) {
                    $query->whereNull('tgl_ditemukan')
                        ->orWhereNull('lokasi_ditemukan');
                })
                ->orderBy('tgl_publikasi', $order)
                ->get(),
            'filter' => $filter,
            'filter_list' => $filter_list,
            'faqs' => Masukan::where('faq', 1)->get()
        ]);
    }

    public function ditemukan(Request $request)
    {
        $order = $request->query('filter') == 'terlama' ? 'ASC' : 'DESC';
        $filter = $request->query('filter') == 'terlama' ? 'Terlama' : 'Terbaru';
        $filter_list = $request->query('filter') == 'terlama' ? 'Terbaru' : 'Terlama';
        return view('user.ditemukan', [
            'postingans_ditemukan' => Postingan::where('status', '=', 2)
                ->where(function (Builder $query) {
                    $query->whereNotNull('tgl_ditemukan')
                        ->orWhereNotNull('lokasi_ditemukan');
                })
                ->orderBy('tgl_publikasi', $order)
                ->get(),
            'filter' => $filter,
            'filter_list' => $filter_list,
            'faqs' => Masukan::where('faq', 1)->get()
        ]);
    }

    public function tentang()
    {
        return view('user.tentang', [
            'faqs' => Masukan::where('faq', 1)->get()
        ]);
    }

    public function admin_url($admin_url, Request $request): View
    {
        // dd(last(request()->segments()));
        $view = 'admin.' . $admin_url;
        $order = $request->query('filter') == 'terlama' ? 'ASC' : 'DESC';
        $filter = $request->query('filter') == 'terlama' ? 'Terlama' : 'Terbaru';
        $filter_list = $request->query('filter') == 'terlama' ? 'Terbaru' : 'Terlama';
        return view(request('search') ? 'admin.pencarian' : $view, [
            'postingans' => Postingan::orderBy('id_postingan', $order)->get(),
            'postingans_diajukan' => Postingan::where('status', '=', 1)
                ->where(function (Builder $query) {
                    $query->where('judul_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('deskripsi_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_kehilangan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_ditemukan', 'like', '%' . request('search') . '%');
                })
                ->orderBy(last(request()->segments()) == 'dashboard' ? 'created_at' : 'tgl_publikasi', $order)
                ->get(),
            'postingans_dipublikasi' => Postingan::where('status', '=', 2)
                ->where(function (Builder $query) {
                    $query->where('judul_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('deskripsi_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_kehilangan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_ditemukan', 'like', '%' . request('search') . '%');
                })
                ->orderBy(last(request()->segments()) == 'dashboard' ? 'created_at' : 'tgl_publikasi', $order)
                ->get(),
            'masukans' => Masukan::orderBy('created_at', $order)->get(),
            'faqs' => Masukan::where(['faq' => 1])->orderBy('updated_at', $order)->get(),
            'filter' => $filter,
            'filter_list' => $filter_list,
            'keyword' => request('search'),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        // $request->file('image')
        $image = $request->file('image');
        // dd($image);
        $filename = Auth::user()->username. time() . $image->getClientOriginalExtension();
        $path = 'foto-barang/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($image));
        $postingan = Postingan::create([
            'id_akun' => Auth::id(),
            'status' => request('status'),
            'judul_postingan' => request('judul_postingan'),
            'deskripsi_postingan' => request('deskripsi_postingan'),
            'lokasi_kehilangan' => request('lokasi_kehilangan'),
            'lokasi_ditemukan' => request('lokasi_ditemukan'),
            'lokasi_disimpan' => request('lokasi_disimpan'),
            'tgl_kehilangan' => request('tgl_kehilangan'),
            'tgl_ditemukan' => request('tgl_ditemukan'),
            'tgl_publikasi' => Carbon::now(),
            'no_telp' => request('no_telp'),
            'image' => $filename
        ]);



        if (request('status') == 1 && $postingan) {
            // if (request()->has('image')) {
            //     request()->file('image')->store('barang', 'public');
            // }
            return redirect()->back()->with("success", "Berhasil mengajukan postingan");
        } elseif (request('status') == 2 && $postingan) {
            // if (request()->has('image')) {
            //     request()->file('image')->store('barang', 'public');
            // }
            return redirect('postingan')->with("success", "Berhasil membuat postingan");
        } else {
            return redirect()->back()->with("success", "Gagal membuat postingan");
        }
    }

    public function update($id_postingan): RedirectResponse
    {
        if (request('status') == 'publikasi') {
            $postingan = Postingan::find($id_postingan);
            $postingan->update(['status' => 2, 'tgl_publikasi' => Carbon::now()]);
            return redirect()->back()->with("dipublikasi", "Postingan telah dipublikasi");
        } elseif (request('status') == 'tolak') {
            $postingan = Postingan::find($id_postingan);
            $postingan->update(['status' => 3]);
            return redirect()->back()->with("ditolak", "Postingan ditolak");
        } elseif (null !== request('simpanEditPost')) {
            // dd(request('ejudul_postingan'));
            $postingan = Postingan::where('id_postingan', $id_postingan)
                ->update([
                    'judul_postingan' => request('ejudul_postingan'),
                    'deskripsi_postingan' => request('edeskripsi_postingan'),
                    'lokasi_kehilangan' => trim(request('elokasi_kehilangan')) == '-' ? null : request('elokasi_kehilangan'),
                    'lokasi_ditemukan' => trim(request('elokasi_ditemukan')) == '-' ? null : request('elokasi_ditemukan'),
                    'lokasi_disimpan' => trim(request('elokasi_disimpan')) == '-' ? null : request('elokasi_disimpan'),
                    'tgl_kehilangan' => request('etgl_kehilangan'),
                    'tgl_ditemukan' => request('etgl_ditemukan'),
                    'no_telp' => request('eno_telp'),
                ]);
            return redirect()->back()->with("editPostingan", "Berhasil mengedit postingan");
        }
    }

    public function delete($id_postingan): RedirectResponse
    {
        if (request('hapus')) {
            $postingan = Postingan::find($id_postingan);
            $postingan->delete();
            return redirect()->back()->with("dihapus", "Postingan telah dihapus");
        }
    }

    // public function filter(): View
    // {
    //     return view('admin.postingan', [
    //         'postingans' => Postingan::get(),
    //         'postingans_diajukan' => Postingan::where(['status' => 1])->get(),
    //         'postingans_dipublikasi' => Postingan::where(['status' => 2])->get(),
    //         'masukans' => Masukan::get(),
    //         'faqs' => Masukan::where(['faq' => 1])->get()
    //     ]);
    // }
}
