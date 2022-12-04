@extends('master.adminm')
@section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Gambar
                        </th>
                        <th>
                          Judul
                        </th>
                        <th>
                          Deskripsi
                        </th>
                        <th>
                          Tanggal
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img src="{{ asset('img/portfolio/books-1.jpg') }}" style="height:100px;">
                          </td>
                          <td>
                            Pelangi Jerman
                          </td>
                          <td>
                            Ragil menari dengan background pelangi di Jerman
                          </td>
                          <td>
                            9/11/2022
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="{{ asset('img/profile-img.jpg') }}" style="height:100px;">
                          </td>
                          <td>
                            Kakek Kimochi
                          </td>
                          <td>
                            Jepang kasih paham bahwa Miyabi lebih nikmat daripada Ragil
                          </td>
                          <td>
                            9/11/2022
                          </td>
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
@endsection