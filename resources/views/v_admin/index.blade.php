@extends('templates.admin')
@section('title', 'Home')

@section('content')
    <h3 class="display fw-bold lh-1 my-3"><i class="fa-solid fa-house"></i> room yang sedang pesan</h3>
    <div class="col-lg-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table-vcenter card-table table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NO Kamar</th>
                            <th>Nama Kamar</th>
                            <th>Nama Tamu</th>
                            <th>Status</th>
                            <th>Dibuat</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
