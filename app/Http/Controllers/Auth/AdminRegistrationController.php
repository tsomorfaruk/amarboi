<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.adminRegister');
    }
    public function registration(Request $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->job_title = $request->job_title;
        $admin->password = bcrypt($request->password);
        $admin->save();
        return redirect('/admin/dashboard');
    }
}
