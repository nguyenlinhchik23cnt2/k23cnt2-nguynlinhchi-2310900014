@extends('layout.admin._master')

@section('title', 'Thêm hóa đơn')

@section('content-body')
<h1>Thêm mới hóa đơn</h1>

<form action="{{ route('nlc-project1.nlchoadon.createsubmit') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nlcmahoadon" class="form-label">Mã hóa đơn</label>
        <input type="text" class="form-control" id="nlcmahoadon" name="nlcmahoadon" required>
    </div>

    <div class="mb-3">
        <label for="nlcmakhachhang" class="form-label"> ma Khách hàng</label>
        <select class="form-control" name="nlcmakhachhang" id="nlcmakhachhang" required>
            @foreach ($nlckhachhang as $khachhang)
                <option value="{{ $khachhang->nlcmakhachhang }}">{{ $khachhang->nlctenkhachhang }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="nlcngayhoadon" class="form-label">Ngày hóa đơn</label>
        <input type="date" class="form-control" id="nlcngayhoadon" name="nlcngayhoadon" required>
    </div>

    <div class="mb-3">
        <label for="nlchotenkhachhang" class="form-label">Họ tên khách hàng</label>
        <input type="text" class="form-control" id="nlchotenkhachhang" name="nlchotenkhachhang" required>
    </div>

    <div class="mb-3">
        <label for="nlcemail" class="form-label">Email</label>
        <input type="email" class="form-control" id="nlcemail" name="nlcemail" required>
    </div>

    <div class="mb-3">
        <label for="nlcdienthoai" class="form-label">Điện thoại</label>
        <input type="text" class="form-control" id="nlcdienthoai" name="nlcdienthoai" required>
    </div>

    <div class="mb-3">
        <label for="nlcdiachi" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="nlcdiachi" name="nlcdiachi" required>
    </div>

    <div class="mb-3">
        <label for="nlctongtrigia" class="form-label">Tổng trị giá</label>
        <input type="number" class="form-control" id="nlctongtrigia" name="nlctongtrigia" required>
    </div>

    <div class="mb-3">
        <label for="nlctrangthai" class="form-label">Trạng thái</label>
        <select class="form-control" name="nlctrangthai" id="nlctrangthai" required>
            <option value="1">Kích hoạt</option>
            <option value="0">Không kích hoạt</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Tạo hóa đơn</button>
</form>

@endsection
