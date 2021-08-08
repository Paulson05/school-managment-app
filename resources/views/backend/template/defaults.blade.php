

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
@include('backend.template.partials.head')

</head>

    <body class=" sidebar-mini ">

      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->





        <div class="wrapper ">

            <div class="sidebar" data-color="orange">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->

    <div class="logo">
        <a href="http://www.creative-tim.com/" class="simple-text logo-mini">
            CT
        </a>

        <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
          Creative Tim
        </a>

        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-outline-white btn-icon btn-round">
              <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
              <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
          </button>
  	    </div>

    </div>

    <div class="sidebar-wrapper" id="sidebar-wrapper">

      @include('backend.template.partials.sidenavbar')
    </div>
</div>


            <div class="main-panel" id="main-panel">
              <!-- Navbar -->
@include('backend.template.partials.navbar')
<!-- End Navbar -->
    <div class="panel-header">

  <canvas id="bigDashboardChart"></canvas>


</div>


                  <div class="content">


















@yield('content')

<div class="row">
  <div class="col-md-12">


















  </div>
</div>

                  </div>

               @include('backend.template.partials.footer')


             </div>

        </div>

            <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
						<span class="badge filter badge-yellow" data-color="yellow"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>


            <li class="header-title">
                Sidebar Mini
            </li>
            <li class="adjustments-line">

              <div class="togglebutton switch-sidebar-mini">
                <span class="label-switch">OFF</span>
                <input type="checkbox" name="checkbox" checked class="bootstrap-switch"
                  data-on-label=""
                  data-off-label=""
                  />
                <span class="label-switch label-right">ON</span>
              </div>
            </li>

            <li class="button-container">
                <a href="https://www.creative-tim.com/product/now-ui-dashboard-pro" target="_blank" class="btn btn-primary btn-block btn-round">Buy Now</a>
                <a href="https://demos.creative-tim.com/now-ui-dashboard-pro/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    Documentation
                </a>
                <a href="https://www.creative-tim.com/product/now-ui-dashboard" target="_blank" class="btn btn-info btn-block btn-round">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    Get Free Demo!
                </a>
            </li>




            <li class="header-title">Thank you for 95 shares!</li>

            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
                <br>
                <br>
                <a class="github-button" href="https://github.com/creativetimofficial/ct-now-ui-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
        </ul>
    </div>
</div>
@include('backend.template.partials.script')
    </body>


<!-- Mirrored from demos.creative-tim.com/now-ui-dashboard-pro/examples/defaults.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 17:59:39 GMT -->
</html>
