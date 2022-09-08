@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
@endsection

@section('content')
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="{{ route('home_admin') }}"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Pertanyaan Tabung</li>
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
                <h3 class="box-title">Pertanyaan Tabung</h3>
          </div>
          <div class="box-body table-responsive">
            <form action="{{ route('update_pertanyaan_produk') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group has-feedback">
            <input type="hidden" name="pertanyaan_produk_id" readonly class="form-control" value="{{ $produk->pertanyaan_produk_id }}" readonly>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 1</label>
                <textarea name="pertanyaan_produk1" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk1 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 2</label>
                <textarea name="pertanyaan_produk2" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk2 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 3</label>
                <textarea name="pertanyaan_produk3" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk3 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 4</label>
                <textarea name="pertanyaan_produk4" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk4 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 5</label>
                <textarea name="pertanyaan_produk5" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk5 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 6</label>
                <textarea name="pertanyaan_produk6" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk6 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 7</label>
                <textarea name="pertanyaan_produk7" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk7 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 8</label>
                <textarea name="pertanyaan_produk8" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk8 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 9</label>
                <textarea name="pertanyaan_produk9" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk9 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 10</label>
                <textarea name="pertanyaan_produk10" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk10 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 11</label>
                <textarea name="pertanyaan_produk11" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk11 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 12</label>
                <textarea name="pertanyaan_produk12" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk12 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 13</label>
                <textarea name="pertanyaan_produk13" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk13 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 14</label>
                <textarea name="pertanyaan_produk14" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk14 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 15</label>
                <textarea name="pertanyaan_produk15" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk15 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 16</label>
                <textarea name="pertanyaan_produk16" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk16 }}</textarea>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group has-feedback">
                <label>Pertanyaan 17</label>
                <textarea name="pertanyaan_produk17" class="form-control" cols="5" rows="2" required> {{ $produk->pertanyaan_produk17 }}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            
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