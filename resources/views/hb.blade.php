
@extends('layouts.main')

@section('title', 'AIA HB PLUS GOLD | สัญญาเพิ่มเติมกลุ่มค่ารักษาพยาบาล')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="สัญญาเพิ่มเติมเอไอเอ เอชบี พลัส โกลด์" />
    <meta property="og:description"   content="ไร้กังวลเรื่องรายได้ถึงแม้ต้องขาดงานเพราะได้ชดเชยรายได้ ในวันที่คุณเจ็บป่วยจนต้องรักษาตัวในโรงพยาบาล นอกจากภาระด้านค่ารักษาพยาบาลแล้ว เราไม่อยากให้คุณเผชิญกับความกังวลใจเรื่องการขาดรายได้อีก" />
    <meta property="og:image"         content="{{ asset("components/image/HB/hb_logo.jpg") }}" />
@stop

@section('content')

    <div class="title-container">
        <h3 class="topic">AIA HB PLUS GOLD</h3>
        <h5>สัญญาเพิ่มเติมกลุ่มค่ารักษาพยาบาล</h5>
        <p>ไร้กังวลเรื่องรายได้ถึงแม้ต้องขาดงานเพราะได้ชดเชยรายได้ ในวันที่คุณเจ็บป่วยจนต้องรักษาตัวในโรงพยาบาล นอกจากภาระด้านค่ารักษาพยาบาลแล้ว เราไม่อยากให้คุณเผชิญกับความกังวลใจเรื่องการขาดรายได้อีก

            เอไอเอ เอชบี พลัส โกลด์ ให้คุณอุ่นใจ และเตรียมพร้อมรับมือกับรายรับที่อาจขาดหายไป เพราะ เอไอเอ เอชบี พลัส โกลด์ จะชดเชยรายได้ให้คุณในช่วงเวลาที่คุณพักรักษาตัวในโรงพยาบาล ช่วยแบ่งเบาภาระด้านการเงินที่อาจส่งผลกระทบต่อครอบครัว</p>
    </div>


    <div>
        <img src="{{ asset("components/image/HB/Manual_Rider-12.png") }}" >
        <img src="{{ asset("components/image/HB/Manual_Rider-13.png") }}" >
    </div>


@stop

