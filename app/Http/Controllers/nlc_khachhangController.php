<?php

namespace App\Http\Controllers;
use App\Models\nlc_khachhang;
use Illuminate\Http\Request;
use Illuminate\Validation;
class nlc_khachhangController extends Controller
{
    public function index()
    {
        $nlckhachhang = nlc_khachhang::all();
        return view('nlcadmin.nlckhachhang.index',compact('nlckhachhang'));
    }
    // them moi khach hang
    public function createKH()
    {
        return view ('nlcadmin.nlckhachhang.KHcreate');
    }




//submit
public function createsubmitKH(Request $request)
{
    // Validate the data
    $request->validate(
        [
            'nlcmakhachhang' => 'required|string|unique:nlc_khachhang,nlcmakhachhang',
            'nlctenkhachhang' => 'required|string',
            'nlcemail' => 'required|string|email',
            'nlcmatkhau' => 'required|string|min:6', // Đảm bảo mật khẩu có ít nhất 6 ký tự
            'dienthoai' => 'required|string',
            'nlcdiachi' => 'required|string',
            'nlcngaydangky' => 'required|date',
            'nlctrangthai' => 'required|boolean',
        ]
    );

    // Lấy dữ liệu từ request
    $data = $request->all();

    // Tạo bản ghi khách hàng mới
    nlc_khachhang::create($data);

    // Chuyển hướng người dùng trở lại danh sách khách hàng
    return redirect()->route('nlc-project1.nlckhachhang');
}

    //sua
    public function edit($id)
{
    $nlckhachhang = nlc_khachhang::findOrFail($id);
    return view('nlcadmin.nlckhachhang.nlcedit', compact('nlckhachhang'));
}

// editsubmit
public function editsubmit(Request $request, $id)
{
    // Validate dữ liệu
    $request->validate([
        'nlcmakhachhang' => 'required|string|unique:nlc_khachhang,nlcmakhachhang,' . $id,
        'nlctenkhachhang' => 'required|string',
        'nlcemail' => 'required|string|email',
        'nlcmatkhau' => 'nullable|string|min:6', // Mật khẩu không bắt buộc
        'dienthoai' => 'required|string',
        'nlcdiachi' => 'required|string',
        'nlcngaydangky' => 'required|date',
        'nlctrangthai' => 'required|boolean',
    ]);

    // Tìm khách hàng theo ID
    $nlckhachhang = nlc_khachhang::findOrFail($id);

    // Lấy tất cả dữ liệu từ form
    $data = $request->all();

    // Nếu mật khẩu mới được cung cấp, mã hóa mật khẩu và cập nhật
    if ($request->filled('nlcmatkhau')) {
        $data['nlcmatkhau'] = bcrypt($request->nlcmatkhau);
    } else {
        // Nếu không có mật khẩu mới, xóa trường mật khẩu khỏi dữ liệu để không thay đổi
        unset($data['nlcmatkhau']);
    }

    // Cập nhật thông tin khách hàng
    $nlckhachhang->update($data);

    // Chuyển hướng về trang danh sách khách hàng hoặc nơi bạn muốn
    return redirect()->route('nlc-project1.nlckhachhang')->with('success', 'Cập nhật khách hàng thành công!');
}

    //delete
    public function delete($id)
    {
        $nlckhachhang =nlc_khachhang::find($id);
        $nlckhachhang->delete();
        return redirect()->route('nlc-project1.nlckhachhang');
    }
}




