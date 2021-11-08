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


                        @forelse($posts as $dept)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$dept->course1}}</td>
                            <td>{{$dept->course2}}</td>
                            <td>{{$dept->course3}}</td>
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



