
@extends('layouts.main')

@section('title', 'ECIR | สัญญาเพิ่มเติมกลุ่มโรคร้ายแรง')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="สัญญาเพิ่มเติมกลุ่มโรคร้ายแรง" />
    <meta property="og:description"   content="เมื่อตรวจพบว่าเป็นโรคร้ายแรงเป็นครั้งแรกในขณะที่ยังมีชีวิตอยู่ การได้รับชดเชยเงินก้อนจะช่วยในการวางแผนการรักษาได้เป็นอย่างมาก อย่าปล่อยให้โรคร้ายแรงทำร้ายคนทั้งบ้าน ให้เอไอเอ เป็นผู้ดูแลคุณและคนที่คุณรัก" />
    <meta property="og:image"         content="{{ asset("components/image/ECIR/ecir_logo.jpg") }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
@stop

@section('content')

    <div class="title-container">
        <h3 class="topic">ECIR</h3>
        <h5>สัญญาเพิ่มเติมกลุ่มโรคร้ายแรง</h5>
        <p>เมื่อตรวจพบว่าเป็นโรคร้ายแรงเป็นครั้งแรกในขณะที่ยังมีชีวิตอยู่ การได้รับชดเชยเงินก้อนจะช่วยในการวางแผนการรักษาได้เป็นอย่างมาก อย่าปล่อยให้โรคร้ายแรงทำร้ายคนทั้งบ้าน ให้เอไอเอ เป็นผู้ดูแลคุณและคนที่คุณรัก</p>
    </div>

    <div>
        <img src="{{ asset("components/image/ECIR/Manual_Rider-15.png") }}" >
        <img src="{{ asset("components/image/ECIR/Manual_Rider-03.png") }}" >
        <img src="{{ asset("components/image/ECIR/Manual_Rider-05.png") }}" >
    </div>


@stop
