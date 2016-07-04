
@extends('layouts.main')

@section('title', 'AIA 15 PAY 25 SPECIAL (PAR) | ประกันชีวิตเพื่อการสะสมทรัพย์')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="เอไอเอ สะสมทรัพย์ 25 ปี ชำระเบี้ยประกันภัย 15 ปี พิเศษ (มีเงินปันผล)" />
    <meta property="og:description"   content="บริหารเงินออมของครอบครัวและวางแผนภาษีของคุณไปพร้อมกันด้วยกรมธรรม์ AIA 15Pay25 Special (Par)" />
    <meta property="og:image"         content="{{ asset("components/image/20Paylife/pay_life_logo.jpg") }}" />
@stop

@section('content')

    <div class="title-container">
        <h3 class="topic">AIA 15 PAY 25 SPECIAL</h3>
        <h5>ประกันชีวิตเพื่อการสะสมทรัพย์</h5>
        <p>บริหารเงินออมของครอบครัวและวางแผนภาษีของคุณไปพร้อมกัน
            ด้วยกรมธรรม์ AIA 15Pay25 Special</p>
    </div>

<div>
    <img src="{{ asset("components/image/15PAY25/newPord15Pay25-2.png") }}" >
    <img src="{{ asset("components/image/15PAY25/newPord15Pay25-3.png") }}" >
    <img src="{{ asset("components/image/15PAY25/newPord15Pay25-4.png") }}" >
    <img src="{{ asset("components/image/15PAY25/newPord15Pay25-5.png") }}" >
</div>


@stop

