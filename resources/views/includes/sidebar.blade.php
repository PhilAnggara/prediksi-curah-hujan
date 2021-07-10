<div id="sidebar" class='active'>
  <div class="sidebar-wrapper active">
    <div class="sidebar-header">
      <i class="fad fa-cloud-showers-heavy brand-icon"></i>
      <a href="{{ route('prediksi') }}" class="brand">Prediksi Curah Hujan</a>
    </div>
    <div class="sidebar-menu">
      <ul class="menu">
        <li class='sidebar-title'>Menu Utama</li>
        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
          <a href="{{ route('prediksi') }}" class='sidebar-link'>
            <i class="far fa-cloud-rain"></i>
            <span>Prediksi</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('data') ? 'active' : '' }}">
          <a href="{{ route('data.index') }}" class='sidebar-link'>
            <i class="far fa-table"></i>
            <span>Data Aktual</span>
          </a>
        </li>
      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>