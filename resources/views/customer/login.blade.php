@extends('layout.default')

@section("main")
<div class="container mt-5" style="max-width: 500px;">
    <h3 class="text-center mb-4">Đăng nhập tài khoản</h3>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div class="form-group mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="form-group mb-3">
            <label>Mật khẩu:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        <p class="text-center mt-3">
            Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a>
        </p>
    </form>
</div>
@endsection
