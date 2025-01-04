<?php

namespace App\Http\Controllers;
use App\Models\nlc_sanpham;
use Illuminate\Http\Request;
use Illuminate\Validation;
class nlc_sanphamcontroller extends Controller
{
    
    //admin CRUD
    public function nlcSPlist()
    {
        $nlcsanpham=nlc_sanpham::all();
        return view('nlcadmin.nlcsanpham.nlcpro1-SPlist',['nlcsanpham'=>$nlcsanpham]);
    }
    //them moi
    public function nlcSPcreate()
    {
        return view('nlcadmin.nlcsanpham.nlc-create');
    }
    //create submit
    public function nlcSPcreatesubmit( Request $request)
    {
        $request->validate([
            'nlcsanpham'=>'required',
            'nlctensanpham'=>'required',
            'nlchinhanh'=>'nullable',
            'nlcsoluong'=>'required',
            'nlcdongia'=>'required',
            'nlcmaloai'=>'required',
            'nlctrangthai'=>'required|in:0, 1',
        ]);
        // ghi du lieu xuong db
        $data = $request -> all();
        
         nlc_sanpham::create($data);
        return redirect()->route('nlc-project1.nlcsanpham');
    }
    //edit
    public function nlcSPedit($id)
    {
        $nlcsanphams =nlc_sanpham::find($id);
        
        return view('nlcadmin.nlcsanpham.nlc-SPedit',['nlcsanphams'=>$nlcsanphams]);
        
    }
    //editsubmit
    public function nlcSPeditsubmit(Request $request, $id)
    {
    $request->validate([
        'nlcsanpham' => 'required',
        'nlctensanpham' => 'required',
        'nlchinhanh' => 'nullable',
        'nlcsoluong' => 'required',
        'nlcdongia' => 'required',
        'nlcmaloai' => 'required',
        'nlctrangthai' => 'required|in:0,1',
    ]);

    $nlcsanphams = nlc_sanpham::find($id);
    $nlcsanphams->update($request->all());
    return redirect()->route('nlc-project1.nlcsanpham');
}
//delete
public function nlcSPdelete($id)
{
    $nlcsanphams = nlc_sanpham::find($id);
    $nlcsanphams->delete();
    return redirect()->route('nlc-project1.nlcsanpham')->with('success', 'Sản phẩm đã được xóa.');
}
}
