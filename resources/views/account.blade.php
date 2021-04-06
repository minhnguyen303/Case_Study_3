<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập & Đăng ký</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- Div login -->
    <div class="card card-outline card-primary" id="formLogin">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Đăng nhập</b></a>
        </div>
        <div class="card-body">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="login-box-msg bg-danger alert py-2 mb-3">{{$error}}</p>
                @endforeach
            @endif

            <form action="{{route('auth.account')}}" method="post" name="login">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                        <button type="submit" class="btn btn-success btn-block" name="submit" value="Đăng nhập">Đăng
                            nhập
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mt-2 mb-3">
                <button class="btn btn-block btn-primary" id="btnFormRegister">
                    <i class="fas fa-cash-register mr-2"></i>
                    Đăng ký
                </button>
                <a href="{{route('home.index')}}" class="btn btn-block btn-secondary">
                    <i class="fas fa-home mr-2"></i>
                    Về trang chủ
                </a>
            </div>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.card-body -->
    </div>

    {{-- Div register --}}
    <div class="card card-outline card-primary" id="formRegister" style="display: none">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Đăng ký</b></a>
        </div>
        <div class="card-body">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="login-box-msg bg-danger alert py-2 mb-3">{{$error}}</p>
                @endforeach
            @endif

            <form action="{{route('auth.account')}}" method="post" name="register">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Tên" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="phone" class="form-control" placeholder="Số điện thoại" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="rePassword" class="form-control" placeholder="Retype password"
                           required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                        <button type="submit" class="btn btn-success btn-block" name="submit" value="Đăng ký">Đăng ký
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mt-2 mb-3">
                <button class="btn btn-block btn-primary" id="btnFormLogin">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Đăng nhập
                </button>
                <a href="{{route('home.index')}}" class="btn btn-block btn-secondary">
                    <i class="fas fa-home mr-2"></i>
                    Về trang chủ
                </a>
            </div>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.min.js")}}"></script>

<script>
    $(document).ready(function () {
        $('#btnFormLogin').click(function () {
            $('#formLogin').show();
            $('#formRegister').hide();
        })

        $('#btnFormRegister').click(function () {
            $('#formLogin').hide();
            $('#formRegister').show();
        })
    });
</script>
</body>
</html>
