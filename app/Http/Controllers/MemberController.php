<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesMembers;
use App\Models\Member;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Job;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\MemberNotActive;
use App\Models\InformationSystem;
use App\Services\Midtrans;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function registrasi_member()
    {
        return view('user/member/register');
    }
    public function process_register(Request $request)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-wbsqbTyd_XkpY-QdvEcq2MXX';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 1000,
            ),
            'customer_details' => array(
                'first_name' => $request->name,
                'last_name' => $request->name,
                'email' => $request->email,
                'phone' => '0800000',
             ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:members',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);
        $member = new Member([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'token' => $snapToken,
            'status' => 'not active',
        ]);
        $member->save();
        $berhasil = "Pendaftaran Berhasil";
        return view('user/member/register')->with('registrasi_success', 'Berhasil');
    }
    public function payment(Request $request, $id)
    {
        DB::table('members')->where('id', $id)->update([
                'status' => 'activated',
             ]);
        return redirect('/');
    }

    public function login_member(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'activated'])) {
            $request->session()->regenerate();
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }else if(Auth::guard('MemberNotActive')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'not active'])){
            $request->session()->regenerate();
            $pass = $request->password;
            $notActive = Member::select('*')->where('email', $request->email )->get();
            return view ("user/member/notActive", ['notActive' => $notActive, 'pass' => $pass]);
            /* redirect()->route('not.active'); */
        }
        return redirect("/")->withSuccess('Login details are not valid');          
    }
    public function logout_member(Request $request)
    {
        Auth::guard('member')->logout();
        $request->session()->invalidate(); // this method should be called after we ensure that there is no logged in guards left
        $request->session()->regenerateToken(); //same
        return redirect('/');
    }
   /* public function ShowOrder(Order $order)
    {
        $snapToken = $order->snap_token;
        if (empty($snapToken)) {
            // Jika snap token masih NULL, buat token snap dan simpan ke database
 
            $midtrans = new CreateSnapTokenService($order);
            $snapToken = $midtrans->getSnapToken();
 
            $order->snap_token = $snapToken;
            $order->save();
        }
 
        return view('orders.show', compact('order', 'snapToken'));
    } */
}
