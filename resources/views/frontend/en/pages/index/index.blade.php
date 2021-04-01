@extends('frontend.en.layouts.app')
@section('content')
        
            <!-- SLIDER START -->
            @include('frontend.en.pages.index.main_slider')
            <!-- SLIDER END -->
            
            <!-- OUR VALUE SECTION START -->           
            @include('frontend.en.pages.index.contact')
            <!-- OUR VALUE SECTION  END -->
            
            <!-- ABOUT COMPANY SECTION START -->
            @include('frontend.en.pages.index.about')
            <!-- ABOUT COMPANY SECTION END -->

            <!-- ABOUT VIDEO SECTION START -->
            @include('frontend.en.pages.index.video')
            <!-- ABOUT VIDEO SECTION END -->            
            
            <!-- LATEST PROJECT SECTION START -->
            @include('frontend.en.pages.index.projects')
            <!-- LATEST PROJECT SECTION END -->
           
            <!-- WHY CHOOSE US SECTION START  -->
            @include('frontend.en.pages.index.choose')
            <!-- WHY CHOOSE US SECTION END --> 
            
            <!-- COMPANY DETAIL SECTION START -->
            @include('frontend.en.pages.index.detail')
            <!-- COMPANY DETAIL SECTION End --> 
            
            <!-- OUR TEAM MEMBER SECTION START -->
            @include('frontend.en.pages.index.team')
            <!-- OUR TEAM MEMBER SECTION End -->
            
            <!-- TESTIMONIAL SECTION START -->
            @include('frontend.en.pages.index.testimonial')
            <!-- TESTIMONIAL  SECTION END -->
            
            <!-- OUR CLIENT SLIDER START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                
                	<!-- TITLE START -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Our institutions</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p></p>
                    </div>
                    <!-- TITLE END -->
                    
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="owl-carousel client-logo-carousel">
                        
                        	<!-- COLUMNS 1 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{url('frontend/en/images/client-logo/logo1.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{url('frontend/en/images/client-logo/logo2.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{url('frontend/en/images/client-logo/logo3.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            
            </div>
            <!-- OUR CLIENT SLIDER END --> 
@stop
              
