<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;


use App\siswa_baru;
use Storage;
use File;


class SiswaController extends Controller
{
    public function daftar(){
        return view('daftar');
        
    }

    public function simpan(Request $request){
        $this->validate($request,[
            'jurusan'=>'required',
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'jenis_kelamin'=>'required',
            'asal_sekolah'=>'required',
            'agama'=>'required',
            'nomor_hp'=>'required',
            'foto_siswa'=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'rt'=>'required',
            'rw'=>'required',
            'kecamatan'=>'required',
            'kabupaten'=>'required',
            'provinsi'=>'required',
            'nama_ayah'=>'required',
            'pekerjaan_ayah'=>'required',
            'pendidikan_ayah'=>'required',
            'nama_ibu'=>'required',
            'pekerjaan_ibu'=>'required',
            'pendidikan_ibu'=>'required',
        ]);


        $foto = $request->file('foto_siswa');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        // $foto->move(public_path()."img/foto_siswa",$nama_foto);
        $tujuan = "img/foto_siswa";
        if (!$foto->move($tujuan,$nama_foto)) {
            return 'Error saving the file.';
        }

        $id = DB::table('siswa_baru')->insertGetId([    
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
            'foto_siswa'=>$nama_foto,
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
        // redirect()->back();
        
        $dataSiswa = DB::table('siswa_baru')->where('id_siswa','LIKE',"%".$id."%")->get();
        $request->session()->put('dataSiswa',$dataSiswa);
        return view('simpan',['dataSiswa'=>$dataSiswa]);
        

}

public function cekStatus(){
    return view('cekStatus');
}

public function status(Request $request){
    $cari = $request->id_siswa;
    $siswa = DB::table('siswa_baru')->where('id_siswa','LIKE',"%".$cari."%")->get();
    return view('status')->with('siswa',$siswa);
}

public function cetakPdf(Request $request){
    $dataSiswa = $request->session()->get('dataSiswa');
    $pdf = PDF::loadview('kartu',['dataSiswa'=>$dataSiswa])->setPaper('A4');
    return $pdf->download('kartu-pendaftaran.pdf');
}




}