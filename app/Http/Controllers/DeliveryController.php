<?php

namespace App\Http\Controllers;

use App\Http\Resources\DriverResource;
use App\Http\Resources\OtpCodeResource;

use App\Models\Delivery;
use App\Models\Driver;
use App\Models\OtpCode;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;


class DeliveryController extends Controller
{
    public function index(Request $request)
    {

            $product = Delivery::where('name' , $request->name)->get()->first();


        if ($product) {

            $otpCode =  mt_rand(1000,9999);
            $otp = OtpCode::updateOrCreate(
                [ 'product_id' => $product->id,],
                ['code'  => $otpCode,]
            );

            return response()->json([
                'message' => ' کد مورد نظر برای دریافت محصول ارسال گردید',
                'data' => new OtpCodeResource($otp)
            ]);

        }
        else {
            return response()->json([
                'message' => 'محصولی یافت نشد'
            ]);

        }
    }

    public function verify(Request $request)
    {
        $ckeck_exits = OtpCode::where('product_id' , $request->product_id)
            ->where('code' , $request->code)->first();

        if ($ckeck_exits) {

            return response()->json([
                'message' => 'محصول مورد نطر با موفقیت  دریافت شد',
                'data' => new DriverResource($ckeck_exits)
            ]);
        }
        else {
            return response()->json([
                'message' => "خطایی در دریافت محصول رخ داد"
            ]);
        }

    }


}
