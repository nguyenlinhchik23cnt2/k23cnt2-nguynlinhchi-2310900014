@extends('layout.admin._master')
@section('title','Danh sách hoa don')
@section('content-body')
<h1> Danh sah hoa don</h1>
<a href="{{route('nlc-project1.nlchoadon.create')}}"class="btn btn-primary">them moi</a>
<table class="table mt-4">
    <thead>
        <tr>
            <th>STT</th>
            <th>ma hoa don </th>
            <th>ma khach hang</th>
            <th>ngay hoa don</th>
            <th>ho ten khach hang</th>
            <th>email</th>
            <th>dien thoai</th>
            <th>dia chi</th>
            <th>tong tri gia</th>
            <th>trang thai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nlchoadon as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nlcmahoadon}}</td>
                <td>{{$item->nlcmakhachhang ? $item->makhachhang->nlctenkhachhang : 'khong xac dinh'}}</td>
                <td>{{$item->nlcngayhoadon}}</td>
                <td>{{$item->nlchotenkhachhang}}</td>
                <td>{{$item->nlcemail}}</td>
                <td>{{$item->nlcdienthoai}}</td>
                <td>{{$item->nlcdiachi}}</td>
                <td>{{$item->nlctongtrigia}}</td>
                <td>{{$item->nlctrangthai ? 'kich hoat' :'khong kich hoat'}}</td>
                <td>
                    <a href="/nlc-project1/nlchoadon/edit/{{$item->id}}">
                        <button type="button" class="btn btn-danger">edit</button>
                    </a>
                    
                    <a href="/nlc-project1/nlchoadon/delete/{{$item->id}}"
                        onclick="return confirm ('Bạn có chắc muốn xóa không.')"
                        
                       ><button type="button" class="btn btn-info">delete</button></a></td>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
