@extends('layout.admin._master')
@section('title','Danh sách quản trị ')
@section('content-body')

<div class="container border">
    <div class="row">
       <div class="col-12">
        
        <h1>Danh sách quản trị </h1>
       </div>
        
       <div class="row">
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Tài khoản </th>
                    <th>Mật khẩu </th>
                    <th>Trạng thái</th>
                    
                
                </tr>
            </thead>
            <tbody>
                @forelse ($nlcquantri as $item)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$item->nlctaikhoan}}</td>
                    <td>{{$item->nlcmatkhau}}</td>
                    <td>{{$item->nlctrangthai}}</td>
                    
                @empty
                <th colspan="5">chua co thong tin loai san pham</th>
                @endforelse
            </tbody>

        </table>

       </div>
    </div>
</div> 
@endsection