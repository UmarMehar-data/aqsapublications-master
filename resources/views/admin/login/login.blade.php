<!DOCTYPE html>
<html lang="en">


<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Page </title>
    <!-- Iconic Fonts -->

    @include('layouts.master_partials.header')

</head>

<body class="ms-body ms-dark-theme ms-logged-out">



    <!-- Preloader -->
    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>
    <!-- Main Content -->
    <main class="body-content">
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper ms-auth">

            <div class="ms-auth-container container">
                <div class="ms-auth-col row justify-content-center">
                    <div class="col-6 mt-5">
                        @if(Session::has('message'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                        <div class="card shadow p-3 mt-5">
                            <div class="card-body">
                                <form method="post" action="{{ url('/admin') }}">
                                        @csrf
                                    <h1>Login to Account</h1>
                                    <p>Please enter your email and password to continue</p>
                                    <div class="mb-4">
                                        <label for="validationCustom08">Email Address</label>
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email Address" required="">
                                            <div class="invalid-feedback">
                                                Please provide a valid email.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 ">
                                        <label for="validationCustom09">Password</label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password" required="">
                                            <div class="invalid-feedback">
                                                Please provide a password.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{-- <label class="ms-checkbox-wrap">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <i class="ms-checkbox-check"></i>
                                        </label> --}}
                                        {{-- <span> Remember Password </span> --}}
                                        {{-- <label class="d-block mt-3"><a href="#" class="btn-link" data-toggle="modal"
                                                data-target="#modal-12">Forgot Password?</a></label> --}}
                                    </div>
                                    <button class="btn btn-primary mt-4 d-block w-100" type="submit">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPTS -->
    @include('layouts.master_partials.footer')

</body>
</html>
