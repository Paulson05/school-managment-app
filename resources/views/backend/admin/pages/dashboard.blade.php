@extends('backend.admin.template.master')
@section('title', '|dashboard')
@section('body')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>General</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Widgets</li>
                    <li class="breadcrumb-item active">General</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
                <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="database"></i></div>
                        <div class="media-body"><span class="m-0">Earnings</span>
                            <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
                <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                        <div class="media-body"><span class="m-0">Products</span>
                            <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
                <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                        <div class="media-body"><span class="m-0">Messages</span>
                            <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
                <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                        <div class="media-body"><span class="m-0">New User</span>
                            <h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <h1 class="text-success">Investment plan</h1>
            <div class="card-body row pricing-block">
                @php
                $plans = \App\Models\Admin::all();
                @endphp
                @foreach($plans as $plan)
                <div class="col-lg-3 col-md-6">
                    <div class="pricingtable">
                        <div class="pricingtable-header">
                            <h3 class="title">{{$plan->investment_plane}}</h3>
                        </div>
                        <div class="price-value"><span class="currency">$</span><span class="amount">{{$plan->profit}}</span><span class="duration">profit</span></div>
                        <ul class="pricing-content">
                            <li>{{$plan->max_investment}}</li>
                            <li>{{$plan->min_investment}}</li>
                        </ul>
                        <div class="pricingtable-signup"><button class="btn btn-primary btn-lg" ><span class="text-dark p-2">Duration</span>{{$plan->duration}} </button></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
