<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\PertanyaanProduk;
use App\Models\PertanyaanLayanan;

class PertanyaanController extends Controller
{
    public function pertanyaanProduk()
    {
        $data['title'] = "Pertanyaan Produk";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['produk'] = PertanyaanProduk::where('pertanyaan_produk_id','=',1)->first();
        return view('Admin/pertanyaan_produk',$data);
    }
    public function pertanyaanLayanan()
    {
        $data['title'] = "Pertanyaan Layanan";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['layanan'] = PertanyaanLayanan::where('pertanyaan_layanan_id','=',1)->first();
        return view('Admin/pertanyaan_layanan',$data);
    }
    public function updatePertanyaanProduk(Request $request)
    {   
        $data=array(
            'pertanyaan_produk1'=>$request->pertanyaan_produk1,
            'pertanyaan_produk2'=>$request->pertanyaan_produk2,
            'pertanyaan_produk3'=>$request->pertanyaan_produk3,
            'pertanyaan_produk4'=>$request->pertanyaan_produk4,
            'pertanyaan_produk5'=>$request->pertanyaan_produk5,
            'pertanyaan_produk6'=>$request->pertanyaan_produk6,
            'pertanyaan_produk7'=>$request->pertanyaan_produk7,
            'pertanyaan_produk8'=>$request->pertanyaan_produk8,
            'pertanyaan_produk9'=>$request->pertanyaan_produk9,
            'pertanyaan_produk10'=>$request->pertanyaan_produk10,
            'pertanyaan_produk11'=>$request->pertanyaan_produk11,
            'pertanyaan_produk12'=>$request->pertanyaan_produk12,
            'pertanyaan_produk13'=>$request->pertanyaan_produk13,
            'pertanyaan_produk14'=>$request->pertanyaan_produk14,
            'pertanyaan_produk15'=>$request->pertanyaan_produk15,
            'pertanyaan_produk16'=>$request->pertanyaan_produk16,
            'pertanyaan_produk17'=>$request->pertanyaan_produk17,
        );
        PertanyaanProduk::where('pertanyaan_produk_id','=',$request->pertanyaan_produk_id)->update($data);
        \Session::flash('msg_success','Data Pertanyaan Berhasil di Update!');
        return Redirect::back();
    }

    public function updatePertanyaanLayanan(Request $request)
    {   
        $data=array(
            'pertanyaan_layanan1'=>$request->pertanyaan_layanan1,
            'pertanyaan_layanan2'=>$request->pertanyaan_layanan2,
            'pertanyaan_layanan3'=>$request->pertanyaan_layanan3,
            'pertanyaan_layanan4'=>$request->pertanyaan_layanan4,
            'pertanyaan_layanan5'=>$request->pertanyaan_layanan5,
            'pertanyaan_layanan6'=>$request->pertanyaan_layanan6,
            'pertanyaan_layanan7'=>$request->pertanyaan_layanan7,
            'pertanyaan_layanan8'=>$request->pertanyaan_layanan8,
            'pertanyaan_layanan9'=>$request->pertanyaan_layanan9,
            'pertanyaan_layanan10'=>$request->pertanyaan_layanan10,
            'pertanyaan_layanan11'=>$request->pertanyaan_layanan11,
            'pertanyaan_layanan12'=>$request->pertanyaan_layanan12,
            'pertanyaan_layanan13'=>$request->pertanyaan_layanan13,
        );
        PertanyaanLayanan::where('pertanyaan_layanan_id','=',$request->pertanyaan_layanan_id)->update($data);
        \Session::flash('msg_success','Data Pertanyaan Berhasil di Update!');
        return Redirect::back();
    }
}
