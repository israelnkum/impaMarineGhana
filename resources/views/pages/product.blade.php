@extends('layouts.app')
@section('content')
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('images/banner/gallery-banner.jpg')}});">
            <div class="overlay-main bg-black" style="opacity:0.5;"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">Our Product(s)</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50 bg-no-repeat bg-bottom-center bg-cover" style="background-image:url({{'images/background/bg-6.jpg'}});">
            <div class="container">
                <!-- PAGINATION TOP START -->
                <div class="filter-wrap p-tb15">
                    <ul class="masonry-filter link-style  text-uppercase">
                        <li class="active"><a data-filter="*" href="#">All</a></li>
                        <li><a data-filter=".house" href="#">Industrial</a></li>
                        <li><a data-filter=".building , .office" href="#">Site Support</a></li>
                        <li><a data-filter=".office" href="#">Cleaning & Janitorial</a></li>
                        <li><a data-filter=".garden" href="#">Electrical</a></li>
                        <li><a data-filter=".interior" href="#">Construction Materials</a></li>
                        <li><a data-filter=".interior" href="#">Automotive</a></li>
                        <li><a data-filter=".interior" href="#">Capital Equipment</a></li>
                        <li><a data-filter=".interior" href="#">Instrumentation</a></li>
                        <li><a data-filter=".interior" href="#">Safety</a></li>
                    </ul>
                </div>
                <!-- PAGINATION END -->

                <!-- GALLERY CONTENT START -->

                <div class="portfolio-wrap mfp-gallery no-col-gap">
                    <div class="row">
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item house col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="wt-gallery-bx p-a15">
                                <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                                    <a href="javascript:void(0);">
                                        <img src="images/latest-projects/pic1.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/gallery/pic1.jpg" class="mfp-link">
                                                <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item building col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="wt-gallery-bx p-a15">
                                <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                                    <a href="javascript:void(0);">
                                        <img src="images/latest-projects/pic2.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/gallery/pic2.jpg" class="mfp-link">
                                                <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item office col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="wt-gallery-bx p-a15">
                                <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                                    <a href="javascript:void(0);">
                                        <img src="images/latest-projects/pic3.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/gallery/pic3.jpg" class="mfp-link">
                                                <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item garden col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="wt-gallery-bx p-a15">
                                <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                                    <a href="javascript:void(0);">
                                        <img src="images/latest-projects/pic4.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/gallery/pic4.jpg" class="mfp-link m-b15">
                                                <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item interior col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="wt-gallery-bx p-a15">
                                <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                                    <a href="javascript:void(0);">
                                        <img src="images/latest-projects/pic5.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/gallery/pic5.jpg" class="mfp-link">
                                                <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item office col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="wt-gallery-bx p-a15">
                                <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                                    <a href="javascript:void(0);">
                                        <img src="images/latest-projects/pic6.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/gallery/pic6.jpg" class="mfp-link">
                                                <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="masonry-item building col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="wt-gallery-bx p-a15">
                                <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                                    <a href="javascript:void(0);">
                                        <img src="images/latest-projects/pic7.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/gallery/pic7.jpg" class="mfp-link">
                                                <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="masonry-item house col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="wt-gallery-bx p-a15">
                                <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                                    <a href="javascript:void(0);">
                                        <img src="images/latest-projects/pic8.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-link wt-icon-box-xs"></i>
                                            </a>
                                            <a  href="images/gallery/pic8.jpg" class="mfp-link">
                                                <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- GALLERY CONTENT END -->

                {{--<!-- PAGINATION START -->--}}
                {{--<div class="pagination-bx  clearfix ">--}}
                    {{--<ul class = "custom-pagination pagination">--}}
                        {{--<li><a href = "#">&laquo;</a></li>--}}
                        {{--<li class = "active"><a href = "#">1</a></li>--}}
                        {{--<li><a href = "#">2</a></li>--}}
                        {{--<li><a href = "#">3</a></li>--}}
                        {{--<li><a href = "#">4</a></li>--}}
                        {{--<li><a href = "#">5</a></li>--}}
                        {{--<li><a href = "#">&raquo;</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<!-- PAGINATION END -->--}}

            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
    @endsection