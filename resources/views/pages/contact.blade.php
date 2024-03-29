@extends('layouts.master')

@section('title-meta')
<title>Contact | Raina & Raina - Law & Attorney Firm</title>
<meta name="description" content="We are distinctive law firm providing superior legal services to domestic and international clients in broad array of areas enlisted in the succeeding pages. Our law firm is an enterprise of outstanding capabilities, unmatched enthusiasms, keen intellects, unyielding integrity and an extraordinary desire to understand and serve the clients.">
<meta name="keywords" content="advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
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
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home <i class="las la-angle-right"></i></a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page banner Area -->

    <!-- Contact Area -->
    <div class="contact-area contact-two ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <div class="section-title">
                            <h2>Contact Us</h2>
                            <p style="text-align: justify;">Our legal practitioners appear on a regular basis before courts and tribunals at all levels
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
                                    <h3><a href="tel:+924235787931">+92 42 35787931</a></h3>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="contact-card">
                                    <span>Our Social Link</span>
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/RainaRaina99" target="_blank">
                                                <i class="lab la-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/" target="_blank">
                                                <i class="lab la-twitter"></i>
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
                                        <input type="text" name="phone_number" class="form-control" id="phone_number" required
                                            data-error="Please enter your phone" placeholder="Phone No">
                                        <div class="help-block with-errors"></div>
                                        <i class="las la-phone"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" class="form-control" id="msg_subject" required
                                            data-error="Please enter your subject" placeholder="Your subject">
                                        <div class="help-block with-errors"></div>
                                        <i class="las la-id-card"></i>
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
@endsection

@section('custom-script')
@endsection
