<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\CsiController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PertanyaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', [IndexController::class, 'index'])->name('index');
Route::any('/survey_kepuasan', [IndexController::class, 'survey'])->name('survey');
Route::any('/survey_produk', [IndexController::class, 'surveyGas'])->name('isi_survey_gas');
Route::any('/simpan_survey', [IndexController::class, 'simpanSurvey'])->name('simpan_survey');
Route::any('/survey_layanan', [IndexController::class, 'surveyLayanan'])->name('isi_survey_layanan');
Route::any('/simpan_survey_layanan', [IndexController::class, 'simpanSurveyLayanan'])->name('simpan_survey_layanan');
Route::any('/tentang_perusahaan', [IndexController::class, 'tentangPerusahaan'])->name('tentang_perusahaan');

Route::any('/login', [LoginController::class, 'index'])->name('login');
Route::any('/proses_login', [LoginController::class, 'prosesLogin'])->name('proses_login');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->middleware(['admin'])->group(function () {
        Route::get('/home', [AdminController::class, 'index'])->name('home_admin');
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout_admin');
        Route::get('/profile', [AdminController::class, 'profileAdmin'])->name('profile_admin');
        Route::any('/update_profile', [AdminController::class, 'updateAdmin'])->name('update_admin');

        Route::prefix('survey_produk')->group( function (){
            Route::any('/data_survey_produk', [SurveyController::class, 'surveyGas'])->name('survey_gas');
            Route::any('/hapus_survey_gas_x{survey_gas_x_id}', [SurveyController::class, 'hapusSurveyGasX'])->name('hapus_survey_gas_x');
            Route::any('/hapus_survey_gas_y{survey_gas_y_id}', [SurveyController::class, 'hapusSurveyGasY'])->name('hapus_survey_gas_y');
            Route::any('/kelola_survey_gas', [SurveyController::class, 'kelolaSurveyGas'])->name('kelola_survey_gas');
            Route::any('/data_survey_layanan', [SurveyController::class, 'surveyLayanan'])->name('survey_layanan');
            Route::any('/hapus_survey_layanan_x{survey_layanan_x_id}', [SurveyController::class, 'hapusSurveyLayananX'])->name('hapus_survey_layanan_x');
            Route::any('/hapus_survey_layanan_y{survey_layanan_y_id}', [SurveyController::class, 'hapusSurveyLayananY'])->name('hapus_survey_layanan_y');
            Route::any('/kelola_survey_layanan', [SurveyController::class, 'kelolaSurveyLayanan'])->name('kelola_survey_layanan');
            Route::any('/hapus_survey_gas', [SurveyController::class, 'hapusSemuaGas'])->name('hapus_survey_gas');
            Route::any('/hapus_survey_layanan', [SurveyController::class, 'hapusSemuaLayanan'])->name('hapus_survey_layanan');

        });
        Route::prefix('csi')->group( function (){
            Route::any('/data_csi_produk', [CsiController::class, 'csiGas'])->name('csi_gas');
            Route::any('/data_csi_layanan', [CsiController::class, 'csiLayanan'])->name('csi_layanan');
            Route::any('/kelola_csi_produk', [CsiController::class, 'kelolaCsiGas'])->name('kelola_csi_gas');
            Route::any('/kelola_csi_layanan', [CsiController::class, 'kelolaCsiLayanan'])->name('kelola_csi_layanan');
            Route::any('/hapus_csi_gas', [CsiController::class, 'hapusCsiGas'])->name('hapus_csi_gas');
            Route::any('/hapus_csi_layanan', [CsiController::class, 'hapusCsiLayanan'])->name('hapus_csi_layanan');
        });
        Route::prefix('hasil')->group( function (){
            Route::any('/data_hasil_csi', [HasilController::class, 'hasilCsi'])->name('hasil_csi');
            Route::any('/hapus_hasil', [HasilController::class, 'hapusHasil'])->name('hapus_hasil');
            Route::any('/print_hasil', [HasilController::class, 'printHasil'])->name('print_hasil');
            Route::any('/kelola_hasil', [HasilController::class, 'kelolaHasil'])->name('kelola_hasil');
        });
        Route::prefix('perusahaan')->group( function (){
            Route::any('/data_perusahaan', [PerusahaanController::class, 'index'])->name('data_perusahaan');
            Route::any('/update_perusahaan', [PerusahaanController::class, 'updatePerusahaan'])->name('update_perusahaan');
        });
        Route::prefix('pertanyaan')->group( function (){
            Route::any('/pertanyaan_produk', [PertanyaanController::class, 'pertanyaanProduk'])->name('pertanyaan_produk');
            Route::any('/update_pertanyaan_produk', [PertanyaanController::class, 'updatePertanyaanProduk'])->name('update_pertanyaan_produk');
            Route::any('/pertanyaan_layanan', [PertanyaanController::class, 'pertanyaanLayanan'])->name('pertanyaan_layanan');
            Route::any('/update_pertanyaan_layanan', [PertanyaanController::class, 'updatePertanyaanLayanan'])->name('update_pertanyaan_layanan');
        });
    });
});
Route::middleware(['auth'])->group(function () {
    Route::prefix('manager')->middleware(['manager'])->group(function () {
        Route::get('/home', [ManagerController::class, 'index'])->name('home_manager');
        Route::get('/logout', [ManagerController::class, 'logout'])->name('logout_manager');
        Route::get('/profile', [ManagerController::class, 'profileManager'])->name('profile_manager');
        Route::any('/update_profile', [ManagerController::class, 'updateManager'])->name('update_manager');
        Route::get('/profile_perusahaan', [ManagerController::class, 'profilePerusahaan'])->name('profile_perusahaan');
        Route::get('/hasil_csi', [ManagerController::class, 'hasilManager'])->name('hasil_manager');
        Route::any('/print_manager', [ManagerController::class, 'printHasil'])->name('print_manager');
    });
});