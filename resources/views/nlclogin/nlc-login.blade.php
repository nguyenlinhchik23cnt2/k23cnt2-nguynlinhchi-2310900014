<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Đăng nhập</h2>

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('nlc-project1.nlclogin') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="nlctaikhoan" name="nlctaikhoan" class="form-control" value="{{ old('nlctaikhoan') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="nlcmatkhau" name="nlcmatkhau" class="form-control" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember"> Ghi nhớ tôi
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
</body>
</html>