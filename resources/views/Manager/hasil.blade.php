@extends('layouts.manager')
@section('css')
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="{{ route('home_manager') }}"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Hasil CSI</li>
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
                <a href="{{ route('print_manager') }}" class="button btn btn-xs btn-warning" target="_blank"><i class="fa fa-print"></i> Print Hasil CSI</a> &nbsp;
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
@endsection

@section('javascript')
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
</script>
@endsection