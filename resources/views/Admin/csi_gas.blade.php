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
        <h3 class="box-title">Data CSI Tabung </h3>
            <div class="box-tools pull-right">
                <a href="{{ route('kelola_csi_gas') }}" class="button btn btn-xs btn-primary" onclick="return confirm('apakah anda yakin ?')"><i class="fa fa-edit"></i> Kelola Data CSI Tabung</a> &nbsp;
                <!-- <a href="{{ route('hapus_csi_gas') }}" class="button btn btn-xs btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus Semua Data CSI Tabung</a> -->
            </div>
        </div>
    <div class="box-body table-responsive">
    <div class="row">
      <div class="col-xs-3">
          <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title"></h3>
              </div>
              <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Kode</th>
                          <th>MIS</th>
                          <th>MSS</th>
                        </tr>
                        <tr>
                          <th></th>
                          <th style="display: none;">{{ $total1 = 0 }}</th>
                          <th style="display: none;">{{ $total2 = 0 }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($csi_gas as $key => $value)
                        <tr>
                          <td>{{ $value->kode_csi_gas }}</td>
                          <td>{{ round($value->mis_gas,2) }}</td>
                          <td>{{ round($value->mss_gas,2) }}</td>
                            <td style="display:none;">{{ round($total1 += $value->mis_gas,2) }}</td>
                            <td style="display:none;">{{ round($total2 += $value->mss_gas,2) }}</td>
                        </tr>
                        @endforeach
                        <tr style="background-color: yellow;">
                            <th>Total</th>
                            <th>{{ round($total1,2) }}</th>
                            <th>{{ round($total2,2) }}</th>
                        </tr>
                      </tbody>
                    </table>
              </div>
            </div>          
      </div>
      <div class="col-xs-3">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title"></h3>
              </div>
              <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Kode</th>
                          <th>MIS</th>
                          <th>WF</th>
                        </tr>
                        <tr>
                          <th></th>
                          <th style="display: none;">{{ $total3 = 0 }}</th>
                          <th style="display: none;">{{ $total4 = 0 }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($csi_gas as $key => $value)
                        <tr>
                          <td>{{ $value->kode_csi_gas }}</td>
                          <td>{{ round($value->mis_gas,2) }}</td>
                          <td>{{ round($value->wf_gas,2) }}</td>
                          <td style="display:none;">{{ round($total3 += $value->mis_gas,2) }}</td>
                            <td style="display:none;">{{ round($total4 += $value->wf_gas,2) }}</td>
                        </tr>
                        @endforeach
                        <tr style="background-color: yellow;">
                            <th>Total</th>
                            <th>{{ round($total3,2) }}</th>
                            <th>{{ round($total4,2) }}</th>
                        </tr>
                      </tbody>
                    </table>
              </div>
            </div>          
      </div>
      <div class="col-xs-6">
          <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title"></h3>
              </div>
              <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Kode</th>
                          <th>MSS</th>
                          <th>WF</th>
                          <th>WS</th>  
                        </tr>
                        <th></th>
                          <th style="display: none;">{{ $total5 = 0 }}</th>
                          <th style="display: none;">{{ $total6 = 0 }}</th>
                          <th style="display: none;">{{ $total7 = 0 }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($csi_gas as $key => $value)
                        <tr>
                          <td>{{ $value->kode_csi_gas }}</td>
                          <td>{{ round($value->mss_gas,2) }}</td>
                          <td>{{ round($value->wf_gas,2) }}</td>
                          <td>{{ round($value->ws_gas,2) }}</td>
                            <td style="display:none;">{{ round($total5 += $value->mss_gas,2) }}</td>
                            <td style="display:none;">{{ round($total6 += $value->wf_gas,2) }}</td>
                            <td style="display:none;">{{ round($total7 += $value->ws_gas,2) }}</td>
                        </tr>
                        @endforeach
                        <tr style="background-color: yellow;">
                            <th>Total</th>
                            <th>{{ round($total5,2) }}</th>
                            <th>{{ round($total6,2) }}</th>
                            <th>{{ round($total7,2) }}</th>
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