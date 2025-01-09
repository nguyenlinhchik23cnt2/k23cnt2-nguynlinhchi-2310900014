<?php
use App\Http\Controllers\nlc_loaisanphamController;
use App\Http\Controllers\nlc_sanphamcontroller;
use App\Http\Controllers\nlc_quantricontroller;
use App\Http\Controllers\nlc_khachhangController;
use App\Http\Controllers\nlc_hoadonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
#admins
Route::get('/nlc-project1',function (){
    return view('nlcadmin.index');
});
//list project1
Route::get('/nlc-project1/nlc-loaisanpham',[nlc_loaisanphamController::class,'nlclist'])->name('nlc-project1.nlcloaisanpham');


//thêm mới
Route::get('/nlc-project1/nlc-loaisanpham/nlccreate',[nlc_loaisanphamController::class,'nlccreate'])->name('nlc-project1.nlcloaisanpham.nlccreate');
Route::post('/nlc-project1/nlc-loaisanpham/nlccreatesubmit',[nlc_loaisanphamController::class,'nlccreatesubmit'])->name('nlc-project1.nlcloaisanpham.nlccreatesubmit');

//edit
Route::get('/nlc-project1/nlc-loaisanpham/nlc-edit/{id}', [nlc_loaisanphamController::class, 'nlcedit'])->name('nlcadmins.nlc-loaisanpham.ncledit');
Route::post('/nlc-project1/nlc-loaisanpham/nlc-edit/{id}',[nlc_loaisanphamController::class, 'nlceditsubmit']);
//delete 
Route::get('/nlc-project1/nlc-loaisanpham/nlcdelete/{id}', [nlc_loaisanphamController::class, 'nlcdelete'])->name('nlcadmins.nlc-loaisanpham.ncldelete ');


#san pham
Route::get('/nlc-project1/nlc-sanpham',[nlc_sanphamcontroller::class,'nlcSPlist'])->name('nlc-project1.nlcsanpham');
//them moi
Route::get('/nlc-project1/nlc-createsanpham',[nlc_sanphamcontroller::class,'nlcSPcreate'])->name('nlc-project1.nlcsanpham.nlccreate');
Route::post('/nlc-project1/nlc-createsubmitsanpham',[nlc_sanphamcontroller::class,'nlcSPcreatesubmit'])->name('nlc-project1.nlcsanpham.nlccreatesubmit');

//edit
Route::get('/nlc-project1/nlc-sanpham/nlc-SPedit/{id}', [nlc_sanphamcontroller::class, 'nlcSPedit'])->name('nlc-project1.nlcsanpham.nlcSPedit');

Route::post('/nlc-project1/nlc-sanpham/nlc-SPeditsubmit/{id}', [nlc_sanphamcontroller::class, 'nlcSPeditsubmit'])->name('nlc-project1.nlcsanpham.nlcSPeditsubmit');
//delete
Route::get('/nlc-project1/nlc-sanpham/nlc-delete/{id}',[nlc_sanphamcontroller::class,'nlcSPdelete'])->name('nlc-project1.nlcsanpham.nlcdelete');

#login


Route::get('/nlc-project1/nlcdangnhap', [nlc_quantricontroller::class, 'nlclogin'])->name('nlc-project1.nlcdangnhap');

Route::post('/nlc-project1/nlcdangnhap', [nlc_quantricontroller::class, 'nlcloginsubmit'])->name('nlc-project1.nlcloginsubmit');

//dang ky


Route::get('/nlc-project1/nlclogin', [nlc_quantricontroller::class, 'nlclistdangky'])->name('nlc-project1.nlclistdangky');
Route::post('/nlc-project1/nlclistdangky', [nlc_quantricontroller::class, 'nlcloginsubmit'])->name('nlc-project1.nlcdangky ');


#khachhang
Route::get('/nlc-project1/nlckhachhang',[nlc_khachhangController::class,'index'])->name('nlc-project1.nlckhachhang');
// them moi
Route::get('/nlc-project1/nlckhachhang/create', [nlc_khachhangController::class, 'createKH'])->name('nlc-project1.nlckhachhang.createKH');

Route::post('/nlc-project1/nlckhachhang/create', [nlc_khachhangController::class, 'createsubmitKH'])->name('nlc-project1.nlckhachhang.submitcreateKH');

//edit
// Route to show the edit form for a customer
Route::get('/nlc-project1/nlckhachhang/edit/{id}', [nlc_khachhangController::class, 'edit'])->name('nlc-project1.nlckhachhang.edit');


Route::put('/nlc-project1/nlckhachhang/editsubmit/{id}', [nlc_khachhangController::class, 'editsubmit'])->name('nlc-project1.nlckhachhang.editsubmit');

//delete
Route::get('/nlc-project1/nlckhachhang/delete/{id}',[nlc_khachhangController::class, 'delete'])->name('nlc-project1.nlckhachhang.delete');

#hoa don
//index
Route::get('/nlc-project1/nlchoadon',[nlc_hoadonController::class,'index'])->name('nlc-project1.nlchoadon');
// them moi
// Route để hiển thị form thêm hóa đơn
Route::get('/nlc-project1/nlchoadon/create', [nlc_hoadonController::class, 'create'])->name('nlc-project1.nlchoadon.create');

// Route để xử lý form khi submit
Route::post('/nlc-project1/nlchoadon/create', [nlc_hoadonController::class, 'submitcreate'])->name('nlc-project1.nlchoadon.createsubmit');
// edit


// Định nghĩa route
Route::get('/nlc-project1/nlchoadon/edit/{id}', [nlc_hoadonController::class, 'edit'])->name('nlc-project1.nlchoadon.edit');
Route::post('/nlc-project1/nlchoadon/edit/{id}', [nlc_hoadonController::class, 'editsubmit'])->name('nlc-project1.nlchoadon.editsubmit');
