@extends('layouts.app')

@section('title', 'Form Barang')

@section('contents')
  <form action="{{ isset($barang) ? route('barang.tambah.update', $barang->id) : route('barang.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($barang) ? 'Form Edit Barang' : 'Form Tambah Barang' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama_cust">Nama pemilik</label>
              <input type="text" class="form-control" id="nama_cust" name="nama_cust" value="{{ isset($barang) ? $barang->nama_cust : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_barang">Nama Barang</label>
              <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($barang) ? $barang->nama_barang : '' }}">
            </div>
            <div class="form-group">
              <label for="no_hp">No HP</label>
              <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ isset($barang) ? $barang->no_hp : '' }}">
            </div>
            <div class="form-group">
              <label for="keluhan">Keluhan</label>
              <input type="text" class="form-control" id="keluhan" name="keluhan" value="{{ isset($barang) ? $barang->keluhan : '' }}">
            </div>
            <div class="form-group">
              <label for="id_kategori">Kelengkapan</label>
							<select name="id_kategori" id="id_kategori" class="custom-select">
								<option value="" selected disabled hidden>-- Pilih Kelengkapan --</option>
								@foreach ($kategori as $row)
									<option value="{{ $row->id }}" {{ isset($barang) ? ($barang->id_kategori == $row->id ? 'selected' : '') : '' }}>{{ $row->nama }}</option>
								@endforeach
							</select>
            </div>
            <div class="form-group">
              <label for="tgl_masuk">
                <strong>Tanggal Masuk<small class="text-danger"> *Wajib Diisi</small></strong>
                <small class="text-info"></small>
              </label>
              <input type="date" id=tgl_masuk name="tgl_masuk" class="form-control" value="{{ isset($barang) ? $barang->tgl_masuk : '' }}" >
            </div>
            <div class="form-group">
              <label for="tgl_jadi">
                <strong>Tanggal Jadi</strong>
                <small class="text-info"></small>
              </label>
              <input type="date" id=tgl_jadi name="tgl_jadi" class="form-control" value="{{ isset($barang) ? $barang->tgl_jadi : '' }}" >
            </div>
            <div class="form-group">
              <label for="harga">Total biaya</label>
              <input type="number" class="form-control" id="harga" name="harga" value="{{ isset($barang) ? $barang->harga : '' }}">
            </div>
        
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
