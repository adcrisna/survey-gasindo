<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\SurveyGasX;
use App\Models\SurveyGasY;
use App\Models\SurveyLayananX;
use App\Models\SurveyLayananY;
use App\Models\Perusahaan;
use App\Models\PertanyaanProduk;
use App\Models\PertanyaanLayanan;

class IndexController extends Controller
{
    public function index(){
        $data['title'] = "Selamat Datang";
        return view('index',$data);
    }
    public function survey()
    {
        $data['title'] = "Survey Kepuasan";
        $data['produk'] = PertanyaanProduk::where('pertanyaan_produk_id','=',1)->first();
        $data['layanan'] = PertanyaanLayanan::where('pertanyaan_layanan_id','=',1)->first();
        return view('survey',$data);
    }
    public function surveyGas()
    {
        $data['title'] = "Survey Produk";
        return view('survey_gas',$data);
    }
    public function simpanSurvey(Request $request)
    {
        $surveyGasX=array(
            'nama_gas_x'=>$request->nama,
            'hp_gas_x'=>$request->no_hp,
            'jk_gas_x'=>$request->jenis_kelamin,
            'pekerjaan_gas_x' => $request->pekerjaan,
            'p1_gas_x'=>$request->p1_gas_x,
            'p2_gas_x'=>$request->p2_gas_x,
            'p3_gas_x'=>$request->p3_gas_x,
            'p4_gas_x'=>$request->p4_gas_x,
            'p5_gas_x'=>$request->p5_gas_x,
            'p6_gas_x'=>$request->p6_gas_x,
            'p7_gas_x'=>$request->p7_gas_x,
            'p8_gas_x'=>$request->p8_gas_x,
            'p9_gas_x'=>$request->p9_gas_x,
            'p10_gas_x'=>$request->p10_gas_x,
            'p11_gas_x'=>$request->p11_gas_x,
            'p12_gas_x'=>$request->p12_gas_x,
            'p13_gas_x'=>$request->p13_gas_x,
            'p14_gas_x'=>$request->p14_gas_x,
            'p15_gas_x'=>$request->p15_gas_x,
            'p16_gas_x'=>$request->p16_gas_x,
            'p17_gas_x'=>$request->p17_gas_x,
        );
        SurveyGasX::insert($surveyGasX);

        $surveyGasY=array(
            'nama_gas_y'=>$request->nama,
            'hp_gas_y'=>$request->no_hp,
            'jk_gas_y'=>$request->jenis_kelamin,
            'pekerjaan_gas_y' => $request->pekerjaan,
            'p1_gas_y'=>$request->p1_gas_y,
            'p2_gas_y'=>$request->p2_gas_y,
            'p3_gas_y'=>$request->p3_gas_y,
            'p4_gas_y'=>$request->p4_gas_y,
            'p5_gas_y'=>$request->p5_gas_y,
            'p6_gas_y'=>$request->p6_gas_y,
            'p7_gas_y'=>$request->p7_gas_y,
            'p8_gas_y'=>$request->p8_gas_y,
            'p9_gas_y'=>$request->p9_gas_y,
            'p10_gas_y'=>$request->p10_gas_y,
            'p11_gas_y'=>$request->p11_gas_y,
            'p12_gas_y'=>$request->p12_gas_y,
            'p13_gas_y'=>$request->p13_gas_y,
            'p14_gas_y'=>$request->p14_gas_y,
            'p15_gas_y'=>$request->p15_gas_y,
            'p16_gas_y'=>$request->p16_gas_y,
            'p17_gas_y'=>$request->p17_gas_y,
        );
        SurveyGasY::insert($surveyGasY);
        
        $surveyLayananX=array(
            'nama_layanan_x'=>$request->nama,
            'hp_layanan_x'=>$request->no_hp,
            'jk_layanan_x'=>$request->jenis_kelamin,
            'pekerjaan_layanan_x' => $request->pekerjaan,
            'p1_layanan_x'=>$request->p1_layanan_x,
            'p2_layanan_x'=>$request->p2_layanan_x,
            'p3_layanan_x'=>$request->p3_layanan_x,
            'p4_layanan_x'=>$request->p4_layanan_x,
            'p5_layanan_x'=>$request->p5_layanan_x,
            'p6_layanan_x'=>$request->p6_layanan_x,
            'p7_layanan_x'=>$request->p7_layanan_x,
            'p8_layanan_x'=>$request->p8_layanan_x,
            'p9_layanan_x'=>$request->p9_layanan_x,
            'p10_layanan_x'=>$request->p10_layanan_x,
            'p11_layanan_x'=>$request->p11_layanan_x,
            'p12_layanan_x'=>$request->p12_layanan_x,
            'p13_layanan_x'=>$request->p13_layanan_x,
        );
        SurveyLayananX::insert($surveyLayananX);

        $surveyLayananY=array(
            'nama_layanan_y'=>$request->nama,
            'hp_layanan_y'=>$request->no_hp,
            'jk_layanan_y'=>$request->jenis_kelamin,
            'pekerjaan_layanan_y' => $request->pekerjaan,
            'p1_layanan_y'=>$request->p1_layanan_y,
            'p2_layanan_y'=>$request->p2_layanan_y,
            'p3_layanan_y'=>$request->p3_layanan_y,
            'p4_layanan_y'=>$request->p4_layanan_y,
            'p5_layanan_y'=>$request->p5_layanan_y,
            'p6_layanan_y'=>$request->p6_layanan_y,
            'p7_layanan_y'=>$request->p7_layanan_y,
            'p8_layanan_y'=>$request->p8_layanan_y,
            'p9_layanan_y'=>$request->p9_layanan_y,
            'p10_layanan_y'=>$request->p10_layanan_y,
            'p11_layanan_y'=>$request->p11_layanan_y,
            'p12_layanan_y'=>$request->p12_layanan_y,
            'p13_layanan_y'=>$request->p13_layanan_y,
        );
        SurveyLayananY::insert($surveyLayananY);
        \Session::flash('msg_success','TerimaKasih, Data Survey Berhasil Dikirim!');
			return \Redirect::route('index');
    }
    public function surveyLayanan()
    {
        $data['title'] = "Survey Produk";
        return view('survey_layanan',$data);
    }
    public function simpanSurveyLayanan(Request $request)
    {
        $surveyLayananX=array(
            'nama_layanan_x'=>$request->nama,
            'hp_layanan_x'=>$request->no_hp,
            'jk_layanan_x'=>$request->jenis_kelamin,
            'pekerjaan_layanan_x' => $request->pekerjaan,
            'p1_layanan_x'=>$request->p1_layanan_x,
            'p2_layanan_x'=>$request->p2_layanan_x,
            'p3_layanan_x'=>$request->p3_layanan_x,
            'p4_layanan_x'=>$request->p4_layanan_x,
            'p5_layanan_x'=>$request->p5_layanan_x,
            'p6_layanan_x'=>$request->p6_layanan_x,
            'p7_layanan_x'=>$request->p7_layanan_x,
            'p8_layanan_x'=>$request->p8_layanan_x,
            'p9_layanan_x'=>$request->p9_layanan_x,
            'p10_layanan_x'=>$request->p10_layanan_x,
            'p11_layanan_x'=>$request->p11_layanan_x,
            'p12_layanan_x'=>$request->p12_layanan_x,
            'p13_layanan_x'=>$request->p13_layanan_x,
        );
        SurveyLayananX::insert($surveyLayananX);

        $surveyLayananY=array(
            'nama_layanan_y'=>$request->nama,
            'hp_layanan_y'=>$request->no_hp,
            'jk_layanan_y'=>$request->jenis_kelamin,
            'pekerjaan_layanan_y' => $request->pekerjaan,
            'p1_layanan_y'=>$request->p1_layanan_y,
            'p2_layanan_y'=>$request->p2_layanan_y,
            'p3_layanan_y'=>$request->p3_layanan_y,
            'p4_layanan_y'=>$request->p4_layanan_y,
            'p5_layanan_y'=>$request->p5_layanan_y,
            'p6_layanan_y'=>$request->p6_layanan_y,
            'p7_layanan_y'=>$request->p7_layanan_y,
            'p8_layanan_y'=>$request->p8_layanan_y,
            'p9_layanan_y'=>$request->p9_layanan_y,
            'p10_layanan_y'=>$request->p10_layanan_y,
            'p11_layanan_y'=>$request->p11_layanan_y,
            'p12_layanan_y'=>$request->p12_layanan_y,
            'p13_layanan_y'=>$request->p13_layanan_y,
        );
        SurveyLayananY::insert($surveyLayananY);
        \Session::flash('msg_success','Terimakasih, Data Survey Berhasil Dikirim!');
		return \Redirect::route('index');
    }
    public function tentangPerusahaan(){
        $data['title'] = "Tentang Perusahaan";
        $data['profile'] = Perusahaan::where('perusahaan_id','=',1)->first();
        return view('tentang_perusahaan',$data);
    }
}
