@extends('layouts.app')
@section('content')
<div class="page-content">
    
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('images/banner/product-banner.jpg')}});">
            	<div class="overlay-main bg-black" style="opacity:0.5;"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Contact Us</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                <div class="section-content ">
                        <div class="row">
                            <div class="wt-box col-md-12">
                                <h4 class="text-uppercase">Contact Detail </h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                   </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-md-4 col-sm-12 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20 corner"><span class="icon-cell"><i class="fa fa-phone"></i></span></div>
                                            <div class="icon-content">
                                                <h5>Phone</h5>
                                                <p>+233 (0)508333919</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20 corner"><span class="icon-cell"><i class="fa fa-envelope"></i></span></div>
                                            <div class="icon-content">
                                                <h6>Email</h6>
                                                <p>impamarinegh@outlook.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20 corner"><span class="icon-cell"><i class="fa fa-map-marker"></i></span></div>
                                            <div class="icon-content">
                                                <h5>Address</h5>
                                                <p>252 W 43rd St New York, NY</p>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-content m-b50">
                        <div class="row">
                        
                        	<!-- LOCATION BLOCK-->
                            <div class="wt-box col-md-6">
                                <h4 class="text-uppercase">Location</h4>
                                <div class="wt-separator-outer m-b30">
                                   <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                   </div>
                               </div>
                                <div class="gmap-outline m-b30">
                                    <div id="gmap_canvas" class="google-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3492.432370368872!2d-1.7645361!3d4.8858933!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfe777165c0591ab%3A0x8ed2ebdb03a6f220!2sIMPA+MARINE%2C+TAKORADI!5e1!3m2!1sen!2sgh!4v1535838729688" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>

                            <!-- CONTACT FORM-->
                            <div class="wt-box col-md-6">
                                <h4 class="text-uppercase">Contact Form </h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                    </div>
                                </div>
                                
                                <form class="cons-contact-form" method="post" action="http://thewebmax.com/constrot/form-handler.php">
                        
                                    <div class="row">
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input name="username" type="text" required class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
        
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                                    <textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-12 text-right">
                                            <button name="submit" type="submit" value="Submit" class="site-button bg-primary skew-icon-btn m-r15">Submit <i class="fa fa-angle-double-right"></i></button>
                                            <button name="Resat" type="reset" value="Reset"  class="site-button bg-primary skew-icon-btn" >Reset <i class="fa fa-angle-double-right"></i></button>
                                        </div>
        
                                    </div>

                        		</form>
                        
                            </div>
                            
                        </div>
                    </div>
                    <!-- CONTACT DETAIL BLOCK -->
                </div>
           </div>
             <!-- SECTION CONTENT END -->
        
        </div>
        <!-- CONTENT END -->
@endsection