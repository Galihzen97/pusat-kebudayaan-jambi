<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Panel Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/assets/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>DASHBOARD</p>
                    </a>
                </li>
                <li class="nav-header">BERANDA</li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            BANNER
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            FOTO
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            VIDEO
                        </p>
                    </a>
                </li>
                <li class="nav-header">TENTANG KAMI</li>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            PROFIL
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            PENGURUS
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            BIDANG KEGIATAN
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-header">ARTIKEL</li>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('programKegiatanShow') }}"
                        class="nav-link {{ request()->is('admin/artikel/program-dan-kegiatan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            PROGRAM & KEGIATAN
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/artikel/info-publik*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            INFO PUBLIK
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('beritaMediaShow') }}"
                                class="nav-link {{ request()->is('admin/artikel/info-publik/berita-media') ? 'active' : '' }}">
                                <i class="nav-icon far fa-edit"></i>
                                <p>BERITA MEDIA</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('siaranPersShow') }}"
                                class="nav-link {{ request()->is('admin/artikel/info-publik/siaran-pers') ? 'active' : '' }}">
                                <i class="nav-icon far fa-edit"></i>
                                <p>SIARAN PERS</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            OASE
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('oaseOpiniShow') }}"
                                class="nav-link {{ request()->is('admin/artikel/oase-opini') ? 'active' : '' }}">
                                <i class="nav-icon far fa-edit"></i>
                                <p>OPINI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('oaseEsaiShow') }}"
                                class="nav-link {{ request()->is('admin/artikel/oase-esai') ? 'active' : '' }}">
                                <i class="nav-icon far fa-edit"></i>
                                <p>ESAI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('oasePustakaShow') }}"
                                class="nav-link {{ request()->is('admin/artikel/oase-pustaka') ? 'active' : '' }}">
                                <i class="nav-icon far fa-edit"></i>
                                <p>PUSTAKA</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('oaseInfografisShow') }}"
                                class="nav-link {{ request()->is('admin/artikel/oase-infografis') ? 'active' : '' }}">
                                <i class="nav-icon far fa-edit"></i>
                                <p>INFOGRAFIS</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">LAIN LAIN</li>
                <li class="nav-item">
                    <a href="iframe.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>PENGATURAN</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
