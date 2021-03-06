@extends('backend.user.template.master')
@section('title', '|all transaction')
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
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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

                        </div>
                    </div>

                </form>
            </div>
            <div class="card data-tables">
                <h5 class="text-center">All Payment transaction</h5>
                <form method="POST" action="" id="myForm">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>student name</th>
                            <th>email</th>
                            <th>transaction_id</th>
                            <th>Amount</th>
                            <th>fees type</th>
                            <th>reference_id</th>
                            <th>payment status</th>

                        </tr>
                        </thead>
                        <tbody id="addRow" class="addRow">

                        </tbody>
                        <tbody>

                        @php
                        $posts = \App\Models\Payment::where('users_id',auth()->user()->id)->get();
                        @endphp
                        @forelse($posts as $user)
                        <tr class="text-capitalize">
                            <td>{{$user->users->getName()}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->trans_id}}</td>
                            <td>{{$user->amount}}</td>
                            <td>
                                @if($user->amount == '25000')
                                   acceptance fee
                                @elseif($user->amount == '75000')
                                    school fee
                                @endif
                            </td>
                            <td> {{$user->ref_id}}</td>
                            <td> {{$user->status}}</td>
                            <td>
                                @if($user->amount == '2500')
                                <button class=" btn btn-danger">acceptance fee</button>
                                @elseif($user->amount == '7500')
                                <button class="btn btn-success">school fee</button>
                                @endif
                            </td>


                        </tr>
                        <tr>
                            @empty
                            <p class="text-center text-danger">no paymeny yet</p>
                        </tr>

                        @endforelse
                        </tbody>

                    </table>
                    <br>

                </form>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {



    });
</script>
@endsection
