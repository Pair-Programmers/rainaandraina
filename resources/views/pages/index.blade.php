@extends('layouts.master')

@section('title-meta')
    <title>Home | Raina & Raina - Law & Attorney Firm</title>
    <meta name="description"
        content="We are distinctive law firm providing superior legal services to domestic and international clients in broad array of areas enlisted in the succeeding pages. Our law firm is an enterprise of outstanding capabilities, unmatched enthusiasms, keen intellects, unyielding integrity and an extraordinary desire to understand and serve the clients.">
    <meta name="keywords"
        content="advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
@endsection

@section('custom-css')
@endsection

@section('content')
    <!-- Hero Slider Area -->
    <div class="hero-slider owl-carousel owl-theme">
        <div class="hero-slider-item item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-content">
                            <!-- <span>Right Way..</span> -->
                            <h1>Freedom is never granted; it is won. Justice is never given; it is exacted</h1>
                            <p>Raina & Raina provides superior services to master uncertainty through proactive legal
                                strategies, skilled counsel and professional litigation.

                            </p>
                            <p><span> Contact us Today !</span> </p>

                            <div class="slider-btn">
                                <a href="contact.html" class="default-btn-one me-3">Free Consulting</a>
                                <!-- <a href="#" class="default-btn-two">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-slider-item item-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-content">
                            <!-- <span>Right Way..</span> -->
                            <h1>Injustice anywhere is a threat to justice everywhere</h1>
                            <p>Raina & Raina is set up to focus on building teams with sector-specific multi-jurisdictional
                                expertise to meet the requirements of multinational and internationally active clients </p>
                            <p><span>Contact us Today!</span></p>
                            <div class="slider-btn">
                                <a href="contact.html" class="default-btn-one me-3">Free Consulting</a>
                                <!-- <a href="#" class="default-btn-two">Learn Moreg</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-slider-item item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-content">
                            <!-- <span>Right Way..</span> -->
                            <h1>Man is the noblest of all animals; separated from law and justice he is the worst</h1>
                            <p>You can engage our attorneys for legal representation across the globe. We are unafraid to
                                raise novel points of law, very sophisticated in pushing the boundaries and having a
                                passionate commitment to the law and compassion for the people we serve.</p>
                            <p><span>Contact us Today!</span></p>
                            <div class="slider-btn">
                                <a href="contact.html" class="default-btn-one me-3">Free Consulting</a>
                                <!-- <a href="#" class="default-btn-two">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Slider Area -->

    <!-- Law Card Area -->
    <!-- <div class="law-card-area pt-100">
            <div class="container">
                <div class="card-contant">
                    <div class="row no-gutters">
                        <div class="col-lg-3 bor-right col-sm-6">
                            <div class="low-card">
                                <h3>Tax and Corporate Disputes</h3>
                                <i class="las la-home"></i>
                                <p> Raina & Raina' s Tax team is comprised of seven attorneys, each of whom has more than 10  years’ experience in his/her respective area. We have been working as tax lawyers on billion-dollar
                                    transactions for years and represent  country’s well renonwned business tycoons.

                                    </p>
                            </div>
                        </div>

                        <div class="col-lg-3 bor-right col-sm-6">
                            <div class="low-card">
                                <h3>white collar crime</h3>
                                <i class="las la-file-alt"></i>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 bor-right col-sm-6">
                            <div class="low-card">
                                <h3>Expert Attorney</h3>
                                <i class="las la-balance-scale"></i>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 bor-right col-sm-6">
                            <div class="low-card">
                                <h3>Case Dismissed</h3>
                                <i class="las la-gavel"></i>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- End Law Card Area -->

    <!-- About Area -->
    {{-- <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="{{asset('assets')}}/img/about.png" alt="Image">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Raina & Raina, Corporate Law Firm, <span>established in 2009</span></h2>
                       <p>Raina & Raina serves a niche set of corporate clients across the corporate, taxation, litigation, intellectual property, and restructuring fields. we have a track record of providing original and groundbreaking solutions and innovations that have had a dramatic impact on business and law.</p>
                       <p>Our breadth of practice is unique. We provide world class legal services in Corporate, commercial, criminal, civil and public law, including all aspects of human rights law and civil liberties. Our clients include individuals, business owners, companies, NGOs and those from civil society, regulators, Sovereign States, and others. </p>
                       <p>With our specialist attorneys working alongside each other in several, complementary, areas of practice, we can assemble a cross-disciplinary team of advisers to offer a genuinely holistic and creative view on the legal issues our clients face. Our lawyers are supported in their work by our panel of leading international legal experts and scholars.</p>

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
    </div> --}}
    <!-- End About Area -->


    <!-- Case Study Slider Area -->
    <div class="testimonials-area case-study-area ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Practice Area / Services</span>
                <h2>We Are Providing <span>Top Services</span> With Excellent Performance</h2>
            </div>

            <div class="testimonials-slider owl-carousel owl-theme">
                <div class="testimonials-slider-item">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/services/TAX_AUDITS__APPEALS_1_575x400.jpg" alt="Image">
                    </div>
                    <div class="img-text">
                        <h3>Tax Audits & Apeals</h3>
                        <p>Raina & Raina tax lawyers provide comprehensive legal advice covering all areas </p>
                        <a href="{{ route('practice-area.tax-audit') }}">
                            Read More
                            <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>

                <div class="testimonials-slider-item">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/services/Corporate_and_Commercial_2_575x400.jpg" alt="Image">
                    </div>
                    <div class="img-text">
                        <h3>Corporate and Commercial</h3>
                        <p>Raina & Raina has a thriving Corporate and Commercial litigation practice representing</p>
                        <a href="{{ route('practice-area.corporate') }}">
                            Read More
                            <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>

                <div class="testimonials-slider-item">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/services/INTERNATIONAL_LAW_1_575x400.jpg" alt="Image">
                    </div>
                    <div class="img-text">
                        <h3>International Law</h3>
                        <p>Raina & Raina has unrivalled expertise in advice and advocacy on all aspects </p>
                        <a href="{{ route('practice-area.international') }}">
                            Read More
                            <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>

                <div class="testimonials-slider-item">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/services/Professional_negligence_1_575x400.jpg" alt="Image">
                    </div>
                    <div class="img-text">
                        <h3>Registration of Foreign Companies</h3>
                        <p>Our law firm’s competence in Pakistan is also..</p>
                        <a href="{{ route('practice-area.registration-of-foreign-companies') }}">
                            Read More
                            <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>

                <div class="testimonials-slider-item">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/services/property-and-real-estate.jpg" alt="Image">
                    </div>
                    <div class="img-text">
                        <h3>Property and Real Estate</h3>
                        <p>Raina & Raina is involved in providing services and assistance to our clients in buying</p>
                        <a href="{{ route('practice-area.property-and-real-estate') }}">
                            Read More
                            <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>

                <div class="testimonials-slider-item">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/services/ALTERNATE_DISPUTE_RESOLUTION_1_575x400.jpg" alt="Image">
                    </div>
                    <div class="img-text">
                        <h3>Alternate Dispute
                            Resolution</h3>
                        <p>Raina & Raina law firm houses several attorneys who are also experienced mediators</p>
                        <a href="{{ route('practice-area.alternate-dispute') }}">
                            Read More
                            <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>

                <div class="testimonials-slider-item">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/services/civil_575x400.jpg" alt="Image">
                    </div>
                    <div class="img-text">
                        <h3>Civil Law And Appeals</h3>
                        <p>The Crime Team at Raina & Raina offers a genuinely holistic </p>
                        <a href="{{ route('practice-area.civil') }}">
                            Read More
                            <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>

                <div class="testimonials-slider-item">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/services/Professional_negligence_1_575x400.jpg" alt="Image">
                    </div>
                    <div class="img-text">
                        <h3>Professional Negligence Dispute</h3>
                        <p>Our global team of professional negligence</p>
                        <a href="{{ route('practice-area.prof-negligence') }}">
                            Read More
                            <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Case Study Slider Area -->

    <!-- Service Area -->
    {{-- <div class="service-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our Practice Area / Services</span>
                <h2>We Are Providing <span>Top Services</span> With Excellent Performance</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img src="{{ asset('assets') }}/img/services/TAX_AUDITS__APPEALS_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <h3><a href="service-details.html">Tax Audits & Apeals <span> </span></a></h3>
                            <p>Raina & Raina tax lawyers provide comprehensive legal advice covering all areas </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img src="{{ asset('assets') }}/img/services/Corporate_and_Commercial_2_575x400.jpg"
                                alt="Image">
                        </a>
                        <div class="service-text">
                            <h3><a href="service-details.html">Corporate and Commercial<span></span></a></h3>
                            <p>Raina & Raina has a thriving Corporate and Commercial litigation practice representing</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img src="{{ asset('assets') }}/img/services/INTERNATIONAL_LAW_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <h3><a href="service-details.html">International Law</a></h3>
                            <p>Raina & Raina has unrivalled expertise in advice and advocacy on all aspects </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <a href="{{ route('practice-area.registration-of-foreign-companies') }}">
                            <img src="{{ asset('assets') }}/img/services/Professional_negligence_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <h3><a href="{{ route('practice-area.registration-of-foreign-companies') }}">Registration of
                                    Foreign Companies</a></h3>
                            <p>Our law firm’s competence in Pakistan is also represented by legal advice and.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <a href="{{ route('practice-area.property-and-real-estate') }}">
                            <img src="{{ asset('assets') }}/img/services/property-and-real-estate.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <h3><a href="{{ route('practice-area.property-and-real-estate') }}">Property and Real Estate</a>
                            </h3>
                            <p>Raina & Raina is involved in providing services and assistance to our clients in buying </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <a href="{{ route('practice-area.alternate-dispute') }}">
                            <img src="{{ asset('assets') }}/img/services/ALTERNATE_DISPUTE_RESOLUTION_1_575x400.jpg"
                                alt="Image">
                        </a>
                        <div class="service-text">
                            <h3><a href="{{ route('practice-area.alternate-dispute') }}">Alternate Dispute
                                    Resolution</span></a></h3>
                            <p>Raina & Raina law firm houses several attorneys who are also experienced mediators</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <a href="{{ route('practice-area.civil') }}">
                            <img src="{{ asset('assets') }}/img/services/civil_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <h3><a href="{{ route('practice-area.civil') }}">Civil Law And Appeals</span></a></h3>
                            <p>The Crime Team at Raina & Raina offers a genuinely holistic </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <a href="{{ route('practice-area.prof-negligence') }}">
                            <img src="{{ asset('assets') }}/img/services/Professional_negligence_1_575x400.jpg"
                                alt="Image">
                        </a>
                        <div class="service-text">
                            <h3><a href="{{ route('practice-area.prof-negligence') }}">Professional Negligence
                                    Dispute</span></a></h3>
                            <p>Our global team of professional negligence lawyers’s advice, act on and defend a range.</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="about-btn" style="text-align: center;">
                <a href="{{ route('practice-areas') }}" class="default-btn-one">View More</a>
            </div>
        </div>
    </div> --}}
    <!-- End Service Area -->

    <!-- Choose Area -->
    {{-- <div class="choose-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-text">
                        <div class="section-title">
                            <span>Why Choose Us</span>
                            <h2>We Are Providing <span>Top Services</span> With Excellent Performance of Reputed Attorneys
                            </h2>
                            <p> Raina & Raina has an establisbed expertise and an unrivalled reputation in litigation,
                                artibiration and mediation. We portray together a team of well-qualified practitioners to
                                offer comprehensive and efficient services, relying on our strong analytical and legal
                                research and verbal advocacy with real world pragmatism. Our clients rely on us due to our
                                in-depth analysis of issues concerned, our srategic approach, and multidimensional advocacy
                                skills to protect their rights in critical matters of Tax and Corporation. </p>
                            <h3>The Legal Web </h3>
                            <p>The legal team comprises of highly qualified and experienced lawyers who have gained grounds
                                in legal research and advocacy. Raina & Raina has represented various governmental
                                departments, private companies and prominent business groups before judicial, quasi judicial
                                forums as well as arbitrators. Choosing Raina & Raina for resloving any case of corporate
                                sector and matters of similiar nature can bring satisfying results to the clients. </p>
                        </div>

                        <div class="choose-card">
                            <i class="las la-chart-pie"></i>
                            <h3>Long Experience</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>

                        <div class="choose-card">
                            <i class="las la-chart-bar"></i>
                            <h3>Our Success Cases</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>

                        <div class="choose-card">
                            <i class="las la-user-tie"></i>
                            <h3>Professional Attorneys</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <!-- <div class="video-box">
                                        <a href="https://www.youtube.com/watch?v=0gv7OC9L2s8" class="video-btn popup-youtube">
                                            <i class="las la-play"></i>
                                        </a>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Choose Area -->

    <!-- Fun Fact Area -->
    <div class="fun-facts-area pb-70 " style="margin-top: 20px">
        <div class="container">
            <div class="fun-facts-shape top">
                <img src="{{ asset('assets') }}/img/shape.png" class="shape1" alt="Shape">
                <img src="{{ asset('assets') }}/img/shape.png" class="shape2" alt="Shape">
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="signle-fun-fact">
                        <i class="las la-balance-scale"></i>
                        <h3><span class="odometer" data-count="2000">00</span>+</h3>
                        <p>Solved Cases</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="signle-fun-fact">
                        <i class="las la-gavel"></i>
                        <h3><span class="odometer" data-count="2000">00</span>+</h3>
                        <p>Cases Won</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="signle-fun-fact">
                        <i class="las la-trophy"></i>
                        <h3><span class="odometer" data-count="500">00</span>+</h3>
                        <p>International Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="signle-fun-fact">
                        <i class="lab la-gitkraken"></i>
                        <h3><span class="odometer" data-count="100">00</span>%</h3>
                        <p>Global Reach</p>
                    </div>
                </div>
            </div>

            <div class="fun-facts-shape bottom">
                <img src="{{ asset('assets') }}/img/shape.png" class="shape1" alt="Shape">
                <img src="{{ asset('assets') }}/img/shape.png" class="shape2" alt="Shape">
            </div>
        </div>
    </div>
    <!-- Ends Fun Fact Area -->

    <!-- Case Study Slider Area -->
    <!-- <div class="testimonials-area case-study-area ptb-100">
            <div class="container">
                <div class="section-title text-center">
                    <span>Case Study</span>
                    <h2>We Are Providing <span>Top Services</span> With Excellent Performance</h2>
                </div>

                <div class="testimonials-slider owl-carousel owl-theme">
                    <div class="testimonials-slider-item">
                        <div class="testimonials-img">
                            <img src="{{ asset('assets') }}/img/case-study/case-study1.jpg" alt="Image">
                        </div>
                        <div class="img-text">
                            <h3>Real Estate Issue</h3>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                            <a href="#">
                                Read More
                                <i class="las la-angle-double-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="testimonials-slider-item">
                        <div class="testimonials-img">
                            <img src="{{ asset('assets') }}/img/case-study/case-study2.jpg" alt="Image">
                        </div>
                        <div class="img-text">
                            <h3>Money Loundering</h3>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                            <a href="#">
                                Read More
                                <i class="las la-angle-double-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="testimonials-slider-item">
                        <div class="testimonials-img">
                            <img src="{{ asset('assets') }}/img/case-study/case-study3.jpg" alt="Image">
                        </div>
                        <div class="img-text">
                            <h3>Critical Murder Case</h3>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                            <a href="#">
                                Read More
                                <i class="las la-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- End Case Study Slider Area -->

    <!-- Right Way Area -->
    <div class="right-way-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 right-way">
                    <div class="fun-facts-shape top">
                        <img src="{{ asset('assets') }}/img/shape.png" class="shape1" alt="Shape">
                        <img src="{{ asset('assets') }}/img/shape.png" class="shape2" alt="Shape">
                    </div>

                    <div class="right-way-text">
                        <div class="section-title">
                            <h2>Founder's Message</h2>
                            <p style="text-align: justify;">Our legal practitioners appear on a regular basis before courts and tribunals at all levels
                                across Pakistan, in disputes relating to diverse areas of law and industry regulations.
                                We fully appreciate and understand that different judicial and quasi-judicial forums require
                                different skills and styles of advocacy. We build on the diversity of our experience to
                                present our clients’ case in the most persuasive manner to maximize their chances of
                                obtaining the most beneficial outcome.
                            </p>
                        </div>

                        <div class="text-sign">
                            <!-- <img src="{{ asset('assets') }}/img/sign.png" alt="Sign"> -->
                            <h3>Faisal Naseer Rana </h3>
                            <p>Senior Attorney & Founder of Raina & Raina</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="video-contant">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <!-- <div class="video-box">
                                        <a href="https://www.youtube.com/watch?v=0gv7OC9L2s8" class="video-btn popup-youtube">
                                            <i class="las la-play"></i>
                                        </a>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Right Way Area -->

    <!-- Contact Area -->
    {{-- <div class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <div class="section-title">
                            <h2>Contact Us Today, Get In Touch With Expert</h2>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                                and demoralized by the charms of pleasure of the moment, so blinded by desire hat they
                                cannot foresee the pain and trouble.</p>
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
                                            <a href="https://www.facebook.com/RainaRaina99" target="_blank">
                                                <i class="lab la-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/" target="_blank">
                                                <i class="lab la-twitter"></i>
                                            </a>
                                        </li>
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
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required
                                            placeholder="Full name">
                                        <i class="las la-user"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required
                                            placeholder="Email address">
                                        <i class="las la-envelope"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" id="Phone" required
                                            placeholder="Phone No">
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
                                            placeholder="Write your message..."></textarea>
                                        <i class="las la-sms"></i>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn-one">Get An Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Contact Area -->

    <!-- Testimonials Slider Area -->
    {{-- <div class="testimonials-area ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Clients</span>
                <h2>Our Clients Love Us & We Got <span> 4.5 Star</span> Out of 5 Star</h2>
            </div>

            <div class="testimonials-slider owl-carousel owl-theme">
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/al-fateh1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Al-Fateh</h3>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/Bombay-chopaty.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>M/s Bombay Chowpaty</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/digitalworld1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Digital World</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/haier1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>M/s Haier Pakistan (Pvt.) Limited</h3>
                                <p> </p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/hunza-sugar-mill1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Hunza Sugar Mills</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/jdw1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Sugar Mills Ltd.</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/KOHINOOR-Mills1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3> M/s KOHINOOR Mills</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/Maple-Leaf-cement1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>M/s Maple Leaf Cement Factory Limited </h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/metaline1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Metaline Industries (Pvt) Ltd. </h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/nestle1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Nestle</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/pak-arab- fertilizer1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Pakarab FertilizerS LIMITED</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/patoki1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>PATOKI SUGAR MILLS LIMITED</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/rina1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Rina's KITCHENETTE</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/shakarganj1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>shakarganj Food Products </h3>
                                <p>Food Products</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/glorea-jeans.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Glorea Jeans </h3>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/standard-brand1.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Standard Brand </h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/national-hospital.png" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>National Hospital</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/orient-electronics.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Orient Electronics</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/pell-electronics.png" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Pell Electronics</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonials-slider-item feed-back">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets') }}/img/testimonials/pioneer-cement.jpg" alt="Image">
                        <div class="caption bottom-0">
                            <div class="caption-text">
                                <h3>Pioneer Cement</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- End Testimonials Slider Area -->

    <!-- Attorney Area -->
    {{-- <div class="attorney-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Experienced Attorney</span>
                <h2>Our Experienced Attorney Are Ready To answer any questions</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-sm-6">
                    <div class="attorney-card">
                        <a href="attorney-details.html">
                            <img src="{{ asset('assets') }}/img/attorney/faisal.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="attorney-details.html">Faisal Naseer Rana</a></h3>
                            <p>Senior Attorney & Founder of Raina & Raina</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="attorney-card">
                        <a href="attorney-details.html">
                            <img src="{{ asset('assets') }}/img/attorney/yasir.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="attorney-details.html">Yasir Naseer Rana</a></h3>
                            <p>Corporate Lawyer</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="attorney-card">
                        <a href="attorney-details.html">
                            <img src="{{ asset('assets') }}/img/attorney/attorney1.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="attorney-details.html">Azeem Danyal</a></h3>
                            <p>Corporate Attorney</p>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div> --}}
    <!-- End Attorney Area -->

    <!-- Partner Slider Area -->
    <!-- <div class="partner-area ptb-100">
            <div class="container">
                <div class="section-title text-center">
                    <span>Our Partner</span>
                    <h2>Trusted By Many Front Line Teams Everywhere</h2>
                </div>

                <div class="partner-slider owl-carousel owl-theme">
                    <div class="partner-slider-item">
                        <a href="#">
                            <img src="{{ asset('assets') }}/img/partner/partner1.png" alt="logo">
                        </a>
                    </div>
                    <div class="partner-slider-item">
                        <a href="#">
                            <img src="{{ asset('assets') }}/img/partner/partner2.png" alt="logo">
                        </a>
                    </div>
                    <div class="partner-slider-item">
                        <a href="#">
                            <img src="{{ asset('assets') }}/img/partner/partner3.png" alt="logo">
                        </a>
                    </div>
                    <div class="partner-slider-item">
                        <a href="#">
                            <img src="{{ asset('assets') }}/img/partner/partner4.png" alt="logo">
                        </a>
                    </div>
                    <div class="partner-slider-item">
                        <a href="#">
                            <img src="{{ asset('assets') }}/img/partner/partner5.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- End Partner Slider Area -->

    <!-- Blog Area -->
    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                {{-- <span>New Articles</span> --}}
                <h2>Top <span>Articles</span></h2>
            </div>

            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog-card">
                            <a href="{{ route('blog.show', $blog) }}">
                                <img src="{{ asset('storage') }}/images/blogs/thumbnail/{{ $blog->thumbnail }}"
                                    alt="Image">
                            </a>
                            <div class="blog-card-text">
                                <h3><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></h3>
                                <ul>
                                    <li>
                                        <i class="las la-calendar"></i>
                                        {{ date('d-M-Y', strtotime($blog->created_at)) }}
                                    </li>
                                    <li>
                                        <i class="las la-user-alt"></i>
                                        {{ $blog->author_name }}
                                    </li>
                                </ul>

                                <p>{{ $blog->summary }}</p>

                                <a href="{{ route('blog.show', $blog) }}" class="read-more">
                                    Read More <i class="las la-angle-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </div>
    <!-- End Blog Area -->
@endsection

@section('custom-script')
@endsection
