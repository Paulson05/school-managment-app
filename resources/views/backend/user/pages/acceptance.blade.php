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
                            <div class="card-footer text-start">
                                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    @csrf
                                    <div class="row justify-content-center">

                                        <div class="col-xl-12-0">
                                            <div class="login-card">
                                                <div>

                                                    <div class="login-main">
                                                        <form id="paymentForm" class="theme-form">
                                                            <h4>student payment detials</h4>
                                                            <div class="form-group">
                                                                <label class="col-form-label pt-0">Your Name</label>
                                                                <div class="row g-2">
                                                                    <div class="col-6">
                                                                        <input class="form-control" disabled="" type="text"  id="first-name" placeholder="{{auth()->user()->first_name}}">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <input class="form-control" disabled="" type="text"  id="last-name" placeholder="{{auth()->user()->last_name}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Email Address</label>
                                                                <input type="hidden" name="email" value="{{auth()->user()->email}}"> {{-- required --}}
<!--                                                                <input type="hidden" name="users_id" value="{{auth()->user()->id}}"> {{-- required --}}-->
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-form-label">Amount</label>
                                                                <select name="amount" id="amount" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue" placeholder="#25,000">
                                                                      <option>-----------------select fee-----------------</option>
                                                                    <option value="25000">#25,000</option>
                                                                    <option value="35000">#35,000</option>
                                                                    <option value="55000">#55,000</option>

                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Payment Type</label>
                                                                <select name="fees" id="fees" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue" placeholder="#25,000">
                                                                    <option>-----------------select fee-----------------</option>
                                                                    <option value="acceptancefees">acceptancefees</option>
                                                                    <option value="schoolfees">schoolfees</option>
                                                                    <option value="hostelfees">hostelfees</option>

                                                                </select>
                                                            </div>
                                                            <input type="hidden" name="orderID" value="345">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <input type="hidden" name="currency" value="NGN">
                                                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                                            <div class="form-submit m-2">
                                                                <button class="btn btn-success btn-lg mt-2" type="submit" value="Pay Now!">
                                                                     Pay now
                                                                </button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
