<?php

namespace App\Http\Livewire;

use App\Events\OrderSuccess;
use App\Mail\SendTransactionSuccessMailToPayee;
use App\Mail\UserRegistrationMail;
use App\Models\DefaultPercentage;
use App\Models\InfluencerOffer;
use App\Models\Order;
use App\Models\User;
use App\Models\UserKarmaShare;
use App\Models\UserReferer;
use App\Models\VisitorIp;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Illuminate\Http\Request;

class Register extends Component
{
    public $otpError;
    public $otpResended;
    public $countries;
    public $country;
    public $user;
    public $name;
    public $email;
    public $phone;
    public $birth_date;
    public $password;
    public $password_confirmation;

    public $timezone = 'UTC';
    public $dial_code;
    public $timezones;
    public $timezoneCountries;

    public $userType;
    public $otp = [];
    public $verifyPopUp = false;

    public function updatingPhone($value)
    {
        $this->phone = ltrim($value, '0');
    }
    public function updateTimezone($value)
    {
        $this->timezone = $value;
        try {
            $this->dial_code = $this->countries[$this->timezoneCountries[$this->timezone]]['dial_code'];
        } catch (\Exception $e) {
            $this->dial_code = '+1';
        }
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'birth_date' => 'nullable|date|before:today',
            'timezone' => 'required|string',
            'phone' => 'required|numeric|digits_between:4,12',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols(),
            ],
        ];
    }

    public function mount($userType = null)
    {
        $this->userType = $userType ?? 'student';
        $this->countries = collect(config('countries.countries'))
            ->mapWithKeys(function ($country) {
                return [$country['iso3'] => $country];
            })
            ->toArray();
        $this->timezoneCountries = config('countries.timeZoneCitiesCountries');
        $this->timezones = collect(timezone_identifiers_list())
            ->mapWithKeys(function ($tz) {
                return [$tz => str_replace('_', ' ', $tz)];
            })
            ->toArray();
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
            $this->user->user_karma_key = Str::random(32) . time();
            $this->user->email_verified_at = now();

            if (session()->has('user_karma_share_id')) {
                $karma_id = session()->get('user_karma_share_id');
                $karmaLink = UserKarmaShare::find($karma_id);
                $karmaLink->register += 1;
                $karmaLink->save();
                $this->user->user_karma_share_id = $karma_id;
                session()->forget('user_karma_share_id');
            }

            if (session()->has('InfluencerOfferID')) {
                $InfluencerOfferId = session()->get('InfluencerOfferID');
                $this->user->influencer_offer_id = $InfluencerOfferId;
                session()->forget('InfluencerOfferID');
            }

            $this->user->save();
            Auth::loginUsingId($this->user->id);
            return redirect()->route('home');
        } else {
            $this->otpError = 'Wrong OTP';
        }
    }

    public function register()
    {
        $this->validate();
        $userTypes = [
            3 => 'company',
            4 => 'instructor',
            6 => 'student',
            2 => 'sub-admin',
            8 => 'contractor',
            5 => 'trainer',
            7 => 'project-manager',
        ];
        $userType = 6;
        if ($this->userType) {
            $userType = array_search($this->userType, $userTypes);
        }

        $this->phone = $this->dial_code . ltrim($this->phone, '0 ');

        $this->user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => bcrypt($this->password),
            'active_status' => 1,
            'role' => $userType,
            'date_of_birth' => $this->birth_date,
            'timezone' => $this->timezone,
        ]);

        $this->user->otp = rand(1000, 9999);
        $this->user->save();
        try {
            Mail::to($this->user)->queue(new UserRegistrationMail('register-notification', $this->user));
        } catch (\Throwable $th) {
            //throw $th;
        }

        $ip = Request::capture()->getClientIp();
        if ($ip) {
            $visitor = VisitorIp::where('ip', $ip)
                ->whereNotNull('invitor_id')
                ->whereNull('user_id')
                ->first();
            if ($visitor) {
                $defaultPercentage = DefaultPercentage::where('name', 'karma')->first();
                $default = $defaultPercentage ? $defaultPercentage->percentage : 3;
                UserReferer::create([
                    'user_referer' => $visitor->invitor_id,
                    'user_id' => $this->user->id,
                    'percentage' => $default,
                    'start_date' => Carbon::now(),
                    'end_date' => Carbon::now()->addYear(),
                ]);
                $visitor->user_id = $this->user->id;
                $visitor->save();
            }
        }
        $this->reset(
            'name',
            'email',
            'phone',
            'phone',
            'dial_code',
            'password_confirmation',
            'birth_date',
            'timezone',
        );

        $this->verifyPopUp = 1;
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
        return view('livewire.register')
            ->extends('layouts.auth')
            ->section('content');
    }
}
