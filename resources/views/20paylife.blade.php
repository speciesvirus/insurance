
@extends('layouts.main')

@section('title', '20 PAY LIFE (PAR) | ประกันชีวิตเพื่อความคุ้มครอง')

@section('facebook-meta')
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="ตลอดชีพ ชำระเบี้ยประกันภัย 20 ปี (มีเงินปันผล)" />
    <meta property="og:description"   content="เอไอเอ ตลอดชีพ ชำระเบี้ยประกันภัย 20 ปี (มีเงินปันผล) เป็นแบบประกันที่สอดคล้องกับความต้องการที่แท้จริงของครอบครัว และเป็นส่วนสำคัญในการสร้างความอุ่นใจให้ครอบครัวได้" />
    <meta property="og:image"         content="{{ asset("components/image/20Paylife/pay_life_logo.jpg") }}" />
@stop

@section('content')

    <div class="title-container">
        <h3 class="topic">20 PAY LIFE</h3>
        <h5>ประกันชีวิตเพื่อความคุ้มครอง</h5>
        <p>ความอุ่นใจของครอบครัว คือ กุญแจของความสำเร็จของการดำเนินชีวิต เพราะครอบครัวสำคัญที่สุด

            เอไอเอ ตลอดชีพ ชำระเบี้ยประกันภัย 20 ปี (ไม่มีเงินปันผล) เป็นแบบประกันที่สอดคล้องกับความต้องการที่แท้จริงของครอบครัว และเป็นส่วนสำคัญในการสร้างความอุ่นใจให้ครอบครัวได้
        </p>
    </div>

    <div>
        <img src="{{ asset("components/image/20Paylife/NewProd20PayLifenonpar-2.png") }}" >
        <img src="{{ asset("components/image/20Paylife/NewProd20PayLifenonpar-3.png") }}" >
        <img src="{{ asset("components/image/20Paylife/NewProd20PayLifenonpar-4.png") }}" >
        <img src="{{ asset("components/image/20Paylife/NewProd20PayLifenonpar-5.png") }}" >
        <img src="{{ asset("components/image/20Paylife/NewProd20PayLifenonpar-6.png") }}" >
    </div>


@stop

