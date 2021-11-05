@extends('backend.user.template.master')
@section('title', '|user|dashboard')
@section('body')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Edit Profile</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active"> Edit Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="edit-profile">
        <div class="row">
            <div class="col-xl-12">
                <form class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Student Profile</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="profile-title">
                                <div class="media"><img class="img-70 rounded-circle" alt="" src="{{asset('backend/assets/images/user/7.jpg')}}">
                                    <div class="media-body">
                                        <h5 class="mb-1">{{auth()->user()->getName()}}</h5>
                                        <p>{{auth()->user()->full_number}}</p>
                                        <p class="text-danger text-capitalize">session 2020/2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
<!--                            <div class="col-md-5">-->
<!---->
<!--                                <div class="mb-3">-->
<!--                                    <label class="form-label">Programme</label>-->
<!--                                    <input class="form-control"  disabled="" type="text" placeholder="Undergraduate">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-6 col-md-3">-->
<!--                                <div class="mb-3">-->
<!--                                    <label class="form-label">Falcuty</label>-->
<!--                                    <input class="form-control border-none" disabled=""  type="text" placeholder="{{auth()->user()->faculty->name}}">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-6 col-md-4">-->
<!--                                <div class="mb-3">-->
<!--                                    <label class="form-label">Department</label>-->
<!--                                    <input class="form-control" type="email" placeholder="{{auth()->user()->shortCode->name}}">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-6 col-md-6">-->
<!--                                <div class="mb-3">-->
<!--                                    <label class="form-label">First Name</label>-->
<!--                                    <input class="form-control" type="text" placeholder="{{auth()->user()->first_name}}">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-6 col-md-6">-->
<!--                                <div class="mb-3">-->
<!--                                    <label class="form-label">Last Name</label>-->
<!--                                    <input class="form-control" type="text" placeholder="{{auth()->user()->last_name}}">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-12">-->
<!--                                <div class="mb-3">-->
<!--                                    <label class="form-label">phone number</label>-->
<!--                                    <input class="form-control" type="text" placeholder="{{auth()->user()->phone_number}}">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-6 col-md-4">-->
<!--                                <div class="mb-3">-->
<!--                                    <label class="form-label">Gender</label>-->
<!--                                    <input class="form-control" type="text" placeholder="{{auth()->user()->gender}}">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-6 col-md-3">-->
<!--                                <div class="mb-3">-->
<!--                                    <label class="form-label">State of origin</label>-->
<!--                                    <input class="form-control" type=text" placeholder="{{auth()->user()->State_of_origin}}">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-5">-->
<!--                                <div class="mb-3">-->
<!--                                    <label class="form-label">local government of origin</label>-->
<!--                                    <input class="form-control" type="text" placeholder="{{auth()->user()->lga}}">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-12">-->
<!--                                <div>-->
<!--                                    <label class="form-label">About Me</label>-->
<!--                                    <textarea class="form-control" rows="5" placeholder="Enter About your description"></textarea>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div  class="col-md-12">
                                <div class="card-body data-tables">
                                    <div class="left">
                                        <button class="btn btn-secondary">print</button>
                                    </div>
                                    <h4>Student Information</h4>
                                    <form method="POST" action="" id="myForm">
                                        @csrf
                                        <table class="table-sm table-bordered" width="100%">
                                            <thead>
                                            <tr>
                                                <th class="bold">Matric No</th>
                                                <th class="italic">{{auth()->user()->full_number}}</th>
                                                <th width="7%" class="bold">session 2020/2021</th>
                                                <th width="10%" class="bold">Full name</th>
                                                <th class="italic">{{auth()->user()->getName()}}</th>
                                                <th width="10%" class="bold">level</th>
                                                <th class="italic">200level</th>
                                            </tr>
                                            <tr>
                                                <th>State of origin</th>
                                                <th>{{auth()->user()->State_of_origin}}</th>
                                                <th width="7%">local Government of origin</th>
                                                <th width="10%">{{auth()->user()->lga}}</th>
                                                <th>{{auth()->user()->getName()}}</th>
                                                <th width="10%">Gender</th>
                                                <th>{{auth()->user()->gender}}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="addRow" class="addRow">

                                            </tbody>


                                        </table>
                                        <table class="table-sm table-bordered" width="100%">
                                            <thead>
                                            <tr>

                                                <th width="7%">Faculty</th>
                                                <th width="10%">{{auth()->user()->faculty->name}}</th>
                                                <th>Department</th>
                                                <th>{{auth()->user()->shortCode->name}}</th>
                                                <th width="10%">Phone number</th>
                                                <th>{{auth()->user()->phone_number}}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="addRow" class="addRow">

                                            </tbody>


                                        </table>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Update Profile</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
