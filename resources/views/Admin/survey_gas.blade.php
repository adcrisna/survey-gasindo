@extends('layouts.admin')
@section('css')
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="{{ route('home_admin') }}"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Data Survey Tabung</li>
    </ol>
    <br/>
  </section>
  <section class="content">
           @if(\Session::has('msg_simpan'))
           <h5> <div class="alert alert-info">
              {{ \Session::get('msg_simpan')}}
            </div></h5>
            @endif
            @if(\Session::has('msg_hapus'))
           <h5> <div class="alert alert-danger">
              {{ \Session::get('msg_hapus')}}
            </div></h5>
            @endif
            @if(\Session::has('msg_update'))
           <h5> <div class="alert alert-warning">
              {{ \Session::get('msg_update')}}
            </div></h5>
            @endif
    <div class="row">
      <div class="col-xs-12">
          <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Data Survey Tabung X</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('kelola_survey_gas') }}" class="button btn btn-xs btn-primary" onclick="return confirm('apakah anda yakin ?')"><i class="fa fa-edit"></i> Kelola Data Survey Tabung</a>
                        <a href="{{ route('hapus_survey_gas') }}" class="button btn btn-xs btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus Semua Survey Tabung</a>
                      </div>
              </div>
              <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="data-survey_gas_x">
                      <thead>
                        <tr>
                          <th>Nama Lengkap</th>
                          <th>No HP/WA</th>
                          <th>Gender</th>
                          <th>Pekerjaan</th>
                          <th>P1</th>
                          <th>P2</th>
                          <th>P3</th>
                          <th>P4</th>
                          <th>P5</th>
                          <th>P6</th>
                          <th>P7</th>
                          <th>P8</th>
                          <th>P9</th>
                          <th>P10</th>
                          <th>P11</th>
                          <th>P12</th>
                          <th>P13</th>
                          <th>P14</th>
                          <th>P15</th>
                          <th>P16</th>
                          <th>P17</th>
                          <th>Aksi</th>       
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($survey_gas_x as $key => $value)
                        <tr>
                          <td>{{ $value->nama_gas_x }}</td>
                          <td>{{ $value->hp_gas_x }}</td>
                          <td>{{ $value->jk_gas_x }}</td>
                          <td>{{ $value->pekerjaan_gas_x }}</td>
                          <td>{{ $value->p1_gas_x }}</td>
                          <td>{{ $value->p2_gas_x }}</td>
                          <td>{{ $value->p3_gas_x }}</td>
                          <td>{{ $value->p4_gas_x }}</td>
                          <td>{{ $value->p5_gas_x }}</td>
                          <td>{{ $value->p6_gas_x }}</td>
                          <td>{{ $value->p7_gas_x }}</td>
                          <td>{{ $value->p8_gas_x }}</td>
                          <td>{{ $value->p9_gas_x }}</td>
                          <td>{{ $value->p10_gas_x }}</td>
                          <td>{{ $value->p11_gas_x }}</td>
                          <td>{{ $value->p12_gas_x }}</td>
                          <td>{{ $value->p13_gas_x }}</td>
                          <td>{{ $value->p14_gas_x }}</td>
                          <td>{{ $value->p15_gas_x }}</td>
                          <td>{{ $value->p16_gas_x }}</td>
                          <td>{{ $value->p17_gas_x }}</td>
                          <td width="70px">
                            <a href="{{ route('hapus_survey_gas_x',$value->survey_gas_x_id) }}"><button class="btn btn-xs btn-danger" onclick="return confirm('apakah anda ingin menghapus data ini ?')" ><i class="fa fa-trash"> Hapus</i></button></a> 
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
              </div>
            </div>          
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
          <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Data Survey Tabung Y</h3>
                    
              </div>
              <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="data-survey_gas_y">
                      <thead>
                        <tr>
                          <th>Nama Lengkap</th>
                          <th>No HP/WA</th>
                          <th>Gender</th>
                          <th>Pekerjaan</th>
                          <th>P1</th>
                          <th>P2</th>
                          <th>P3</th>
                          <th>P4</th>
                          <th>P5</th>
                          <th>P6</th>
                          <th>P7</th>
                          <th>P8</th>
                          <th>P9</th>
                          <th>P10</th>
                          <th>P11</th>
                          <th>P12</th>
                          <th>P13</th>
                          <th>P14</th>
                          <th>P15</th>
                          <th>P16</th>
                          <th>P17</th>
                          <th>Aksi</th>       
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($survey_gas_y as $key => $value)
                        <tr>
                          <td>{{ $value->nama_gas_y }}</td>
                          <td>{{ $value->hp_gas_y }}</td>
                          <td>{{ $value->jk_gas_y }}</td>
                          <td>{{ $value->pekerjaan_gas_y }}</td>
                          <td>{{ $value->p1_gas_y }}</td>
                          <td>{{ $value->p2_gas_y }}</td>
                          <td>{{ $value->p3_gas_y }}</td>
                          <td>{{ $value->p4_gas_y }}</td>
                          <td>{{ $value->p5_gas_y }}</td>
                          <td>{{ $value->p6_gas_y }}</td>
                          <td>{{ $value->p7_gas_y }}</td>
                          <td>{{ $value->p8_gas_y }}</td>
                          <td>{{ $value->p9_gas_y }}</td>
                          <td>{{ $value->p10_gas_y }}</td>
                          <td>{{ $value->p11_gas_y }}</td>
                          <td>{{ $value->p12_gas_y }}</td>
                          <td>{{ $value->p13_gas_y }}</td>
                          <td>{{ $value->p14_gas_y }}</td>
                          <td>{{ $value->p15_gas_y }}</td>
                          <td>{{ $value->p16_gas_y }}</td>
                          <td>{{ $value->p17_gas_y }}</td>
                          <td width="70px">
                            <a href="{{ route('hapus_survey_gas_y',$value->survey_gas_y_id) }}"><button class="btn btn-xs btn-danger" onclick="return confirm('apakah anda ingin menghapus data ini ?')" ><i class="fa fa-trash"> Hapus</i></button></a> 
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
              </div>
            </div>          
      </div>
    </div>
  </section>
@endsection

@section('javascript')
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
  var table = $('#data-survey_gas_x').DataTable();
  var table = $('#data-survey_gas_y').DataTable();
</script>
@endsection