<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Sipatdalev</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SD</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href=""><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a></li>
            <li class="menu-header">Surat</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Surat</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('no_dinas.index') }}">Nota Dinas</a></li>
                    <li><a class="nav-link" href="{{ route('perintah.index') }}">Perintah</a></li>
                </ul>
            </li>
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Riwayat</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">Surat No. Dinas</a></li>
                    <li><a class="nav-link" href="">Surat Perintah</a></li>
                </ul>
            </li> --}}
            <li class="menu-header">Pegawai</li>
            <li><a class="nav-link" href="{{ route('employee.index') }}"><i class="fas fa-user"></i>
                    <span>Pegawai</span></a></li>
            <li class="menu-header">Admin</li>
            <li><a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-pencil-ruler"></i>
                    <span>User</span></a></li>
        </ul>
    </aside>
</div>
