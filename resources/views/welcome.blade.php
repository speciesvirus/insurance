
@extends('layouts.main')

@section('title', 'Insurance')


@section('content')


    <div class="aio-con clearfix">
        <div class="aio-bg">
            <img src="{{ asset("components/image/banner-all-in-one.jpg") }}">
        </div>
        <div class="aio-banner">
            <img src="{{ asset("components/image/clover.png") }}" >

        </div>
        <div class="aio-title">
            <h1 class="text-center text-red">AIA ALL IN ONE</h1>
        </div>
        <div class="aio-subtitle">
            <h3 class="text-white">พร้อม <span class="text-red">ครบ</span> ในแผนประกันเดียว</h3>
        </div>
    </div>

    <div>
        <img src="{{ asset("components/image/20_Pay_Life_Package/newProd20PLPackage-5.png") }}" >

        <img src="{{ asset("components/image/20_Pay_Life_Package/newProd20PLPackage-7.jpg") }}" >

    </div>


@stop
