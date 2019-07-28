@extends('masterapp')

@section('content')
  <div class="container rounded">
    <div class="row">
      <div class="col">
        <div class="row bg-white rounded text-light">
          <div class="col">
            <div class="row p-3  mr-auto ml-auto text-light">
              <div class="col">

                <div class="input-group">
                  <select class="custom-select" id="inputGroupSelect04">
                    <option selected>Pilih Jurusan</option>
                    <option value="1">Sistem Informasi</option>
                    <option value="2">Teknik Informatika</option>
                    <option value="3">Hukum</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-success" type="button">Cari</button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="row bg-white rounded text-light mt-1">
          <div class="col">
            <div class="row p-3 mr-auto ml-auto text-dark">
              <div class="col">

                <span>Anda Mencari Topscore Jurusan :<b> Sistem Informasi</b></span>

              </div>
            </div>
          </div>
        </div>

        <div class="row rounded text-light mt-2 p-3">
          <div class="col">
            <div class="row bg-info p-3 text-light rounded-top  mr-auto ml-auto">
              <div class="col">
                <h5><b>Topscore Peminjam Buku Perpustakaan Pusat</b></h5>
              </div>
            </div>
            <div class="row p-3  mr-auto ml-auto text-dark bg-light rounded-bottom">
              <div class="col">

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Angkatan</th>
                      <th scope="col">Nama Mahasiswa</th>
                      <th scope="col">NPM</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">17</th>
                      <td>Dinda Mega Safitri</td>
                      <td>1708201007</td>
                    </tr>
                    <tr>
                      <th scope="row">16</th>
                      <td>Kolfinna Revi W</td>
                      <td>1635010021</td>
                    </tr>
                    <tr>
                      <th scope="row">15</th>
                      <td >Ade Prasetya Indra Setiawan</td>
                      <td>1535010093</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
            <div class="row bg-info p-3 text-light rounded-top mt-4 mr-auto ml-auto">
              <div class="col">
                <h5><b>Topscore Sementara IPS Semester GENAP 2017/2018</b></h5>
              </div>
            </div>
            <div class="row bg-light p-3 text-light rounded-bottom mr-auto ml-auto">
              <div class="col">

                <div class="row bg-success p-3 text-light rounded-top mt-2 mr-auto ml-auto">
                  <div class="col">
                    <h5><b>Angkatan 2017</b></h5>
                  </div>
                </div>
                <div class="row bg-white p-3 text-dark rounded-bottom mr-auto ml-auto">
                  <div class="col">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Angkatan</th>
                          <th scope="col">Nama Mahasiswa</th>
                          <th scope="col">NPM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">17</th>
                          <td>Dinda Mega Safitri</td>
                          <td>1708201007</td>
                        </tr>
                        <tr>
                          <th scope="row">16</th>
                          <td>Kolfinna Revi W</td>
                          <td>1635010021</td>
                        </tr>
                        <tr>
                          <th scope="row">15</th>
                          <td >Ade Prasetya Indra Setiawan</td>
                          <td>1535010093</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row bg-success p-3 text-light rounded-top mt-4 mr-auto ml-auto">
                  <div class="col">
                    <h5><b>Angkatan 2017</b></h5>
                  </div>
                </div>
                <div class="row bg-white p-3 text-dark rounded-bottom mr-auto ml-auto">
                  <div class="col">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Angkatan</th>
                          <th scope="col">Nama Mahasiswa</th>
                          <th scope="col">NPM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">17</th>
                          <td>Dinda Mega Safitri</td>
                          <td>1708201007</td>
                        </tr>
                        <tr>
                          <th scope="row">16</th>
                          <td>Kolfinna Revi W</td>
                          <td>1635010021</td>
                        </tr>
                        <tr>
                          <th scope="row">15</th>
                          <td >Ade Prasetya Indra Setiawan</td>
                          <td>1535010093</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row bg-success p-3 text-light rounded-top mt-4 mr-auto ml-auto">
                  <div class="col">
                    <h5><b>Angkatan 2017</b></h5>
                  </div>
                </div>
                <div class="row bg-white p-3 text-dark rounded-bottom mr-auto ml-auto">
                  <div class="col">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Angkatan</th>
                          <th scope="col">Nama Mahasiswa</th>
                          <th scope="col">NPM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">17</th>
                          <td>Dinda Mega Safitri</td>
                          <td>1708201007</td>
                        </tr>
                        <tr>
                          <th scope="row">16</th>
                          <td>Kolfinna Revi W</td>
                          <td>1635010021</td>
                        </tr>
                        <tr>
                          <th scope="row">15</th>
                          <td >Ade Prasetya Indra Setiawan</td>
                          <td>1535010093</td>
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
  </div>
@endsection
