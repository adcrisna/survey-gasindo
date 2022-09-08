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
           <h5> <div class="alert alert-info">
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
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                    <div class="box box-danger">
                      <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive" src="{{ asset('survey3.png') }}" style="width: 260px ; height: 160px ;" alt="picture of gas">
                        <br/>
                        <h3 class="profile-username text-center"><b>Survey Layanan & Tabung</b></h3>
                        <br/>
                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <center><p> Survey ini merupakan survey kepuasan terhadap Layanan dan Tabung yang diberikan oleh perusahaan, yang bertujuan untuk meningkatkan pelayanan terhadap pelanggan.</p>
                          </li>
                        </ul>
                        <a href="{{ route('survey') }}" class="btn btn-danger btn-block" ><i class="fa fa-edit"> <b>Mulai Survey</b></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                  </div>
                </div>
            </div>
              <!-- /.box-footer -->
           
      </section>
      <!-- /.content -->
 @endsection

@section('javascript')

@endsection
