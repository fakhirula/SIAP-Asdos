<!DOCTYPE html>
<html>

<head>
    @include('templates.head')
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h1 class="auth-title text-center">Log in.</h1>
                <p class="auth-subtitle mb-5 text-center">Log in with your data that you entered during registration.</p>

                <form action="{{ url('auth/login') }}" method="post">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control form-control-xl" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('email')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>