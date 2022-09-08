<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\SurveyGasX;
use App\Models\SurveyGasY;
use App\Models\SurveyLayananX;
use App\Models\SurveyLayananY;
use App\Models\CsiGas;
use App\Models\CsiLayanan;
use App\Models\HasilCsi;

class CsiController extends Controller
{
    public function csiGas(){
        $data['title'] = "Data CSI Produk";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['csi_gas'] = CsiGas::whereYear('created_at',date("Y"))->get();
        return view('Admin/csi_gas',$data);
    }
    public function kelolaCsiGas()
    {
        $skrng = date("Y");
        $cekHasil = HasilCsi::where('nama_csi','=','Produk')->whereYear('created_at',$skrng)->first();
        if (empty($cekHasil)) {
            $csiGas = CsiGas::get();
            $total = 0;
            foreach ($csiGas as $key => $value) {
                $total += $value->ws_gas;
            }
            $wt = $total;
            $n = ($wt/4)*100;
            $nilai = substr($n,0,2);
            if ($nilai>80 && $nilai<=100) {
                $ket = "Sangat Puas";
            }elseif ($nilai>66 && $nilai<=80) {
                $ket = "Puas";
            }elseif ($nilai>51 && $nilai<=66) {
                $ket = "Cukup Puas";
            }elseif ($nilai>35 && $nilai<=51) {
                $ket = "Kurang Puas";
            }else{
                $ket = "Tidak Puas";
            }
            $hasil=array(
                'nama_csi'=>"Produk",
                'wt'=>$wt,
                'nilai_csi'=>$nilai."%",
                'keterangan_csi'=>$ket,
                'created_at' => date("Y-m-d H-i-s")
            );
            HasilCsi::insert($hasil);
            \Session::flash('msg_simpan','Data Hasil Layanan Berhasil dibuat!');
		    return \Redirect::back();
        }else{
            \Session::flash('msg_hapus','Data Hasil Produk Sudah pernah dibuat!');
		return \Redirect::back();
        }
    }
    public function hapusCsiGas()
    {
        CsiGas::truncate();
        \Session::flash('msg_hapus','Berhasil Menghapus Semua Data Hasil!');
        return \Redirect::back();
    }
    public function csiLayanan(){
        $data['title'] = "Data CSI Layanan";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['csi_layanan'] = CsiLayanan::whereYear('created_at',date("Y"))->get();
        return view('Admin/csi_layanan',$data);
    }
    public function kelolaCsiLayanan()
    {
        $skrng = date("Y");
        $cekHasil = HasilCsi::where('nama_csi','=','Layanan')->whereYear('created_at',$skrng)->first();
        if (empty($cekHasil)) {
            $csiLayanan = CsiLayanan::get();
            $total = 0;
            foreach ($csiLayanan as $key => $value) {
                $total += $value->ws_layanan;
            }
            $wt = $total;
            $n = ($wt/4)*100;
            $nilai = substr($n,0,2);
            if ($nilai>80 && $nilai<=100) {
                $ket = "Sangat Puas";
            }elseif ($nilai>66 && $nilai<=80) {
                $ket = "Puas";
            }elseif ($nilai>51 && $nilai<=66) {
                $ket = "Cukup Puas";
            }elseif ($nilai>35 && $nilai<=51) {
                $ket = "Kurang Puas";
            }else{
                $ket = "Tidak Puas";
            }
            $hasil=array(
                'nama_csi'=>"Layanan",
                'wt'=>$wt,
                'nilai_csi'=>$nilai."%",
                'keterangan_csi'=>$ket,
                'created_at' => date("Y-m-d H-i-s")
            );
            HasilCsi::insert($hasil);
            \Session::flash('msg_simpan','Data Hasil Layanan Berhasil dibuat!');
		    return \Redirect::back();
        }else{
            \Session::flash('msg_hapus','Data Hasil Layanan Sudah pernah dibuat!');
		return \Redirect::back();
        }
    }
    public function hapusCsiLayanan()
    {
        CsiLayanan::truncate();
        \Session::flash('msg_hapus','Berhasil Menghapus Semua Data Hasil!');
        return \Redirect::back();
    }
}
