<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.dashboard')}}"><i data-feather="home"> </i><span>Dashboard</span></a></li>

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('courseregistration.index')}}"><i data-feather="monitor"> </i><span>Course Registration</span></a></li>

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>faculty/department/level</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('faculty.index')}}">faculty</a></li>
                            <li><a href="{{route('department.index')}}">Departments</a></li>
                            <li><a href="{{route('level.index')}}">Levels</a></li>

                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('semester.index')}}"><i data-feather="heart"> </i><span>Semester</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('result.index')}}"><i data-feather="list"> </i><span>Result</span></a></li>
                    <li class="sidebar-main-title">
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
