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
                        <h2>Practice Area / Services</h2>
                        <ul>
                            <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                            <li>Practice Area</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page banner Area -->


    <!-- Service Area -->
    <div class="service-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our Practice Areas / Services</span>
                <h2>We Are Providing <span>Top Services</span> With Excellent Performance in following <span>Practice
                        Areas</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.tax-audit')}}">
                            <img src="assets/img/services/TAX_AUDITS__APPEALS_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-city"></i> -->
                            <h3><a href="{{route('practice-area.tax-audit')}}">TAX AUDITS & APPEALS <span> </span></a></h3>
                            <p>Raina & Raina tax lawyers provide comprehensive legal advice covering all areas of tax law
                                including planning, investigations and litigation services, anywhere in the world.Our
                                clients include domestic and international companies of all sizes, </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.corporate')}}">
                            <img src="assets/img/services/Corporate_and_Commercial_2_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-users"></i> -->
                            <h3><a href="{{route('practice-area.corporate')}}">Corporate and Commercial<span></span></a></h3>
                            <p>Raina & Raina has a thriving Corporate and Commercial litigation practice representing
                                foreign and local clients from the public and private sectors. Primarily, the firm has
                                represented such clients at various judicial and quasi-judicial.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.multi-Jurisdictional')}}">
                            <img src="assets/img/services/Multi-Jurisdictional_Trade_Consultancy_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-user"></i> -->
                            <h3><a href="{{route('practice-area.multi-Jurisdictional')}}">Multi-Jurisdictional Trade
                                    Consultancy</a></h3>
                            <p>International trade and sanctions regime are complex and often respond to volatile political
                                landscapesSanctions and controls lawyers of Raina & Raina are well-positioned to help
                                clients adapt to these fast-evolving </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.foreign')}}">
                            <img src="assets/img/services/Foreign_legal_opinion_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-user"></i> -->
                            <h3><a href="{{route('practice-area.foreign')}}">Foreign legal opinion</a></h3>
                            <p> Raina & Raina provides foreign legal opinion in cross-border commercial transactions
                                certifying the effectiveness of the transaction under the applicable foreign law. Foreign
                                legal opinions have become highly standardized over time, and most foreign </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.alternate-dispute')}}">
                            <img src="assets/img/services/ALTERNATE_DISPUTE_RESOLUTION_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-broadcast-tower"></i> -->
                            <h3><a href="{{route('practice-area.alternate-dispute')}}">ALTERNATE DISPUTE RESOLUTION</a></h3>
                            <p>Raina & Raina law firm houses several attorneys who are also experienced mediators, who offer
                                an effective way of resolving disputes at domestic and international </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.legislative-drafting')}}">
                            <img src="assets/img/services/Legislative_Drafting_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-balance-scale"></i> -->
                            <h3><a href="{{route('practice-area.legislative-drafting')}}">Legislative Drafting<span> </span></a>
                            </h3>
                            <p>The firm has advised the Federal and Provincial Governments as well as the industry on the
                                drafting of primary and secondary/subsidiary legislative proposals and measures.The firm’s
                                recent engagements include drafting of a provincial </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.clinical')}}">
                            <img src="assets/img/services/CLINICAL_NEGLIGENCE_2_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-balance-scale-right"></i> -->
                            <h3><a href="{{route('practice-area.clinical')}}">CLINICAL NEGLIGENCE AND PERSONAL INJURY
                                    <span></span></a></h3>
                            <p>Raina & Raina offers a comprehensive clinical negligence, medical law and personal injury
                                service, as well as being well known for having brought many of the high profile group
                                actions and product liability cases of recent years.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.prof-negligence')}}">
                            <img src="assets/img/services/Professional_negligence_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-balance-scale-right"></i> -->
                            <h3><a href="{{route('practice-area.prof-negligence')}}">Professional negligence<span>
                                        Disputes</span></a></h3>
                            <p>Our global team of professional negligence lawyers advise, act on and defend a range of
                                high-value domestic, international and cross-border professional indemnity and liability
                                disputes across key industries worldwide </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.criminal')}}">
                            <img src="assets/img/services/CRIMINAL_LAW_AND_APPEALS_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-balance-scale-right"></i> -->
                            <h3><a href="{{route('practice-area.criminal')}}">CRIMINAL LAW AND APPEALS <span> </span></a></h3>
                            <p>The Crime Team at Raina & Raina offers a genuinely holistic advice and advocacy service for
                                all issues relating to criminal justice including trials, appeals, business crime and fraud,
                                extradition, international crime, and civil and public</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.civil')}}">
                            <img src="assets/img/services/civil_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-balance-scale-right"></i> -->
                            <h3><a href="{{route('practice-area.civil')}}">CIVIL LAW AND APPEALS <span> </span></a></h3>
                            <p>The Crime Team at Raina & Raina offers a genuinely holistic advice and advocacy service for
                                all issues relating to criminal justice including trials, appeals, business crime and fraud,
                                extradition, international crime, and civil and public law issues arising </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.media-law')}}">
                            <img src="assets/img/services/MEDIA_LAW_AND_INFORMATION_LAW_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-balance-scale-right"></i> -->
                            <h3><a href="{{route('practice-area.media-law')}}">MEDIA LAW AND INFORMATION LAW <span></span></a></h3>
                            <p>Raina & Raina , members practicing in this area have extensive experience in advising and
                                representing individuals and organizations in data protection and freedom of</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.immigration')}}">
                            <img src="assets/img/services/service6.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-balance-scale-right"></i> -->
                            <h3><a href="{{route('practice-area.immigration')}}">Immigration<span> </span></a></h3>
                            <p>Raina & Raina Immigration Team provides advice, representation and advocacy on all aspects of
                                personal immigration and nationality law, including refugee/asylum claims, human rights
                                claims, EU free movement </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('practice-area.international')}}">
                            <img src="assets/img/services/INTERNATIONAL_LAW_1_575x400.jpg" alt="Image">
                        </a>
                        <div class="service-text">
                            <!-- <i class="las la-balance-scale-right"></i> -->
                            <h3><a href="{{route('practice-area.international')}}">INTERNATIONAL LAW <span> </span></a></h3>
                            <p>Raina & Raina has unrivalled expertise in advice and advocacy on all aspects of international
                                law. DSI comprises the Public International Law, International Criminal Law, International
                                Criminal Law,</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Service Area -->



    <!-- Our Service Area -->
    <!-- <div class="our-service-area pt-100 pb-70">
                <div class="container">
                    <div class="section-title">
                        <span>Our Practice Area / Services</span>
                        <h2>We Are Providing <span> Top Services</span> With Excellent Performance</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="our-service-card">
                                <i class="las la-city"></i>
                                <h3>Tax and Corporate <span> Disputes</span></h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="our-service-card">
                                <i class="las la-balance-scale"></i>
                                <h3>Commercial <span> Disputes</span></h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="our-service-card">
                                <i class="las la-broadcast-tower"></i>
                                <h3>Intellectual Property</h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="our-service-card">
                                <i class="las la-balance-scale-left"></i>
                                <h3>Banking Litigation</span></h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="our-service-card">
                                <i class="las la-user-tie"></i>
                                <h3>Technology & Telecommunications <span> Disputes</span></h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="our-service-card">
                                <i class="las la-users"></i>
                                <h3>Land & Property <span> Disputes</span></h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="our-service-card">
                                <i class="las la-users"></i>
                                <h3>Employment Litigation</h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="our-service-card">
                                <i class="las la-users"></i>
                                <h3>White Collar Crimes & Investigations</h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="our-service-card">
                                <i class="las la-users"></i>
                                <h3>Appellate and Constitutional Litigation</h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- End Our Service Area -->
@endsection

@section('custom-script')
@endsection
