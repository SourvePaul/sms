<!doctype html>
<html lang="en" class="minimal-theme">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('adminAsset/')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('adminAsset/')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('adminAsset/')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('adminAsset/')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('adminAsset/')}}/assets/css/icons.css" rel="stylesheet">
    <link href="{{asset('adminAsset/')}}/https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminAsset/')}}/../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('adminAsset/')}}/assets/css/pace.min.css" rel="stylesheet" />

    <title>Teacher Sign In | Perfect Learn</title>
</head>

<body>

<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
        <div class="container-fluid">
            <div class="authentication-card">
                <div class="card shadow rounded-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                            <img src="{{asset('adminAsset/')}}/assets/images/error/login-img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="card-title">Teacher Sign In</h5>
                                <h6 class="card-title" style="color: red;">{{session('message')}}</h6>

                                <form class="form-body" action="{{route('teacher-login')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">User Name</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                <input type="text" name="user_name" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Enter email address or phone">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" name="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-0">Don't have an account yet? <a href="#">Sign up here</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--end page main-->

</div>
<!--end wrapper-->


<!--plugins-->
<script src="{{asset('adminAsset/')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('adminAsset/')}}/assets/js/pace.min.js"></script>


</body>
</html>
