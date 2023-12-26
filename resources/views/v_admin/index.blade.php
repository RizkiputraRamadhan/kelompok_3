@extends('templates.admin')
@section('title', 'Home')

@section('content')
    <h3 class="display fw-bold lh-1 my-3"><i class="fa-solid fa-house"></i> room yang sedang pesan</h3>
    <div class="col-lg-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card">
            <div class="table-responsive">
                <table class="table-vcenter card-table table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NO Kamar</th>
                            <th>Nama Kamar</th>
                            <th>Nama Tamu</th>
                            <th>Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $room->no_kamar }}</td>
                                <td>{{ $room->nama_kamar }}</td>
                                <td>{{ $room->user->name }}</td>
                                <td>{{ $room->harga }}</td>
                                <td>
                                    @if ($room->status == 2)
                                     Sedang ditempati
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
