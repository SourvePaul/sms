@extends('admin.master')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr class="text-center">
                        <th>Sl No</th>
                        <th>Teacher Name</th>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Course Description</th>
                        <th>Course Image</th>
                        <th>Course Fees</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach($courses as $course)

                        <tr class="text-center">
                            <td> {{ $i++ }} </td>
                            <td><img src="{{asset($course->cImage)}}" alt="course-image" style="width: 60px;height: 60px; border-radius:50%; border: 1px solid gray;"> {{$course->name}} </td>
                            <td> {{ substr($course->course_name,0,20) }} </td>
                            <td> {{ $course->course_code }} </td>
                            <td> {{ substr($course->description,0,40) }} </td>
                            <td>
                                <img src="{{asset($course->cImage)}}" alt="course-image" style="width: 90px;height: 90px;">
                            </td>
                            <td> {{$course->course_fee}} </td>
                            <td>
                                <a href="" class="btn btn-outline-info" title="edit">Edit</a>
                                <a href="" class="btn btn-outline-danger" title="delete" onclick="event.preventDefault(); return confirm('Are you sure!!'); document.getElementById('deleteT').submit();">Delete</a>
                                <form action="" method="post" id="deleteT">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{$course->id}}">
                                </form>

                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
