
@extends('layouts.main')

@section('title', 'AIA PA | ประกันอุบัติเหตุส่วนบุคคล')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="AIA PA | ประกันอุบัติเหตุส่วนบุคคล" />
    <meta property="og:description"   content="หมดความกังวลด้วยความคุ้มครองชีวิตจากอุบัติเหตุทุกประเภท รวมถึงอุบัติเหตุจากการขับขี่หรือโดยสารรถจักรยานยนต์สูงถึง 500,000 บาท พร้อมบัตร AIA PRIVILEGE CARE CARD ที่เอไอเอจะแบ่งเบาภาระค่าใช้จ่ายในการรักษาพยาบาลจากอุบัติเหตุ " />
    <meta property="og:image"         content="{{ asset("components/image/PA/pa_logo.jpg") }}" />
@stop

@section('content')

    <div class="title-container">
        <h3 class="topic">AIA PA</h3>
        <h5>ประกันอุบัติเหตุส่วนบุคคล</h5>
        <p>เตรียมการล่วงหน้าเรื่องค่ารักษาพยาบาลจากอุบัติเหตุสูงสุด ด้วยบัตร
            AIA PRIVILEGE CARE CARD ที่เอไอเอจะแบ่งเบาภาระค่าใช้จ่ายในการรักษาพยาบาล
            จากอุบัติเหตุ เพื่อความอุ่นใจของคุณและครอบครัว

            แผนประกันภัยอุบัติเหตุ เป็นหลักประกันให้คุณและครอบครัว สามารถแบ่งเบาภาระค่าใช้จ่าย
            ในการรักษาพยาบาลเนื่องจากอุบัติเหตุตลอด 24 ชั่วโมง ทั่วโลก</p>
    </div>

    <div>
        <img src="{{ asset("components/image/PA/AIA_PA_BROCHURE_A5_20160401_3-5.png") }}" >
        <img src="{{ asset("components/image/PA/AIA_PA_BROCHURE_A5_20160401_3-4.png") }}" >
        <img src="{{ asset("components/image/PA/AIA_PA_BROCHURE_A5_20160401_3-3.png") }}" >
        <img src="{{ asset("components/image/PA/AIA_PA_BROCHURE_A5_20160401_3-6.png") }}" >
    </div>


@stop

