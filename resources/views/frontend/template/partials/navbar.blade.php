<nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="icon-menu"></span>
    </button>
    <a href="index-2.html" class="navbar-brand nav-brand2"><h2><b>UNISCO</b></h2></a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="about.html">About<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admission-form.html">Admissions</a>
            </li>
            <li class="js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="academics.html" class="dropdown-toggle nav-link" data-toggle="dropdown">Academics <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-lg-3">
                                <img src="images/courses_4.jpg" class="img-fluid dropdown-header" alt="#">
                            </li>
                            <li class="col-lg-3">
                                <ul>
                                    <li class="dropdown-header">Science &amp; Technology</li>
                                    <li><a href="course-detail.html">Mechanical Engineering</a></li>
                                    <li><a href="course-detail.html">Computer Science</a></li>
                                    <li><a href="course-detail.html">Electrical Engineering</a></li>
                                    <li><a href="course-detail.html">Civil Engineering</a></li>
                                    <li><a href="course-detail.html">Finance</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                            <li class="col-lg-3">
                                <ul>
                                    <li class="dropdown-header">Management Studies</li>
                                    <li><a href="course-detail.html">Human Resource Management</a></li>
                                    <li><a href="course-detail.html">Communication Engineering</a></li>
                                    <li><a href="course-detail.html">Sales and Marketing</a></li>
                                    <li><a href="course-detail.html">Operations Management</a></li>
                                    <li><a href="course-detail.html">Information Technology</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                            <li class="col-lg-3">
                                <ul>
                                    <li class="dropdown-header">Engineering</li>
                                    <li><a href="course-detail.html">Automobile Engineering</a></li>
                                    <li><a href="course-detail.html">Banking and Finance</a></li>
                                    <li><a href="course-detail.html">Anatomy</a></li>
                                    <li><a href="course-detail.html">Architecture Engineering</a></li>
                                    <li><a href="course-detail.html">Mechatronics Engineering</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="" href="{{route('getpayment')}}">pay fees</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="research.html">Research</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link btn btn-outline-success" href="{{route('user.getregister')}}">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-success" href="{{route('user.getlogin')}}">Login</a>
            </li>
        </ul>
    </div>
</nav>
