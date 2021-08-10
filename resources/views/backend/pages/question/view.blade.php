@extends('backend.template.defaults')
@section('title','Question add')
@section('content')

    <div class="row ">
        <div class="col-md-12 pt-10">
            <!-- PAGE CONTENT BEGINS -->



            <table class="table table-bordered tale-hover pt-5" id="datatables">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Quiz Name</th>
                    <th>Question</th>
                    <th>Right Ans</th>

                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $qst as $key=>$qus)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$qus->quizes->quiz_name}}</td>
                        <td>{{$qus->question}}</td>
                        <td>{{$qus->answer}}</td>
                        <td>View</td>
                        <td><a href="/questions/{{$qus->id}}/edit">Edit</a></td>
                        <td>

                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')">Delete</button>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>



        </div>
    </div>



@endsection
