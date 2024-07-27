<style>
.nav .sub-menu {
    display: none; /* Hide sub-menu by default */
    list-style: none;
    padding-left: 20px; /* Indent sub-menu items */
}

.nav-item:hover > .sub-menu {
    display: block; /* Show sub-menu on hover */
}
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item navbar-brand-mini-wrapper">
          <a class="nav-link navbar-brand brand-logo-mini" href="{{ route('user.dashboard') }}"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </li>
        <li class="nav-item nav-profile">
            <a href="{{ route('user.dashboard') }}" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{ asset('assets/images/logo-mini.svg') }}" alt="profile image">
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{ auth()->user()->name }}</p>
                    <p class="designation">
                        @if(auth()->user()->user_level == 1)

                        @elseif (auth()->user()->user_level == 2)

                        @endif
                    </p>
                </div>

            </a>
        </li>

        {{-- <a href="#" class="nav-link">
        <li class="nav-item nav-category">
            <a href="{{route('index')}}"> <span class="nav-link">Senarai Permohonan</span></a>
        </li>
        </a> --}}
{{--
        <a href="#" class="nav-link">
          <li class="nav-item nav-category">
            <span class="nav-link">Maklumat Pembayaran</span>
          </li>
        </a>

        <a href="#" class="nav-link">
          <li class="nav-item nav-category">
            <span class="nav-link">Cetak</span>
          </li>
        </a> --}}

        <li class="nav-item nav-category">
            <span class="nav-link">MENU SISTEM</span>
        </li>

       <li class="nav-item ">
            <a class="nav-link" href="{{ route('user.dashboard') }}">
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="{{ route('user.profail') }}">
            <span class="menu-title">Profail</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.eborang') }}">
            <span class="menu-title">eborang</span>
        </a>
        <ul class="nav sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.pemegangpassport') }}">
                    <span class="menu-title">pemegang Passport</span>
                </a>
            </li>
        </ul>

        <ul class="nav sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.pemegangbukanpassport') }}">
                    <span class="menu-title">Pemegang Bukan Passport</span>
                </a>
            </li>
        </ul>

    </li>



    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('user.kemasukanbaru') }}">
            <span class="menu-title">Eborang</span>
        </a>
    </li> --}}



        @hasanyrole(['pemeriksa|penyokong|pelulus'])
        <li class="nav-item {{ active_class(['admin-dashboard']) }}">
            <a class="nav-link" href="{{ route('admin.permit.index') }}">
                <span class="menu-title">Permohonan </span>
            </a>
        </li>
        @endhasanyrole
    </ul>
</nav>
