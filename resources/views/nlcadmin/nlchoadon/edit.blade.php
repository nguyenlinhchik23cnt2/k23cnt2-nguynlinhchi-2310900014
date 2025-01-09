@extends('layout.admin._master')

@section('title', 'Sửa hóa đơn')

@section('content-body')
<h1>Sửa hóa đơn</h1>

<form action="{{ route('nlc-project1.nlchoadon.editsubmit', $nlchoadon->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nlcmahoadon" class="form-label">Mã hóa đơn</label>
        <input type="text" class="form-control" id="nlcmahoadon" name="nlcmahoadon" value="{{ $nlchoadon->nlcmahoadon }}" required>
    </div>

    <div class="mb-3">
        <label for="nlcmakhachhang" class="form-label">Mã Khách hàng</label>
        <select class="form-control" name="nlcmakhachhang" id="nlcmakhachhang" required>
            @foreach ($nlckhachhang as $khachhang)
                <option value="{{ $khachhang->nlcmakhachhang }}" {{ $nlchoadon->nlcmakhachhang == $khachhang->nlcmakhachhang ? 'selected' : '' }}>
                    {{ $khachhang->nlctenkhachhang }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="nlcngayhoadon" class="form-label">Ngày hóa đơn</label>
        <input type="date" class="form-control" id="nlcngayhoadon" name="nlcngayhoadon" value="{{ $nlchoadon->nlcngayhoadon }}" required>
    </div>

    <div class="mb-3">
        <label for="nlchotenkhachhang" class="form-label">Họ tên khách hàng</label>
        <input type="text" class="form-control" id="nlchotenkhachhang" name="nlchotenkhachhang" value="{{ $nlchoadon->nlchotenkhachhang }}" required>
    </div>

    <div class="mb-3">
        <label for="nlcemail" class="form-label">Email</label>
        <input type="email" class="form-control" id="nlcemail" name="nlcemail" value="{{ $nlchoadon->nlcemail }}" required>
    </div>

    <div class="mb-3">
        <label for="nlcdienthoai" class="form-label">Điện thoại</label>
        <input type="text" class="form-control" id="nlcdienthoai" name="nlcdienthoai" value="{{ $nlchoadon->nlcdienthoai }}" required>
    </div>

    <div class="mb-3">
        <label for="nlcdiachi" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="nlcdiachi" name="nlcdiachi" value="{{ $nlchoadon->nlcdiachi }}" required>
    </div>

    <div class="mb-3">
        <label for="nlctongtrigia" class="form-label">Tổng trị giá</label>
        <input type="number" class="form-control" id="nlctongtrigia" name="nlctongtrigia" value="{{ $nlchoadon->nlctongtrigia }}" required>
    </div>

    <div class="mb-3">
        <label for="nlctrangthai" class="form-label">Trạng thái</label>
        <select class="form-control" name="nlctrangthai" id="nlctrangthai" required>
            <option value="1" {{ $nlchoadon->nlctrangthai == 1 ? 'selected' : '' }}>Kích hoạt</option>
            <option value="0" {{ $nlchoadon->nlctrangthai == 0 ? 'selected' : '' }}>Không kích hoạt</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật hóa đơn</button>
</form>

@endsection
