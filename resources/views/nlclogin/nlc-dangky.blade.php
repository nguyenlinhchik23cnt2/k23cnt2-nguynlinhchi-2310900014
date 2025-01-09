<form method="POST" action="{{ route('nlc-project1.nlclistdangky') }}">
    @csrf

    <div class="form-group">
        <label for="nlctaikhoan">Tài khoản (Email):</label>
        <input type="email" id="nlctaikhoan" name="nlctaikhoan" class="form-control" value="{{ old('nlctaikhoan') }}" required>
    </div>

    <div class="form-group">
        <label for="nlcmatkhau">Mật khẩu:</label>
        <input type="password" id="nlcmatkhau" name="nlcmatkhau" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="nlcmatkhau_confirmation">Xác nhận mật khẩu:</label>
        <input type="password" id="nlcmatkhau" name="nlcmatkhau" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="nlctrangthai">Trạng thái:</label>
        <select id="nlctrangthai" name="nlctrangthai" class="form-control" required>
            <option value="0">Chưa xác nhận</option>
            <option value="1">Đã xác nhận</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>


