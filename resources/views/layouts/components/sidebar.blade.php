<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" data-key="t-menu">Menu</li>
 
        <li class="{{ Request::is('/') ? 'mm-active' : '' }}">
            <a href="{{ route('home') }}">
                <i class="icon nav-icon" data-eva="grid-outline"></i>
                <span class="menu-item" data-key="t-dashboards">Dashboards</span>
            </a>
            {{-- <ul class="sub-menu" aria-expanded="false">
                <li><a href="index.html" data-key="t-ecommerce">Ecommerce</a></li>
                <li><a href="dashboard-saas.html" data-key="t-saas">Saas</a></li>
                <li><a href="dashboard-crypto.html" data-key="t-crypto">Crypto</a></li>
            </ul> --}}
        </li>
 
        <li class="menu-title" data-key="t-applications">DATA</li>
 
        <li class="{{ Request::is('karyawan*') ? 'mm-active' : '' }}">
            <a href="{{ route('karyawan.index') }}">
                <i class="icon nav-icon" data-eva="people-outline"></i>
                <span class="menu-item" data-key="t-authentication">Karyawan</span>
                <span class="badge rounded-pill badge-soft-primary">{{ \App\Models\Karyawan::count() }}</span>
            </a>
        </li>
    </ul>
 </div>