
@extends('layouts.main')

@section('title', 'Insurance')


@section('content')

    <div class="social-container">
        <div class="fb-like clearfix" data-href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>

    <div class="aio-con clearfix">
        <div class="aio-bg">
            <img src="{{ asset("components/image/banner-all-in-one.jpg") }}">
        </div>
        <div class="aio-banner">
            <img src="{{ asset("components/image/clover.png") }}" >

        </div>
        <div class="aio-title">
            <h1 class="text-center text-red">AIA ALL IN ONE</h1>
        </div>
        <div class="aio-subtitle">
            <h3 class="text-white">พร้อม <span class="text-red">ครบ</span> ในแผนประกันเดียว</h3>
        </div>
    </div>

    <div>
        <img src="{{ asset("components/image/20_Pay_Life_Package/newProd20PLPackage-5.png") }}" >

        <img src="{{ asset("components/image/20_Pay_Life_Package/newProd20PLPackage-7.jpg") }}" >

    </div>

    <div class="contact-container clearfix">

        <form>

            <h3>ลงทะเบียนรับคำปรึกษา</h3>

            <div class="col-md-6">
                <input type="text" class="text" name="username" placeholder="ชื่อ-นามสกุล">
                <input type="text" class="text" name="username" placeholder="email">
                <input type="text" class="text" name="username" placeholder="เบอร์โทร">


                <div class="col-md-6">
                    <input type="radio" id="checkbox-1-1" class="custom-checkbox"  name="selector" checked/>
                    <label for="checkbox-1-1">ชาย</label>
                </div>
                <div class="col-md-6">
                    <input type="radio" id="checkbox-1-2" class="custom-checkbox"  name="selector" />
                    <label for="checkbox-1-2">หญิง</label>
                </div>
            </div>
            <div class="col-md-6">
                <input type="text" class="text" name="username" placeholder="อายุ">
                <input type="text" class="text" name="username" placeholder="เบี้ยต่อปี">



                <textarea name="message" type="text" class="text" id="input-message" placeholder="ข้อความ"></textarea>
            </div>
            <br>
            <button class="signin clearfix">
                ส่งข้อความ
            </button>
        </form>

    </div>

@stop

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.6&appId=1724713611112155";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>