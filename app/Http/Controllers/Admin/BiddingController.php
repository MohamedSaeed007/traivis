<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bidding\CouponCreateRequest;
use App\Models\Bidding;
use App\Models\CouponCode;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiddingController extends Controller
{
    public function index()
    {
        $title = __t('Bidding Request');
        $bidding = Bidding::join('courses', 'courses.second_category_id', 'biddings.category_id')
            ->where([['courses.user_id', Auth::user()->id], ['biddings.p_m_request', 0]])
            ->select('biddings.*')
            ->groupBy('courses.second_category_id')->get();

        return view(theme('dashboard.instructor.index'), compact('title', 'bidding'));
    }

    public function acceptRequest(Request $request, $id)
    {
        // dd($request->all());
        // $id = $request->biddingId;
        $acceptPrice = $request->accept_price;
        $acceptMessage = $request->accept_message;
        $document = $request->document;
        $id = $request->coupon_code_id;

        $bidding = CouponCode::find($id);
        $bidding->accepatnce_status = 1;
        $bidding->acceptance_price = $acceptPrice;
        $bidding->message = $acceptMessage;
        $bidding->is_genarate_coupon = 0;
        if ($request->hasFile('document')) {
            $bidding->document = ImageUploadWithPath($document, 'document');
        }
        //   dd('no');
        $bidding->save();
        // Notification  section
        // $courseId =   $bidding->required_course_id;
        // //  dd($courseId);
        // $course = Course::find($courseId);
        // $user = $bidding->company_id;
        // $notification = "Your Bidding Request is acceppted for $course->title .Accepted Price  $bidding->acceptance_price";
        // $model_id = $bidding->id;
        // $model = "biddig-accept";
        // userNotification($user, $notification, $model_id, $model);
        return redirect()->back();
        // return response()->json([
        //    'status' => true,
        //    'message' => "successfully accepted"
        // ], 200);
        // } else {
        //    return response()->json([
        //       'status' => false,
        //       'message' => "server error"
        //    ]);
        // }
    }

    public function couponCodeCreate(CouponCreateRequest $request)
    {
        // dd($request->all());
        // $biddingChange = Bidding::find($request->biddingId);
        // $biddingChange->is_genarate_coupon = 1;
        // $biddingChange->save();
        $couponCodeId = $request->coupon_code_id;
        $coupon = CouponCode::find($couponCodeId);
        $coupon->title = $request->title;
        $coupon->coupon_code = $request->coupon_code;
        $coupon->discount_amount = $request->discount;
        // $coupon->bidding_id = $request->biddingId;
        $coupon->valid_from = $request->validity_from;
        $coupon->valid_to = $request->validity_to;
        $coupon->description = $request->descriptcategoryion;
        $coupon->courses = $request->course_id;
        $coupon->is_genarate_coupon = 1;
        $coupon->save();
        // dd($coupon->bidding_id);
        // Notification  section
        $couponNoti = Bidding::find($coupon->bidding_id);
        //   Notification  section
        // $courseId =   $coupon->courses;
        $course = Course::find($request->course_id);
        // dd($course);
        $user = $couponNoti->company_id;
        $notification = "A new coupon code '  $coupon->coupon_code ' for ' $course->title '.  validity  ' $coupon->valid_to '";
        $model_id = $coupon->id;
        $model = 'biddig-coupon-code';
        userNotification($user, $notification, $model_id, $model);

        return response()->json([
            'status'  => true,
            'message' => 'You have successfully coupon genarated',
        ], 200);
    }

    public function statusChange(Request $request, $id)
    {
        // dd($id);
        $coupon = new CouponCode();
        $coupon->user_id = Auth::user()->id;
        $coupon->is_accept = $request->value;
        $coupon->bidding_id = $id;
        $coupon->save();

        return redirect()->back();
    }

    public function catgoryCourse(Request $request)
    {
        $categoryId = $request->category_id;
        $categoryOption = [];
        $course = Course::where([['second_category_id', $categoryId], ['user_id', Auth::user()->id]])->get();
        if ($course) {
            foreach ($course as $courseList) {
                $categoryOption[] = '<option value='.$courseList->id.'> '.$courseList->title.'</option>';
            }
        }

        return response()->json([
            'status'  => true,
            'message' => 'course List',
            'data'    => $categoryOption,
        ], 200);
    }
}
