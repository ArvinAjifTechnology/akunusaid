@extends('layouts.admin.main')

@section('title', 'Delivery Managemet')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Manajemen Pengiriman</h2>
        {{-- <a href="#" class="btn btn-primary mb-2">Tambah Pengiriman</a> --}}
         <!-- Vertically centered Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
          Tambah Data
        </button>
        <div class="modal fade" id="verticalycentered" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Vertically Centered</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div><!-- End Vertically centered Modal-->
        <table class="table table-bordered datatable">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nomor Resi</th>
              <th>Tanggal Pengiriman</th>
              <th>Estimasi Tiba</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>123456</td>
              <td>2022-05-15</td>
              <td>2022-05-20</td>
              <td>Dalam Pengiriman</td>
              <td>
                <a href="#" class="btn btn-success">Ubah Status</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>654321</td>
              <td>2022-05-20</td>
              <td>2022-05-25</td>
              <td>Selesai</td>
              <td>
                <a href="#" class="btn btn-success">Ubah Status</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
