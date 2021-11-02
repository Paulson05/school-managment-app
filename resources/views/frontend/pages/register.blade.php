@extends('frontend.template.master')
@section('body')

<div class="login sign-up">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-5 well well-sm">
                <form action="#" class="form sign-up-form">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="firstname" placeholder="First Name" type="text" required autofocus />
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="youremail" placeholder="Your Email" type="email" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="password" placeholder="New Password" type="password" />
                    </div>
                    <label>
                        Birth Date</label>
                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control custom-select">
                                <option selected="" value="">Month</option>
                                <option value="select">One</option>
                                <option value="select">Two</option>
                                <option value="select">Three</option>
                                <option value="select">Four</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control custom-select">
                                <option selected="" value="">Day</option>
                                <option value="select">One</option>
                                <option value="select">Two</option>
                                <option value="select">Three</option>
                                <option value="select">Four</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control custom-select">
                                <option selected="" value="">Year</option>
                                <option value="select">One</option>
                                <option value="select">Two</option>
                                <option value="select">Three</option>
                                <option value="select">Four</option>
                            </select>
                        </div>
                    </div>
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                        Female
                    </label>
                    <br />
                    <br />
                    <button type="submit" class="btn btn-warning" id="js-subscribe-btn">SIGN UP</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
