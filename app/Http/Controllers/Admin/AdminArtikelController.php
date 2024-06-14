<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;

class AdminArtikelController extends Controller
{

    // Program & Kegiatan
    public function  programKegiatan( Request $request) {

        $title = "Program dan Kegiatan";
        if (request()->ajax()) {
            $query = Artikel::where('kategori_id', 1);
            return DataTables::of($query)->make();
        }
        return view('pages.admin.artikel.event.event_index', compact('title'));
    }

    public function  programKegiatanAdd( Request $request) {
        $title="Tambah Program dan Kegiatan";
        $mode = "";
        return view('pages.admin.artikel.event.event_form', compact('title', 'mode'));
    }

    public function  programKegiatanEdit( Request $request, $id) {
        $title="Edit Program dan Kegiatan";
        $row = Artikel::findOrfail($id);
        $mode = "edit";
        return view('pages.admin.artikel.event.event_form', compact('title', 'mode', 'row'));
    }

    public function programKegiatanStore(Request $request) {
        $data = $request->all();
        $if_edit = !empty($request->form_id);
        $validasi = [
            'judul' => 'required',
        ];
    
        $validator = Validator::make($request->all(), $validasi);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput()
                             ->with('error', 'Gagal! Periksa kembali input Anda.');
        }
        $judul = $data['judul'];
        $existingName = Artikel::where('judul', $judul);
        if ($if_edit) {
          $existingName->where('id', '!=', $request->form_id);
        }
        if ($existingName->first()) {
            return redirect()->back()->withInput()->with('error', "Judul! '$judul' sudah digunakan");;
        }
        $tglBuat = $data['tgl_buat'] ?: Carbon::now();

        DB::beginTransaction();

        
        try {
            $up = [
                'judul' => $judul, 
                'kategori_id' => 1,
                'slug' => Str::slug($judul),
                'penulis' => $data['penulis'],
                'konten' => $data['konten'],
                'tgl_buat' => $tglBuat,
                'status' =>$data['status'],
            ];

           
            if ($if_edit) {
                $item = Artikel::findOrFail($request->form_id);
                $ktp = $request->file('gambar');
                if ($ktp) {
                    $filename = time() . '.' . $ktp->getClientOriginalExtension();
                    $ktp->move(public_path('uploads/artikel'), $filename);
                    $up['gambar'] = "uploads/artikel/$filename";
                }
                $item->update($up);

                
            } else {

                $ktp = $request->file('gambar');
                if ($ktp) {
                    $filename = time() . '.' . $ktp->getClientOriginalExtension();
                    $ktp->move(public_path('uploads/artikel'), $filename);
                    $up['gambar'] = "uploads/artikel/$filename";
                }
                Artikel::create($up);
            }
            DB::commit();
            return redirect()->route('programKegiatanShow')->with('success', 'Artikel berhasil disimpan.');
            
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan artikel: ' . $e->getMessage());
        }
       
            
    }

    public function programKegiatanHapus ($id) {
        try {
            $item = Artikel::findOrFail($id);
            $gambarPath = public_path($item->gambar);
    
            if (File::exists($gambarPath)) {
                File::delete($gambarPath);
            }
    
            $item->delete();
            return ResponseSuccess([],'Berhasil menghapus artikel!');
        } catch (\Exception $e) {
            return ResponseError('Gagal menghapus artikel!'.$e);
        }
    }





    // Berita Media
    public function  beritaMedia( Request $request) {
        $title="Berita Media";
        return view('pages.admin.artikel.public_news.index', compact('title'));
    }
    public function  siaranPers( Request $request) {
        $title="Siaran Pers";
        return view('pages.admin.artikel.public_pers.index', compact('title'));
    }
    public function  oaseEsai( Request $request) {
        $title="Esai";
        return view('pages.admin.artikel.oase_esai.index', compact('title'));
    }
    public function  oaseInfografis( Request $request) {
        $title="Infografis";
        return view('pages.admin.artikel.oase_infografis.index', compact('title'));
    }
    public function  oaseOpini( Request $request) {
        $title="Opini";
        return view('pages.admin.artikel.oase_opini.index', compact('title'));
    }
    public function  oasePustaka( Request $request) {
        $title="Pustaka";
        return view('pages.admin.artikel.oase_pustaka.index', compact('title'));
    }


    
}
