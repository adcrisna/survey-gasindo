@extends('layouts.admin')
@section('css')
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="{{ route('home_admin') }}"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Data CSI Tabung</li>
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
    <div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Hasil CSI </h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-print"><i class="fa fa-print"></i> Print Hasil CSI</button>
              <a href="{{ route('kelola_hasil') }}" class="button btn btn-xs btn-primary" onclick="return confirm('apakah anda yakin ?')"><i class="fa fa-edit"></i> Kelola Hasil</a> &nbsp;
                <!-- <a href="{{ route('hapus_hasil') }}" class="button btn btn-xs btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus Semua Data Hasil CSI</a> -->
            </div>
        </div>
    <div class="box-body table-responsive">
    <div class="row">
      <div class="col-xs-6">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tabung</h3>
              </div>
              <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Kode</th>
                          <th>MIS</th>
                          <th>MSS</th>
                          <th>WF</th>
                          <th>WS</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($csi_gas as $key => $value)
                        <tr>
                          <td>{{ $value->kode_csi_gas }}</td>
                          <td>{{ round($value->mis_gas,2) }}</td>
                          <td>{{ round($value->mss_gas,2) }}</td>
                          <td>{{ round($value->wf_gas,2) }}</td>
                          <td>{{ round($value->ws_gas,2) }}</td>
                        </tr>
                        @endforeach
                        <tr style="background-color: yellow;">
                            <th>WT</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                              @if(!empty($hasil_gas->wt))
                              {{ round($hasil_gas->wt,2) }}
                              @else
                              0
                              @endif
                            </th>
                        </tr>
                        <tr style="background-color: yellow;">
                            <th>Nilai CSI</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                              @if(!empty($hasil_gas->nilai_csi))
                              {{ $hasil_gas->nilai_csi }}
                              @else
                              0
                              @endif
                            </th>
                        </tr>
                        <tr style="background-color: yellow;">
                            <th>Keterangan</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                            @if(!empty($hasil_gas->keterangan_csi))
                              {{ $hasil_gas->keterangan_csi }}
                              @else
                              0
                              @endif
                            </th>
                        </tr>
                      </tbody>
                    </table>
              </div>
            </div>          
      </div>
      <div class="col-xs-6">
          <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Layanan</h3>
              </div>
              <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>Kode</th>
                          <th>MIS</th>
                          <th>MSS</th>
                          <th>WF</th>
                          <th>WS</th>
                        </tr>
                        <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($csi_layanan as $key => $value)
                        <tr>
                          <td>{{ $value->kode_csi_layanan }}</td>
                          <td>{{ round($value->mis_layanan,2) }}</td>
                          <td>{{ round($value->mss_layanan,2) }}</td>
                          <td>{{ round($value->wf_layanan,2) }}</td>
                          <td>{{ round($value->ws_layanan,2) }}</td>
                        </tr>
                        @endforeach
                        <tr style="background-color: yellow;">
                            <th>WT</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                              @if(!empty($hasil_layanan->wt))
                              {{ round($hasil_layanan->wt,2) }}
                              @else
                              0
                              @endif
                            </th>
                        </tr>
                        <tr style="background-color: yellow;">
                            <th>Nilai CSI</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                              @if(!empty($hasil_layanan->nilai_csi))
                              {{ $hasil_layanan->nilai_csi }}
                              @else
                              0
                              @endif
                            </th>
                        </tr>
                        <tr style="background-color: yellow;">
                            <th>Keterangan</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                            @if(!empty($hasil_layanan->keterangan_csi))
                              {{ $hasil_layanan->keterangan_csi }}
                              @else
                              0
                              @endif
                            </th>
                        </tr>
                      </tbody>
                    </table>
              </div>
            </div>          
      </div>
    </div>
    </div>
    </div>
    </div>
</div>
  </section>
  <div class="modal fade" id="modal-print" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pilih Periode Laporan</h4>
        </div>
        <div class="modal-body">
          <form action="{{ route('print_hasil') }}" method="POST" target="_blank">
          {{ csrf_field() }}
            <div class="form-group has-feedback">
              <label>Pilih Tahun :</label>
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="number" name="tahun" class="form-control pull-right" id="reservationtime" required>
                </div>
            </div>
            <div class="row">
              <div class="col-xs-4 col-xs-offset-8">
                <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-print"> </i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">

</script>
@endsection