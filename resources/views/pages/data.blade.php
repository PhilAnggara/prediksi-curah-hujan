@extends('layouts.app')
@section('title', 'Prediksi Curah Hujan')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title mb-3 d-flex align-items-center justify-content-between">
    <h3>Data Aktual</h3>
    <button class="btn icon icon-left btn-success round" data-toggle="modal" data-target="#tambahDataModal">
      <i class="fal fa-file-plus"></i>
      Tambah Data
    </button>
  </div>
  <section class="section">
    <div class="row mb-2">

      @if ($errors->any())
        <div class="col">
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
          @endforeach
        </div>
      @endif

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover border text-center text-nowrap" id="dataTable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" width="300">Tanggal</th>
                    <th scope="col">Curah Hujan</th>
                    <th scope="col" width="100px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Senin, 5 Juli 2021</td>
                    <td>30.5</td>
                    <td>
                      <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <button type="button" class="btn icon btn-primary" data-toggle="modal" data-target="#editModal-id">
                          <i class="fal fa-edit" data-toggle="tooltip" title="Edit"></i>
                        </button>
                        <button type="button" class="btn icon btn-danger" data-toggle="modal" data-target="#hapusModal-id">
                          <i class="fal fa-trash-alt" data-toggle="tooltip" title="Hapus"></i>
                        </button>
                    </div>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
@endsection

@push('addon-style')
  <style></style>
@endpush
@push('addon-script')
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable( {
        language: {
          search: "",
          searchPlaceholder: "Cari...",
          zeroRecords: "Data tidak ditemukan",
          info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
          infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
          infoFiltered: "(difilter dari _MAX_ total data)",
          paginate: {
            first:    "Pertama",
            last:     "Terakhir",
            next:     "<i class='fas fa-angle-right'></i>",
            previous: "<i class='fas fa-angle-left'></i>"
          },
        },
        // paging:  false,
        lengthChange: false,
        ordering: false,
        // searching: false,
        info: false,
        processing: true,
        pageLength:10,
      });
    });
  </script>
@endpush