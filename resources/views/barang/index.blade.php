@extends('layouts.app')

@section('title', 'Data Barang')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
    </div>
    <div class="card-body">
			@if (auth()->user()->level == 'Admin')
      <a href="{{ route('barang.tambah') }}" class="btn btn-primary mb-3">Tambah Barang</a>
			@endif
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama pemilik</th>
              <th>Nama Barang</th>
              <th>No HP</th>
              <th>Keluhan</th>
              <th>Kelengkapan</th>
              <th>Tanggal masuk</th>
              <th>Tanggal jadi</th>
              <th>Total Biaya</th>
							@if (auth()->user()->level == 'Admin')
              <th>Aksi</th>
							@endif
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($data as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->nama_cust  }}</td>
                <td>{{ $row->nama_barang  }}</td>
                <td>{{ $row->no_hp }}</td>
                <td>{{ $row->keluhan }}</td>
                <td>{{ $row->kategori->nama }}</td>
                <td>{{ $row->tgl_masuk }}</td>
                <td>{{ $row->tgl_jadi }}</td>
                <td>{{ $row->harga }}</td>
								@if (auth()->user()->level == 'Admin')
                <td>
                  <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
								@endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
