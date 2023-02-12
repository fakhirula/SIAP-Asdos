<header class="mb-5">
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo"></a>
            </div>
            <div class="header-top-right">

                <div class="dropdown">
                    @if (session()->has('user'))
                    <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md2">
                            <img src="{{ asset('assets/images/faces/1.jpg') }}" alt="Avatar">
                        </div>
                        <div class="text">
                            <h6 class="user-dropdown-name">
                                {{ session()->get('user')->name }}
                            </h6>
                            <p class="user-dropdown-status text-sm text-muted">{{ session()->get('user')->role->name }}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                        <li><a class="dropdown-item" href="#">My Account</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('auth/logout') }}">Logout</a>
                        </li>
                    </ul>
                    @else
                    <div class="text">
                        <h6 class="user-dropdown-name">
                            <a href="{{ url('auth/login') }}">Login</a>
                        </h6>
                    </div>
                    @endif
                </div>

                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <ul>
                <li class="menu-item  ">
                    <a href="{{ url('/') }}" class='menu-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class="menu-item has-sub">
                    <a href="#" class='menu-link'>
                        <i class="bi bi-stack"></i>
                        <span>Module</span>
                    </a>
                    <div class="submenu">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item  ">
                                    <a href="https://s.id/notionPW1" target="_blank" class='submenu-link'>Pem. Web 1</a>
                                </li>
                                <li class="submenu-item  ">
                                    <a href="https://s.id/notionPW2" target="_blank" class='submenu-link'>Pem. Web 2</a>
                                </li>
                                <li class=" submenu-item has-sub">
                                    <a href="#" class='submenu-link'>Tutorial</a>
                                    <ul class="subsubmenu">
                                        <li class="subsubmenu-item ">
                                            <a href="#" class="subsubmenu-link">Git</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                @if (session()->has('user'))
                    @if (session()->get('user')->role->name === 'Mahasiswa')
                    <li class="menu-item">
                        <a href="{{ route('presensi.index') }}" class='menu-link'>
                            <i class="bi bi-calendar-check-fill"></i>
                            <span>Kehadiran</span>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="{{ route('assessment.index') }}" class='menu-link'>
                            <i class="bi bi-award-fill"></i>
                            <span>Penilaian</span>
                        </a>
                    </li>


                    @elseif (session()->get('user')->role->name === 'Asdos')
                    <li class="menu-item">
                        <a href="{{ route('assessment-rombel.index') }}" class='menu-link'>
                            <i class="bi bi-award-fill"></i>
                            <span>Penilaian</span>
                        </a>
                    </li>
                    @endif
                @endif


                <li class="menu-item  ">
                    <a href="{{ route('document-template.index') }}" class='menu-link'>
                        <i class="bi bi-file-earmark-text-fill"></i>
                        <span>Template Surat</span>
                    </a>
                </li>


                <li class="menu-item  has-sub">
                    <a href="#" class='menu-link'>
                        <i class="bi bi-life-preserver"></i>
                        <span>Support</span>
                    </a>
                    <div class="submenu ">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">

                                <li class="submenu-item  ">
                                    <a href="https://zuramai.github.io/mazer/docs" class='submenu-link'>Documentation</a>
                                </li>
                                <li class="submenu-item  ">
                                    <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='submenu-link'>Contribute</a>
                                </li>
                                <li class="submenu-item  ">
                                    <a href="https://github.com/zuramai/mazer#donation" class='submenu-link'>Donate</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</header>