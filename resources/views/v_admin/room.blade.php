@extends('templates.admin')
@section('title', 'Rooms')

@section('content')
<h3 class="display fw-bold lh-1 my-3"><i class="fa-solid fa-house"></i> Daftar Rooms Yang Terposting.</h3>
<a href="/admin/room/create" class="btn btn-primary mb-3">Tambah Room</a>

    <div class="col-lg-12 ">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>No Kamar</th>
                            <th>Kapasitas</th>
                            <th>Category Pinjam</th>
                            <th>Category</th>
                            <th>Harga</th>
                            <th>Peta</th>
                            <th class="w-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('storage/' . $room->image) }}" alt="Room Image" width="50"></td>
                            <td>{{ $room->nama_kamar }}</td>
                            <td>{{ $room->no_kamar }}</td>
                            <td>{{ $room->kapasitas }}</td>
                            <td>{{ $room->category_pinjam }}</td>
                            <td>{{ $room->category }}</td>
                            <td>{{ $room->harga }}</td>
                            <td>{{ $room->peta }}</td>
                            <td class="w-3 ">
                                <a href="/admin/room/edit/{{ $room->id }}" class="m-2 btn btn-primary btn-sm">Edit</a>
                                <form action="/admin/room/delete/{{ $room->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yaqin ingin menghapus room ini ?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
