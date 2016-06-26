
@extends('layouts.main')

@section('title', 'Insurance')


@section('facebook-meta')
    <meta property="og:url"           content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="สัญญาเพิ่มเติมกลุ่มโรคร้ายแรง" />
    <meta property="og:description"   content="เมื่อตรวจพบว่าเป็นโรคร้ายแรงเป็นครั้งแรกในขณะที่ยังมีชีวิตอยู่ การได้รับชดเชยเงินก้อนจะช่วยในการวางแผนการรักษาได้เป็นอย่างมาก อย่าปล่อยให้โรคร้ายแรงทำร้ายคนทั้งบ้าน ให้เอไอเอ เป็นผู้ดูแลคุณและคนที่คุณรัก" />
    <meta property="og:image"         content="{{ asset("components/image/ECIR/ecir_logo.jpg") }}" />
@stop

@section('content')

    <div>
        <img src="{{ asset("components/image/ECIR/Manual_Rider-15.png") }}" >
        <img src="{{ asset("components/image/ECIR/Manual_Rider-03.png") }}" >
        <img src="{{ asset("components/image/ECIR/Manual_Rider-05.png") }}" >
    </div>


@stop
