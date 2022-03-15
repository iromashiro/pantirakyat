<ul class="navbar-nav">
    <li class="nav-item mb-2 mt-0">
        <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav"
            role="button" aria-expanded="false">
            <img src="" class="avatar">
            <span class="nav-link-text ms-2 ps-1"> {{ auth('admin')->user()->name }}</span>
        </a>
        <div class="collapse" id="ProfileNav" style="">
            <ul class="nav ">

            </ul>
        </div>
    </li>
    <hr class="horizontal light mt-0">
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin')}}">
            <i class="material-icons-round opacity-10">dashboard</i>
            <span class="nav-link-text ms-2 ps-1">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white"
            aria-controls="dashboardsExamples" role="button" aria-expanded="false">
            <i class="material-icons-round opacity-10">dashboard</i>
            <span class="nav-link-text ms-2 ps-1">Peserta</span>
        </a>
        <div class="collapse" id="dashboardsExamples">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link text-white " href="{{route('tambah.peserta')}}">
                        <span class="sidenav-mini-icon"> ID </span>
                        <span class="sidenav-normal ms-2 ps-1"> Input Data </span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link text-white " href="{{route('index.peserta')}}">
                        <span class="sidenav-mini-icon"> IDP </span>
                        <span class="sidenav-normal ms-2 ps-1"> Index Data Peserta </span>
                    </a>
                </li>

                @admin('dinsos')
                <li class="nav-item ">
                    <a class="nav-link text-white " href="{{route('index.dinsos')}}">
                        <span class="sidenav-mini-icon"> VD </span>
                        <span class="sidenav-normal ms-2 ps-1"> Verifikasi Dinsos </span>
                    </a>
                </li>
                @endadmin

                @admin('asuransi')
                <li class="nav-item ">
                    <a class="nav-link text-white " href="{{route('index.asuransi')}}">
                        <span class="sidenav-mini-icon"> VA </span>
                        <span class="sidenav-normal ms-2 ps-1"> Verifikasi Asuransi </span>
                    </a>
                </li>
                @endadmin
            </ul>
        </div>
    </li>

    @admin('super')
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#dashboardsExample" class="nav-link text-white"
            aria-controls="dashboardsExample" role="button" aria-expanded="false">
            <i class="material-icons-round opacity-10">dashboard</i>
            <span class="nav-link-text ms-2 ps-1">Setting</span>
        </a>
        <div class="collapse" id="dashboardsExample">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link text-white " href="{{route('berita.index')}}">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal ms-2 ps-1"> Berita </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white " href="{{route('profil.index')}}">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal ms-2 ps-1"> Profil </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endadmin

    <li class="nav-item">
        <a class="nav-link" href="/admin/logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="material-icons-round opacity-10">dashboard</i>
            <span class="nav-link-text ms-2 ps-1">Logout</span>
        </a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>





</ul>
