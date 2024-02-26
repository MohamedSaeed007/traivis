<?php

namespace App\Http\Livewire;

use App\Mail\UserRegistrationMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Login extends Component
{
    public $user;
    public $_action;
    public $_redirect_back_to;
    public $otpError;
    public $otpResended;
    public $email;
    public $password;
    public $remember = false;
    public $otp = [];
    public $verifyPopUp = false;

    /* protected $rules = [
         'email' => 'required|email',
         'password' => 'required'
     ];*/

    public function mount()
    {
        $this->_action = request('_action');
        $this->_redirect_back_to = request('_redirect_back_to');
    }
    public function verify()
    {
        $this->validate([
            'otp.*' => 'required',
        ]);
        ksort($this->otp);
        $otp = implode('', $this->otp);
        // dd($this->otp);
        if ($otp == $this->user->otp) {
            $this->user->email_verified_at = now();
            $this->user->save();

            // if (session()->has('user_karma_share_id')) {
            //     $karma_id = session()->get('user_karma_share_id');
            //     $karmaLink = UserKarmaShare::find($karma_id);
            //     $karmaLink->register += 1;
            //     $karmaLink->save();
            //     $this->user->user_karma_share_id = $karma_id;
            //     session()->forget('user_karma_share_id');
            // }

            // if (session()->has('InfluencerOfferID')) {
            //     $InfluencerOfferId = session()->get('InfluencerOfferID');
            //     $this->user->influencer_offer_id = $InfluencerOfferId;
            //     session()->forget('InfluencerOfferID');
            // }

            $this->login();
            return redirect()->route('home');
        } else {
            $this->otpError = 'Wrong OTP';
        }
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credential = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if ($this->user = User::where('email', $this->email)->first()) {
            if (Hash::check($this->password, $this->user->password)) {
                if ($this->user->email_verified_at == null) {
                    $this->verifyPopUp = 1;
                    return false;
                }
            }
        }

        if (Auth::attempt($credential, $this->remember)) {
            $auth = Auth::user();


            if (session()->has('InfluencerOfferID')) {
                $InfluencerOfferId = session()->get('InfluencerOfferID');
                $this->user->influencer_offer_id = $InfluencerOfferId;
                $this->user->save();
                session()->forget('InfluencerOfferID');
            }


            //            if ($auth->isAdmin() || $auth->user_type == 'sub-admin' || $auth == 'trainer') {
            //                Session::put('redirect_url', route('dashboard'));
            //                return redirect()->intended(route('admin'));
            //            } elseif (
            //                $auth->user_type == 'company' ||
            //                $auth->user_type == 'contractor' ||
            //                $auth->user_type == 'project-manager'
            //            ) {
            //                Session::put('company_id', $auth->id);
            //                Session::put('redirect_url', route('company'));
            //                return redirect()->intended(route('company'));
            //            } else {

            //            Session::put('redirect_url', route('dashboard'));

            //            dd($this->_action);
            if ($this->_action == 'popup') {
                return redirect()->route('login-popup-success');
            }

            if ($this->_redirect_back_to) {
                return redirect()->to($this->_redirect_back_to);
            }

            return redirect()->intended(route('home'));
            //            }
        }

        \session()->flash('notFoundError', __t('The email address or password is incorrect'));
        Session::put('notFound', route('dashboard'));
        return redirect()
            ->back()
            ->with('notFound', __t('User Not Found'));
    }

    public function resend()
    {
        $this->user->otp = rand(1000, 9999);
        $this->user->save();

        Mail::to($this->user)->send(new UserRegistrationMail('register-notification', $this->user));
        $this->otpResended = 'We have resent OTP to your email';
    }

    public function render()
    {
        return view('livewire.login')
            ->extends('layouts.auth')
            ->section('content');
    }
}