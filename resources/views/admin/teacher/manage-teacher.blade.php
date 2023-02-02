@extends('admin.master')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr class="text-center">
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach($teachers as $teacher)

                    <tr class="text-center">
                        <td> {{ $i++ }} </td>
                        <td> <img src="{{asset($teacher->image)}}" alt="teacher-image" style="width: 60px;height: 60px; border-radius: 50%; border: 1px solid gray;"> {{$teacher->name}} </td>
                        <td> {{ $teacher->email}} </td>
                        <td> {{ $teacher->phone }} </td>
                        <td> {{$teacher->address}} </td>
                        <td>
                            <a href="" class="btn btn-outline-info" title="edit">Edit</a>
                            <a href="" class="btn btn-outline-danger" title="delete" onclick="event.preventDefault(); return confirm('Are you sure!!'); document.getElementById('deleteT').submit();">Delete</a>
                            <form action="{{route('teacher-delete')}}" method="post" id="deleteT">
                                @csrf
                                <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
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
