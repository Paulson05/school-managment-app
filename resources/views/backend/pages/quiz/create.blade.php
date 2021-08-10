@extends('backend.template.defaults')
@section('content')

    <div class="card ">



       <div class="container">
           <div class="card-body ">
               <form class="form-horizontal"  action="{{route('quiz.store')}}" method="POST" enctype="multipart/form-data">
                   @csrf

                   <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Quiz Name </label>
                   <div class="form-group">
                       <input type="text" id="form-field-2" placeholder="Quize Name" class="col-xs-10 col-sm-5" name="quiz_name" required="" >
                   </div>
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Description</label>
                   <div class="form-group">
                       <input type="text" id="form-field-2" placeholder="Description" class="col-xs-10 col-sm-5" name="description" required="" />
                   </div>
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Date</label>
                   <div class="form-group">
                       <input type="date" id="form-field-2" placeholder="quiz date" class="col-xs-10 col-sm-5" name="quiz_date"   />
                       <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Time</label>
                       <div class="form-group">
                           <input type="text" id="form-field-2" placeholder="00:00"  pattern="[0-9]{2}:[0-9]{2}" class="col-xs-10 col-sm-5" name="quiz_time" required="" title="example 01:00 " />
                           <span> exm: 00:00</span>

                       </div>




                       <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Number Of Question View for User</label>
                       <div class="form-group">
                           <input type="text" id="form-field-2" placeholder="How many question view for this quiz " class="col-xs-10 col-sm-5" name="number_of_question" required="" />


                       </div>

                   </div>
                   <div class="card-footer ">
                       <button type="submit" class="btn btn-fill btn-primary">Submit</button>
                   </div>
               </form>



           </div>
       </div>





    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="datatables">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Quiz Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Time</th>

                    <th>Num of Exam Qus</th>
                    <th>Status</th>
                    <th>Add Question</th>
                    <th>Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quizes as $key=>$data)
                    <tr>
                        <td>{{++$key}} </td>
                        <td>{{$data->quiz_name}} </td>
                        <td>{{$data->description}} </td>
                        <td>{{$data->quiz_date}} </td>
                        <td>{{$data->quiz_time}} </td>

                        <td>{{$data->number_of_question}} </td>
                        <td><input type="checkbox" name="status" class="quiz-status" data_id="{{$data->id}}" {{$data->status=='1'?'checked':''}}> </td>

                        <td><a href="{{route('addquestion',$data->id)}}">Add Question</a></td>
                        <td><a href="{{route('quiz.show',$data->id )}}">Details</a></td>
                        <td><a href="/quizes/{{$data->id}}/edit">Edit</a></td>
                        <td>delete</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
