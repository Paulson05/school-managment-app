@extends('frontend.template.master')
@section('body')
<div class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div id="login-overlay" class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well">
                                        <form id="loginForm" method="POST" action="{{route('user.postlogin')}}" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="username" class="control-label">Username</label>
                                                <input type="email" class="form-control" id="username" name="email" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="control-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" id="remember"> Remember login
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-warning" id="js-subscribe-btn">LOG IN</button> </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
