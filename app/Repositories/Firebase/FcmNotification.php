<?php

namespace App\Repositories\Firebase;

use App\Models\Notification;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
class FcmNotification
{
    public static function saveToken(Request $request)
    {
        if (auth()->check()) {
            DB::table('fcm_tokens')
                ->where('user_id', auth()->user()->id)
                ->updateOrInsert(
                    ['user_id' => auth()->user()->id],
                    [
                        'device_token' => $request->token,
                        'app_name' => 'admin',
                        'created_at' => Carbon::now(),
                    ],
                );

            return response()->json(['token saved successfully.']);
        }
    }

    public static function sendNotification(array $request)
    {
        $firebaseToken = DB::table('fcm_tokens')

            ->whereNotNull('device_token')
            ->pluck('device_token')
            ->all();

        //        $SERVER_API_KEY =
        //            'AAAAtRBZi_Y:APA91bGu50hQMjigkhLMlnZHnvNtDcJy9Ra8VdoXytG7wRpCGiJvEA1FCchilmtcsq-rvuY7UwTG-EgTc4KYeqPxEA9_CsmZJNU85nz2wxHdlKTn64vFG1NH5C5f9QH5tFZevzzKpZf6';
        $SERVER_API_KEY = env('FCM_SERVER_API_KEY');

        $data = [
            'registration_ids' => $firebaseToken,
            // "data"=>[
            //     $request['key']=>$request['value']
            // ],
            'notification' => [
                'title' => $request['title'],
                'body' => $request['body'],
                // "click_action"=>url('notification/'.$request['value']),
            ],
        ];
        $dataString = json_encode($data);

        $headers = ['Authorization: key=' . $SERVER_API_KEY, 'Content-Type: application/json'];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);

        return $response;
    }
}
