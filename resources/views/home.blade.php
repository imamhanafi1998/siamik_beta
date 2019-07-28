@extends('masterapp')

@section('content')
<div class="container rounded">
    <div class="row justify-content-center">
        <div class="col-auto p-3 bg-white rounded-left">
          <img src="/img/boss.png" width="100px" alt="" class="mt-2" />
        </div>
        <div class="col-6 p-3 bg-white rounded-right">
          <h4 class="mt-3"><b>{{ Auth::user()->name }}</b></h4>
          <p>
            17082010043
            <br />
            June 02, 1988</p>
        </div>
        <div class="col-3 p-3 ml-2 bg-white rounded">
          <div class="row">
            <div class="col">
              <div class="container p-3 mt-2">
                <h1 align="center" class="text-info"><b>3.10</b></h1>
              <h6 align="center"><b>IPK<b></h6>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row justify-content-center mt-2">
        <div class="col-11 p-3 bg-white rounded">
          <small>Dosen Wali</small>
          <h5><b>SITI MUKAROMAH</b></h5>
          <small>Semester</small>
          <h6><b>04</b></h6>
          <small>Kelas</small>
          <h6><b>PAGI</b></h6>
          <small>Status Registrasi</small>
          <h6><b>Aktif</b></h6>
          <small>Tanggal Registrasi</small>
          <h6><b>1/20/2019</b></h6>
          <small>Keterangan</small>
          <h6><b>-</b></h6>
        </div>
    </div>
</div>
@endsection
