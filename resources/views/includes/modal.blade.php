<!-- Modal tambah data -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title white" id="tambahDataModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('data.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="modal-body">

          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
          </div>
          <div class="form-group">
            <label for="nilai_curah_hujan">Curah Hujan</label>
            <input type="text" class="form-control" id="nilai_curah_hujan" name="nilai_curah_hujan" value="{{ old('nilai_curah_hujan') }}" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn icon icon-left btn-success">
            <i class="fal fa-plus"></i>
            Tambahkan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal ubah data -->
@foreach ($items as $item)
<div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title white" id="editModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('data.update', $item->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="modal-body">

          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $item->tanggal }}" required>
          </div>
          <div class="form-group">
            <label for="nilai_curah_hujan">Curah Hujan</label>
            <input type="text" class="form-control" id="nilai_curah_hujan" name="nilai_curah_hujan" value="{{ $item->nilai }}" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn icon icon-left btn-success">
            <i class="fal fa-plus"></i>
            Tambahkan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach