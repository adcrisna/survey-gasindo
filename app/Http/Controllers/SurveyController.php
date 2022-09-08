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
date_default_timezone_set('Asia/Jakarta');

class SurveyController extends Controller
{
    public function surveyGas(){
        $data['title'] = "Data Survey";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['survey_gas_x'] = SurveyGasX::orderByDesc('survey_gas_x_id')->get();
        $data['survey_gas_y'] = SurveyGasY::orderByDesc('survey_gas_y_id')->get();
        return view('Admin/survey_gas',$data);
    }
    public function hapusSemuaGas()
    {
        SurveyGasX::truncate();
        SurveyGasY::truncate();
        \Session::flash('msg_hapus','Berhasil Menghapus Semua Data Survey Tabung!');
        return \Redirect::back();
    }
    public function hapusSurveyGasX(Request $request)
    {
        $data = SurveyGasX::where('survey_gas_x_id','=',$request->survey_gas_x_id);
		$query = $data->first();
		$data->delete();
	    \Session::flash('msg_hapus','Data Survey Berhasil Dihapus!');
		return \Redirect::back();
    }
    public function hapusSurveyGasY(Request $request)
    {
        $data = SurveyGasY::where('survey_gas_y_id','=',$request->survey_gas_y_id);
		$query = $data->first();
		$data->delete();
	    \Session::flash('msg_hapus','Data Survey Berhasil Dihapus!');
		return \Redirect::back();
    }
    public function kelolaSurveyGas()
    {
        $skrng = date("Y");
        $cekCsi = CsiGas::whereYear('created_at',$skrng)->first();
        if (empty($cekCsi)) {
            #GET MIS GAS X
            $getP1GasX = SurveyGasX::avg('p1_gas_x');
            $getP2GasX = SurveyGasX::avg('p2_gas_x');
            $getP3GasX = SurveyGasX::avg('p3_gas_x');
            $getP4GasX = SurveyGasX::avg('p4_gas_x');
            $getP5GasX = SurveyGasX::avg('p5_gas_x');
            $getP6GasX = SurveyGasX::avg('p6_gas_x');
            $getP7GasX = SurveyGasX::avg('p7_gas_x');
            $getP8GasX = SurveyGasX::avg('p8_gas_x');
            $getP9GasX = SurveyGasX::avg('p8_gas_x');
            $getP10GasX = SurveyGasX::avg('p10_gas_x');
            $getP11GasX = SurveyGasX::avg('p11_gas_x');
            $getP12GasX = SurveyGasX::avg('p12_gas_x');
            $getP13GasX = SurveyGasX::avg('p13_gas_x');
            $getP14GasX = SurveyGasX::avg('p14_gas_x');
            $getP15GasX = SurveyGasX::avg('p15_gas_x');
            $getP16GasX = SurveyGasX::avg('p16_gas_x');
            $getP17GasX = SurveyGasX::avg('p17_gas_x');
            $totalMis = $getP1GasX+$getP2GasX+$getP3GasX+$getP4GasX+$getP5GasX+$getP6GasX+$getP7GasX+$getP8GasX+$getP9GasX+$getP10GasX+$getP11GasX+$getP12GasX+$getP13GasX+$getP14GasX+$getP15GasX+$getP16GasX+$getP17GasX;
            
            #GET MSS GAS Y
            $getP1GasY = SurveyGasY::avg('p1_gas_y');
            $getP2GasY = SurveyGasY::avg('p2_gas_y');
            $getP3GasY = SurveyGasY::avg('p3_gas_y');
            $getP4GasY = SurveyGasY::avg('p4_gas_y');
            $getP5GasY = SurveyGasY::avg('p5_gas_y');
            $getP6GasY = SurveyGasY::avg('p6_gas_y');
            $getP7GasY = SurveyGasY::avg('p7_gas_y');
            $getP8GasY = SurveyGasY::avg('p8_gas_y');
            $getP9GasY = SurveyGasY::avg('p8_gas_y');
            $getP10GasY = SurveyGasY::avg('p10_gas_y');
            $getP11GasY = SurveyGasY::avg('p11_gas_y');
            $getP12GasY = SurveyGasY::avg('p12_gas_y');
            $getP13GasY = SurveyGasY::avg('p13_gas_y');
            $getP14GasY = SurveyGasY::avg('p14_gas_y');
            $getP15GasY = SurveyGasY::avg('p15_gas_y');
            $getP16GasY = SurveyGasY::avg('p16_gas_y');
            $getP17GasY = SurveyGasY::avg('p17_gas_y');
            $totalMss = $getP1GasY+$getP2GasY+$getP3GasY+$getP4GasY+$getP5GasY+$getP6GasY+$getP7GasY+$getP8GasY+$getP9GasY+$getP10GasY+$getP11GasY+$getP12GasY+$getP13GasY+$getP14GasY+$getP15GasY+$getP16GasY+$getP17GasY;

            #GET WF
           $wf1 = ($getP1GasX/$totalMis)*100;
           $wf2 = ($getP2GasX/$totalMis)*100;
           $wf3 = ($getP3GasX/$totalMis)*100;
           $wf4 = ($getP4GasX/$totalMis)*100;
           $wf5 = ($getP5GasX/$totalMis)*100;
           $wf6 = ($getP6GasX/$totalMis)*100;
           $wf7 = ($getP7GasX/$totalMis)*100;
           $wf8 = ($getP8GasX/$totalMis)*100;
           $wf9 = ($getP9GasX/$totalMis)*100;
           $wf10 = ($getP10GasX/$totalMis)*100;
           $wf11 = ($getP11GasX/$totalMis)*100;
           $wf12 = ($getP12GasX/$totalMis)*100;
           $wf13 = ($getP13GasX/$totalMis)*100;
           $wf14 = ($getP14GasX/$totalMis)*100;
           $wf15 = ($getP15GasX/$totalMis)*100;
           $wf16 = ($getP16GasX/$totalMis)*100;
           $wf17 = ($getP17GasX/$totalMis)*100;

           #GET WS
           $ws1 = $wf1*$getP1GasY;
           $ws2 = $wf2*$getP2GasY;
           $ws3 = $wf3*$getP3GasY;
           $ws4 = $wf4*$getP4GasY;
           $ws5 = $wf5*$getP5GasY;
           $ws6 = $wf6*$getP6GasY;
           $ws7 = $wf7*$getP7GasY;
           $ws8 = $wf8*$getP8GasY;
           $ws9 = $wf9*$getP9GasY;
           $ws10 = $wf10*$getP10GasY;
           $ws11 = $wf11*$getP11GasY;
           $ws12 = $wf12*$getP12GasY;
           $ws13 = $wf13*$getP13GasY;
           $ws14 = $wf14*$getP14GasY;
           $ws15 = $wf15*$getP15GasY;
           $ws16 = $wf16*$getP16GasY;
           $ws17 = $wf17*$getP17GasY;

           $Csi1=array(
                'kode_csi_gas'=>"KT1",
                'mis_gas'=>$getP1GasX,
                'mss_gas'=>$getP1GasY,
                'wf_gas' =>$wf1,
                'ws_gas'=>$ws1,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi1);

            $Csi2=array(
                'kode_csi_gas'=>"KT2",
                'mis_gas'=>$getP2GasX,
                'mss_gas'=>$getP2GasY,
                'wf_gas' =>$wf2,
                'ws_gas'=>$ws2,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi2);

            $Csi3=array(
                'kode_csi_gas'=>"KT3",
                'mis_gas'=>$getP3GasX,
                'mss_gas'=>$getP3GasY,
                'wf_gas' =>$wf3,
                'ws_gas'=>$ws3,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi3);

            $Csi4=array(
                'kode_csi_gas'=>"KT4",
                'mis_gas'=>$getP4GasX,
                'mss_gas'=>$getP4GasY,
                'wf_gas' =>$wf4,
                'ws_gas'=>$ws4,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi4);

            $Csi5=array(
                'kode_csi_gas'=>"KT5",
                'mis_gas'=>$getP5GasX,
                'mss_gas'=>$getP5GasY,
                'wf_gas' =>$wf5,
                'ws_gas'=>$ws5,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi5);

            $Csi6=array(
                'kode_csi_gas'=>"KT6",
                'mis_gas'=>$getP6GasX,
                'mss_gas'=>$getP6GasY,
                'wf_gas' =>$wf6,
                'ws_gas'=>$ws6,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi6);

            $Csi7=array(
                'kode_csi_gas'=>"KT7",
                'mis_gas'=>$getP7GasX,
                'mss_gas'=>$getP7GasY,
                'wf_gas' =>$wf7,
                'ws_gas'=>$ws7,
                'created_at' =>date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi7);

            $Csi8=array(
                'kode_csi_gas'=>"KT8",
                'mis_gas'=>$getP8GasX,
                'mss_gas'=>$getP8GasY,
                'wf_gas' =>$wf8,
                'ws_gas'=>$ws8,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi8);

            $Csi9=array(
                'kode_csi_gas'=>"KT9",
                'mis_gas'=>$getP9GasX,
                'mss_gas'=>$getP9GasY,
                'wf_gas' =>$wf9,
                'ws_gas'=>$ws9,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi9);

            $Csi10=array(
                'kode_csi_gas'=>"KT10",
                'mis_gas'=>$getP10GasX,
                'mss_gas'=>$getP10GasY,
                'wf_gas' =>$wf10,
                'ws_gas'=>$ws10,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi10);

            $Csi11=array(
                'kode_csi_gas'=>"KT11",
                'mis_gas'=>$getP11GasX,
                'mss_gas'=>$getP11GasY,
                'wf_gas' =>$wf11,
                'ws_gas'=>$ws11,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi11);

            $Csi12=array(
                'kode_csi_gas'=>"KT12",
                'mis_gas'=>$getP12GasX,
                'mss_gas'=>$getP12GasY,
                'wf_gas' =>$wf12,
                'ws_gas'=>$ws12,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi12);

            $Csi13=array(
                'kode_csi_gas'=>"KT13",
                'mis_gas'=>$getP13GasX,
                'mss_gas'=>$getP13GasY,
                'wf_gas' =>$wf13,
                'ws_gas'=>$ws13,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi13);

            $Csi14=array(
                'kode_csi_gas'=>"KT14",
                'mis_gas'=>$getP14GasX,
                'mss_gas'=>$getP14GasY,
                'wf_gas' =>$wf14,
                'ws_gas'=>$ws14,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi14);

            $Csi15=array(
                'kode_csi_gas'=>"KT15",
                'mis_gas'=>$getP15GasX,
                'mss_gas'=>$getP15GasY,
                'wf_gas' =>$wf15,
                'ws_gas'=>$ws15,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi15);

            $Csi16=array(
                'kode_csi_gas'=>"KT16",
                'mis_gas'=>$getP16GasX,
                'mss_gas'=>$getP16GasY,
                'wf_gas' =>$wf16,
                'ws_gas'=>$ws16,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi16);

            $Csi17=array(
                'kode_csi_gas'=>"KT17",
                'mis_gas'=>$getP7GasX,
                'mss_gas'=>$getP17GasY,
                'wf_gas' =>$wf17,
                'ws_gas'=>$ws17,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiGas::insert($Csi17);
        \Session::flash('msg_simpan','Data CSI Berhasil dibuat!');
		return \Redirect::back();
        }else{
            \Session::flash('msg_hapus','Data CSI Sudah pernah dibuat!');
		return \Redirect::back();
        }
    }
    public function surveyLayanan(){
        $data['title'] = "Data Survey";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['survey_layanan_x'] = SurveyLayananX::orderByDesc('survey_layanan_x_id')->get();
        $data['survey_layanan_y'] = SurveyLayananY::orderByDesc('survey_layanan_y_id')->get();
        return view('Admin/survey_layanan',$data);
    }
    public function hapusSemuaLayanan()
    {
        SurveyLayananY::truncate();
        SurveyLayananX::truncate();
        \Session::flash('msg_hapus','Berhasil Menghapus Semua Data Survey Layanan!');
        return \Redirect::back();
    }

    public function hapusSurveyLayananX(Request $request)
    {
        $data = SurveyLayananX::where('survey_layanan_x_id','=',$request->survey_layanan_x_id);
		$query = $data->first();
		$data->delete();
	    \Session::flash('msg_hapus','Data Survey Berhasil Dihapus!');
		return \Redirect::back();
    }
    public function hapusSurveyLayananY(Request $request)
    {
        $data = SurveyLayananY::where('survey_layanan_y_id','=',$request->survey_layanan_y_id);
		$query = $data->first();
		$data->delete();
	    \Session::flash('msg_hapus','Data Survey Berhasil Dihapus!');
		return \Redirect::back();
    }
    public function kelolaSurveyLayanan()
    {
        $skrng = date("Y");
        $cekCsi = CsiLayanan::whereYear('created_at',$skrng)->first();
        if (empty($cekCsi)) {
            #GET MIS GAS X
            $getP1LayananX = SurveyLayananX::avg('p1_layanan_x');
            $getP2LayananX = SurveyLayananX::avg('p2_layanan_x');
            $getP3LayananX = SurveyLayananX::avg('p3_layanan_x');
            $getP4LayananX = SurveyLayananX::avg('p4_layanan_x');
            $getP5LayananX = SurveyLayananX::avg('p5_layanan_x');
            $getP6LayananX = SurveyLayananX::avg('p6_layanan_x');
            $getP7LayananX = SurveyLayananX::avg('p7_layanan_x');
            $getP8LayananX = SurveyLayananX::avg('p8_layanan_x');
            $getP9LayananX = SurveyLayananX::avg('p9_layanan_x');
            $getP10LayananX = SurveyLayananX::avg('p10_layanan_x');
            $getP11LayananX = SurveyLayananX::avg('p11_layanan_x');
            $getP12LayananX = SurveyLayananX::avg('p12_layanan_x');
            $getP13LayananX = SurveyLayananX::avg('p13_layanan_x');
            $totalMis = $getP1LayananX+$getP2LayananX+$getP3LayananX+$getP4LayananX+$getP5LayananX+$getP6LayananX+$getP7LayananX+$getP8LayananX+$getP9LayananX+$getP10LayananX+$getP11LayananX+$getP12LayananX+$getP13LayananX;
            
            #GET MSS GAS Y
            $getP1LayananY = SurveyLayananY::avg('p1_layanan_y');
            $getP2LayananY = SurveyLayananY::avg('p2_layanan_y');
            $getP3LayananY = SurveyLayananY::avg('p3_layanan_y');
            $getP4LayananY = SurveyLayananY::avg('p4_layanan_y');
            $getP5LayananY = SurveyLayananY::avg('p5_layanan_y');
            $getP6LayananY = SurveyLayananY::avg('p6_layanan_y');
            $getP7LayananY = SurveyLayananY::avg('p7_layanan_y');
            $getP8LayananY = SurveyLayananY::avg('p8_layanan_y');
            $getP9LayananY = SurveyLayananY::avg('p9_layanan_y');
            $getP10LayananY = SurveyLayananY::avg('p10_layanan_y');
            $getP11LayananY = SurveyLayananY::avg('p11_layanan_y');
            $getP12LayananY = SurveyLayananY::avg('p12_layanan_y');
            $getP13LayananY = SurveyLayananY::avg('p13_layanan_y');
            $totalMss = $getP1LayananY+$getP2LayananY+$getP3LayananY+$getP4LayananY+$getP5LayananY+$getP6LayananY+$getP7LayananY+$getP8LayananY+$getP9LayananY+$getP10LayananY+$getP11LayananY+$getP12LayananY+$getP13LayananY;
            
            #GET WF
           $wf1 = ($getP1LayananX/$totalMis)*100;
           $wf2 = ($getP2LayananX/$totalMis)*100;
           $wf3 = ($getP3LayananX/$totalMis)*100;
           $wf4 = ($getP4LayananX/$totalMis)*100;
           $wf5 = ($getP5LayananX/$totalMis)*100;
           $wf6 = ($getP6LayananX/$totalMis)*100;
           $wf7 = ($getP7LayananX/$totalMis)*100;
           $wf8 = ($getP8LayananX/$totalMis)*100;
           $wf9 = ($getP9LayananX/$totalMis)*100;
           $wf10 = ($getP10LayananX/$totalMis)*100;
           $wf11 = ($getP11LayananX/$totalMis)*100;
           $wf12 = ($getP12LayananX/$totalMis)*100;
           $wf13 = ($getP13LayananX/$totalMis)*100;

           #GET WS
           $ws1 = $wf1*$getP1LayananY;
           $ws2 = $wf2*$getP2LayananY;
           $ws3 = $wf3*$getP3LayananY;
           $ws4 = $wf4*$getP4LayananY;
           $ws5 = $wf5*$getP5LayananY;
           $ws6 = $wf6*$getP6LayananY;
           $ws7 = $wf7*$getP7LayananY;
           $ws8 = $wf8*$getP8LayananY;
           $ws9 = $wf9*$getP9LayananY;
           $ws10 = $wf10*$getP10LayananY;
           $ws11 = $wf11*$getP11LayananY;
           $ws12 = $wf12*$getP12LayananY;
           $ws13 = $wf13*$getP13LayananY;

           $Csi1=array(
                'kode_csi_layanan'=>"KL1",
                'mis_layanan'=>$getP1LayananX,
                'mss_layanan'=>$getP1LayananY,
                'wf_layanan' =>$wf1,
                'ws_layanan'=>$ws1,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi1);

            $Csi2=array(
                'kode_csi_layanan'=>"KL2",
                'mis_layanan'=>$getP2LayananX,
                'mss_layanan'=>$getP2LayananY,
                'wf_layanan' =>$wf2,
                'ws_layanan'=>$ws2,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi2);

            $Csi3=array(
                'kode_csi_layanan'=>"KL3",
                'mis_layanan'=>$getP3LayananX,
                'mss_layanan'=>$getP3LayananY,
                'wf_layanan' =>$wf3,
                'ws_layanan'=>$ws3,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi3);

            $Csi4=array(
                'kode_csi_layanan'=>"KL4",
                'mis_layanan'=>$getP4LayananX,
                'mss_layanan'=>$getP4LayananY,
                'wf_layanan' =>$wf4,
                'ws_layanan'=>$ws4,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi4);

            $Csi5=array(
                'kode_csi_layanan'=>"KL5",
                'mis_layanan'=>$getP5LayananX,
                'mss_layanan'=>$getP5LayananY,
                'wf_layanan' =>$wf5,
                'ws_layanan'=>$ws5,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi5);

            $Csi6=array(
                'kode_csi_layanan'=>"KL6",
                'mis_layanan'=>$getP6LayananX,
                'mss_layanan'=>$getP6LayananY,
                'wf_layanan' =>$wf6,
                'ws_layanan'=>$ws6,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi6);

            $Csi7=array(
                'kode_csi_layanan'=>"KL7",
                'mis_layanan'=>$getP7LayananX,
                'mss_layanan'=>$getP7LayananY,
                'wf_layanan' =>$wf7,
                'ws_layanan'=>$ws7,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi7);

            $Csi8=array(
                'kode_csi_layanan'=>"KL8",
                'mis_layanan'=>$getP8LayananX,
                'mss_layanan'=>$getP8LayananY,
                'wf_layanan' =>$wf8,
                'ws_layanan'=>$ws8,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi8);

            $Csi9=array(
                'kode_csi_layanan'=>"KL9",
                'mis_layanan'=>$getP9LayananX,
                'mss_layanan'=>$getP9LayananY,
                'wf_layanan' =>$wf9,
                'ws_layanan'=>$ws9,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi9);

            $Csi10=array(
                'kode_csi_layanan'=>"KL10",
                'mis_layanan'=>$getP10LayananX,
                'mss_layanan'=>$getP10LayananY,
                'wf_layanan' =>$wf10,
                'ws_layanan'=>$ws10,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi10);

            $Csi11=array(
                'kode_csi_layanan'=>"KL11",
                'mis_layanan'=>$getP11LayananX,
                'mss_layanan'=>$getP11LayananY,
                'wf_layanan' =>$wf11,
                'ws_layanan'=>$ws11,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi11);

            $Csi12=array(
                'kode_csi_layanan'=>"KL12",
                'mis_layanan'=>$getP12LayananX,
                'mss_layanan'=>$getP12LayananY,
                'wf_layanan' =>$wf12,
                'ws_layanan'=>$ws12,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi12);

            $Csi13=array(
                'kode_csi_layanan'=>"KL13",
                'mis_layanan'=>$getP13LayananX,
                'mss_layanan'=>$getP13LayananY,
                'wf_layanan' =>$wf13,
                'ws_layanan'=>$ws13,
                'created_at' => date("Y-m-d H-i-s")
            );
            CsiLayanan::insert($Csi13);

        \Session::flash('msg_simpan','Data CSI Berhasil dibuat!');
		return \Redirect::back();
        }else{
            \Session::flash('msg_hapus','Data CSI Sudah pernah dibuat!');
		return \Redirect::back();
        }
    }
}
