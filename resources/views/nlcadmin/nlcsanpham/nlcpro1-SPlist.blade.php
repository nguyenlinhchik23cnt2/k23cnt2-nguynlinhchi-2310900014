@extends('layout.admin._master')
@section('title','Danh sách loại sản phẩm')
@section('content-body')
   <div class="container border">
        <div class="row">
           <div class="col-12">
            <a href="{{route('nlc-project1.nlcsanpham.nlccreate')}}"><button type="button" class="btn btn-warning">thêm mới </button> </a>
            <h1>Danh sách loại sản phẩm </h1>
           </div>
            
           <div class="row">
            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sản Phẩm </th>
                        <th>Tên Sản phẩm </th>
                        <th>Hình Ảnh </th>
                        <th>Số Lượng </th>
                        <th>Đơn Giá  </th>
                        <th>Mã loại </th> 
                        <th>Trạng Thái  </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nlcsanpham as $item)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$item->nlcsanpham}}</td>
                        <td>{{$item->nlctensanpham}}</td>
                        <td>{{$item->nlchinhanh}}</td>
                        <td>{{$item->nlcsoluong}}</td>
                        <td>{{$item->nlcdongia}}</td>
                        <td>{{$item->nlcmaloai}}</td>
                        <td>{{$item->nlctrangthai}}</td>

                        <td>
                            
                            <a href="/nlc-project1/nlc-sanpham/nlc-SPedit/{{$item->id}}">
                                <button type="button" class="btn btn-danger">edit</button>
                               </a> 
                            
                               <a href="/nlc-project1/nlc-sanpham/nlc-delete/{{$item->id}}"
                                onclick="return confirm ('Bạn có chắc muốn xóa không.')"
                                
                               ><button type="button" class="btn btn-info">delete</button></a></td>
                    </tr>
                    @empty
                    <th colspan="5">chua co thong tin loai san pham</th>
                    @endforelse
                </tbody>

            </table>

           </div>
        </div>
    </div> 
@endsection

