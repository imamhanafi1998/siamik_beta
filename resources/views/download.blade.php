@extends('masterapp')

@section('content')
  <div class="container p-3 bg-info rounded bg-white">
    <div class="row">
      <div class="col">
        <div class="row">
          <div class="col">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nama File</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kalender Akademik</td>
                  <td>Kalender Akademik Tahun 2019/2020</td>
                  <td><div class="btn btn-info">Download</div></td>
                </tr>
                <tr>
                  <td>Tabel Pembayaran SPP</td>
                  <td>Pembayaran SPP</td>
                  <td><div class="btn btn-info">Download</div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
