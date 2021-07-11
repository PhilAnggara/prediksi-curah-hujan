@extends('layouts.app')
@section('title', 'Prediksi Curah Hujan')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title mb-3 d-flex align-items-center justify-content-between">
    <h3>Hasil Prediksi</h3>
  </div>
  <section class="section">

    <div class="row mb-2">

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div id="chart"></div>
          </div>
        </div>
      </div>
      
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Prediksi Curah Hujan 3 hari kedepan</h4>
          </div>
          <div class="card-body">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{ Carbon\Carbon::now()->addDays()->isoFormat('dddd, D MMMM') }}</h5>
                </div>
                <p class="mb-1">Curah Hujan = <strong>30.5</strong></p>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{ Carbon\Carbon::now()->addDays(2)->isoFormat('dddd, D MMMM') }}</h5>
                </div>
                <p class="mb-1">Curah Hujan = <strong>30.5</strong></p>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{ Carbon\Carbon::now()->addDays(3)->isoFormat('dddd, D MMMM') }}</h5>
                </div>
                <p class="mb-1">Curah Hujan = <strong>30.5</strong></p>
              </a>
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
  @include('includes.chart-script')
@endpush