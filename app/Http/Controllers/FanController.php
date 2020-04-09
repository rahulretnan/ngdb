<?php

namespace App\Http\Controllers;

use App\Fan;
use Illuminate\Http\Request;

class FanController extends Controller
{
    public function changeStatus(Request $request)
    {
        $users = Fan::all();
        foreach ($users as $user){
            if($user->fn_id == $request->id){
                if ($request->status == 0) {
                    $user->pstate = $user->status;
                    $user->status = 0;
                }
                if ($request->status == 1) {
                    $user->pstate = $user->status;
                    $user->status = 1;
                }
                $user->save();
                return response()->json(['success'=>'Status change successfully.']);
            }
        }
    }


    //Blacklist

    public function changebStatus(Request $request)
    {
        $users = Fan::all();
        foreach ($users as $user){
            if($user->fn_id == $request->id){
                if($request->status == 1){
                    if($user->rstate == 1) {
                        $user->pstate = $user->status;
                    }
                    $user->status = 0;
                }
                if($request->status == 0){
                    if($user->rstate == 1) {
                        $user->status = $user->pstate;
                    }
                }
                $user->bstatus = $request->status;
                $user->save();
                return response()->json(['success'=>'Status change successfully.']);
            }
        }
    }
}
