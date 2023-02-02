<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    public $course, $image, $imageName, $directory, $imgUrl;

    public function addCourse() {
        return view('admin.course.add-course');
    }
    public  function manageCourse() {
        $courses = DB::table('courses')
            ->join('teachers','courses.teacher_id','teachers.id')
            ->select('courses.*','teachers.name', 'teachers.image')
            ->get();

        return view('admin.course.manage-course', [
            'courses'=> $courses
        ]);
    }
    public function saveCourse(Request $request) {
       // Return $request;
        $this->course = new Course();
        $this->course->teacher_id = $request->teacher_id;
        $this->course->course_name = $request->course_name;
        $this->course->slug = $this->makeSlug($request);
        $this->course->course_code = $request->course_code;
        $this->course->description = $request->description;
        $this->course->course_fee = $request->course_fee;
        $this->course->cImage = $this->saveImage($request);
        $this->course->save();
        return back()->with('message', 'Course added successfully');
    }
    public function makeSlug($request) {
        if($request->slug) {
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }else {
            $str = $request->course_name;
            return preg_replace('/\s+/u', '20%', trim($str));
        }
    }

    private function saveImage($request) {
        $this->image = $request->file('cImage');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'adminAsset/course-image/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imgUrl;
    }
}
