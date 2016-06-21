<!DOCTYPE html>
<html>
<head>
    <title>Insurance</title>
    <link rel="stylesheet" type="text/css" href="{{ asset("components/css/reset.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("components/font-awesome/css/font-awesome.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("components/bootstrap/dist/css/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("components/bootstrap/dist/css/bootstrap-theme.min.css") }}">


    <script src="{{ asset("components/jquery/dist/jquery.min.js") }}"></script>
    <script src="{{ asset("components/bootstrap/dist/js/bootstrap.min.js") }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset("components/css/default.css") }}">
    <script src="{{ asset("components/js/script.js") }}"></script>



</head>
<body>
<div class="wrapper">
    <div class="parallax">

        <header class="clearfix">
            <div class="top-informations-bg">

                <div class="col-xs-12 col-sm-12">

                    <div class="top-informations">
                        <ul>

                            <li class="phone-number">
                                <i class="fa fa-phone"></i>
                                <a href="tel:020 1234 678">
                                    020 1234 678
                                </a>
                            </li>
                            <li class="e-mail">
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:info@example.com">
                                    info@example.com
                                </a>
                            </li>
                            <li class="e-skype">
                                <i class="fa fa-skype"></i>
                                <a href="skype:example.skype?call">
                                    example.skype
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="connect-with-us">

                        <ul>


                            <li>Connect With Us:</li>


                            <li class="social-icons">



                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>


                                <a href="#" target="_blank"><i class="fa fa-facebook"></i> </a>


                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>


                                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>


                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>


                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>


                            </li>

                        </ul>

                    </div> <!-- col-xs-12 col-sm-6 connect-with-us -->

                </div> <!-- row -->

            </div><!-- top-informations-bg -->
        </header>


        <input type="checkbox" id="menu-toggle" class="hidden">
        <label for="menu-toggle">
            <span class="glyphicon"></span>
        </label>
        <div class="menu">
            <h2>AIA sure</h2>
            <ul>
                {{--<li>--}}
                    {{--<div class="profile-insurance">--}}
                        {{--profile--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)" class="active">คุ้มครองตลอดชีพ</a></li>--}}
                <li><a href="javascript:void(0)">คุ้มครองโรคร้ายแรง</a></li>
                <li><a href="javascript:void(0)">ประกันสุขภาพรายปี AIA Health Guard</a></li>
                <li><a href="javascript:void(0)">ค่าชดเชยรายวัน</a></li>
                <li><a href="javascript:void(0)">ประกันอุบัติเหตุ</a></li>

                <li><a href="javascript:void(0)" class="active">สะสมทรัพย์</a>
                    <ul>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 7 ปี คุ้มครอง 15 ปี (มีเงินปันผล)</a></li>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 8 ปี คุ้มครอง 20 ปี (มีเงินปันผล)</a></li>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 15 ปี คุ้มครอง 25 ปี (มีเงินปันผล)</a></li>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 15 ปี คุ้มครอง 30 ปี (มีเงินปันผล)</a></li>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 20 ปี คุ้มครอง 20 ปี (มีเงินปันผล)</a></li>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 10 ปี คุ้มครองถึงอายุ 80 ปี (มีเงินปันผล)</a></li>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 15 ปี คุ้มครองถึงอายุ 80 ปี (มีเงินปันผล)</a></li>
                    </ul>
                </li>

                <li><a href="javascript:void(0)" class="active">คุ้มครองตลอดชีพ</a>
                    <ul>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 20 ปี คุ้มครองถึงอายุ 99 ปี (ไม่มีเงินปันผล)</a></li>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 15 ปี คุ้มครองถึงอายุ 99 ปี (มีเงินปันผล)</a></li>
                        <li><a href="javascript:void(0)">ชำระเบี้ย 5 ปี คุ้มครองถึง 99 ปี (มีเงินปันผล)</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)" class="active">ค่ารักษาโรงพยาบาลและศัลยกรรม</a>
                    <ul>
                        <li><a href="javascript:void(0)">ประกันสุขภาพแบบแยกค่าใช้จ่าย H&S</a></li>
                        <li><a href="javascript:void(0)">ประกันสุขภาพเหมาจ่าย AIA H&S Plus Gold</a></li>
                        <li><a href="javascript:void(0)">ประกันสุขภาพ H&S UDR</a></li>
                    </ul>
                </li>


                <li><a href="javascript:void(0)" class="active">ประกันกลุ่ม</a>
                    <ul>
                        <li><a href="javascript:void(0)">ประกันอุบัติเหตุกลุ่มพนักงาน GPA Continental</a></li>
                        <li><a href="javascript:void(0)">ประกันสุขภาพกลุ่มพนักงาน 5 UP</a></li>
                        <li><a href="javascript:void(0)">ประกันสุขภาพกลุ่มพนักงาน 20 UP</a></li>
                        <li><a href="javascript:void(0)">ประกันสุขภาพกลุ่มพนักงาน 20 UP</a></li>
                        <li><a href="javascript:void(0)">ประกันสุขภาพกลุ่มพนักงาน 50 UP</a></li>
                    </ul>
                </li>

                {{--<li><a href="javascript:void(0)">Documents</a>--}}
                    {{--<ul>--}}
                        {{--<li><a href="javascript:void(0)">20PLN ชำระเบี้ย 20 ปี คุ้มครองถึงอายุ 99 ปี (ไม่มีเงินปันผล)</a></li>--}}
                        {{--<li><a href="javascript:void(0)">Documents</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)">Documents</a>--}}
                    {{--<ul>--}}
                        {{--<li><a href="javascript:void(0)">20PLN ชำระเบี้ย 20 ปี คุ้มครองถึงอายุ 99 ปี (ไม่มีเงินปันผล)</a></li>--}}
                        {{--<li><a href="javascript:void(0)">Documents</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)">Reviews</a></li>--}}
                {{--<li><a href="javascript:void(0)">Messages</a></li>--}}
            </ul>
        </div><!--/.menu-->


        <div class="content">
            <div class="content-container">
                <div class="">

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


                </div>
            </div><!--/.container-->
        </div><!--/.content-->


    </div><!--/.parallax-->
</div>
</body>
</html>

<script type="text/javascript">
    $(function(){
        $width = $( window ).width();
        if($width <= '767'){
            $("input[type='checkbox'][id='menu-toggle']").prop('checked', true);
        }else{
            $("input[type='checkbox'][id='menu-toggle']").prop('checked', false);
        }

        $( window ).resize(function() {
            $width = $( window ).width();
            if($width < 767){
                $("input[type='checkbox'][id='menu-toggle']").prop('checked', true);
            }else{
                $("input[type='checkbox'][id='menu-toggle']").prop('checked', false);
            }
        });

    });
</script>

