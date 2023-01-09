<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-nav sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon">
            <i class="fas fa-id-badge"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Sipil</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin') ? ' active' : '' }}">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-chart-pie"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Konten
    </div>

    <li class="nav-item {{ request()->is('admin/profile', 'admin/profile/*') ? ' active' : '' }}">
        <a class="nav-link" href="/admin/profile">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Profil</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/posts', 'admin/posts/*', 'admin/post_categories', 'admin/post_categories/*') ? ' active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts"
                    aria-expanded="true" aria-controls="collapsePosts">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
        <div id="collapsePosts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Komponen Berita:</h6>
                <a class="collapse-item" href="/admin/posts">Daftar Berita</a>
                <a class="collapse-item" href="/admin/post_categories">Kategori Berita</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ request()->is('admin/repositories', 'admin/repositories/*', 'admin/repository_categories', 'admin/repository_categories/*') ? ' active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRepositories"
                    aria-expanded="true" aria-controls="collapseRepositories">
            <i class="fas fa-fw fa-book"></i>
            <span>Repositori</span></a>
        <div id="collapseRepositories" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Komponen Repositori:</h6>
                <a class="collapse-item" href="/admin/repositories">Daftar Repositori</a>
                <a class="collapse-item" href="/admin/repository_categories">Kategori Repositori</a>
            </div>
        </div>
    </li>
   
    <li class="nav-item {{ request()->is('admin/information_system', 'admin/information_system/*') ? ' active' : '' }}">
        <a class="nav-link" href="/admin/information_system">
            <i class="fas fa-fw fa-map"></i>
            <span>Sistem Informasi</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/jobs', 'admin/jobs/*', 'admin/applicants', 'admin/applicants/*') ? ' active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJobs"
                    aria-expanded="true" aria-controls="collapseJobs">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Lowongan Kerja</span></a>
        <div id="collapseJobs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Komponen Loker:</h6>
                <a class="collapse-item" href="/admin/applicants">Daftar Pelamar</a>
                <a class="collapse-item" href="/admin/jobs">Buka Lowongan</a>
            </div>
        </div>
    </li>
    
    <li class="nav-item {{ request()->is('admin/events', 'admin/events/*') ? ' active' : '' }}">
        <a class="nav-link" href="/admin/events">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Event</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/gallery', 'admin/gallery/*') ? ' active' : '' }}">
        <a class="nav-link" href="/admin/gallery">
            <i class="fas fa-fw fa-images"></i>
            <span>Gallery</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
