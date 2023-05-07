@extends('layouts.admin.main')

@section('title', 'Delivery Managemet')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Manajemen Pengiriman</h2>
        <a href="#" class="btn btn-primary mb-2">Tambah Pengiriman</a>
        <table class="table table-bordered">
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
