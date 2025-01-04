@extends('layout.admin._master')
@section('title', 'Sửa thông tin sản phẩm')
@section('content-body')
   <div class="container border">
    <div class="row">

        <div class="col">
            
            <form action="{{ route('nlc-project1.nlcsanpham.nlcSPeditsubmit', $nlcsanphams->id) }}" method="POST">
                @csrf
                @if(isset($nlcsanphams) && $nlcsanphams->id)
                    <input type="hidden" name="id" id="id" value="{{ $nlcsanphams->id }}">
                @else
                    <p>Không tìm thấy thông tin sản phẩm</p>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h2>Sửa thông tin sản phẩm</h2>
                    </div>

                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nlcsanpham" class="col-sm-2 col-form-label">Sản phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{ old('nlcsanpham', $nlcsanphams->nlcsanpham ?? '') }}"
                              id="nlcsanpham" name="nlcsanpham">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlctensanpham" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlctensanpham" 
                              value="{{ old('nlctensanpham', $nlcsanphams->nlctensanpham ?? '') }}"
                              name="nlctensanpham">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlchinhanh" class="col-sm-2 col-form-label">Hình ảnh</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlchinhanh" 
                              value="{{ old('nlchinhanh', $nlcsanphams->nlchinhanh ?? '') }}"
                              name="nlchinhanh">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlcsoluong" class="col-sm-2 col-form-label">Số lượng</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlcsoluong" 
                              value="{{ old('nlcsoluong', $nlcsanphams->nlcsoluong ?? '') }}"
                              name="nlcsoluong">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlcdongia" class="col-sm-2 col-form-label">Đơn giá</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlcdongia" 
                              value="{{ old('nlcdongia', $nlcsanphams->nlcdongia ?? '') }}"
                              name="nlcdongia">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlcmaloai" class="col-sm-2 col-form-label">Mã loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlcmaloai" 
                              value="{{ old('nlcmaloai', $nlcsanphams->nlcmaloai ?? '') }}"
                              name="nlcmaloai">
                            </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="nlctrangthai" class="col-sm-2 col-form-label">Trạng thái</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="nlctrangthai" 
                            value="{{ old('nlctrangthai', $nlcsanphams->nlctrangthai ?? '') }}"
                            name="nlctrangthai">
                          </div>
                      </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Ghi lại</button>
                        <a href="{{ route('nlc-project1.nlcsanpham') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
@endsection

