@extends('templates.default')

@section('content')
<main class="bg-light">

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Selamat Datang DI Penginapan Syar'iyah</h1>
          <p class="lead text-muted">Mengutamakan kenyamanan, kebersihan, ketertiban dan keindahan alam tradisional.<p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-secondary">Cari Room</button>
                </div>
                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
              </div>
          </p>
        </div>
      </div>
    </section>

    <section>
        <div class="album py-5 bg-light">
            <div class="container">

              <div class="row ">
                <div class="col">
                  <div class="card shadow-sm">
                    <figure><img  src="{{ asset('storage/' . $rooms->image) }}" alt="Shoes" /></figure>
                    <div class="card-body">
                        <p style="font-weight: 700;" class="font-weight-bold">{{ $rooms->nama_kamar}}</p>
                        <p class="card-text">{{ $rooms->desc}}.</p>
                        <p class="card-text">Kapasitas : {{ $rooms->kapasitas}}.</p>
                        <p class="card-text">Kategori Pinjam : {{ $rooms->category_pinjam}}.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <small class="text-muted">Rp.{{ $rooms->harga}}</small>
                      </div>
                      <button type="button" class="btn btn-sm btn-outline-secondary">bocking Sekarang</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        @foreach ($roomsDesc as $room)
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <figure><img src="{{ asset('storage/' . $room->image) }}" alt="Shoes" /></figure>
              <div class="card-body">
                <p style="font-weight: 700;" class="font-weight-bold">{{ $room->nama_kamar }}</p>
                <p class="font-weight-bold">{{ $room->desc }}..</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <small class="text-muted">Rp.{{ $room->harga }}</small>
                </div>
                <a href="/detail/{{ $room->id }}" class="btn btn-sm btn-outline-secondary">Lihat fasilitas</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>

  </main>
@endsection
