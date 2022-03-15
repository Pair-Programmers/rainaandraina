@extends('layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Product Create</title>
    <meta name="description" content="this is description">
@endsection

@section('custom-css')
@endsection

@section('content')
    <!-- Page banner Area -->
    <div class="page-banner bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page banner Area -->



    <!-- About Area -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="assets/img/about.png" alt="Image">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Raina & Raina, Corporate Law Firm, <span>established in 2009</span></h2>
                            <p>Raina & Raina serves a niche set of corporate clients across the corporate, taxation,
                                litigation, intellectual property, and restructuring fields. we have a track record of
                                providing original and groundbreaking solutions and innovations that have had a dramatic
                                impact on business and law.</p>
                            <p>Our breadth of practice is unique. We provide world class legal services in Corporate,
                                commercial, criminal, civil and public law, including all aspects of human rights law and
                                civil liberties. Our clients include individuals, business owners, companies, NGOs and those
                                from civil society, regulators, Sovereign States, and others. </p>
                            <p>With our specialist attorneys working alongside each other in several, complementary, areas
                                of practice, we can assemble a cross-disciplinary team of advisers to offer a genuinely
                                holistic and creative view on the legal issues our clients face. Our lawyers are supported
                                in their work by our panel of leading international legal experts and scholars.</p>

                        </div>

                        <!-- <div class="row">
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>
                                                <i class="las la-check-square"></i>
                                                100% Success Rate
                                            </li>
                                            <li>
                                                <i class="las la-check-square"></i>
                                                No Need Extra Cost for Consultation
                                            </li>
                                            <li>
                                                <i class="las la-check-square"></i>
                                                Expert Legal Service
                                            </li>
                                            <li>
                                                <i class="las la-check-square"></i>
                                                Highly Recommendation
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-6">
                                        <ul>
                                            <li>
                                                <i class="las la-check-square"></i>
                                                Fast Support
                                            </li>
                                            <li>
                                                <i class="las la-check-square"></i>
                                                High Court Performance
                                            </li>
                                            <li>
                                                <i class="las la-check-square"></i>
                                                Free Counseling
                                            </li>
                                            <li>
                                                <i class="las la-check-square"></i>
                                                Quick Complete Case
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->

                        <div class="about-btn">
                            <a href="contact.html" class="default-btn-one">Free Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Fun Fact Area -->
    <div class="fun-facts-area pb-100">
        <div class="container">
            <div class="fun-facts-shape top">
                <img src="assets/img/shape.png" class="shape1" alt="Shape">
                <img src="assets/img/shape.png" class="shape2" alt="Shape">
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="signle-fun-fact">
                        <i class="las la-balance-scale"></i>
                        <h3><span class="odometer" data-count="5600">00</span>
                            +</h3>
                        <p>Solved Cases</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="signle-fun-fact">
                        <i class="las la-gavel"></i>
                        <h3><span class="odometer" data-count="4000">00</span>
                            +</h3>
                        <p>Cases Won</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="signle-fun-fact">
                        <i class="las la-trophy"></i>
                        <h3><span class="odometer" data-count="1500">00</span>
                            +</h3>
                        <p>Awards Won</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="signle-fun-fact">
                        <i class="lab la-gitkraken"></i>
                        <h3><span class="odometer" data-count="10">00</span>
                        </h3>
                        <p>Top 10 Law Firms</p>
                    </div>
                </div>
            </div>
            <div class="fun-facts-shape bottom">
                <img src="assets/img/shape.png" class="shape1" alt="Shape">
                <img src="assets/img/shape.png" class="shape2" alt="Shape">
            </div>
        </div>
    </div>
    <!-- Ends Fun Fact Area -->

    <!-- About Video Area -->
    <div class="about-video-area ptb-100">
        <div class="container">
            <div class="about-video-contant">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="video-box">
                            <a href="https://www.youtube.com/watch?v=0gv7OC9L2s8" class="video-btn popup-youtube">
                                <i class="las la-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Video Area -->

    <!-- Choose Area -->
    <div class="choose-area about-page-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>We Are Top Lawyers With <span> 21 Years</span> Of Experience</h2>
                <p>Founded in 2009, is one of the distinctive law firm providing superior legal services to domestic and
                    international clients in broad array of areas enlisted in the succeeding pages. Our law firm is an
                    enterprise of outstanding capabilities, unmatched enthusiasms, keen intellects, unyielding integrity and
                    an extraordinary desire to understand and serve the clients.</p>
            </div>
            <!-- <div class="row">
                        <div class="col-lg-6">
                            <div class="choose-card">
                                <i class="las la-chart-pie"></i>
                                <h3>Long Experience</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>

                            <div class="choose-card">
                                <i class="las la-chart-bar"></i>
                                <h3>Our Success Cases</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>

                            <div class="choose-card">
                                <i class="las la-user-tie"></i>
                                <h3>Professional Attorneys</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="choose-card">
                                <i class="lab la-accessible-icon"></i>
                                <h3>Legal Service</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>

                            <div class="choose-card">
                                <i class="las la-balance-scale"></i>
                                <h3>Free Consulting</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>

                            <div class="choose-card">
                                <i class="las la-user-astronaut"></i>
                                <h3>24/7 Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div> -->
        </div>
    </div>
    <!-- End Choose Area -->

    <!-- Contact Area -->
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <div class="section-title">
                            <h2>Contact Us Today, Get In Touch With Expert</h2>
                            <p>Our legal practitioners appear on a regular basis before courts and tribunals at all levels
                                across Pakistan, in disputes relating to diverse areas of law and industry regulations.
                                We fully appreciate and understand that different judicial and quasi-judicial forums require
                                different skills and styles of advocacy. We build on the diversity of our experience to
                                present our clients’ case in the most persuasive manner to maximize their chances of
                                obtaining the most beneficial outcome.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-card">
                                    <span>Phone Number</span>
                                    <h3><a href="tel:+0123456987">+92 334 0811101</a></h3>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="contact-card">
                                    <span>Our Social Link</span>
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-title">
                        <span>Contact Form</span>
                        <h2>Get A Flexible Schedule</h2>
                    </div>
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required
                                            data-error="Please enter your name" placeholder="Full name">
                                        <div class="help-block with-errors"></div>
                                        <i class="las la-user"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required
                                            data-error="Please enter your email" placeholder="Email address">
                                        <div class="help-block with-errors"></div>
                                        <i class="las la-envelope"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" id="Phone" required
                                            data-error="Please enter your phone" placeholder="Phone No">
                                        <div class="help-block with-errors"></div>
                                        <i class="las la-phone"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="email" class="form-control" id="date">
                                        <i class="las la-calendar"></i>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required
                                            data-error="Please enter your message"
                                            placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                        <i class="las la-sms"></i>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn-one">Get An Appointment</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Partner Slider Area -->
    <div class="partner-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Our Partner</span>
                <h2>Trusted By Many Front Line Teams Everywhere</h2>
            </div>

            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-slider-item">
                    <a href="#">
                        <img src="assets/img/partner/partner1.png" alt="logo">
                    </a>
                </div>
                <div class="partner-slider-item">
                    <a href="#">
                        <img src="assets/img/partner/partner2.png" alt="logo">
                    </a>
                </div>
                <div class="partner-slider-item">
                    <a href="#">
                        <img src="assets/img/partner/partner3.png" alt="logo">
                    </a>
                </div>
                <div class="partner-slider-item">
                    <a href="#">
                        <img src="assets/img/partner/partner4.png" alt="logo">
                    </a>
                </div>
                <div class="partner-slider-item">
                    <a href="#">
                        <img src="assets/img/partner/partner5.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Slider Area -->
@endsection

@section('custom-script')
@endsection
