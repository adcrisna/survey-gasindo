@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
@endsection

@section('content')
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="{{ route('home_admin') }}"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Pertanyaan Layanan</li>
    </ol>
  </section>
  <br/>
  <br/>
  <section class="content">
            @if(\Session::has('msg_success'))
           <h5> <div class="alert alert-success">
              {{ \Session::get('msg_success')}}
            </div></h5>
            @endif
            @if(\Session::has('msg_gagal_foto'))
           <h5> <div class="alert alert-danger">
              {{ \Session::get('msg_gagal_foto')}}
            </div></h5>
            @endif
    <div class="row">
      <div class="col-xs-12">
         <div class="box">
          <div class="box-header">
                <h3 class="box-title">Pertanyaan Layanan</h3>
          </div>
          <div class="box-body table-responsive">
            <form action="{{ route('update_pertanyaan_layanan') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group has-feedback">
            <input type="hidden" name="pertanyaan_layanan_id" readonly class="form-control" value="{{ $layanan->pertanyaan_layanan_id }}" readonly>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 1</label>
                <textarea name="pertanyaan_layanan1" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan1 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 2</label>
                <textarea name="pertanyaan_layanan2" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan2 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 3</label>
                <textarea name="pertanyaan_layanan3" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan3 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 4</label>
                <textarea name="pertanyaan_layanan4" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan4 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 5</label>
                <textarea name="pertanyaan_layanan5" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan5 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 6</label>
                <textarea name="pertanyaan_layanan6" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan6 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 7</label>
                <textarea name="pertanyaan_layanan7" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan7 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 8</label>
                <textarea name="pertanyaan_layanan8" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan8 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 9</label>
                <textarea name="pertanyaan_layanan9" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan9 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 10</label>
                <textarea name="pertanyaan_layanan10" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan10 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 11</label>
                <textarea name="pertanyaan_layanan11" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan11 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 12</label>
                <textarea name="pertanyaan_layanan12" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan12 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 13</label>
                <textarea name="pertanyaan_layanan13" class="form-control" cols="5" rows="2" required> {{ $layanan->pertanyaan_layanan13 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-2 col-xs-offset-5">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
            </div>
          </div>
        </form>
          </div>
         </div>    
      </div>
    </div>
    <br/>
  </section>
@endsection

@section('javascript')
<script src="{{ asset('adminlte/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/raphael/raphael-min.js') }}"></script>
@endsection