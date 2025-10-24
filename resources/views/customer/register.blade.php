@extends('layout.default')

@section("main")
<div class="container mt-5" style="max-width: 500px;">
    <h3 class="text-center mb-4">Tạo tài khoản mới</h3>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ url('/register') }}">
        @csrf
        <div class="form-group mb-3">
            <label>Họ và tên:</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="form-group mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="form-group mb-3">
            <label>Mật khẩu:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Xác nhận mật khẩu:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Đăng ký</button>
        <p class="text-center mt-3">
            Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a>
        </p>
    </form>
</div>
@endsection
