@extends('layout.admin._master')
@section('title','Sửa khách hàng')
@section('content-body')
<h1>Sửa khách hàng</h1>
<form action="{{ route('nlc-project1.nlckhachhang.editsubmit', $nlckhachhang->id) }}" method="POST">
    @csrf
    @method('PUT')  <!-- This will tell Laravel to treat this as a PUT request -->
    
   

    <div class="mb-3">
        <label for="nlcmakhachhang" class="form-label">Mã khách hàng</label>
        <input type="text" class="form-control" id="nlcmakhachhang" name="nlcmakhachhang" value="{{ $nlckhachhang->nlcmakhachhang }}" required>
    </div>

    <div class="mb-3">
        <label for="nlctenkhachhang" class="form-label">Tên khách hàng</label>
        <input type="text" class="form-control" id="nlctenkhachhang" name="nlctenkhachhang" value="{{ $nlckhachhang->nlctenkhachhang }}" required>
    </div>

    <div class="mb-3">
        <label for="nlcemail" class="form-label">Email</label>
        <input type="email" class="form-control" id="nlcemail" name="nlcemail" value="{{ $nlckhachhang->nlcemail }}" required> <!-- Đã sửa lại name -->
    </div>

    <div class="mb-3">
        <label for="nlcmatkhau" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="nlcmatkhau" name="nlcmatkhau">
        <small>Chỉ nhập mật khẩu nếu muốn thay đổi</small>
    </div>

    <div class="mb-3">
        <label for="dienthoai" class="form-label">Điện thoại</label>
        <input type="text" class="form-control" id="dienthoai" name="dienthoai" value="{{ $nlckhachhang->dienthoai }}" required>
    </div>

    <div class="mb-3">
        <label for="nlcdiachi" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="nlcdiachi" name="nlcdiachi" value="{{ $nlckhachhang->nlcdiachi }}" required>
    </div>

    <div class="mb-3">
        <label for="nlcngaydangky" class="form-label">Ngày đăng ký</label>
        <input type="date" class="form-control" id="nlcngaydangky" name="nlcngaydangky" value="{{ $nlckhachhang->nlcngaydangky }}" required>
    </div>

    <div class="mb-3">
        <label for="nlctrangthai" class="form-label">Trạng thái</label>
        <select class="form-control" name="nlctrangthai" id="nlctrangthai">
            <option value="1" {{ $nlckhachhang->nlc_trangthai == 1 ? 'selected' : '' }}>Kích hoạt</option>
            <option value="0" {{ $nlckhachhang->nlc_trangthai == 0 ? 'selected' : '' }}>Không kích hoạt</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{ route('nlc-project1.nlckhachhang') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
