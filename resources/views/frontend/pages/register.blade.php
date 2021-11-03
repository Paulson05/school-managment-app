@extends('frontend.template.master')
@section('body')

<div class="login sign-up">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 well well-sm">
                <form action="{{route('user.postregister')}}" method="post" class="form sign-up-form">
                    @csrf
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>First Name</strong>
                                <input class="form-control" name="first_name" placeholder="First Name" type="text" required autofocus />
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>Middle Name</strong>
                                <input class="form-control" name="middle_name" placeholder="middle_name" type="text" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <strong>Last Name</strong>
                            <input class="form-control" name="last_name" placeholder="last_name" type="text" />
                        </div>
                            </div>
                        <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <strong>Username</strong>
                            <input class="form-control" name="username" placeholder="username" type="text" />
                        </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>Faculty</strong>
                                <select name="faculty_id" id="doctors_id" class="doctors_id form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                    @php
                                    $doctor = \App\Models\Faculty::all();
                                    @endphp

                                    <option value="0" disabled="true" selected="true">--select faculty--</option>
                                    @forelse( $doctor as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @empty
                                    <option value=""> select visiting doctor</option>
                                    @endforelse

                                </select>

                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>Department</strong>
                                <select name="department_id" id="doctors_id" class="doctors_id form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                    @php
                                    $doctor = \App\Models\Department::all();
                                    @endphp

                                    <option value="0" disabled="true" selected="true">--select department--</option>
                                    @forelse( $doctor as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @empty
                                    <option value=""> select visiting doctor</option>
                                    @endforelse

                                </select>

                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>Email</strong>
                                <input class="form-control" name="email" placeholder="Email" type="email" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <strong>Passoword</strong>
                            <input class="form-control" name="password" placeholder="New Password" type="password" />
                        </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>State of  origin</strong>
                                <input class="form-control" name="State_of_origin" placeholder="state_of_origin" type="text" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>local goverment of origin</strong>
                                <input class="form-control" name="lga" placeholder="local govt area" type="text" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>Phone number</strong>
                                <input class="form-control" name="phone_number" placeholder="phone_number" type="text" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>Address</strong>
                                <input class="form-control" name="address" placeholder="address" type="text" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <strong>Date of birth</strong>
                                <input class="form-control" name="age" placeholder="age" type="date" />
                            </div>
                        </div>
                    </div>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineCheckbox1" value="male" />
                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineCheckbox2" value="female" />
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
