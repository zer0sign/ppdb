<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\siswa_baru;
use Storage;
use File;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_daftar = DB::table('siswa_baru')->count();
        $total_verifikasi = DB::table('siswa_baru')->where('status','LIKE','diterima')->count();
        $total_belum_verifikasi = DB::table('siswa_baru')->whereNull('status')->count();
        
        $total_otkp = DB::table('siswa_baru')->where('jurusan','LIKE','OTK PERKANTORAN')->count();
        $total_multimedia = DB::table('siswa_baru')->where('jurusan','LIKE','Multimedia')->count();
        
        $total_otkp_pr = DB::table('siswa_baru')->where('jurusan','LIKE','OTK PERKANTORAN')->where('jenis_kelamin','LIKE','Perempuan')->count();
        $total_otkp_lk = DB::table('siswa_baru')->where('jurusan','LIKE','OTK PERKANTORAN')->where('jenis_kelamin','LIKE','Laki-laki')->count();

        $total_mm_pr = DB::table('siswa_baru')->where('jurusan','LIKE','Multimedia')->where('jenis_kelamin','LIKE','Perempuan')->count();
        $total_mm_lk = DB::table('siswa_baru')->where('jurusan','LIKE','Multimedia')->where('jenis_kelamin','LIKE','Laki-laki')->count();
        
        $verifikasi_otkp = DB::table('siswa_baru')->where('status','LIKE','diterima')->where('jurusan','LIKE','OTK PERKANTORAN')->count();
        $verifikasi_multimedia = DB::table('siswa_baru')->where('status','LIKE','diterima')->where('jurusan','LIKE','Multimedia')->count();

        $non_verifikasi_otkp = DB::table('siswa_baru')->where('jurusan','LIKE','OTK PERKANTORAN')->whereNull('status')->count();
        $non_verifikasi_multimedia = DB::table('siswa_baru')->where('jurusan','LIKE','Multimedia')->whereNull('status')->count();

        $total_lk = DB::table('siswa_baru')->where('jenis_kelamin','LIKE','Laki-laki')->count();
        $total_pr = DB::table('siswa_baru')->where('jenis_kelamin','LIKE','perempuan')->count();


        return view('home',['total_daftar'=>$total_daftar,'total_verifikasi'=>$total_verifikasi,'total_belum_verifikasi'=>$total_belum_verifikasi,'total_otkp'=>$total_otkp,'total_multimedia'=>$total_multimedia,'verifikasi_otkp'=>$verifikasi_otkp,'verifikasi_multimedia'=>$verifikasi_multimedia,'non_verifikasi_otkp'=>$non_verifikasi_otkp,'non_verifikasi_multimedia'=>$non_verifikasi_multimedia,'total_lk'=>$total_lk,'total_pr'=>$total_pr,'total_otkp_pr'=>$total_otkp_pr,'total_otkp_lk'=>$total_otkp_lk,'total_mm_pr'=>$total_mm_pr,'total_mm_lk'=>$total_mm_lk]);
    }


    public function totalDaftar(){
        $siswa_baru = DB::table('siswa_baru')->orderBy('id_siswa','asc')->paginate(10);
        return view('totalDaftar',['siswa_baru'=>$siswa_baru]);
    }

    public function totalVerifikasi(){
        $siswa_baru = DB::table('siswa_baru')->where('status','LIKE','diterima')->orderBy('nama','asc')->paginate(10);
        return view('totalVerifikasi',['siswa_baru'=>$siswa_baru]);
    }

    public function belumVerifikasi(){
        $siswa_baru = DB::table('siswa_baru')->whereNull('status')->orderBy('nama','asc')->paginate(10);
        return view('totalBelumVerifikasi',['siswa_baru'=>$siswa_baru]);
    }

    public function show($id_siswa){
        $siswa = siswa_baru::find($id_siswa);
        return view('profil',['siswa'=>$siswa]);
    }

    public function delete($id_siswa){
        $siswa = siswa_baru::find($id_siswa);
        if($siswa->foto_siswa = 1){
            Storage::delete($siswa->foto_siswa);
            $siswa->delete();
            return redirect()->back();
        }
        else{
            $siswa->delete();
            return redirect()->back();
        }
    }

    public function edit($id_siswa){
        $siswa = siswa_baru::find($id_siswa);
        return view('edit',['siswa'=>$siswa]);
    }

    public function update(Request $request,siswa_baru $siswa,$id_siswa){
        $siswa = siswa_baru::find($id_siswa);
        global $nama_foto;
        $foto_lama = public_path("/img/foto_siswa/".$siswa->foto_siswa);
        if($request->hasFile('foto_siswa')){
            if (File::exists($foto_lama)) { // unlink or remove previous image from folder
                unlink($foto_lama);
            }
            $foto_siswa = $request->file('foto_siswa');
            $nama_foto = time()."_".$foto_siswa->getClientOriginalName();
            $foto_siswa->move('img/foto_siswa', $nama_foto);
            $siswa->foto_siswa=$nama_foto;
            
        }else{

            $nama_foto = $request->foto_siswa = $foto_lama;
        }



        DB::table('siswa_baru')->where('id_siswa',$request->id_siswa,$nama_foto)->update([
            'jurusan'=>$request->jurusan,
            'nama'=>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'alamat_desa'=>$request->alamat_desa,
            'dukuh'=>$request->dukuh,
            'nomor_hp'=>$request->nomor_hp,
            'asal_sekolah'=>$request->asal_sekolah,
            'foto_siswa'=>$request->hasFile('foto_siswa') ? $nama_foto:$siswa->foto_siswa,
            'rt'=>$request->rt,
            'rw'=>$request->rw,
            'kecamatan'=>$request->kecamatan,
            'kabupaten'=>$request->kabupaten,
            'provinsi'=>$request->provinsi,
            'nama_ayah'=>$request->nama_ayah,
            'pekerjaan_ayah'=>$request->pekerjaan_ayah,
            'pendidikan_ayah'=>$request->pendidikan_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'pekerjaan_ibu'=>$request->pekerjaan_ibu,
            'pendidikan_ibu'=>$request->pendidikan_ibu,
        ]);
        return redirect('/home');
    }


    public function cari(Request $request){
        $cari = $request->cari;
        $results = DB::table('siswa_baru')->where('nama','LIKE',"%".$cari."%")->orWhere('jurusan','LIKE',"%".$cari."%")->orWhere('id_siswa','LIKE',"%".$cari."%")->orWhere('nama_ayah','LIKE',"%".$cari."%")->get();
        return view('cariSiswa',['results'=>$results]);
    }


    public function cariVerifikasi(Request $request){
        $cari = $request->cari;
        $results = DB::table('siswa_baru')->where('status','LIKE',"%diterima%")->orWhere('jurusan','LIKE',"%".$cari."%")->orWhere('id_siswa','LIKE',"%".$cari."%")->orWhere('nama_ayah','LIKE',"%".$cari."%")->get();
        return view('cariSiswa',['results'=>$results]);
    }

    public function approve(Request $request,$id_siswa){
        DB::table('siswa_baru')->where('id_siswa',$id_siswa)->update(
            ['status'=>'diterima',
            'ijazah'=>$request->input('ijazah'),
            'skhun'=>$request->input('skhun'),
            'akta'=>$request->input('akta'),
            'kk'=>$request->input('kk'),
            'ktp_ortu'=>$request->input('ktp_ortu'),
            'kartu_kip'=>$request->input('kartu_kip'),
            'piagam'=>$request->input('piagam'),
            ]
        );
        return redirect()->back();
    }


    public function export_excel(){
        // $siswa_baru = DB::table('siswa_baru');
        $siswa_baru = siswa_baru::select('nama','jurusan','jenis_kelamin','nomor_hp','asal_sekolah','tempat_lahir','tanggal_lahir','rt','rw','dukuh','alamat_desa','kecamatan','provinsi','nama_ayah','pekerjaan_ayah','pendidkan_ayah','nama_ibu','pendidikan_ibu','pekerjaan_ibu')->get();
        return view('siswaExcel',['siswa_baru'=>$siswa_baru]);
    }

    public function download_excel(){
        return Excel::download(new SiswaExport, 'siswa.xlsx');
        return redirect()->back();
    }
}

