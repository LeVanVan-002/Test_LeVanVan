<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
class myController extends Controller
{
    
    public function luuthongtin(Request $request)
    {

        $message=[
            'required' => 'Trường : bắt buộc nhập.',
             'email'    => 'Trường :attribute phải có định dạng email',
             'min:10' => 'Trường :số điện thoại trên 9 số dưới 11 số'
        ];
        $validator = validator::make($request->all(),[
            'tentt'               =>          'required|max:50',
            'diachi'              =>          'required|max:100',
            'phone'                =>          'required|max:11|min:10',
            'email'               =>          'required|email'
        ],$message);
        if($validator->fails())
            return redirect('themtt')->withErrors($validator)->withInput();
        else{
        $tentt = $request->input('tentt');
        $diachi = $request->input('diachi');
        $phone = $request->input('phone');
        $email = $request->input('email');
       
        DB::insert('insert into tbthongtin(name,address,phone,email) 
        values(?,?,?,?)',[$tentt,$diachi,$phone,$email]);
        return view('themtt',['message'=>'thêm thành công']);
            }
    }
    public function xemtt ()
        {
            $tt = DB::table('tbthongtin')->select('*')->get();
            return view('xemtt',['tbthongtin'=>$tt]);   
        }
}