@extends('layout.admin._master')
@section('title','Danh sách khách hàng')
@section('content-body')
<h1>Danh sách khách hàng</h1>

<!-- Nút Thêm mới khách hàng -->
<a href="{{ route('nlc-project1.nlckhachhang.createKH') }}">
    <button type="button" class="btn btn-warning">Thêm mới</button>
</a>

<table class="table mt-4">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
            <th>Ngày đăng ký</th>
            <th>Trạng thái</th>
            <th>Thao tác</th> <!-- Thêm cột cho các thao tác như sửa/xóa -->
        </tr>
    </thead>
    <tbody>
        @foreach ($nlckhachhang as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nlcmakhachhang }}</td>
                <td>{{ $item->nlctenkhachhang }}</td>
                <td>{{ $item->nlcemail }}</td>
                <td>{{ $item->nlcmatkhau }}</td>
                <td>{{ $item->dienthoai }}</td>
                <td>{{ $item->nlcdiachi }}</td>
                <td>{{ $item->nlcngaydangky }}</td>
                <td>{{ $item->nlctrangthai ? 'Kích hoạt' : 'Không kích hoạt' }}</td>
                <td>
                    <a href="/nlc-project1/nlckhachhang/edit/{{$item->id}}">
                        <button type="button" class="btn btn-danger">edit</button>
                    </a>
                    
                    <a href="/nlc-project1/nlckhachhang/delete/{{$item->id}}"
                        onclick="return confirm ('Bạn có chắc muốn xóa không.')"
                        
                       ><button type="button" class="btn btn-info">delete</button></a></td>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

</table>