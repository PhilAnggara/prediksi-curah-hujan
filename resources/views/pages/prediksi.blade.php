@extends('layouts.app')
@section('title', 'Prediksi Curah Hujan')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title mb-3 d-flex align-items-center justify-content-between">
    <h3>Hasil Prediksi</h3>
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
  <script></script>
@endpush