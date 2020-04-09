<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Home;
use App\Room;
use App\Ac;
use App\Fan;
use App\Fridge;
use App\Light;
use App\Motor;
use App\Wm;
use App\Power;

class HomeController extends Controller
{
    public function index()
    {
        $powers = Power::all();
        $rooms = Room::all();
        $acs = Ac::all();
        $fans = Fan::all();
        $fridges = Fridge::all();
        $lights = Light::all();
        $motors = Motor::all();
        $wms = Wm::all();

        return view('home.index',compact('acs','fans','fridges','lights','motors','wms','rooms','powers'));
    }
    public function web()
    {
        $powers = Power::all();
        $rooms = Room::all();
        $acs = Ac::all();
        $fans = Fan::all();
        $fridges = Fridge::all();
        $lights = Light::all();
        $motors = Motor::all();
        $wms = Wm::all();

        return view('home.web',compact('acs','fans','fridges','lights','motors','wms','rooms','powers'));
    }
}
