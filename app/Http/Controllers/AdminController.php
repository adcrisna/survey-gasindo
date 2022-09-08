<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\SurveyGasX;
use App\Models\SurveyLayananX;
use App\Models\CsiGas;
use App\Models\CsiLayanan;

class AdminController extends Controller
{
    public function index(){
        $data['title'] = "Home Admin";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['survey_produk'] = SurveyGasX::get();
        $data['survey_layanan'] = SurveyLayananX::get();
        $data['csi_gas'] = CsiGas::get();
        $data['csi_layanan'] = CsiLayanan::get();
        return view('Admin/admin_home',$data);
    }
    function logout(){
        Auth::logout();
        return \Redirect::to('/');
    }
    public function profileAdmin()
    {
        $data['title'] = "Profile Admin";
        $data['nama'] = Auth::user()->nama_user;
        $data['admin'] = User::where('level','=','Admin')->first();
        return view('Admin/profile_admin',$data);
    }

    public function updateAdmin(Request $request)
    {
           if (empty($request->password)) {
                $data=array(
                    'nama_user'=>$request->nama,
                );
                User::where('id','=',$request->id)->update($data);
                \Session::flash('msg_update_profile','Data Profile Berhasil di Update!');
                return Redirect::route('profile_admin');
           }else{
                $data=array(
                    'nama_user'=>$request->nama,
                    'password'=>bcrypt($request->password),
                );
                User::where('id','=',$request->id)->update($data);
                \Session::flash('msg_update_profile','Data Profile Berhasil di Update!');
                return Redirect::route('profile_admin');
           }
    }
}
