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
                <a href="#"><i class="fa fa-home" aria-hidden="true"></i> <span class="nav-label">Home</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('admin-home/sliders') }}" id="managestf">Sliders</a></li>
                    <li><a href="{{ url('admin-home/testimonials')}}" id="managestfpos">Testimonials</a></li>
                </ul>
            </li>
           
        </ul>

    </div>
</nav>
