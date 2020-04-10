<?php

namespace App\Http\Controllers;

use App\Room;
use App\Ac;
use App\Fan;
use App\Fridge;
use App\Light;
use App\Motor;
use App\Wm;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class RoomController extends Controller
{
    public function changeStatus(Request $request)
    {
        $rooms = Room::all();
        $lights = Light::all();
        $fans = Fan::all();
        $fridges = Fridge::all();
        $wms = Wm::all();
        $motors = Motor::all();
        $acs = Ac::all();
        foreach ($rooms as $room) {
            if ($room->r_id == $request->id) {
                foreach ($lights as $light) {
                    if ($light->r_id == $request->id) {
                        if ($request->status == 0) {
                            $light->rstate = 0;
                            if ($light->bstatus == 0) {
                                $light->pstate = $light->status;
                            }
                            $light->status = 0;
                            $light->save();
                        }
                        if ($request->status == 1) {
                            $light->rstate = 1;
                            if ($light->bstatus == 0) {
                                $light->status = $light->pstate;
                            }
                            $light->save();
                        }
                    }
                }
                foreach ($fans as $fan) {
                    if ($fan->r_id == $request->id) {
                        if ($request->status == 0) {
                            $fan->rstate = 0;
                            if ($fan->bstatus == 0) {
                                $fan->pstate = $fan->status;
                            }
                            $fan->status = 0;
                            $fan->save();
                        }
                        if ($request->status == 1) {
                            $fan->rstate = 1;
                            if ($fan->bstatus == 0) {
                                $fan->status = $fan->pstate;
                            }
                            $fan->save();
                        }
                    }
                }
                foreach ($acs as $ac) {
                    if ($ac->r_id == $request->id) {
                        if ($request->status == 0) {
                            $ac->rstate = 0;
                            if ($ac->bstatus == 0) {
                                $ac->pstate = $ac->status;
                            }
                            $ac->status = 0;
                            $ac->save();
                        }
                        if ($request->status == 1){
                            $ac->rstate = 1;
                            if ($ac->bstatus == 0) {
                                $ac->status = $ac->pstate;
                            }
                            $ac->save();
                        }
                    }
                }
                foreach ($wms as $wm) {
                    if ($wm->r_id == $request->id) {
                        if ($request->status == 0) {
                            $wm->rstate = 0;
                            if ($wm->bstatus == 0) {
                                $wm->pstate = $wm->status;
                            }
                            $wm->status = 0;
                            $wm->save();
                        }
                        if ($request->status == 1){
                            $wm->rstate = 1;
                            if ($wm->bstatus == 0) {
                                $wm->status = $wm->pstate;
                            }
                            $wm->save();
                        }
                    }
                }
                foreach ($fridges as $fridge) {
                    if ($fridge->r_id == $request->id) {
                        if ($request->status == 0) {
                            $fridge->rstate = 0;
                            if ($fridge->bstatus == 0) {
                                $fridge->pstate = $fridge->status;
                            }
                            $fridge->status = 0;
                            $fridge->save();
                        }
                        if ($request->status == 1){
                            $fridge->rstate = 1;
                            if ($fridge->bstatus == 0) {
                                $fridge->status = $fridge->pstate;
                            }
                            $fridge->save();
                        }
                    }
                }
                foreach ($motors as $motor) {
                    if ($motor->r_id == $request->id) {
                        if ($request->status == 0) {
                            $motor->rstate = 0;
                            if ($motor->bstatus == 0) {
                                $motor->pstate = $motor->status;
                            }
                            $motor->status = 0;
                            $motor->save();
                        }
                        if ($request->status == 1){
                            $motor->rstate = 1;
                            if ($motor->bstatus == 0) {
                                $motor->status = $motor->pstate;
                            }
                            $motor->save();
                        }
                    }
                }
                $room->status = $request->status;
                $room->save();
                return response()->json(['success' => 'Status change successfully.']);
            }
        }

    }
    public function changeToggle(Request $request){
        $rooms = Room::all();
        foreach ($rooms as $room) {
            if ($room->r_id == $request->id) {
                if ($room->rview == 0){
                    $room->rview = 1;
                    $room->save();
                    return response()->json(['success' => 'Status change successfully.']);
                }else{
                    $room->rview = 0;
                    $room->save();
                    return response()->json(['success' => 'Status change successfully.']);
                }
            }
        }
    }
}
