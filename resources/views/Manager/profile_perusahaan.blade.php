@extends('layouts.manager')
@section('css')

@endsection

@section('content')
      <section class="content-header">
        <br/>
        <ol class="breadcrumb">
          <li><a href="{{ route('home_manager') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
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
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-6">
                 
                    <div class="box box-primary">
                    
                      <div class="box-body box-profile">
                      <h3 class="profile-username text-center"><b>Profile Perusahaan</b></h3>
                        <img class="profile-user-img img-responsive" src="{{ asset('semvrut.jpeg') }}" style="width: 260px ; height: 160px ;" alt="picture of gas">
                        <br/>
                        
                        <br/>
                        <li class="list-group-item">
                        <b> Nama Perusahaan </b>
                          
                                <p>
                                {{ $profile->nama_perusahaan }}
                                </p>
                                <li class="list-group-item">
                          <b> No. Telepon Perusahaan </b>
                          
                                <p>
                                {{ $profile->no_hp }}
                                </p>
                                <li class="list-group-item">
                          <b> Deskripsi Perusahaan </b>
                          
                                <p>
                                {{ $profile->deskripsi_perusahaan }}
                                </p>
                                <li class="list-group-item">
                          <b> Alamat Perusahaan :</b>
                          
                                <p>
                                {{ $profile->alamat }}
                                </p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                  </div>
                </div>
            </div>
              <!-- /.box-footer -->
           
      </section>
      <!-- /.content -->
 @endsection

@section('javascript')

@endsection
