@extends('layouts.app')
@section('content')
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('images/banner/about-banner.jpg')}});">
            <div class="overlay-main bg-black" style="opacity:0.5;"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">About Us</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->
        <div class="section-full p-tb100" style="background-image:url({{asset('images/background/pic-c-1bg.png')}}); background-position:left bottom; background-repeat:no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="about-com-pic">
                            <img src="images/pic-c-1.png" alt="" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="section-head text-left">
                            <h2 class="text-uppercase text-primary">About IMPA MARINE </h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-square">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                            <p>
                                We supply a complete and highly professional supply and service package to support our customers’
                                requirements. The dedication we have for our customers, coupled with our in-depth understanding of the local
                                markets in which we operate, is second to none.
                            </p>
                            <p>
                                Reliability, resourcefulness and flexibility are among our key values. It is these values, which we hold strong
                                and will continue to do so into the future.
                            </p>
                            <p>
                                We offer our clients very competitive priced solutions with no-comprise on quality and delivery. We understand
                                the complexities of your project, how much it means to you and the importance of delivering quality goods on
                                time and on budget. We are a supplier you can trust to do a good job without prompting or worry.
                            </p>

                            <p>
                                We have a wealth of global MRO supply experience within the Oil and Gas industry and a large database of
                                approved supply partners who we work with to supply an extensive, diverse cross-section of commodities.
                            </p>

                            <p>
                                In Ghana, we are an approved vendor for Modec, Orsam, Tullow and Yinson and have supplied a wide range
                                of MRO equipment and materials for the FPSO Kwame Nkrumah over the past 7 years. We have also supplied
                                MRO equipment and materials to all oil and gas companies in and around the Western Region of Ghana.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-full wt-our-team bg-white p-t80 p-b50">
            <div class="container">

                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase text-primary">Our Corporate Purpose</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                    <p>
                        We conduct our operations with integrity and with respect for the many people, organisations and environments
                        our business interacts with and this has always been at the heart of our corporate responsibility. We use our
                        energy, skills and resources to deliver the best sustainable results and aim at flawless delivery and quality
                        service provision. We also create the environment to attract and keep the best people who share our values.
                    </p>
                </div>
                <!-- TITLE END -->
            </div>
        </div>

        <!-- COUNTER SECTION START -->
        <div class="section-full p-t80 p-b50">

            <div class="container">

                {{--<div class="section-head text-center">--}}
                    {{--<h2 class="text-uppercase">Counter</h2>--}}
                    {{--<span class="title-small">Best construction Deals</span>--}}
                    {{--<div class="wt-separator bg-primary"></div>--}}
                {{--</div>--}}
                <!-- COUNTER SECTION BLOCK START -->
                <div class="section-content">
                    <div class="row">

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-black m-b30">
                                    <span class="icon-md p-t10">
                                        <i class="fa fa-building"></i>
                                    </span>
                                <div class="icon-content">
                                    <div class="font-26 font-weight-800 text-black m-b5"><span class="counter">1150</span><b>+</b></div>
                                    <span class="text-uppercase">PROJECT COMPLETED</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-black m-b30">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-users"></i>
                                    </span>
                                <div class="icon-content">
                                    <div class="font-26 font-weight-800 text-black m-b5"><span class="counter">5223</span><b>+</b></div>
                                    <span>HAPPY CLIENTS</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-black m-b30">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-user-plus"></i>
                                    </span>
                                <div class="icon-content">
                                    <div class="counter font-26 font-weight-800 text-black m-b5">4522</div>
                                    <span>WORKERS EMPLOYED</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-black m-b30">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-trophy"></i>
                                    </span>
                                <div class="icon-content">
                                    <div class="counter font-26 font-weight-800 text-black m-b5">1265</div>
                                    <span>AWARDS WON</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- COUNTER SECTION BLOCK END -->
            </div>
        </div>
        <!-- COUNTER END -->

        <!-- OUR TEAM MEMBER SECTION START -->
        <div class="section-full wt-our-team bg-white p-t80 p-b50">
            <div class="container">

                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase text-primary">Our team</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                    <p>
                        We have well trained personnel who are willing to go the extra mile to deliver superior services to the delight of
                        our clients. Since our incorporation, our employees have been our greatest asset due to the professionalism
                        they exhibit in their daily activities.<br>
                        Our continuous investment in our team members keeps them at one with industry best practices which impacts
                        positively on our relationships with our clients.
                    </p>
                    <p>
                        An experience with our professional team will leave a lasting impression on your organisation.
                    </p>
                </div>
                <!-- TITLE END -->

                <div class="section-content">
                    <div class="row">

                        <!-- COLUMNS 1 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                            <div class="wt-team-four">
                                <div class="wt-team-media">
                                    <a href="javascript:void(0);"><img src="images/our-team/pic1.jpg" alt="" ></a>
                                </div>
                                <div class="wt-team-info">
                                    <div class="p-a20">
                                        <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Israel Nkum</a></h4>
                                        <p>General Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                            <div class="wt-team-four">
                                <div class="wt-team-media">
                                    <a href="javascript:void(0);"><img src="images/our-team/pic2.jpg" alt="" ></a>
                                </div>
                                <div class="wt-team-info">
                                    <div class="p-a20">
                                        <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Israel Nkum</a></h4>
                                        <p>Dep. Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                            <div class="wt-team-four">
                                <div class="wt-team-media">
                                    <a href="javascript:void(0);"><img src="images/our-team/pic3.jpg" alt="" ></a>
                                </div>
                                <div class="wt-team-info">
                                    <div class="p-a20">
                                        <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Israel Nkum</a></h4>
                                        <p>Secretary</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                            <div class="wt-team-four">
                                <div class="wt-team-media">
                                    <a href="javascript:void(0);"><img src="images/our-team/pic4.jpg" alt="" ></a>
                                </div>
                                <div class="wt-team-info">
                                    <div class="p-a20">
                                        <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Israel Nkum</a></h4>
                                        <p>Personal Assistant</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- OUR TEAM MEMBER SECTION End -->
    </div>
    @endsection