<?php

namespace App\Http\Controllers;

use App\Ac;
use App\Fan;
use App\Fridge;
use App\Light;
use App\Motor;
use App\Power;
use App\Room;
use App\Wm;
use Illuminate\Http\Request;

class PowerController extends Controller
{
    public function offStatus( Request $request ){
        $powers = Power::all();
        $rooms = Room::all();
        $acs = Ac::all();
        $fans = Fan::all();
        $fridges = Fridge::all();
        $lights = Light::all();
        $motors = Motor::all();
        $wms = Wm::all();
        foreach ($powers as $power) {
            if ($power->p_id == $request->id) {
                foreach ($rooms as $room) {
                    if($room->status == 1) {
                        $room->pstate = $room->status;
                        $room->status = 0;
                    }
                    else{
                        $room->pstate = $room->status;
                    }
                    $room->save();
                }
                foreach ($lights as $light) {
                    if($light->status == 1 ) {
                        $light->pstate = $light->status;
                        $light->status = 0;
                        $light->save();
                    }
                }
                foreach ($fans as $fan) {
                    if($fan->status == 1 ) {
                        $fan->pstate = $fan->status;
                        $fan->status = 0;
                        $fan->save();
                    }
                }
                foreach ($acs as $ac) {
                    if($ac->status == 1 ) {
                        $ac->pstate = $ac->status;
                        $ac->status = 0;
                        $ac->save();
                    }
                }
                foreach ($wms as $wm) {
                    if($wm->status == 1 ) {
                        $wm->pstate = $wm->status;
                        $wm->status = 0;
                        $wm->save();
                    }
                }
                foreach ($fridges as $fridge) {
                    if($fridge->status == 1 ) {
                        $fridge->pstate = $fridge->status;
                        $fridge->status = 0;
                        $fridge->save();
                    }
                }
                foreach ($motors as $motor) {
                    if($motor->status == 1 ) {
                        $motor->pstate = $motor->status;
                        $motor->status = 0;
                        $motor->save();
                    }
                }
            }
            $power->pstatus = 0;
            $power->save();
            return response()->json(['success' => 'Status off successfully.']);
        }
    }

    public function onStatus( Request $request ){
        $powers = Power::all();
        $rooms = Room::all();
        $acs = Ac::all();
        $fans = Fan::all();
        $fridges = Fridge::all();
        $lights = Light::all();
        $motors = Motor::all();
        $wms = Wm::all();
        foreach ($powers as $power) {
            if ($power->p_id == $request->id) {
                foreach ($rooms as $room) {
                    if ($room->status == 0 && $room->pstate == 1) {
                        $room->status = $room->pstate;
                        $room->save();
                    }
                }
                    foreach ($lights as $light) {
                            if ($light->status == 0 && $light->bstatus == 0 && $light->rstate == 1) {
                                $light->status = $light->pstate;
                                $light->save();
                            }
                    }
                    foreach ($fans as $fan) {
                        if ($fan->status == 0 && $fan->bstatus == 0 && $fan->rstate == 1) {
                            $fan->status = $fan->pstate;
                            $fan->save();
                        }
                    }
                    foreach ($acs as $ac) {
                        if ($ac->status == 0 && $ac->bstatus == 0 && $ac->rstate == 1) {
                            $ac->status = $ac->pstate;
                            $ac->save();
                        }
                    }
                    foreach ($wms as $wm) {
                        if ($wm->status == 0 && $wm->bstatus == 0 && $wm->rstate == 1) {
                            $wm->status = $wm->pstate;
                            $wm->save();
                        }
                    }
                    foreach ($fridges as $fridge) {
                        if ($fridge->status == 0 && $fridge->bstatus == 0 && $fridge->rstate == 1) {
                            $fridge->status = $fridge->pstate;
                            $fridge->save();
                        }
                    }
                    foreach ($motors as $motor) {
                        if ($motor->status == 0 && $motor->bstatus == 0 && $motor->rstate == 1) {
                            $motor->status = $motor->pstate;
                            $motor->save();
                        }
                    }
            }
            $power->pstatus = 1;
            $power->save();
            return response()->json(['success' => 'Status on successfully.']);
        }
    }
}
