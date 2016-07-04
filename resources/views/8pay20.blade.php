
@extends('layouts.main')

@section('title', '8 PAY 20 SPECIAL | ประกันชีวิตเพื่อการสะสมทรัพย์')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="สะสมทรัพย์ 20 ปี ชำระเบี้ยประกันภัย 8 ปี พิเศษ (มีเงินปันผล)" />
    <meta property="og:description"   content="แบบสะสมทรัพย์ 20 ปี ชำระเบี้ยประกันภัย 8 ปี พิเศษ (มีเงินปันผล) เป็นกรมธรรม์เพื่อการสะสมทรัพย์ที่จะช่วยเพิ่มเงินออมของครอบครัว เบี้ยประกันไม่สูงเหมาะสำหรับการวางแผนออมเงิน 20 ปี โดยชำระเบี้ยประกันเพียง 8 ปี" />
    <meta property="og:image"         content="{{ asset("components/image/20Paylife/pay_life_logo.jpg") }}" />
@stop

@section('content')

    <div class="title-container">
        <h3 class="topic">8 PAY 20 SPECIAL</h3>
        <h5>ประกันชีวิตเพื่อการสะสมทรัพย์</h5>
        <p>
            เพิ่มเงินออมของครอบครัวด้วยกรมธรรม์ประกันชีวิต

            แบบสะสมทรัพย์ 20 ปี ชำระเบี้ยประกันภัย 8 ปี พิเศษ (มีเงินปันผล) เป็นกรมธรรม์เพื่อการสะสมทรัพย์ที่จะช่วยเพิ่มเงินออมของครอบครัว เบี้ยประกันไม่สูงเหมาะสำหรับการวางแผนออมเงิน 20 ปี โดยชำระเบี้ยประกันเพียง 8 ปี
        </p>
    </div>

    <div>
        <img src="{{ asset("components/image/8PAY20/Manual_8pay20Special-2.png") }}" >
        <img src="{{ asset("components/image/8PAY20/Manual_8pay20Special-3.png") }}" >
        <img src="{{ asset("components/image/8PAY20/Manual_8pay20Special-4.png") }}" >
        <img src="{{ asset("components/image/8PAY20/Manual_8pay20Special-5.png") }}" >
        <img src="{{ asset("components/image/8PAY20/Manual_8pay20Special-6.png") }}" >
        <img src="{{ asset("components/image/8PAY20/Manual_8pay20Special-7.png") }}" >
        <img src="{{ asset("components/image/8PAY20/Manual_8pay20Special-8.png") }}" >
    </div>


@stop

