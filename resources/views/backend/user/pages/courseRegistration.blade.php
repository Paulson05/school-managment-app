@extends('backend.user.template.master')
@section('title', '|course registration')
@section('body')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-title">
        <div class="row">

            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Course Registration</li>
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
                        <h4 class="card-title mb-0">Register Course</h4>
                        <div class="text-end">
                            <a href="{{route('course.registration.pdf')}}" class="btn btn-secondary">print</a>
                        </div>
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
                            <div  class="col-md-12">
                                <div class="card-body data-tables">
                                    <h4>Student Information</h4>
                                    <form method="POST" action="" id="myForm">
                                        @csrf
                                        <table class="table-sm table-bordered" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Student No</th>
                                                <th>{{auth()->user()->full_number}}</th>
                                                <th width="7%">session 2020/2021</th>
                                                <th width="10%">Full name</th>
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
                                        <br>

                                    </form>
                                </div>
                            </div>
                            <div  class="col-md-12 mt-0">
                                <div class="card-body data-tables">
                                    <h5>Course list</h5>
                                    <form method="POST" action="" id="myForm">
                                        @csrf
                                        <table class="table-sm table-bordered" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Course title</th>
                                                <th>Course code</th>
                                                <th width="7%">course unit</th>

                                            </tr>
                                            </thead>
                                            <tbody id="addRow" class="addRow">

                                            </tbody>
                                            <tbody>


                                            @forelse($posts as $user)
                                            <tr class="text-capitalize">
                                                <td>{{$user->course_title}}</td>
                                                <td> {{$user->course_code}}</td>
                                                <td> {{$user->course_unit}}</td>

                                            </tr>
                                            @empty
                                            <p>no data</p>
                                            @endforelse
                                            </tbody>

                                        </table>
                                        <br>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit" id="storeButton">purchase store</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
