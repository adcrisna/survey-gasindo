@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{ asset('adminlte/plugins/morris/morris.css') }}">
<link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
@endsection

@section('content')
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="{{ route('home_admin') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    </ol>
  </section>
  <section class="content">
    <br/>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Survey Tabung</span>
              <span class="info-box-number">{{ count($survey_produk) }}</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-envelope"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Survey Layanan</span>
              <span class="info-box-number">{{ count($survey_layanan) }}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Grafik Survey Kepuasan Terhadap Tabung</h3>
              <br/>
              <ul>
                <li>31 - 35 = Sangat Baik</li>
                <li>21 - 30 = Baik</li>
                <li>11 - 20 = Cukup</li>
                <li>0 - 10 = Kurang</li>
              </ul>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="bar-produk" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
        </div>
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Grafik Survey Kepuasan Terhadap Pelayanan</h3>
              <br/>
              <ul>
                <li>31 - 35 = Sangat Baik</li>
                <li>21 - 30 = Baik</li>
                <li>11 - 20 = Cukup</li>
                <li>0 - 10 = Kurang</li>
              </ul>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="bar-layanan" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
        </div>
      </div>
    <br/>
  </section>
@endsection

@section('javascript')
<script src="{{ asset('adminlte/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/Flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/Flot/jquery.flot.categories.js') }}"></script>
<script>
  $(function () {
  var bar_produk = {
        data : [
          @foreach($csi_gas as $key => $value)
             ['{{ $value->kode_csi_gas }}', {{ $value->ws_gas }}],
          @endforeach
        ],
        color: '#3c8dbc'
      }
      $.plot('#bar-produk', [bar_produk], {
        grid  : {
          borderWidth: 1,
          borderColor: '#f3f3f3',
          tickColor  : '#f3f3f3'
        },
        series: {
          bars: {
            show    : true,
            barWidth: 0.4,
            align   : 'center'
          }
        },
        xaxis : {
          mode      : 'categories',
          tickLength: 0
        }
      })

      var bar_layanan = {
        data : [
          @foreach($csi_layanan as $key => $value)
             ['{{ $value->kode_csi_layanan }}', {{ $value->ws_layanan }}],
          @endforeach
        ],
        color: '#3c8dbc'
      }
      $.plot('#bar-layanan', [bar_layanan], {
        grid  : {
          borderWidth: 1,
          borderColor: '#f3f3f3',
          tickColor  : '#f3f3f3'
        },
        series: {
          bars: {
            show    : true,
            barWidth: 0.4,
            align   : 'center'
          }
        },
        xaxis : {
          mode      : 'categories',
          tickLength: 0
        }
      })

    })
</script>
@endsection