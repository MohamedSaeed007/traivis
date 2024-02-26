<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Message;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** Login as user */
    public function userLogin(Request $request)
    {
        $id = $request->get('id');
        $user = User::find($id);
        if ($user != null) {
            $user_key = $this->getToken(12, $user->id);
        }
        // dd($user_key);
        $user->token = $user_key;
        $user->save();
        // $abc = 'hai';
        $abc = env('APP_URL').'/loginas/'.$user_key;

        return $abc;
    }

    /**
     * @param $length
     * @param $seed
     * @return string
     */
    private function getToken($length, $seed)
    {
        $token = '';
//        $codeAlphabet = USER_KEY_ALPHA;
//        $codeAlphabet .= USER_KEY_NUM;

        $codeAlphabet = config('constants.USER_KEY_ALPHA');
        $codeAlphabet .= config('constants.USER_KEY_NUM');

        mt_srand($seed); // Call once. Good since $application_id is unique.
        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[mt_rand(0, strlen($codeAlphabet) - 1)];
        }

        return $token;
    }

    public function noAcess()
    {
        $title = __t('No Access');

        return view('admin.no-access', compact('title'));
    }
}
