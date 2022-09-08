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
           <center><h5> <div class="alert alert-success">
              {{ \Session::get('msg_success')}}
            </div></h5></center>
            @endif
          @if(\Session::has('msg_gagal'))
           <h5> <div class="alert alert-info">
              {{ \Session::get('msg_gagal')}}
            </div></h5>
            @endif
              <!-- /.box-header -->
              <div class="row">
                    <div class="col-xs-12">
                    <div class="box box-danger">
                    <div class="box-header">
                    <center><h3 class="profile-username text-center"><b>Isi Data Diri</b></h3></center>
                        <div class="box-body table-responsive">
                        <form action="{{ route('simpan_survey') }}" method="post" enctype="multipart/form-data">
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
                                    <option value="">-Pilih-</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Pegawai Negeri">Pegawai Negeri</option>
                                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pedagang">Pedagang</option>
                                    <option value="lain">Lain-lain</option>
                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <label>No. Handphone/WhatsApp</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="No Handphone/WhatsApp" required>
                            </div>
                            <br/>
                    </div>
                  
                    <div class="col-xs-6">
                        <div class="box box-info">
                            <div class="box-header">
                                <center><h3 class="profile-username text-center"><b>Survey Kepuasan Terhadap Tabung</b></h3></center>
                            </div>
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive" src="{{ asset('gas.png') }}" style="width: 260px ; height: 160px ;" alt="picture of gas">
                                <br/>
                    
                                
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>1. {{ $produk->pertanyaan_produk1 }}</label>
                                        
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p1_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p1_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p1_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p1_gas_x" value="1" > Kurang Penting
                                        <br>
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p1_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p1_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p1_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p1_gas_y" value="1" > Kurang
                                    </div>
                
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>2. {{ $produk->pertanyaan_produk2 }}</label>
                                        
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p2_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p2_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p2_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p2_gas_x" value="1" > Kurang Penting

                                       <br>
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p2_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p2_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p2_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p2_gas_y" value="1" > Kurang
                                    </div>
                                
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>3. {{ $produk->pertanyaan_produk3 }}</label>
                                        
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p3_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p3_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p3_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p3_gas_x" value="1" > Kurang Penting
                                        
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p3_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p3_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p3_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p3_gas_y" value="1" > Kurang
                                    </div>
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>4. {{ $produk->pertanyaan_produk4 }}</label>
                                        
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p4_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p4_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p4_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p4_gas_x" value="1" > Kurang Penting
                                        
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p4_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p4_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p4_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p4_gas_y" value="1" > Kurang
                                    </div>
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>5. {{ $produk->pertanyaan_produk5 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p5_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p5_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p5_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p5_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        
                                        <input type="radio" name="p5_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p5_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p5_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p5_gas_y" value="1" > Kurang
                                    </div>
                                
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>6. {{ $produk->pertanyaan_produk6 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p6_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p6_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p6_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p6_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p6_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p6_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p6_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p6_gas_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>7. {{ $produk->pertanyaan_produk7 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p7_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p7_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p7_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p7_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p7_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p7_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p7_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p7_gas_y" value="1" > Kurang
                                    </div>
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>8. {{ $produk->pertanyaan_produk8 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p8_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p8_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p8_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p8_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p8_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p8_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p8_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p8_gas_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>9. {{ $produk->pertanyaan_produk9 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p9_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p9_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p9_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p9_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p9_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p9_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p9_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p9_gas_y" value="1" > Kurang
                                    </div>
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>10. {{ $produk->pertanyaan_produk10 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p10_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p10_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p10_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p10_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p10_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p10_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p10_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p10_gas_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>11. {{ $produk->pertanyaan_produk11 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p11_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p11_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p11_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p11_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p11_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p11_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p11_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p11_gas_y" value="1" > Kurang
                                    </div>
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>12. {{ $produk->pertanyaan_produk12 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p12_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p12_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p12_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p12_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p12_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p12_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p12_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p12_gas_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>13. {{ $produk->pertanyaan_produk13 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p13_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p13_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p13_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p13_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p13_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p13_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p13_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p13_gas_y" value="1" > Kurang
                                    </div>
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>14. {{ $produk->pertanyaan_produk14 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p14_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p14_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p14_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p14_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p14_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p14_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p14_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p14_gas_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>15. {{ $produk->pertanyaan_produk15 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p15_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p15_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p15_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p15_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p15_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p15_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p15_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p15_gas_y" value="1" > Kurang
                                    </div>
                                    
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>16. {{ $produk->pertanyaan_produk16 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p16_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p16_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p16_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p16_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p16_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p16_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p16_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p16_gas_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>17. {{ $produk->pertanyaan_produk17 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p17_gas_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p17_gas_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p17_gas_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p17_gas_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p17_gas_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p17_gas_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p17_gas_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p17_gas_y" value="1" > Kurang
                                    </div>
                                    
                            </div>
                        </div>          
                    </div>
                    <div class="col-xs-6">
                        <div class="box box-info">
                            <div class="box-header">
                            <h3 class="profile-username text-center"><b>Survey Kepuasan Terhadap Layanan</b></h3>
                            </div>
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive" src="{{ asset('layanan.png') }}" style="width: 260px ; height: 160px ;" alt="picture of gas">
                                <br/>
                              
                                   
            
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>1. {{ $layanan->pertanyaan_layanan1 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p1_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p1_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p1_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p1_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p1_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p1_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p1_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p1_layanan_y" value="1" > Kurang
                                    </div>
                                
                                    <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>2. {{ $layanan->pertanyaan_layanan2 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p2_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p2_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p2_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p2_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p2_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p2_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p2_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p2_layanan_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>3. {{ $layanan->pertanyaan_layanan3 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p3_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p3_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p3_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p3_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p3_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p3_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p3_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p3_layanan_y" value="1" > Kurang
                                    </div>
                                    <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>4. {{ $layanan->pertanyaan_layanan4 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p4_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p4_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p4_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p4_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p4_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p4_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p4_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p4_layanan_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>5. {{ $layanan->pertanyaan_layanan5 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p5_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p5_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p5_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p5_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p5_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p5_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p5_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p5_layanan_y" value="1" > Kurang
                                    </div>
                                    <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>6. {{ $layanan->pertanyaan_layanan6 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p6_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p6_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p6_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p6_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p6_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p6_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p6_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p6_layanan_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                    <label>7. {{ $layanan->pertanyaan_layanan7 }}</label>
                                    <h5>Harapan</h5>
                                        <input type="radio" name="p7_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p7_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p7_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p7_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p7_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p7_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p7_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p7_layanan_y" value="1" > Kurang
                                    </div>
                                    <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>8. {{ $layanan->pertanyaan_layanan8 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p8_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p8_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p8_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p8_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p8_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p8_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p8_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p8_layanan_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                    <label>9. {{ $layanan->pertanyaan_layanan9 }}</label>
                                    <h5>Harapan</h5>
                                        <input type="radio" name="p9_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p9_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p9_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p9_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p9_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p9_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p9_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p9_layanan_y" value="1" > Kurang
                                    </div>
                                    <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>10. {{ $layanan->pertanyaan_layanan10 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p10_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p10_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p10_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p10_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p10_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p10_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p10_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p10_layanan_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>11. {{ $layanan->pertanyaan_layanan11 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p11_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p11_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p11_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p11_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p11_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p11_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p11_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p11_layanan_y" value="1" > Kurang
                                    </div>
                                    <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>12. {{ $layanan->pertanyaan_layanan12 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p12_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p12_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p12_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p12_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p12_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p12_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p12_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p12_layanan_y" value="1" > Kurang
                                    </div>
                                
                                <li class="list-group-item">
                                    <div class="form-group has-feedback">
                                        <label>13. {{ $layanan->pertanyaan_layanan13 }}</label>
                                        <h5>Harapan</h5>
                                        <input type="radio" name="p13_layanan_x" value="4" required> Sangat Penting &nbsp;
                                        <input type="radio" name="p13_layanan_x" value="3" > Penting &nbsp;
                                        <input type="radio" name="p13_layanan_x" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p13_layanan_x" value="1" > Kurang Penting
                                        <h5>Kinerja</h5>
                                        <input type="radio" name="p13_layanan_y" value="4" required> Sangat Baik &nbsp;
                                        <input type="radio" name="p13_layanan_y" value="3" > Baik &nbsp;
                                        <input type="radio" name="p13_layanan_y" value="2" > Cukup &nbsp;
                                        <input type="radio" name="p13_layanan_y" value="1" > Kurang
                                    </div>
                                    
                            </div>
                        </div>          
                    </div>
                    <div class="row">
                                <div class="col-xs-2 col-xs-offset-5">
                                <button type="submit" class="btn btn-danger btn-block btn-flat">Kirim</button>
                                </div>
                                </div>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
      <!-- /.content -->
 @endsection

@section('javascript')

@endsection
