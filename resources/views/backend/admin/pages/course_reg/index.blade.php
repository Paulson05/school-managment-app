@extends('backend.admin.template.master')
@section('title', '| course | registrstion ')
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

                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <ul class="pl-3 text-center list-unstyled" id="saveform_errList"></ul>


                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>create course</h5>
                                                </div>
                                                <form class="form theme-form" action="{{route('courseregistration.store')}}" method="post">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">Faculty</label>
                                                                    <select name="faculty_id" id="faculty_id" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                                               @php
                                                                               $faculties = \App\Models\Faculty::all()
                                                                              @endphp

                                                                        <option>--select faculty--</option>

                                                                        @forelse($faculties as $faculty)
                                                                        <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                                                        @empty
                                                                        <option value="">no faculty</option>

                                                                        @endforelse
                                                                    </select>

                                                                </div>
                                                            </div>

                                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="exampleFormControlInput1">Department</label>
                                                                        <select name="departments_id" id="faculty_id" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                                            @php
                                                                            $depts = \App\Models\Department::all()
                                                                            @endphp

                                                                            <option>--select faculty--</option>

                                                                            @forelse($depts  as $dept)
                                                                            <option value="{{$dept->id}}">{{$dept->name}}</option>
                                                                            @empty
                                                                            <option value="">no  department</option>

                                                                            @endforelse
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">Level</label>
                                                                    <select name="levels_id" id="faculty_id" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">


                                                                        <option>--select level--</option>

                                                                        @forelse($levels as $level)
                                                                        <option value="{{$level->id}}" class="text-success">{{$level->level}}level</option>
                                                                        @empty
                                                                        <option value="">no  level</option>

                                                                        @endforelse
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">Semester</label>
                                                                    <select name="semester_id" id="faculty_id" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                                        @php
                                                                        $semester= \App\Models\Semester::all()
                                                                        @endphp

                                                                        <option>--select semester--</option>

                                                                        @forelse($semester as $level)
                                                                        <option value="{{$level->id}}" class="text-danger">{{$level->term}}</option>
                                                                        @empty
                                                                        <option value="">no  semester</option>

                                                                        @endforelse
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">course title</label>
                                                                    <input class="form-control" id="exampleFormControlInput1" name="course_title" type="text" placeholder="faculty">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">course code</label>
                                                                    <input class="form-control" id="exampleFormControlInput1" name="course_code" type="text" placeholder="faculty">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">course unit</label>
                                                                    <input class="form-control" id="exampleFormControlInput1" name="course_unit" type="text" placeholder="faculty">
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
                            <th>Dept name</th>
                            <th>Short_code</th>
                            <th>faculty</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>

                        <tbody>

                        @php
                        $depts = \App\Models\Department::all()
                        @endphp
                        @forelse($depts as $dept)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$dept->name}}</td>
                            <td>{{$dept->short_code}}</td>
                            <td>{{$dept->faculty->name}}</td>
                            <td>
                                <button type="button"   class="delete_post btn btn-primary btn-sm" ><i class="fa fa-trash"></i></button>

                                <button type="button"   class="edit_product btn btn-primary btn-sm" ><i class="fa fa-edit"></i></button>
                            <td>

                        </tr>
                        @empty
                        <p class="text-danger">no item </p>
                        @endforelse

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



