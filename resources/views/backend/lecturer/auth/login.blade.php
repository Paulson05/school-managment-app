<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/cuba/theme/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 18:18:18 GMT -->
<head>
    @include('backend.admin.template.partials.head')
    @section('title', '| login')
</head>
<body>
<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card">
                <div>
                    <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="{{asset('backend/assets/images/logo/login.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('backend/assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
                    <div class="login-main">
                        <form class="theme-form" method="post" action="{{route('admin.post.login')}}">
                            @csrf
                            <h4>Sign in to account</h4>
                            <p>Enter your email & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" name="email" type="email" required="" placeholder="admin@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                                    <div class="show-hide"><span class="show">                         </span></div>
                                </div>
                            </div>
                            <div class="form-group mb-0">

                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    @include('backend.admin.template.partials.scripts')
</div>
</body>

<!-- Mirrored from admin.pixelstrap.com/cuba/theme/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 18:18:19 GMT -->
</html>
