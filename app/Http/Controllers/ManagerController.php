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
use App\Models\HasilCasi;
use App\Models\Perusahaan;
use App\Models\HasilCsi;
use Fpdf;

class ManagerController extends Controller
{
    public function index(){
        $data['title'] = "Home Manager";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['survey_produk'] = SurveyGasX::get();
        $data['survey_layanan'] = SurveyLayananX::get();
        $data['csi_gas'] = CsiGas::get();
        $data['csi_layanan'] = CsiLayanan::get();
        return view('Manager/manager_home',$data);
    }
    function logout(){
        Auth::logout();
        return \Redirect::to('/');
    }
    public function profileManager()
    {
        $data['title'] = "Profile Manager";
        $data['nama'] = Auth::user()->nama_user;
        $data['manager'] = User::where('level','=','Manager')->first();
        return view('Manager/profile_manager',$data);
    }

    public function updateManager(Request $request)
    {
           if (empty($request->password)) {
                $data=array(
                    'nama_user'=>$request->nama,
                );
                User::where('id','=',$request->id)->update($data);
                \Session::flash('msg_update_profile','Data Profile Berhasil di Update!');
                return Redirect::back();
           }else{
                $data=array(
                    'nama_user'=>$request->nama,
                    'password'=>bcrypt($request->password),
                );
                User::where('id','=',$request->id)->update($data);
                \Session::flash('msg_update_profile','Data Profile Berhasil di Update!');
                return Redirect::back();
           }
    }
    public function profilePerusahaan(){
        $data['title'] = "Profile Perusahaan";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['profile'] = Perusahaan::where('perusahaan_id','=',1)->first();
        return view('Manager/profile_perusahaan',$data);
    }

    public function hasilManager(){
        $data['title'] = "Data Hasil CSI";
        $data['id'] = Auth::User()->id;
        $data['nama'] = Auth::User()->nama_user;
        $data['hasil_gas'] = HasilCsi::where('nama_csi','=','Produk')->First();
        $data['hasil_layanan'] = HasilCsi::where('nama_csi','=','Layanan')->First();
        $data['csi_gas'] = CsiGas::get();
        $data['csi_layanan'] = CsiLayanan::get();
        return view('Manager/hasil',$data);
    }
    public function printHasil()
    {
        $pdf = new fPdf('P','mm');
		$pdf::SetAutoPageBreak(true);
		$pdf::SetTitle("Laporan Hasil");
		$pdf::addPage('P','A4');
		$pdf::image( asset('gasindo.jpeg'), $pdf::getX()-2, 4, 40 , 26,'jpeg');
		$pdf::setX(45);
		$pdf::SetFont('Helvetica','B','13');
		$pdf::cell(135,6,"Data Kepuasan Pelanggan Terhadap Layanan dan Tabung",0,2,'C');
		$pdf::SetFont('Helvetica','B','13');
		$pdf::cell(135,6,"PT. Gasindo Cirebon Prima",0,2,'C');
		$pdf::SetFont('Helvetica','','10');
		$pdf::cell(135,6,"Jl. Tuparev No. 40/54, Kedawung, Cirebon, Jawa Barat, 45133",0,2,'C');
		$pdf::SetFont('Helvetica','B','12');
		$pdf::cell(135,6,"",0,2,'C');
		$pdf::line(10,($pdf::getY()+3),200,($pdf::getY()+3));
		$pdf::ln();
		$pdf::ln();
        $pdf::SetFont('Helvetica','B','11');
        $pdf::cell(63,6,'Hasil Kepuasan Terhadap Tabung',0,0,'C');
        $pdf::ln();
        $pdf::ln();
		$pdf::SetFont('Helvetica','B','11');
		$pdf::cell(35,6,'Kode',1,0,'C');
		$pdf::cell(35,6,'MIS',1,0,'C');
		$pdf::cell(40,6,'MSS',1,0,'C');
		$pdf::cell(40,6,'WF',1,0,'C');
        $pdf::cell(40,6,'WS',1,0,'C');
		$pdf::SetFont('Helvetica','','11');
		$pdf::ln();

        $nama = Auth::User()->nama_user;
        $hasil_gas= HasilCsi::where('nama_csi','=','Produk')->First();
        $hasil_layanan = HasilCsi::where('nama_csi','=','Layanan')->First();
        $csi_gas = CsiGas::get();
        $csi_layanan = CsiLayanan::get();

			foreach ($csi_gas as $key => $value) {
				$pdf::cell(35,6,$value->kode_csi_gas,1,0,'C');
				$pdf::cell(35,6,round($value->mis_gas,2),1,0,'C');
				$pdf::cell(40,6,round($value->mss_gas,2),1,0,'C');
                $pdf::cell(40,6,round($value->wf_gas,2),1,0,'C');
                $pdf::cell(40,6,round($value->ws_gas,2),1,0,'C');
                $pdf::ln();
			}
            $pdf::SetFont('Helvetica','B','11');
            $pdf::cell(35,6,'WT',1,0,'C');
            $pdf::cell(35,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,round($hasil_gas->wt,2),1,0,'C');
			$pdf::ln();
            $pdf::SetFont('Helvetica','B','11');
            $pdf::cell(35,6,'Nilai CSI',1,0,'C');
            $pdf::cell(35,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,$hasil_gas->nilai_csi,1,0,'C');
			$pdf::ln();
            $pdf::SetFont('Helvetica','B','11');
            $pdf::cell(35,6,'Keterangan',1,0,'C');
            $pdf::cell(35,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,$hasil_gas->keterangan_csi,1,0,'C');
			$pdf::ln();
			$pdf::ln();
            $pdf::ln();
            $pdf::SetFont('Helvetica','B','11');
            $pdf::cell(63,6,'Hasil Kepuasan Terhadap Layanan',0,0,'C');
            $pdf::ln();
            $pdf::ln();
            foreach ($csi_layanan as $key => $value) {
				$pdf::cell(35,6,$value->kode_csi_layanan,1,0,'C');
				$pdf::cell(35,6,round($value->mis_layanan,2),1,0,'C');
				$pdf::cell(40,6,round($value->mss_layanan,2),1,0,'C');
                $pdf::cell(40,6,round($value->wf_layanan,2),1,0,'C');
                $pdf::cell(40,6,round($value->ws_layanan,2),1,0,'C');
                $pdf::ln();
			}
            $pdf::SetFont('Helvetica','B','11');
            $pdf::cell(35,6,'WT',1,0,'C');
            $pdf::cell(35,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,round($hasil_layanan->wt,2),1,0,'C');
			$pdf::ln();
            $pdf::SetFont('Helvetica','B','11');
            $pdf::cell(35,6,'Nilai CSI',1,0,'C');
            $pdf::cell(35,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,$hasil_layanan->nilai_csi,1,0,'C');
			$pdf::ln();
            $pdf::SetFont('Helvetica','B','11');
            $pdf::cell(35,6,'Keterangan',1,0,'C');
            $pdf::cell(35,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,'',1,0,'C');
            $pdf::cell(40,6,$hasil_layanan->keterangan_csi,1,0,'C');
			$pdf::ln();
			$pdf::ln();
            $pdf::SetFont('Helvetica','','11');
			$pdf::cell(65,6,'',0,0,'');
			$pdf::cell(45,6,'',0,0,'');
			$pdf::cell(40,6,'',0,0,'');
			$pdf::cell(40,6,"Cirebon, ".date('d-M-Y'),0,0,'');
            $pdf::ln();
            $pdf::cell(65,6,'',0,0,'');
			$pdf::cell(45,6,'',0,0,'');
			$pdf::cell(47,6,'',0,0,'');
			$pdf::cell(40,6,"Mengetahui, ",0,0,'');
			$pdf::ln();
			$pdf::ln();
			$pdf::ln();
			$pdf::ln();
			$pdf::ln();
			$pdf::cell(65,6,'',0,0,'');
			$pdf::cell(45,6,'',0,0,'');
			$pdf::cell(45,6,'',0,0,'');
			$pdf::cell(40,6,$nama,0,0,'');
		$pdf::Output();
		exit;
    }
}
