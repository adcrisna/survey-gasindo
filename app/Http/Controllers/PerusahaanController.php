<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    public function index(){
        $data['title'] = "Profile Perusahaan";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['profile'] = Perusahaan::where('perusahaan_id','=',1)->first();
        return view('Admin/profile_perusahaan',$data);
    }
    public function updatePerusahaan(Request $request)
    {   
        $data=array(
            'nama_perusahaan'=>$request->nama,
            'no_hp'=>$request->hp,
            'deskripsi_perusahaan'=>$request->deskripsi,
            'alamat'=>$request->alamat
        );
        Perusahaan::where('perusahaan_id','=',$request->id)->update($data);
        \Session::flash('msg_update_profile','Data Profile Berhasil di Update!');
        return Redirect::back();
    }
}
