<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="description" content="แผนประกันที่ให้ความคุ้มครองครบถ้วนในแผนเดียว ทั้งประกันชีวิต ประกันสุขภาพ ประกันอุบัติเหตุ และประกันโรคร้ายแรง ให้คุณพร้อมรับกับทุกสถานการณ์ที่พลิกผัน เพื่อความอุ่นใจในอนาคตของคุณและครอบครัว">
    <meta name="keywords" content="AIA,ALL IN ONE,ความรัก,insurance,future,finance">
    <meta name="author" content="aiachicker">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

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
                                <a href="tel:0974146363">
                                    097 414 6363
                                </a>
                            </li>
                            <li class="e-mail">
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:aiachicker@gmail.com">
                                    aiachicker@gmail.com
                                </a>
                            </li>
                            <li class="e-skype">
                                <i class="fa fa-skype"></i>
                                <a href="skype:chittapuu?call">
                                    chittapuu
                                </a>
                            </li>
                            <li class="e-line">
                                <img src="{{ asset("components/image/line-icon-white.png") }}">
                                <a href="skype:chittapuu?call">
                                    @aiachicker
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="connect-with-us">

                        <ul>


                            <li>Connect With Us:</li>


                            <li class="social-icons">



                                {{--<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>--}}


                                <a href="https://www.facebook.com/AIAChicker-1682336668699126/" target="_blank"><i class="fa fa-facebook"></i> </a>


                                {{--<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>--}}


                                {{--<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>--}}


                                {{--<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>--}}


                                {{--<a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>--}}


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
            <h2>AIA Chicker</h2>
            <ul>
                {{--<li>--}}
                {{--<div class="profile-insurance">--}}
                {{--profile--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)" class="active">คุ้มครองตลอดชีพ</a></li>--}}
                <li><a href="{{ URL::to('/ecir') }}">คุ้มครองโรคร้ายแรง</a></li>
                {{--<li><a href="javascript:void(0)">ประกันสุขภาพรายปี AIA Health Guard</a></li>--}}
                <li><a href="{{ URL::to('/hb') }}">ค่าชดเชยรายวัน</a></li>
                <li><a href="{{ URL::to('/pa') }}">ประกันอุบัติเหตุ</a></li>

                <li><a href="javascript:void(0)" class="active">สะสมทรัพย์</a>
                    <ul>
                        {{--<li><a href="{{ URL::to('/pa') }}">ชำระเบี้ย 7 ปี คุ้มครอง 15 ปี (มีเงินปันผล)</a></li>--}}
                        <li><a href="{{ URL::to('/5Pay10') }}">ชำระเบี้ย 5 ปี คุ้มครอง 10 ปี (ไม่มีเงินปันผล)</a></li>
                        <li><a href="{{ URL::to('/8Pay20') }}">ชำระเบี้ย 8 ปี คุ้มครอง 20 ปี (มีเงินปันผล)</a></li>
                        <li><a href="{{ URL::to('/15Pay25') }}">ชำระเบี้ย 15 ปี คุ้มครอง 25 ปี (มีเงินปันผล)</a></li>
                        <li><a href="{{ URL::to('/15Pay30') }}">ชำระเบี้ย 15 ปี คุ้มครอง 30 ปี (มีเงินปันผล)</a></li>
                        <li><a href="{{ URL::to('/excellent') }}">ชำระเบี้ย 20 ปี คุ้มครอง 20 ปี (มีเงินปันผล)</a></li>
                        <li><a href="{{ URL::to('/10For80') }}">ชำระเบี้ย 10 ปี คุ้มครองถึงอายุ 80 ปี (มีเงินปันผล)</a></li>
                        {{--<li><a href="{{ URL::to('/pa') }}">ชำระเบี้ย 15 ปี คุ้มครองถึงอายุ 80 ปี (มีเงินปันผล)</a></li>--}}
                    </ul>
                </li>

                <li><a href="javascript:void(0)" class="active">คุ้มครองตลอดชีพ</a>
                    <ul>
                        <li><a href="{{ URL::to('/15PayLife') }}">ชำระเบี้ย 15 ปี คุ้มครองถึงอายุ 99 ปี (มีเงินปันผล)</a></li>
                        <li><a href="{{ URL::to('/20PayLife') }}">ชำระเบี้ย 20 ปี คุ้มครองถึงอายุ 99 ปี (ไม่มีเงินปันผล)</a></li>
                        <li><a href="{{ URL::to('/LifeGift') }}">ชำระเบี้ย 5 ปี คุ้มครองถึง 99 ปี (มีเงินปันผล)</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)" class="active">ค่ารักษาโรงพยาบาลและศัลยกรรม</a>
                    <ul>
                        <li><a href="{{ URL::to('/H&S') }}">ประกันสุขภาพแบบแยกค่าใช้จ่าย H&S</a></li>
                        <li><a href="{{ URL::to('/H&S_PlusGold') }}">ประกันสุขภาพเหมาจ่าย AIA H&S Plus Gold</a></li>
                        <li><a href="{{ URL::to('/H&S_Junior') }}">ประกันสุขภาพเด็ก H&S Junior</a></li>
                    </ul>
                </li>


                <li><a href="javascript:void(0)" class="active">ประกันกลุ่ม</a>
                    <ul>
                        <li><a href="{{ URL::to('/pa') }}">ประกันอุบัติเหตุกลุ่มพนักงาน GPA Continental</a></li>
                        <li><a href="{{ URL::to('/pa') }}">ประกันสุขภาพกลุ่มพนักงาน 5 UP</a></li>
                        <li><a href="{{ URL::to('/pa') }}">ประกันสุขภาพกลุ่มพนักงาน 20 UP</a></li>
                        <li><a href="{{ URL::to('/pa') }}">ประกันสุขภาพกลุ่มพนักงาน 20 UP</a></li>
                        <li><a href="{{ URL::to('/pa') }}">ประกันสุขภาพกลุ่มพนักงาน 50 UP</a></li>
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

                    <div class="social-container">
                        <div class="fb-like clearfix" data-href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                    </div>


                    @yield('content')

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


    <div id="footer-section">
        <div id="footer-copy" class="content-safe container">

            <div class="footer-group footer-group-logo">
                <div id="footer-logo"></div>
                {{--<div id="footer-join-our-team" onclick="javascript:alert('Coming soon');"></div>--}}
                <div id="footer-facebook" class="footer-social-media-link" onclick="window.open('https://www.facebook.com/AIAChicker-1682336668699126/', '_blank');"></div>
                {{--<div id="footer-twitter" class="footer-social-media-link" onclick="window.open('https://twitter.com/BruceIncHVAC', '_blank');"></div>--}}
                {{--<div id="footer-blogspot" class="footer-social-media-link" onclick="window.open('http://richlandpascokennewickhvac.blogspot.com', '_blank');"></div>--}}
            </div>
            <div class="footer-group">
                <h3>สะสมทรัพย์</h3>
                <a href="javascript:void(0)">7 Pay 15</a>
                <a href="javascript:void(0)">8 PaY 20</a>
                <a href="javascript:void(0)">15 Pay 25</a>
                <a href="javascript:void(0)">15 Pay 30</a>
                <a href="javascript:void(0)">AIA Excellent</a>
                <a href="javascript:void(0)">10 For 80</a>
                <a href="javascript:void(0)">AIA Smart Saver</a>


            </div>
            <div class="footer-group">
                <h3>คุ้มครองตลอดชีพ</h3>
                <a href="http://s.codepen.io/brianrak/debug/GgWYgR">20 Pay Life</a>
                <a href="http://s.codepen.io/brianrak/debug/GgWYgR#maintenance">15 Pay Life</a>
                <a href="http://s.codepen.io/brianrak/debug/GgWYgR#construction">AIA Life Gift</a>
            </div>
            <div class="footer-group">
                <h3>ค่ารักษาพยาบาล</h3>
                <a href="http://s.codepen.io/brianrak/debug/vOKENp#about">H&S</a>
                <a href="http://s.codepen.io/brianrak/debug/vOKENp#about">H&S Plus Gold</a>
                <a href="http://s.codepen.io/brianrak/debug/vOKENp">H&S Junior</a>
            </div>
            <div class="clearfix"></div>

            <div id="footer-contact">
                <div>
                    <span class="nw footer-contact-company-name">AIAChicker. Insurance</span>
                    {{--<span class="footer-divider">|</span>--}}
                    {{--<span class="nw">5115 W. Brinkley Rd., Ste. C</span>--}}
                    {{--<span class="footer-divider">|</span>--}}
                    {{--<span class="nw">Kennewick, WA 99338</span>--}}
                </div>
                <div><span class="footer-divider">|</span></div>
                <div>
                    <span class="nw">Phone: <a href="tel:0974746363">097-474-6363</a></span>
                    <span class="footer-divider">|</span>
                    <span class="nw">Line: @aiachicker</span>
                    {{--<span class="footer-divider">|</span>--}}
                    {{--<span class="nw">Contractor #: BRUCEMI951LB</span>--}}
                </div>
            </div>

            <div id="footer-copyright">All rights reserved. Additional content Copyright <?php echo date("Y"); ?> AIAChicker. Insurance. Duplication in part or in while is strictly prohibited.</div>
        </div>
    </div>

    <!-- Preloads, super old-school -->
    <div style="display:none;">
        <img src="http://www.braksoftware.com/codepen/bruce/v1/join-our-team-button-over-large.png" />
        <img src="http://www.braksoftware.com/codepen/bruce/v1/join-our-team-button-over-medium.png" />
    </div>


</div>
</body>
</html>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.6&appId=1724713611112155";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

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

