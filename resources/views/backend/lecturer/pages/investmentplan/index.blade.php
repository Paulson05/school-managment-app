@extends('backend.admin.template.master')
@section('title', '| investment plan ')
@section('body')
<div class="content">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">
               <div class="col-md-12 text-end">
                   <button class="btn btn-primary m-2" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">+</button>
               </div>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">plan</h4>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <ul class="pl-3 text-center list-unstyled" id="saveform_errList"></ul>


                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>create investment plan</h5>
                                                </div>
                                                <form class="form theme-form" action="{{route('investment-packages.store')}}" method="post">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">Plan name</label>
                                                                    <input class="form-control" id="exampleFormControlInput1" name="investment_plane" type="text" placeholder="plan name">
                                                                </div>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 col-md-6">

                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleInputPassword2">min_investment</label>
                                                                    <input class="form-control" id="exampleInputPassword2" name="min_investment" type="text" placeholder="min_investment">
                                                                </div>
                                                            </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"  for="exampleFormControlInput1">max_investment</label>
                                                                        <input class="form-control" id="exampleFormControlInput1" name="max_investment" type="text" placeholder="max_investment">
                                                                    </div>
                                                                </div>


                                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="exampleInputPassword2">profit</label>
                                                                        <input class="form-control" name="profit" id="exampleInputPassword2" type="text" placeholder="profit">
                                                                    </div>

                                                               </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="exampleInputPassword2">duration</label>
                                                                            <input class="form-control" name="duration" id="exampleInputPassword2" type="text" placeholder="duration">
                                                                        </div>

                                                                    </div>


                                                    <div class="text-left">
                                                        <button class="btn btn-primary" type="submit">Submit</button>

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




                </div>

            </div>

        </div>

        <div class="col-md-12 table-responsive card">
            <div class="data-tables">
                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">

                    <div class="fresh-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>investment plan</th>
                                <th>max-invesment</th>
                                <th>min-invesstment</th>
                                <th>Profit</th>
                                <th>duration</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($plans as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->investment_plane}}</td>
                                <td>{{$user->max_investment}}</td>
                                <td>{{$user->min_investment}}</td>
                                <td>{{$user->profit}}</td>
                                <td>{{$user->duration}}</td>
                                <td>
                                    <button type="button"   class="delete_post btn btn-primary btn-sm" ><i class="fa fa-trash"></i></button>

                                    <button type="button"   class="edit_product btn btn-primary btn-sm" ><i class="fa fa-edit"></i></button>
                                <td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


</div>

</div>
@endsection



