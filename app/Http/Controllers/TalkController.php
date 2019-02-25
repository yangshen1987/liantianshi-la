<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/2/25
 * Time: 下午5:02
 */

namespace App\Http\Controllers;


use App\Events\ShippingStatusUpdated;
use Illuminate\Http\Request;

class TalkController extends Controller
{
    public function talk(Request $request)
    {
        $msgObj = new \stdClass();
        $msgObj->room_id = $request->post("room_id");
        $msgObj->msg = $request->post("msg");

        event(new ShippingStatusUpdated($msgObj));
        return view("welcome");
    }
}