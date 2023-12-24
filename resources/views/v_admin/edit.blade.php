@extends('templates.admin')
@section('title', 'Create Data Pasien')

@section('content')
<div class="row col-lg-12">
    <div class="card col-lg-12">
        <div class="card-body">
            <form action="/admin/room/update/{{ $room->id }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="file" class="form-label">Foto Kamar</label>
                    <input type="file" name="file" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="no_kamar" class="form-label">Nomor Kamar</label>
                    <input type="text" name="no_kamar" class="form-control" value="{{ $room->no_kamar }}" placeholder="Masukkan Nomor Kamar">
                </div>

                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="text" name="kapasitas" class="form-control" value="{{ $room->kapasitas }}" placeholder="Masukkan Kapasitas" />
                </div>

                <div class="mb-3">
                    <label for="category_pinjam" class="form-label">Kategori Peminjaman</label>
                    <input type="text" name="category_pinjam" class="form-control" value="{{ $room->category_pinjam }}" placeholder="Masukkan Kategori Peminjaman" />
                </div>

                <div class="mb-3">
                    <label for="nama_kamar" class="form-label">Nama Kamar</label>
                    <input type="text" name="nama_kamar" class="form-control" value="{{ $room->nama_kamar }}" placeholder="Masukkan Nama Kamar" />
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" value="{{ $room->harga }}" placeholder="Masukkan Harga" />
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" name="category" class="form-control" value="{{ $room->category }}" placeholder="Masukkan Kategori" />
                </div>

                <div class="mb-3">
                    <label for="peta" class="form-label">Peta</label>
                    <input type="text" name="peta" class="form-control" value="{{ $room->peta }}" placeholder="Masukkan Peta" />
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" {{ $room->status == 1 ? 'selected' : '' }}>Publish</option>
                        <option value="2" {{ $room->status == 2 ? 'selected' : '' }}>Draft</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <input type="text" name="desc" class="form-control" value="{{ $room->desc }}" placeholder="Masukkan Deskripsi" />
                </div>

                <div class="my-5">
                    <input type="submit" value="Simpan Perubahan" class="btn btn-primary">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
