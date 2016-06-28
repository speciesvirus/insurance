
@extends('layouts.main')

@section('title', 'AIA 15 PAY LIFE (PAR) | ประกันชีวิตเพื่อความคุ้มครอง')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="เอไอเอ ตลอดชีพ ชำระเบี้ยประกันภัย 15 ปี ­(มีเงินปันผล)" />
    <meta property="og:description"   content="สร้างหลักประกันที่มั่นคงให้กับคนที่คุณรักเพื่อช่วยบรรเทาความเดือดร้อนหากเกิดเหตุการณ์ไม่คาดฝัน เป็นการแสดงความรับผิดชอบ ความรัก ความห่วงใยที่คุณเต็มใจมอบให้กับครอบครัวและคนที่คุณรักได้เป็นอย่างดี" />
    <meta property="og:image"         content="{{ asset("components/image/ECIR/ecir_logo.jpg") }}" />
@stop


@section('content')

    <div>
        <img src="{{ asset("components/image/15PayLife/AIA15PayLifebrochure-3.png") }}" >
        <img src="{{ asset("components/image/15PayLife/AIA15PayLifebrochure-4.png") }}" >
        <img src="{{ asset("components/image/15PayLife/AIA15PayLifebrochure-5.png") }}" >
    </div>


@stop

