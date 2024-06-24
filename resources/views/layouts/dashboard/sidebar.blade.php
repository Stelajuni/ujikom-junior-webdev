<div class="iq-sidebar">
    <div class="iq-navbar-logo d-flex justify-content-between">
        <a href="index.html" class="header-logo">
            <img src="images/nusantara.svg" class="img-fluid rounded" alt="">
            <span>Nusantara Express</span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="main-circle"><i class="ri-menu-line"></i></div>
                <div class="hover-circle"><i class="ri-close-fill"></i></div>
            </div>
        </div>
    </div>

    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="
                @if (request()->url() == route('dashboard'))
                    active
                @endif
                ">
                    <a href="{{ route('dashboard') }}" class="iq-waves-effect"><span
                            class="ripple rippleEffect"></span><i
                            class="las la-home iq-arrow-left"></i><span>Dashboard</span></a>
                </li>

                <li class="
                @if (request()->url() == route('employees.index'))
                    active
                @endif
                ">
                    <a href="{{ route('employees.index')}}" class="iq-waves-effect" ><span
                        class="ripple rippleEffect"></span><i
                        class="lab la-elementor iq-arrow-left"></i><span>Detail Kurir</span></a>
                </li>

                <li class="
                @if (request()->url() == route('users.index'))
                    active
                @endif
                ">
                    <a href="{{ route('users.index') }}" class="iq-waves-effect" ><span
                        class="ripple rippleEffect"></span><i
                        class="las la-user-tie iq-arrow-left"></i><span>Pengguna</span></a>
                </li>

            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
