<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Masukan;
use App\Models\Postingan;
use Illuminate\View\View;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

class PostinganController extends Controller
{
    public function beranda(Request $request)
    {
        $order = $request->query('filter') == 'terlama' ? 'ASC' : 'DESC';
        $filter = $request->query('filter') == 'terlama' ? 'Terlama' : 'Terbaru';
        $filter_list = $request->query('filter') == 'terlama' ? 'Terbaru' : 'Terlama';
        return view(request('search') ? 'user.pencarian' : 'user.beranda', [
            'notifikasis' => Notifikasi::where('id_akun', Auth::id())->where('baca', 0)->get(),
            'jml_postingans_diajukan' => Postingan::with('akun')->where('id_akun', Auth::id())->where('status', 1)->count(),
            'postingans_diajukan' => Postingan::with('akun')->where('id_akun', Auth::id())->where('status', 1)
                ->where(function (Builder $query) {
                    $query->where('judul_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('deskripsi_postingan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_kehilangan', 'like', '%' . request('search') . '%')
                        ->orWhere('lokasi_ditemukan', 'like', '%' . request('search') . '%');
                })
                ->when($request->query('filter') == 'postingan_saya', function ($query) {
                    return $query->where('id_akun', Auth::id());
                })
                ->when($request->query('filter') != 'postingan_saya', function ($query) {
                    return $query->limit(4);
                })
                ->orderBy('created_at', $order)
                ->get(),
            'jml_postingans_ditemukan' => Postingan::where('status', 2)
                ->where(function (Builder $query) {
                    $query->whereNotNull('tgl_ditemukan')
                        ->WhereNotNull('lokasi_ditemukan');
                })
                ->count(),
            'postingans_ditemukan' => Postingan::with('akun')->where('status', '=', 2)
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
                ->when($request->query('filter') == 'postingan_saya', function ($query) {
                    return $query->where('id_akun', Auth::id());
                })
                ->when($request->query('filter') != 'postingan_saya', function ($query) {
                    return $query->limit(4);
                })
                ->orderBy('tgl_publikasi', $order)
                ->get(),
            'jml_postingans_kehilangan' => Postingan::where('status', 2)
                ->where(function (Builder $query) {
                    $query->whereNull('tgl_ditemukan');
                })
                ->count(),
            'postingans_kehilangan' => Postingan::with('akun')->where('status', '=', 2)
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
                ->when($request->query('filter') == 'postingan_saya', function ($query) {
                    return $query->where('id_akun', Auth::id());
                })
                ->when($request->query('filter') != 'postingan_saya', function ($query) {
                    return $query->limit(4);
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
            'notifikasis' => Notifikasi::where('id_akun', Auth::id())->where('baca', 0)->get(),
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
            'notifikasis' => Notifikasi::where('id_akun', Auth::id())->where('baca', 0)->get(),
            'jml_postingans_ditemukan' => Postingan::where('status', 2)
                ->where(function (Builder $query) {
                    $query->whereNotNull('tgl_ditemukan')
                        ->WhereNotNull('lokasi_ditemukan');
                })
                ->count(),
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
            'faqs' => Masukan::where('faq', 1)->get(),
            'notifikasis' => Notifikasi::where('id_akun', Auth::id())->where('baca', 0)->get(),
        ]);
    }

    public function notifikasi()
    {
        Notifikasi::where('id_akun', Auth::id())->update(['baca' => 1]);
        return view('user.notifikasi', [
            'faqs' => Masukan::where('faq', 1)->get(),
            'notifikasis' => Notifikasi::where('id_akun', Auth::id())->where('baca', 0)->get(),
            'notifikasis_detail' => Notifikasi::where('id_akun', Auth::id())->latest()->get(),
            // 'notifikasis_late' => Masukan::where('id_akun', Auth::id())->oldest()->get(),
        ]);
    }

    public function admin_url($admin_url, Request $request): View
    {
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

    public function store(Request $request)
    {
        // return $request->file('image')->store('foto-barang');
        $validatedData = $request->validate([
            'judul_postingan' => 'required|max:100',
            'no_telp' => 'required|numeric',
            'lokasi_kehilangan' => 'nullable|max:255',
            'lokasi_ditemukan' => 'nullable|max:255',
            'lokasi_disimpan' => 'nullable',
            'tgl_kehilangan' => 'nullable|date',
            'tgl_ditemukan' => 'nullable|date',
            'deskripsi_postingan' => 'nullable|max:1000',
            'image' => 'image|file|max:1024'
        ]);

        $validatedData['id_akun'] = Auth::id();
        $validatedData['status'] = request('status');
        $validatedData['tgl_publikasi'] = Carbon::now();

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('foto-barang');
        }

        $postingan = Postingan::create($validatedData);

        if (request('status') == 1 && $postingan) {
            Notifikasi::create([
                'id_akun' => Auth::id(),
                'id_postingan' => Postingan::latest()->value('id_postingan'),
                'status' => 1,
            ]);
            return redirect()->back()->with("success", "Berhasil mengajukan postingan");
        } elseif (request('status') == 2 && $postingan) {
            return redirect('postingan')->with("success", "Berhasil membuat postingan");
        } else {
            return redirect()->back()->with("success", "Gagal membuat postingan");
        }
    }

    // public function store(Request $request): RedirectResponse
    // {
    //     // dd($request->all());
    //     // $request->file('image')
    //     $image = $request->file('image');
    //     // dd($image);
    //     $filename = Auth::user()->username . time() . $image->getClientOriginalExtension();
    //     $path = 'foto-barang/' . $filename;
    //     Storage::disk('public')->put($path, file_get_contents($image));
    //     $postingan = Postingan::create([
    //         'id_akun' => Auth::id(),
    //         'status' => request('status'),
    //         'judul_postingan' => request('judul_postingan'),
    //         'deskripsi_postingan' => request('deskripsi_postingan'),
    //         'lokasi_kehilangan' => request('lokasi_kehilangan'),
    //         'lokasi_ditemukan' => request('lokasi_ditemukan'),
    //         'lokasi_disimpan' => request('lokasi_disimpan'),
    //         'tgl_kehilangan' => request('tgl_kehilangan'),
    //         'tgl_ditemukan' => request('tgl_ditemukan'),
    //         'tgl_publikasi' => Carbon::now(),
    //         'no_telp' => request('no_telp'),
    //         'image' => $filename
    //     ]);



    //     if (request('status') == 1 && $postingan) {
    //         // if (request()->has('image')) {
    //         //     request()->file('image')->store('barang', 'public');
    //         // }
    //         return redirect()->back()->with("success", "Berhasil mengajukan postingan");
    //     } elseif (request('status') == 2 && $postingan) {
    //         // if (request()->has('image')) {
    //         //     request()->file('image')->store('barang', 'public');
    //         // }
    //         return redirect('postingan')->with("success", "Berhasil membuat postingan");
    //     } else {
    //         return redirect()->back()->with("success", "Gagal membuat postingan");
    //     }
    // }

    public function update($id_postingan): RedirectResponse
    {
        if (request('status') == 'publikasi') {
            $postingan = Postingan::find($id_postingan);
            $berhasil = $postingan->update(['status' => 2, 'tgl_publikasi' => Carbon::now()]);
            if ($berhasil) {
                Notifikasi::create([
                    'id_akun' => Auth::id(),
                    'id_postingan' => $id_postingan,
                    'status' => 2,
                ]);
            }
            return redirect()->back()->with("dipublikasi", "Postingan telah dipublikasi");
        } elseif (request('status') == 'tolak') {
            $postingan = Postingan::find($id_postingan);
            $berhasil = $postingan->update(['status' => 3]);
            if ($berhasil) {
                Notifikasi::create([
                    'id_akun' => Auth::id(),
                    'id_postingan' => $id_postingan,
                    'status' => 3,
                ]);
            }
            return redirect()->back()->with("ditolak", "Postingan ditolak");
        } elseif (request('status') == 'edit') {
            // dd(Notifikasi::where('id_akun', request('eid_akun'))->where('id_postingan', $id_postingan)->where('status', 1)->exists());
            // dd(request('elokasi_ditemukan'));
            // dd(request('etgl_ditemukan'));
            try {
                $postingan = Postingan::find($id_postingan);
                $berhasil = $postingan->update([
                    'judul_postingan' => request('ejudul_postingan'),
                    'deskripsi_postingan' => request('edeskripsi_postingan'),
                    'lokasi_kehilangan' => request('elokasi_kehilangan') == '-' ? null : request('elokasi_kehilangan'),
                    'lokasi_ditemukan' => request('elokasi_ditemukan') == '-' ? null : request('elokasi_ditemukan'),
                    'lokasi_disimpan' => request('elokasi_disimpan') == '-' ? null : request('elokasi_disimpan'),
                    'tgl_kehilangan' => request('etgl_kehilangan'),
                    'tgl_ditemukan' => request('etgl_ditemukan'),
                    'no_telp' => request('eno_telp'),
                ]);
                if ($berhasil) {
                    if (request('elokasi_ditemukan') != null || request('etgl_ditemukan') != null) {
                        if (Notifikasi::where('id_akun', request('eid_akun'))->where('id_postingan', $id_postingan)->where('status', 1)->exists()) {
                            Notifikasi::create([
                                'id_akun' => request('eid_akun'),
                                'id_postingan' => $id_postingan,
                                'status' => 5,
                            ]);
                        }
                    }
                    return redirect()->back()->with("editPostingan", "Berhasil mengedit postingan");
                } else {
                    return redirect()->back()->with("gagalEditPostingan", "Gagal mengedit postingan");
                }
            } catch (\Exception $e) {
                Log::error('Error saat melakukan update: ' . $e->getMessage());
                // Atau, jika Anda ingin menampilkan pesan error langsung ke pengguna:
                return response()->json(['error' => 'Terjadi kesalahan saat melakukan update.'], 500);
            }
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
}
