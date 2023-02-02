<!-- Start header -->
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('/')}}"><img src="{{asset('/frontEndAsset/images/logo.png')}}" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" style="margin-right: -99px;" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="{{route('/')}}">Home</a></li>
                    <li><a class="nav-link" href="{{route('about')}}">About</a></li>
                    <li><a class="nav-link" href="{{route('course')}}">Courses</a></li>
                    <li><a class="nav-link" href="{{route('contact')}}">Contact us</a></li>
                    <li><a class="nav-link" href="{{route('student-login')}}">Login</a></li>
                    <li><a class="nav-link" href="{{route('student-register')}}">Register</a></li>
{{--                    @if( Session::get('teacherId'))--}}
{{--                    <li><a class="nav-link" href="{{route('teacher-login')}}">{{ Session::get('teacherName') }}</a></li>--}}
{{--                        <li><a class="nav-link" href="{{route('teacher-logout')}}">logout</a></li>--}}
{{--                    @else--}}
{{--                    <li><a class="nav-link" href="{{route('teacher-login')}}">TeacherLogin</a></li>--}}
{{--                        @endif--}}

                    @if( Session::get('teacherId'))
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">{{ Session::get('teacherName') }}
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('teacher-profile') }}">Course</a></li>
                                <li><a class="nav-link" href="{{route('teacher-logout')}}">logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a class="nav-link" href="{{route('teacher-login')}}">TeacherLogin</a></li>
                    @endif
                </ul>
            </div>


        </div>
    </nav>
</header>
<!-- End header -->
