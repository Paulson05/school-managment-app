@extends('backend.user.template.master')
@section('title', '|myresult')
@section('body')
<div class="content">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

            </ol>
        </nav>


    </div>

    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-12">
                    <form class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Register Course</h4>
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
                                        <h2>Student Result</h2>


                                            <br>
                                       <div class="row">
                                           <div class="col-4 text-capitalize" >
                                               <h5  class="text-center">course</h5>
                                               <ul class="text-center">

                                                   @foreach($courses as $post)
                                                   <li>{{$post->course_title}} ({{$post->course_code}}) ({{$post->course_unit}})</li>
                                                   @endforeach
                                               </ul>
                                           </div>
                                           <div class="col-2">
                                               <h5>Grade</h5>
                                               <ul >

                                                   <li>{{$posts->course1}}</li>
                                                   <li>{{$posts->course2}}</li>
                                                   <li>{{$posts->course3}}</li>
                                                   <li>{{$posts->course4}}</li>
                                                   <li>{{$posts->course5}}</li>

                                               </ul>
                                           </div>
                                       </div>



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

</div>
</div>


</div>

</div>
@endsection



