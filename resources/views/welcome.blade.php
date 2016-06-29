
@extends('layouts.main')

@section('title', 'AIA Chicker')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="AIA ALL IN ONE" />
    <meta property="og:description"   content="แผนประกันที่ให้ความคุ้มครองครบถ้วนในแผนเดียว ทั้งประกันชีวิต ประกันสุขภาพ ประกันอุบัติเหตุ และประกันโรคร้ายแรง ให้คุณพร้อมรับกับทุกสถานการณ์ที่พลิกผัน เพื่อความอุ่นใจในอนาคตของคุณและครอบครัว" />
    <meta property="og:image"         content="{{ asset("components/image/ECIR/ecir_logo.jpg") }}" />
@stop

@section('content')


    <div class="aio-con clearfix">
        <div class="aio-bg">
            <img src="{{ asset("components/image/banner-all-in-one.jpg") }}" alt="AIA Chicker">
        </div>
        <div class="aio-banner">
            <img src="{{ asset("components/image/clover.png") }}" alt="AIA" >

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
