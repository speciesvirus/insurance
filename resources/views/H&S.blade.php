

@extends('layouts.main')

@section('title', 'AIA H&S | สัญญาเพิ่มเติมกลุ่มค่ารักษาพยาบาล')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="สัญญาเพิ่มเติมเอไอเอ เอช แอนด์ เอส" />
    <meta property="og:description"   content="ช่วยลดภาระค่าใช้จ่ายรวมถึงยกระดับการรักษาพยาบาลของคุณและคนที่คุณรัก ไม่ว่าจะเป็นผู้ป่วยในหรือผู้ป่วยนอก ด้วยการคำนวณผลประโยชน์แบบเหมาจ่ายตามจริงให้คุณ" />
    <meta property="og:image"         content="{{ asset("components/image/HB/hb_logo.jpg") }}" />
@stop



@section('content')

    <div class="title-container">
        <h3 class="topic">H&S</h3>
        <h5>สัญญาเพิ่มเติมเอไอเอ เอช แอนด์ เอส</h5>
        <p>แผนประกันที่ให้ความคุ้มครองครบถ้วนในแผนเดียว ทั้งประกันชีวิต ประกันสุขภาพ ประกันอุบัติเหตุ และประกันโรคร้ายแรง ให้คุณพร้อมรับกับทุกสถานการณ์ที่พลิกผัน เพื่อความอุ่นใจในอนาคตของคุณและครอบครัว</p>
    </div>


    <div>
        <img src="{{ asset("components/image/HS/Manual_Rider-08.png") }}" >
    </div>


@stop

