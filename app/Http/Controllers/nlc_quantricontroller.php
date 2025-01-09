<?php

namespace App\Http\Controllers;
use App\Models\nlc_quantri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation;
use Illuminate\Support\Facades\Hash;
class nlc_quantricontroller extends Controller
{
    //get :login
    public function nlclogin(Request $REQUEST)
    {
        return view('nlclogin.nlc-login');
    }
    //sunmitt
    public function nlcloginsubmit(Request $request)
    {
        $request->validate([
            'nlctaikhoan' => 'required|email',
            'nlcmatkhau' => 'required|min:6',
        ]);

        if (Auth::attempt(['nlctaikhoan' => $request->email, 'nlcmatkhau' => $request->password], $request->remember)) {
            // Đăng nhập thành công
            return redirect()->intended('/dashboard'); // Chuyển hướng đến trang dashboard
        }

        // Đăng nhập thất bại
        return back()->withErrors([
            'nlctaikhoan' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }

    
    //dang ky
    public function nlclistdangky()
{
    return view('nlclogin.nlc-dangky');
}

public function nlcdangky(Request $request)
{
    // Xác thực dữ liệu đầu vào
    $validator = Validator::make($request->all(), [
        'nlctaikhoan' => 'required|string|email|max:255|unique:users,email', // Kiểm tra email duy nhất
        'nlcmatkhau' => 'required|string|min:8|confirmed', // Kiểm tra mật khẩu ít nhất 8 ký tự và xác nhận
        'nlctrangthai' => 'required|in:0,1', // Kiểm tra trạng thái phải là 0 hoặc 1
    ]);

    // Kiểm tra nếu có lỗi xác thực
    if ($validator->fails()) {
        return redirect()->route('nlc-project1.nlcdangky')
            ->withErrors($validator)
            ->withInput();
    }

    // Tạo người dùng mới
    $user = User::create([
        'email' => $request->nlctaikhoan, // Lưu email
        'password' => Hash::make($request->nlcmatkhau), // Mã hóa mật khẩu
        'status' => 'pending', // Trạng thái mặc định là pending
    ]);

    // Đăng nhập người dùng ngay sau khi đăng ký
    auth()->login($user);

    // Chuyển hướng đến trang dashboard
    return redirect()->route('dashboard');
}

}

