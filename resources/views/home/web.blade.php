@extends('layouts.web')


@section('content')
    {{--    <div class="row text-white" style="margin: auto;">--}}
    {{--        <div class="col col-7 "style="margin: 5px;">--}}
    {{--            <h1 style="margin-left:300px;margin-bottom: 10px">Rooms</h1>--}}
    {{--        </div>--}}
    {{--        <div class="col w-50 " style="text-align: center; margin: 5px;">--}}
    {{--            <h1>Blacklist</h1>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <hr>
    <div class="row text-white" style="margin: auto;">
        <div class="col col-7 pre-scrollable" style="max-height: 405px; overflow-x: hidden;">
            @foreach($rooms as $room)
                @if($room->rview == 1)
                   <script>$(document).ready(function(){
                           $('.{{$room->r_id}}').slideToggle();
                       }); </script>
                @endif
                <div class="w-100 bg-dark center"
                     style="height: 60px;border-radius: 20px;margin: auto;padding: 13px 0;">
                    <div class="row ">
                        <div class="col-9" style="margin-left: 30px">
                            <button id="{{$room->r_id}}" class="bg-transparent btn text-white rview"
                                    onclick="$('.{{$room->r_id}}').slideToggle();">{{$room->rname}}</button>
                        </div>
                        <div class="col" style="">
                            <input data-id="{{$room->r_id}}" onchange="javascript:document.location.reload()"
                                   class="rstatus"
                                   type="checkbox" data-onstyle="success" data-offstyle="danger"
                                   data-toggle="toggle"
                                   data-on="On" data-off="Off" {{ $room->status ? 'checked' : '' }}>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <br>
                @foreach($lights as $light)
                    <div class="container">
                        <div class="row {{$room->r_id}}" style="display:none;">
                            @if( $light->r_id == $room->r_id)
                                <div class="col-2" style="margin-left: 210px;">
                                    <p>{{$light->lt_id}}</p>
                                </div>
                                <input data-id="{{$light->lt_id}}"
                                       {{ ($light->bstatus == 0 && $room->status == 1) ? '' : 'disabled' }} onchange="javascript:document.location.reload()"
                                       class="lstatus"
                                       type="checkbox" data-onstyle="success" data-offstyle="danger"
                                       data-toggle="toggle"
                                       data-on="On" data-off="Off" {{ $light->status ? 'checked' : '' }}>
                                <br>
                                <br>
                            @endif
                        </div>
                    </div>
                @endforeach
                @foreach($fans as $fan)
                    <div class="container" id="myDIV">
                        <div class="row {{$room->r_id}}" style="display:none;">
                            @if( $fan->r_id == $room->r_id)
                                <div class="col-2" style="margin-left: 210px">
                                    {{$fan->fn_id}}
                                </div>
                                <input data-id="{{$fan->fn_id}}"
                                       {{ ($fan->bstatus == 0 && $room->status == 1) ? '' : 'disabled' }} onchange="javascript:document.location.reload()"
                                       class="fnstatus"
                                       type="checkbox" data-onstyle="success" data-offstyle="danger"
                                       data-toggle="toggle"
                                       data-on="On" data-off="Off" {{ $fan->status ? 'checked' : '' }}>
                                <br>
                                <br>
                            @endif
                        </div>
                    </div>
                @endforeach
                @foreach($acs as $ac)
                    <div class="container" id="myDIV">
                        <div class="row {{$room->r_id}}" style="display:none;">
                            @if( $ac->r_id == $room->r_id)
                                <div class="col-2" style="margin-left: 210px">
                                    {{$ac->ac_id}}
                                </div>
                                <input data-id="{{$ac->ac_id}}"
                                       {{ ($ac->bstatus == 0 && $room->status == 1) ? '' : 'disabled' }} onchange="javascript:document.location.reload()"
                                       class="acstatus"
                                       type="checkbox" data-onstyle="success" data-offstyle="danger"
                                       data-toggle="toggle"
                                       data-on="On" data-off="Off" {{ $ac->status ? 'checked' : '' }}>
                                <br>
                                <br>
                            @endif
                        </div>
                    </div>
                @endforeach
                @foreach($wms as $wm)
                    <div class="container" id="myDIV">
                        <div class="row {{$room->r_id}}" style="display:none;">
                            @if( $wm->r_id == $room->r_id)
                                <div class="col-2" style="margin-left: 210px">
                                    {{$wm->wm_id}}
                                </div>
                                <input data-id="{{$wm->wm_id}}"
                                       {{ ($wm->bstatus == 0 && $room->status == 1) ? '' : 'disabled' }} onchange="javascript:document.location.reload()"
                                       class="wmstatus"
                                       type="checkbox" data-onstyle="success" data-offstyle="danger"
                                       data-toggle="toggle"
                                       data-on="On" data-off="Off" {{ $wm->status ? 'checked' : '' }}>
                                <br>
                                <br>
                            @endif
                        </div>
                    </div>
                @endforeach
                @foreach($fridges as $fridge)
                    <div class="container" id="myDIV">
                        <div class="row {{$room->r_id}}" style="display:none;">
                            @if( $fridge->r_id == $room->r_id)
                                <div class="col-2" style="margin-left: 210px">
                                    {{$fridge->fr_id}}
                                </div>
                                <input data-id="{{$fridge->fr_id}}"
                                       {{ ($fridge->bstatus == 0 && $room->status == 1) ? '' : 'disabled' }} onchange="javascript:document.location.reload()"
                                       class="frstatus" type="checkbox" data-onstyle="success"
                                       data-offstyle="danger"
                                       data-toggle="toggle" data-on="On"
                                       data-off="Off" {{ $fridge->status ? 'checked' : '' }}>
                                <br>
                                <br>
                            @endif
                        </div>
                    </div>
                @endforeach
                @foreach($motors as $motor)
                    <div class="container" id="myDIV">
                        <div class="row {{$room->r_id}}" style="display:none;">
                            @if( $motor->r_id == $room->r_id)
                                <div class="col-2" style="margin-left: 210px">
                                    {{$motor->mt_id}}
                                </div>
                                <input data-id="{{$motor->mt_id}}"
                                       {{ ($motor->bstatus == 0 && $room->status == 1) ? '' : 'disabled' }} onchange="javascript:document.location.reload()"
                                       class="mtstatus" type="checkbox" data-onstyle="success"
                                       data-offstyle="danger"
                                       data-toggle="toggle" data-on="On"
                                       data-off="Off" {{ $motor->status ? 'checked' : '' }}>
                                <br>
                                <br>
                            @endif
                        </div>
                    </div>
                @endforeach
                <br>
            @endforeach
        </div>

        {{--        blacklist--}}

        <div class="col pre-scrollable" style="max-height: 475px; overflow-x: hidden">
            <div class="w-100 bg-dark center" style="height: 50px;border-radius: 20px;padding: 13px 0;font-size: large"
                 align="center">
                <b>Light</b>
            </div>
            @foreach($lights as $light)
                <div class="row" style="padding: 13px 0" align="center">
                    <div class="col" style="font-size: medium" align="center">
                        {{$light->lt_id}}
                    </div>
                    <div style="margin-right: 100px">
                        <input data-id="{{$light->lt_id}}" onchange="javascript:document.location.reload()"
                               class="lbstatus"
                               type="checkbox" data-onstyle="danger" data-offstyle="success"
                               data-toggle="toggle"
                               data-on="Blacklist"
                               data-off="Whitelist" {{ $light->bstatus ? 'checked' : '' }}>
                    </div>
                </div>
            @endforeach
            <div class="w-100 bg-dark center" style="height: 50px;border-radius: 20px;padding: 13px 0;font-size: large"
                 align="center">
                <b>Fan</b>
            </div>
            @foreach($fans as $fan)
                <div class="row" style="padding: 13px 0" align="center">
                    <div class="col" style="font-size: medium" align="center">
                        {{$fan->fn_id}}
                    </div>
                    <div style="margin-right: 100px">
                        <input data-id="{{$fan->fn_id}}" onchange="javascript:document.location.reload()"
                               class="fnbstatus"
                               type="checkbox" data-onstyle="danger" data-offstyle="success"
                               data-toggle="toggle"
                               data-on="Blacklist"
                               data-off="Whitelist" {{ $fan->bstatus ? 'checked' : '' }}>
                    </div>
                </div>
            @endforeach
            <div class="w-100 bg-dark center" style="height: 50px;border-radius: 20px;padding: 13px 0;font-size: large"
                 align="center">
                <b>Ac</b>
            </div>
            @foreach($acs as $ac)
                <div class="row" style="padding: 13px 0" align="center">
                    <div class="col" style="font-size: medium" align="center">
                        {{$ac->ac_id}}
                    </div>
                    <div style="margin-right: 100px">
                        <input data-id="{{$ac->ac_id}}" onchange="javascript:document.location.reload()"
                               class="acbstatus"
                               type="checkbox" data-onstyle="danger" data-offstyle="success"
                               data-toggle="toggle"
                               data-on="Blacklist"
                               data-off="Whitelist" {{ $ac->bstatus ? 'checked' : '' }}>
                    </div>
                </div>
            @endforeach
            <div class="w-100 bg-dark center" style="height: 50px;border-radius: 20px;padding: 13px 0;font-size: large"
                 align="center">
                <b>Washing Machine</b>
            </div>
            @foreach($wms as $wm)
                <div class="row" style="padding: 13px 0" align="center">
                    <div class="col" style="font-size: medium" align="center">
                        {{$wm->wm_id}}
                    </div>
                    <div style="margin-right: 100px">
                        <input data-id="{{$wm->wm_id}}" onchange="javascript:document.location.reload()"
                               class="wmbstatus"
                               type="checkbox" data-onstyle="danger" data-offstyle="success"
                               data-toggle="toggle"
                               data-on="Blacklist"
                               data-off="Whitelist" {{ $wm->bstatus ? 'checked' : '' }}>
                    </div>
                </div>
            @endforeach
            <div class="w-100 bg-dark center" style="height: 50px;border-radius: 20px;padding: 13px 0;font-size: large"
                 align="center">
                <b>Fridge</b>
            </div>
            @foreach($fridges as $fridge)
                <div class="row" style="padding: 13px 0" align="center">
                    <div class="col" style="font-size: medium" align="center">
                        {{$fridge->fr_id}}
                    </div>
                    <div style="margin-right: 100px">
                        <input data-id="{{$fridge->fr_id}}" onchange="javascript:document.location.reload()"
                               class="frbstatus"
                               type="checkbox" data-onstyle="danger" data-offstyle="success"
                               data-toggle="toggle"
                               data-on="Blacklist"
                               data-off="Whitelist" {{ $fridge->bstatus ? 'checked' : '' }}>
                    </div>
                </div>
            @endforeach
            <div class="w-100 bg-dark center" style="height: 50px;border-radius: 20px;padding: 13px 0;font-size: large"
                 align="center">
                <b>Motor</b>
            </div>
            @foreach($motors as $motor)
                <div class="row" style="padding: 13px 0" align="center">
                    <div class="col" style="font-size: medium" align="center">
                        <h4>{{$motor->mt_id}}</h4>
                    </div>
                    <div style="margin-right: 100px">
                        <input data-id="{{$motor->mt_id}}" onchange="javascript:document.location.reload()"
                               class="mtbstatus"
                               type="checkbox" data-onstyle="danger" data-offstyle="success"
                               data-toggle="toggle"
                               data-on="Blacklist"
                               data-off="Whitelist" {{ $motor->bstatus ? 'checked' : '' }}>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        $('.power-button').click(function(){
            if ($(this).hasClass('on') == false){
                $(this).removeClass('on');
            }
            else {
                $(this).addClass('on');
            }
        });
    </script>
    <script>
        $(function () {
            $('.rview').click(function () {
                var id = $(this).attr('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/rtoggle',
                    data: {'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.rstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/rStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.lstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/lStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.fnstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/fnStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.acstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/acStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.wmstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/wmStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.frstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/frStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.mtstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/mtStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        //blacklisting

        $(function () {
            $('.lbstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/lbStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.fnbstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/fnbStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.acbstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/acbStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.wmbstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/wmbStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.frbstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/frbStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
        $(function () {
            $('.mtbstatus').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/mtbStatus',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
@endsection

