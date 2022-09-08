@extends('layouts.index')
@section('css')

@endsection

@section('content')
      <section class="content-header">
        <br/>
        <ol class="breadcrumb">
          <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        @if(\Session::has('msg_success'))
           <h5> <div class="alert alert-success">
              {{ \Session::get('msg_success')}}
            </div></h5>
            @endif
          @if(\Session::has('msg_gagal'))
           <h5> <div class="alert alert-info">
              {{ \Session::get('msg_gagal')}}
            </div></h5>
            @endif
              <!-- /.box-header -->
            <div class="box-body">
                <!-- post text -->
                <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                    <div class="box box-primary">
                      <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive" src="{{ asset('cic.png') }}" style="width: 260px ; height: 160px ;" alt="picture of gas">
                        <br/>
                        <h3 class="profile-username text-center"><b>Survey Kepuasan Produk</b></h3>
                        <br/>
                          <form action="{{ route('simpan_survey_gas') }}" method="post">
                                {{ csrf_field() }}
                            <div class="form-group has-feedback">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group has-feedback">
                                <label>Jenis Kelamin :</label>
                                <input type="radio" name="jenis_kelamin" value="Pria" required> Pria
                                <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
                            </div>
                            <div class="form-group has-feedback">
                                <label>Pekerjaan</label>
                                <select name="pekerjaan"  class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Pegawai Negeri">Pegawai Negeri</option>
                                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pedagang">Pedagang</option>
                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <label>No. Handphone/WhatsApp</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="No Handphone/WhatsApp" required>
                            </div>
                            <br/>
                        <center><h4>Harapan</h4></center>
                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <div class="form-group has-feedback">
                                <label>Isi Pada Tabung Pas</label>
                                <br/>
                                <input type="radio" name="p1_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p1_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p1_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p1_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Kebersihan Tabung</label>
                                <br/>
                                <input type="radio" name="p2_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p2_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p2_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p2_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Kualitas Tabung Gas LPG</label>
                                <br/>
                                <input type="radio" name="p3_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p3_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p3_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p3_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Warna Api Baik</label>
                                <br/>
                                <input type="radio" name="p4_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p4_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p4_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p4_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Segel Terpasang Rapih/Tidak Pecah</label>
                                <br/>
                                <input type="radio" name="p5_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p5_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p5_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p5_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Karet Seal Baik</label>
                                <br/>
                                <input type="radio" name="p6_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p6_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p6_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p6_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Pelabelan Tabung Baik</label>
                                <br/>
                                <input type="radio" name="p7_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p7_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p7_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p7_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Kepala Valve Sesuai dengan Regulator</label>
                                <br/>
                                <input type="radio" name="p8_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p8_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p8_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p8_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Bentuk Tabung Gas LPG Baik</label>
                                <br/>
                                <input type="radio" name="p9_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p9_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p9_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p9_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Perubahan Warna Cat Pada Tabung</label>
                                <br/>
                                <input type="radio" name="p10_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p10_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p10_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p10_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Daya Tahan Isi Tabung Kuat Hingga Berbulan-Bulan</label>
                                <br/>
                                <input type="radio" name="p11_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p11_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p11_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p11_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Menanggapi Keluhan Konsumen</label>
                                <br/>
                                <input type="radio" name="p12_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p12_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p12_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p12_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Kemudahaan Saat Membeli Tabung</label>
                                <br/>
                                <input type="radio" name="p13_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p13_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p13_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p13_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Bentuk Tabung Layak</label>
                                <br/>
                                <input type="radio" name="p14_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p14_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p14_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p14_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Tabung Yang Bersih dan Layak</label>
                                <br/>
                                <input type="radio" name="p15_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p15_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p15_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p15_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Penilaian Harga Tabung Menurut Konsumen</label>
                                <br/>
                                <input type="radio" name="p16_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p16_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p16_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p16_gas_x" value="1" > Kurang Penting
                            </div>
                            <div class="form-group has-feedback">
                                <label>Citra Perusahaan Dimasyarakat</label>
                                <br/>
                                <input type="radio" name="p17_gas_x" value="4" required> Sangat Penting &nbsp;
                                <input type="radio" name="p17_gas_x" value="3" > Penting &nbsp;
                                <input type="radio" name="p17_gas_x" value="2" > Cukup &nbsp;
                                <input type="radio" name="p17_gas_x" value="1" > Kurang Penting
                            </div>
                            </li>
                        </ul>
                        <br/>
                        <center><h4>Kinerja</h4></center>
                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <div class="form-group has-feedback">
                                <label>Isi Pada Tabung Pas</label>
                                <br/>
                                <input type="radio" name="p1_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p1_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p1_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p1_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Kebersihan Tabung</label>
                                <br/>
                                <input type="radio" name="p2_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p2_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p2_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p2_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Kualitas Tabung Gas LPG</label>
                                <br/>
                                <input type="radio" name="p3_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p3_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p3_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p3_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Warna Api Baik</label>
                                <br/>
                                <input type="radio" name="p4_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p4_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p4_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p4_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Segel Terpasang Rapih/Tidak Pecah</label>
                                <br/>
                                <input type="radio" name="p5_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p5_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p5_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p5_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Karet Seal Baik</label>
                                <br/>
                                <input type="radio" name="p6_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p6_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p6_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p6_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Pelabelan Tabung Baik</label>
                                <br/>
                                <input type="radio" name="p7_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p7_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p7_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p7_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Kepala Valve Sesuai dengan Regulator</label>
                                <br/>
                                <input type="radio" name="p8_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p8_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p8_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p8_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Bentuk Tabung Gas LPG Baik</label>
                                <br/>
                                <input type="radio" name="p9_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p9_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p9_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p9_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Perubahan Warna Cat Pada Tabung</label>
                                <br/>
                                <input type="radio" name="p10_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p10_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p10_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p10_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Daya Tahan Isi Tabung Kuat Hingga Berbulan-Bulan</label>
                                <br/>
                                <input type="radio" name="p11_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p11_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p11_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p11_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Menanggapi Keluhan Konsumen</label>
                                <br/>
                                <input type="radio" name="p12_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p12_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p12_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p12_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Kemudahaan Saat Membeli Tabung</label>
                                <br/>
                                <input type="radio" name="p13_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p13_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p13_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p13_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Bentuk Tabung Layak</label>
                                <br/>
                                <input type="radio" name="p14_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p14_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p14_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p14_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Tabung Yang Bersih dan Layak</label>
                                <br/>
                                <input type="radio" name="p15_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p15_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p15_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p15_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Penilaian Harga Tabung Menurut Konsumen</label>
                                <br/>
                                <input type="radio" name="p16_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p16_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p16_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p16_gas_y" value="1" > Kurang
                            </div>
                            <div class="form-group has-feedback">
                                <label>Citra Perusahaan Dimasyarakat</label>
                                <br/>
                                <input type="radio" name="p17_gas_y" value="4" required> Sangat Baik &nbsp;
                                <input type="radio" name="p17_gas_y" value="3" > Baik &nbsp;
                                <input type="radio" name="p17_gas_y" value="2" > Cukup &nbsp;
                                <input type="radio" name="p17_gas_y" value="1" > Kurang
                            </div>
                            </li>
                        </ul>
                            <div class="row">
                                <div class="col-xs-4 col-xs-offset-8">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Kirim</button>
                                </div>
                                </div>
                        </form>
                    </div>
                  </div>
                  <div class="col-md-2">
                  </div>
                </div>
            </div>
              <!-- /.box-footer -->
           
      </section>
      <!-- /.content -->
 @endsection

@section('javascript')

@endsection
