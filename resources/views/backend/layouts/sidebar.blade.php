<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element" >
                    <img src="{{ asset('backend/img/logo.png') }}" class="m-auto w-75" style="height: 100%;">
                </div>
                <div class="logo-element">
                    GIRAFFE OIL
                </div>
            </li>
          
            <li id="dashboard">
                <a href="{{ url('dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>
            </li>
          
            <li id="dropdown">
                <a href="#" {{ 'admin/sliders' == request()->path() ? 'active' : '' }}><i class="fa fa-home" aria-hidden="true"></i> <span class="nav-label">Home</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('admin/sliders') }}" class="{{ 'admin/sliders' == request()->path() ? 'active' : '' }}" id="managestf">Sliders</a></li>
                    <li><a href="{{ url('admin/testimonials')}}" id="managestfpos">Testimonials</a></li>
                </ul>
            </li>

            <li id="dropdown">
                <a href="#"><i class="fa-regular fa-address-card"></i>  <span class="nav-label">About us</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('admin/about-us') }}" id="managestf">About Giraffe</a></li>
                    <li><a href="{{ url('admin/team')}}" id="managestfpos">Team</a></li>
                </ul>
            </li>

            <li id="dropdown">
                <a href="#"><i class="fa-solid fa-list-check"></i>  <span class="nav-label">Services</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('admin/services-location') }}" id="managestf">Services Location</a></li>
                    <li><a href="{{ url('admin/team')}}" id="managestfpos">Services</a></li>
                </ul>
            </li>

            <li id="dashboard">
                <a href="{{ url('dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">News</span> </a>
            </li>

            <li id="dashboard">
                <a href="{{ url('dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Contacts</span> </a>
            </li>
           
        </ul>

    </div>
</nav>
