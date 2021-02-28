<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        //VALIDASI EMAIL DAN PASSWORD YANG DIKIRIMKAN
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        //ADA 3 VALUE YANG DIKIRIMKAN, YAKNI: EMAIL, PASSWORD DAN REMEMBER_ME
        //AMBIL SEMUA REQUEST TERSEBUT KECUALI REMEMBER ME KARENA YANG DIBUTUHKAN
        //UNTUK OTENTIKASI ADALAH EMAIL DAN PASSWORD
        $auth = $request->except(['remember_me']);

        //MELAKUKAN PROSES OTENTIKASI
        if (Auth::attempt($credentials, $request->remember_me)) {
            //APABILA BERHASIL, GENERATE API_TOKEN MENGGUNAKAN STRING RANDOM
            // Auth::user()->update(['api_token' => Str::random(40)]);
            $tokenResult =Auth::user()->createToken('laundryToken')->plainTextToken;
            //KEMUDIAN KIRIM RESPONSENYA KE CLIENT UNTUK DIPROSES LEBIH LANJUT
            //return respon\se()->json(['status' => 'success', 'Token' => $tokenResult], 200);
            return response()->json(['status' => 'success', 'data' => $tokenResult], 200);
        }
        //APABILA GAGAL, KIRIM RESPONSE LAGI KE BAHWA PERMINTAAN GAGAL
        return response()->json(['status' => 'failed']);
    }
}
