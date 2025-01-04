<?php


namespace App\Http\Controllers;
use App\Models\nlc_loaisanpham;
use Illuminate\Http\Request;
use Illuminate\Validation;
class nlc_loaisanphamController extends Controller
{
    //admin CRUD
    public function nlclist()
    {
        $nlcloaisanpham=nlc_loaisanpham::all();
        return view('nlcadmin.nlcloaisanpham.nlcpro1-list',['nlcloaisanpham'=>$nlcloaisanpham]);
    }
    //them moi
    public function nlccreate()
    {
        return view('nlcadmin.nlcloaisanpham.nlc-create');
    }
    //create submit
    public function nlccreatesubmit( Request $request)
    {
        $request->validate([
            'nlcmaloai'=>'required',
            'nlctenloai'=>'required',
            'nlctrangthai'=>'required|in:0, 1',
        ]);
        // ghi du lieu xuong db
        $data = $request -> only('nlcmaloai', 'nlctenloai', 'nlctrangthai');

        nlc_loaisanpham::create($data);
        return redirect()->route('nlc-project1.nlcloaisanpham');
    }

    
    //edit
    public function nlcedit($id)
    {
        $nlcloaisanpham =nlc_loaisanpham::find($id);
        return view('nlcadmin.nlcloaisanpham.nlc-edit',['nlcloaisanpham'=>$nlcloaisanpham]);
    }
    public function nlceditsubmit(Request $request, $id)
    {
        $request->validate([
            'nlcmaloai'=>'required',
            'nlctenloai'=>'required',
            'nlctrangthai'=>'required|in:0, 1',
        ]);
        $data = $request -> except('_token');
        nlc_loaisanpham::where('id', $id)->update($data);
        return redirect()->route('nlc-project1.nlcloaisanpham');
    }
    //delete 
    public function nlcdelete($id)
    {
        $nlcloaisanpham =nlc_loaisanpham::find($id);
        $nlcloaisanpham->delete();
        return redirect()->route('nlc-project1.nlcloaisanpham');
    }
}
