<aside class="main-sidebar sidebar-dark-primary elevation-4">

    @php $i = 1; @endphp
    @foreach ($kelolalogo as $item)
    <a href=" {{ route('homeadmin') }} " class="brand-link {{ $i == '1' ? 'active':'' }}" href="{{ url('/') }}">
        <img style="justify-content:center;border-radius:10px;" src="{{ url('assets/logo') }}/{{ $item->gambar }}" class="img-fluid">
    </a>
    @endforeach

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fa-regular fa-newspaper"></i>&nbsp;
                        <p>
                            Kelola Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelolalogo') }}" class="nav-link">
                        <i class="fa-solid fa-image"></i>&nbsp;
                        <p>
                            Kelola Logo
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelolaslider') }}" class="nav-link">
                        <i class="fa-solid fa-sliders"></i>&nbsp;
                        <p>
                            Kelola Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelolaabout') }}" class="nav-link">
                        <i class="fa-sharp fa-solid fa-question"></i>&nbsp;
                        <p>
                            Kelola About
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelolakontak') }}" class="nav-link">
                        <i class="fa-solid fa-address-book"></i>&nbsp;
                        <p>
                            Kelola Kontak
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelolapesan') }}" class="nav-link">
                        <i class="fa-solid fa-address-book"></i>&nbsp;
                        <p>
                            Kelola Pesan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelolalayanan') }}" class="nav-link">
                        <i class="fa-solid fa-address-book"></i>&nbsp;
                        <p>
                            Kelola Layanan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>