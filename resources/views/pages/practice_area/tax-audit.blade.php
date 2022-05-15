@extends('layouts.master')

@section('title-meta')
    <title>TAX AUDITS & APPEALS - Practice Area | Raina & Raina</title>
    <meta name="description" content="Raina & Raina tax lawyers provide comprehensive legal advice covering all areas of tax law
    including planning, investigations and litigation services, anywhere in the world.">
    <meta name="keywords"
        content="Raina, Practice Area, TAX AUDITS, APPEALS, advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
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
                        <h2>Practice Area Details</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home <i class="las la-angle-right"></i></a></li>
                            <li>Practice Area Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page banner Area -->

    <!-- Start Services Details Area -->
    <div class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="services-details">
                        <div class="img">
                            <img src="{{ asset('assets') }}/img/services/TAX_AUDITS__APPEALS_1_575x400.jpg"
                                alt="TAX_AUDITS__APPEALS_1_575x400.jpg">
                        </div>
                        <div class="services-details-content">
                            <h3>TAX AUDITS & APPEALS</h3>
                            <p> Raina & Raina tax lawyers provide comprehensive legal advice covering all areas of tax law
                                including planning, investigations and litigation services, anywhere in the world.</p>

                            <p><b><i>Our clients include domestic and international companies of all sizes, and we are able
                                        to skillfully advise on tax matters across multiple key industries and
                                        jurisdictions. </i></b></p>

                            <p>Our global platform gives us significant international reach to provide comprehensive tax
                                legal services for all corporate, finance and real estate transactions, and our deep
                                knowledge of tax laws around the world is reinforced by our strong industry sector focus.
                            </p>

                       
                            <div class="faq-area">
                                <div class="faq-accordion">
                                    <ul class="accordion">
                                        <li class="accordion-item">
                                            <a class="accordion-title active" href="javascript:void(0)">
                                                <i class="las la-plus"></i>
                                                We offer a full range of alternative dispute resolution services including:
                                            </a>

                                            <p class="accordion-content show">
                                            <ul>
                                                <li>Appeals Representation</li>
                                                <li>Tax Audit</li>
                                                <li>TAX FRAUD DEFENSE</li>
                                                <li>TAX Consultancy</li>
                                                <li>TAX RELIEF & RESOLUTION</li>
                                                <li>Tax-exempt finance</li>
                                                <li>Tax planning</li>
                                                <li>Corporate and partnership tax</li>
                                            </ul>
                                            </p>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="side-bar">
                        <!-- <div class="side-bar-box search-box">
          <form>
          <input type="text" class="form-control" name="search" id="search-input" placeholder="Search">
          <button type="submit"><i class="las la-search"></i></button>
          </form>
          </div> -->

                        <div class="side-bar-box categories-box">
                            <h3 class="title">Other Practice Areas</h3>
                            <ul>

                                <li><a href="corporate.html"><i class="las la-angle-double-right"></i></i>Corporate and
                                        Commercial</a></li>
                                <li><a href="multi-Jurisdictional .html"><i
                                            class="las la-angle-double-right"></i></i>Multi-Jurisdictional Trade
                                        Consultancy</a></li>
                                <li><a href="foreign.html"><i class="las la-angle-double-right"></i></i>Foreign Legal
                                        Opinion</a></li>
                                <li><a href="alternate-dispute.html"><i class="las la-angle-double-right"></i></i>Alternate
                                        Dispute Resolution</a></li>
                                <li><a href="legislative-drafting.html"><i
                                            class="las la-angle-double-right"></i></i>Legislative Drafting</a></li>
                                <li><a href="clinical.html"><i class="las la-angle-double-right"></i></i>clinical Negligence
                                        And Personal Injury</a></li>
                                <li><a href="prof-negligence.html"><i class="las la-angle-double-right"></i></i>Professional
                                        Negligence</a></li>
                                <li><a href="criminal.html"><i class="las la-angle-double-right"></i></i>Criminal Law And
                                        Appeals</a></li>
                                <li><a href="civil.html"><i class="las la-angle-double-right"></i></i>Civil Law And
                                        Appeals</a></li>
                                <li><a href="media-law.html"><i class="las la-angle-double-right"></i></i>Media Law and
                                        Information Law</a></li>
                                <li><a href="immigration.html"><i class="las la-angle-double-right"></i></i>Immigration</a>
                                </li>
                                <li><a href="international.html"><i class="las la-angle-double-right"></i></i>International
                                        Law</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area Area -->
@endsection

@section('custom-script')
@endsection
