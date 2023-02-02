@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Course Form</h6>
            <hr/>

            <form action="{{route('new-course')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0 fw-bold">New Course Form</h5>
                            </div>
                            <input type="hidden" name="teacher_id" value="{{Session::get('teacherId')}}">
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Course Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_name" class="form-control" id="inputEnterYourName" placeholder="Enter Course Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Course URL</label>
                                <div class="col-sm-9">
                                    <input type="text" name="slug" class="form-control" id="inputPhoneNo2" placeholder="Enter course url">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Course Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_code" class="form-control" id="inputEmailAddress2" placeholder="Enter Course Code">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" id="inputAddress4" rows="3" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress3" class="col-sm-3 col-form-label">Course Fees</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_fee" class="form-control" id="inputEmailAddress3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputImage2" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="cImage" class="form-control" id="inputImage2">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-3 fw-bold">SAVE</button> <h4 style="color: darkgreen;">{{session('message')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
