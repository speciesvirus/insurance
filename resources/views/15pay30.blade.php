
@extends('layouts.main')

@section('title', 'AIA 15 PAY 30 (PAR) | ประกันชีวิตเพื่อการสะสมทรัพย์')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="เอไอเอ สะสมทรัพย์ 30 ปี ชำระเบี้ยประกันภัย 15 ปี (มีเงินปันผล)" />
    <meta property="og:description"   content="เอไอเอ สะสมทรัพย์ 30 ปี ชำระเบี้ยประกันภัย 15 ปี (มีเงินปันผล) เป็นกรมธรรม์เพื่อการสะสมทรัพย์ เพื่อเพิ่มเงินออมของครอบครัวและวางรากฐานการบริหารการเงินให้คุ้มค่าตลอดระยะเวลา 30 ปี โดยชำระเบี้ยประกันภัยเพียง 15 ปี อัตราเบี้ยประกันเหมาะสม ลงตัวสำหรับทั้งการออมเงินและการได้รับความคุ้มครอง" />
    <meta property="og:image"         content="{{ asset("components/image/15PAY30/pay_life_logo.jpg") }}" />
@stop

@section('content')

    <div class="title-container">
        <h3 class="topic">AIA 15 PAY 30</h3>
        <h5>ประกันชีวิตเพื่อการสะสมทรัพย์</h5>
        <p>ลงตัวทุกการวางแผนการเงินสำหรับคนทำงาน วางแผนสร้างหลักประกันเพื่อบรรเทาความเดือดร้อนหากเกิดเหตุการณ์ไม่คาดฝัน

            เอไอเอ สะสมทรัพย์ 30 ปี ชำระเบี้ยประกันภัย 15 ปี (มีเงินปันผล) เป็นกรมธรรม์เพื่อการสะสมทรัพย์ เพื่อเพิ่มเงินออมของครอบครัวและวางรากฐานการบริหารการเงินให้คุ้มค่าตลอดระยะเวลา 30 ปี โดยชำระเบี้ยประกันภัยเพียง 15 ปี อัตราเบี้ยประกันเหมาะสม ลงตัวสำหรับทั้งการออมเงินและการได้รับความคุ้มครอง
        </p>
    </div>

    <div>
        <img src="{{ asset("components/image/15PAY30/newPord15Pay30_2-2.png") }}" >
        <img src="{{ asset("components/image/15PAY30/newPord15Pay30_2-3.png") }}" >
        <img src="{{ asset("components/image/15PAY30/newPord15Pay30_2-4.png") }}" >
        <img src="{{ asset("components/image/15PAY30/newPord15Pay30_2-5.png") }}" >
    </div>


@stop

