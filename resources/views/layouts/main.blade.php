<!DOCTYPE html>
<html>
<head>

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
                                <img src="{{ asset("components/image/line-icon.svg") }}">
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

                    @yield('content')

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
                <h3>Residential</h3>
                <a href="http://s.codepen.io/brianrak/debug/wBopQJ">Overview</a>
                <a href="http://s.codepen.io/brianrak/debug/wBopQJ#maintenance">Maintenance Services</a>
                <a href="http://s.codepen.io/brianrak/debug/wBopQJ#installation">Installation Services</a>
                <a href="http://s.codepen.io/brianrak/debug/yNJyLm">Success Stories</a>
            </div>
            <div class="footer-group">
                <h3>Commercial</h3>
                <a href="http://s.codepen.io/brianrak/debug/GgWYgR">Overview</a>
                <a href="http://s.codepen.io/brianrak/debug/GgWYgR#maintenance">Maintenance Services</a>
                <a href="http://s.codepen.io/brianrak/debug/GgWYgR#construction">Construction Services</a>
                <a href="http://s.codepen.io/brianrak/debug/gbmBLa">Projects</a>
                <a href="http://s.codepen.io/brianrak/debug/bNWbZo">Success Stories</a>
            </div>
            <div class="footer-group">
                <h3>Company Info</h3>
                <a href="http://s.codepen.io/brianrak/debug/vOKENp">Overview</a>
                <a href="http://s.codepen.io/brianrak/debug/vOKENp#about">About Us</a>
                <a href="http://s.codepen.io/brianrak/debug/vOKENp#contact">Contact Us</a>
                <a href="http://s.codepen.io/brianrak/debug/vOKENp#team">Our Team</a>
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
