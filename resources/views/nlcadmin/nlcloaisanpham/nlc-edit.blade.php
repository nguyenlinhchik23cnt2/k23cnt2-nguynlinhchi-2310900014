@extends('layout.admin._master')
@section('title','sua thong loai san pham')
@section('content-body')
   <div class="container border">
    <div class="row">

        <div class="col">
            
            <form action="" method="POST">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$nlcloaisanpham->id}}">
                <div class="card">
                    <div class="card-header">
                        <h2>Sửa thông tin sản thẩm </h2>
                    </div>

                    <div class="card-body  container-fluid">
                        <div class="mb-3 row">
                            <label for="nlcmaloai" class="col-sm-2 col-form-label">Mã Loại </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{$nlcloaisanpham->nlcmaloai}}"
                              id="nlcmaloai" name="nlcmaloai">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlcmaten" class="col-sm-2 col-form-label">Tên LLoại </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlctenloai" 
                              value="{{$nlcloaisanpham->nlctenloai}}"
                              name="nlctenloai">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlctrangthai" class="col-sm-2 col-form-label">Trạng TThái </label>
                            <div class="col-sm-10">
                                @if($nlcloaisanpham->nlctrangthai ===1){
                                    
                                
                              <input type="radio"  id="nlctrangthai1" name="nlctrangthai" value="1" checked/>
                              <label for="nlctrangthai">Hiện Thị </label>
                                &nbsp;
                              <input type="radio"  id="nlctrangthai0" name="nlctrangthai" value="0">
                              <label for="nlctrangthai0">Khóa </label>
                              
                                @else
                                <input type="radio"  id="nlctrangthai1" name="nlctrangthai" value="1" checked/>
                              <label for="nlctrangthai">Hiện Thị </label>
                              &nbsp;
                              <input type="radio"  id="nlctrangthai0" name="nlctrangthai" value="0">
                              <label for="nlctrangthai0">Khóa </label>
                                @endif
                                }
                                
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class=" btn btn-success" >Ghi Lại </button>
                        <a href="{{route('nlc-project1.nlcloaisanpham')}}" class="btn btn-secondary">Quay Lại </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection
