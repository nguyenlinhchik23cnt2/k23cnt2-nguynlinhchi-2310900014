<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nlc_hoadon;
use App\Models\nlc_khachhang;
class nlc_hoadonController extends Controller
{
   //hien thi da sach hoa don
   public function index()
   {
    $nlchoadon =nlc_hoadon::with('khachhang')->get();
    return view('nlcadmin.nlchoadon.index',compact('nlchoadon'));
   }
   // them moi
   public function create()
{
    // Lấy tất cả khách hàng từ cơ sở dữ liệu
    $nlckhachhang = nlc_khachhang::all();

    // Truyền biến nlckhachhang vào view
    return view('nlcadmin.nlchoadon.create', compact('nlckhachhang'));
}

   //submit
   public function submitcreate(Request $request)
{
    // Validate dữ liệu từ form
    $request->validate([
        'nlcmahoadon' => 'required|string|unique:nlc_hoadon,nlcmahoadon',
        'nlcmakhachhang' => 'required|exists:nlc_khachhang,nlcmakhachhang', // Đảm bảo mã khách hàng tồn tại trong bảng khách hàng
        'nlctenkhachhang' => 'required|string',
        'nlcemail' => 'required|email',
        'nlcdienthoai' => 'required|string',
        'nlcdiachi' => 'required|string',
        'nlcngayhoadon' => 'required|date',
        'nlctongtrigia' => 'required|numeric',
        'nlctrangthai' => 'required|boolean',
    ]);

    // Tạo hóa đơn mới
    nlc_hoadon::create([
        'nlcmahoadon' => $request->input('nlcmahoadon'),
        'nlcmakhachhang' => $request->input('nlcmakhachhang'),
        'nlctenkhachhang' => $request->input('nlctenkhachhang'),
        'nlcemail' => $request->input('nlcemail'),
        'nlcdienthoai' => $request->input('nlcdienthoai'),
        'nlcdiachi' => $request->input('nlcdiachi'),
        'nlcngayhoadon' => $request->input('nlcngayhoadon'),
        'nlctongtrigia' => $request->input('nlctongtrigia'),
        'nlctrangthai' => $request->input('nlctrangthai'),
    ]);

    // Redirect về trang danh sách hóa đơn hoặc hiển thị thông báo thành công
    return redirect()->route('nlc-project1.nlchoadon')->with('success', 'Hóa đơn đã được thêm thành công!');
}
    //edit
    


}



