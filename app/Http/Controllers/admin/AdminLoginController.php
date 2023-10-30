<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function authenticate(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' =>
             $request->email, 'password' => $request->password],
             $request->get('remember'))) {
                $admin = Auth::guard('admin')->user();

                if($admin->MaLTK == "Admin"){
                    return redirect()->route('admin.dashboard');
                }else{
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('error','Ban Khong Phai Admin Hay Doi Link');
                }

                } 
                else {
                return redirect()->route('admin.login')->with('error', 'Tài Khoản Mật Khẩu Không Đúng');
                }
        } else {
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
        
    }

}
