<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::guard('customer')->check()){
            return view('client.account');
        }

        if ($request->getMethod() == 'GET') {
            return view('client.auth.login');
        }

        $request->validate([
            'email' => 'required|email|exists:customer,email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect('/');
        } else {
            return redirect()->back();
        }
    }

    public function registration()
    {
        return view('client.auth.create_acc');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customer,email',
            'phone' => 'required|unique:customer,phone',
            'password' => 'required|min:6',
            'address' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('login');
    }

    public function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'address' => $data['address']
        ]);
    }

//    public function dashboard()
//    {
//        if(Auth::check()){
//            return view('dashboard');
//        }
//
//        return redirect("login")->withSuccess('You are not allowed to access');
//    }

    public function signOut() {
        Auth::guard('customer')->logout();
        Session::flush();
        return Redirect('login');
    }


}
