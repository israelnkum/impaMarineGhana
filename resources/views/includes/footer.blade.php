<!-- FOOTER START -->
<footer class="site-footer footer-dark">
    <!-- COLL-TO ACTION START -->
    <div class="call-to-action-wrap call-to-action-skew" style="background-image:url({{asset('images/background/bg-4.png')}}); background-repeat:repeat;background-color:#273447;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="call-to-action-left p-tb20 p-r50">
                        <h4 class="text-uppercase m-b10">We are ready to help build your dream tell us more about your project</h4>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor.</p>--}}
                    </div>
                </div>

                @if(Request::is('contact'))
                    <div class="col-md-3 ">
                        <div class="call-to-action-right p-tb30">

                        </div>
                    </div>
                    @else
                    <div class="col-md-3 ">
                        <div class="call-to-action-right p-tb30">
                            <a href="{{route('contact')}}"  class=" site-button bg-primary skew-icon-btn m-r15 text-uppercase"  style="font-weight:600;">
                                Contact us <i class="fa fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                    @endif

            </div>
        </div>
    </div>
    <!-- FOOTER BLOCKES START -->
    <div class="footer-top overlay-wraper">
        <div class="overlay-main bg-black" style="opacity:0;"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_about">
                        {{--<h4 class="widget-title">About Company</h4>--}}
                        <div class="logo-footer clearfix p-b15">
                            <a href="/"><img src="{{asset('images/logo.png')}}" width="230" height="67" alt=""/></a>
                        </div>
                    </div>
                </div>
                <!-- RESENT POST -->
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="widget recent-posts-entry-date">--}}
                        {{--<h4 class="widget-title">Resent Post</h4>--}}
                        {{--<div class="widget-post-bx">--}}
                            {{--<div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">--}}
                                {{--<div class="wt-post-date text-center text-uppercase text-white p-t5">--}}
                                    {{--<strong>20</strong>--}}
                                    {{--<span>Mar</span>--}}
                                {{--</div>--}}
                                {{--<div class="wt-post-info">--}}
                                    {{--<div class="wt-post-header">--}}
                                        {{--<h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="wt-post-meta">--}}
                                        {{--<ul>--}}
                                            {{--<li class="post-author"><i class="fa fa-user"></i>By Admin</li>--}}
                                            {{--<li class="post-comment"><i class="fa fa-comments"></i> 28</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">--}}
                                {{--<div class="wt-post-date text-center text-uppercase text-white p-t5">--}}
                                    {{--<strong>30</strong>--}}
                                    {{--<span>Mar</span>--}}
                                {{--</div>--}}
                                {{--<div class="wt-post-info">--}}
                                    {{--<div class="wt-post-header">--}}
                                        {{--<h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="wt-post-meta">--}}
                                        {{--<ul>--}}
                                            {{--<li class="post-author"><i class="fa fa-user"></i>By Admin</li>--}}
                                            {{--<li class="post-comment"><i class="fa fa-comments"></i> 29</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">--}}
                                {{--<div class="wt-post-date text-center text-uppercase text-white p-t5">--}}
                                    {{--<strong>31</strong>--}}
                                    {{--<span>Mar</span>--}}
                                {{--</div>--}}
                                {{--<div class="wt-post-info">--}}
                                    {{--<div class="wt-post-header">--}}
                                        {{--<h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="wt-post-meta">--}}
                                        {{--<ul>--}}
                                            {{--<li class="post-author"><i class="fa fa-user"></i>By Admin</li>--}}
                                            {{--<li class="post-comment"><i class="fa fa-comments"></i> 30</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- USEFUL LINKS -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">Useful links</h4>
                        <ul>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <!-- NEWSLETTER -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_newsletter">
                        <h4 class="widget-title">Newsletter</h4>
                        <div class="newsletter-bx">
                            <form role="search" method="post">
                                <div class="input-group">
                                    <input name="news-letter" required class="form-control" placeholder="ENTER YOUR EMAIL" type="email">
                                    <span class="input-group-btn">
                                            <button type="submit" class="site-button bg-primary"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- SOCIAL LINKS -->
                </div>

                <div class="col-md-3">
                    <div class="widget widget_social_inks">
                        <h4 class="widget-title">Social Links</h4>
                        <ul class="social-icons social-square social-darkest">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-3 col-sm-6  p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md text-white">
                            <span class="flaticon-placeholder"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Address</h5>
                            <p>Takoradi, Beach Road</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  p-tb20 ">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                        <div class="icon-md text-white">
                            <span class="flaticon-smartphone"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Phone</h5>
                            <p class="m-b0">+233 (0)508333919</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md text-white">
                            <span class="flaticon-email"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                            <p class="m-b0"><a class="text-white" href="mailto:impamarinegh@outlook.com">impamarinegh@outlook.com</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main bg-black" style="opacity:0;"></div>
        <div class="constrot-strip"></div>
        <div class="container p-t30">
            <div class="row">
                <div class="wt-footer-bot-left">
                    <span class="copyrights-text">© 2018 Impa Marine. All Rights Reserved.</span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right">
                        {{--<li><a href="javascript:void(0);">Terms  & Condition</a></li>--}}
                        {{--<li><a href="javascript:void(0);">Privacy Policy</a></li>--}}
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->

<!-- BUTTON TOP START -->
<button class="scroltop" ><i class=" fa fa-arrow-up"></i></button>

</div>


{{--<!-- LOADING AREA START ===== -->--}}
{{--<div class="loading-area" style="">--}}
{{--<div class="loading-box"></div>--}}
{{--<div class="loading-pic">--}}
{{--<div id="noTrespassingOuterBarG">--}}
{{--<div id="noTrespassingFrontBarG" class="noTrespassingAnimationG">--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="cssload-cupcake" class="cssload-box">--}}
{{--<span class="cssload-letter">L</span>--}}

{{--<div class="cssload-cupcakeCircle cssload-box">--}}
{{--<div class="cssload-cupcakeInner cssload-box">--}}
{{--<div class="cssload-cupcakeCore cssload-box"></div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<span class="cssload-letter cssload-box">A</span>--}}
{{--<span class="cssload-letter cssload-box">D</span>--}}
{{--<span class="cssload-letter cssload-box">I</span>--}}
{{--<span class="cssload-letter cssload-box">N</span>--}}
{{--<span class="cssload-letter cssload-box">G</span>--}}
{{--</div>--}}
{{--<div id="noTrespassingOuterBarG">--}}
{{--<div id="noTrespassingFrontBarG" class="noTrespassingAnimationG">--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--<div class="noTrespassingBarLineG"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- LOADING AREA  END ====== -->--}}

<!-- JAVASCRIPT  FILES ========================================= -->
<script type="text/javascript"  src="js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script type="text/javascript"  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script type="text/javascript"  src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script type="text/javascript"  src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script type="text/javascript"  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script type="text/javascript"  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script type="text/javascript"  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script type="text/javascript"  src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script type="text/javascript" src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script type="text/javascript"  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script type="text/javascript"  src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
<script type="text/javascript"  src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script type="text/javascript"  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script type="text/javascript"  src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script type="text/javascript"  src="js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->


<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script type="text/javascript">

    var tpj = jQuery;
    var revapi1014;

    tpj(document).ready(function() {
        if (tpj("#rev_slider_1014_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1014_1");
        } else {
            revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder"></div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1240, 1240, 800],
                gridheight: [700, 700, 700, 700],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>
</body>
</html>