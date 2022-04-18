@extends('layouts.master')

@section('title-meta')
<title>Practice Area | Raina & Raina - Foreign Legal Opinion</title>
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
                        <h2>Practice Area Details</h2>
                        <ul>
                            <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                            <li>Services Details</li>
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
                            <img src="{{asset('assets')}}/img/services/Foreign_legal_opinion_1_575x400.jpg" alt="Foreign_legal_opinion_1_575x400.jpg">
                        </div>
                        <div class="services-details-content">
                            <h3>Foreign Legal Opinion</h3>
                            <p> Raina & Raina provides foreign legal opinion in cross-border commercial transactions
                                certifying the effectiveness of the transaction under the applicable foreign law.</p>

                            <p><b><i>Foreign legal opinions have become highly standardized over time, and most foreign
                                        legal opinions follow a fairly regimented format. Primarily, when doing business
                                        with a corporation formed in a foreign country, proper due diligence is required,
                                        for that, a legal opinion is sought to ensure that the relevant foreign company had
                                        the necessary capacity and power to enter into the transaction and that it would be
                                        binding upon it.</i></b></p>

                            <p>Raina & Raina covers related aspects of foreign law, such as whether payments might be
                                subject to exchange controls or usury laws, whether it was necessary for any of the other
                                parties to hold any licenses or permits under the regulatory laws of the foreign country,
                                whether there would be adverse tax consequences under the laws of the foreign country,
                                whether foreign judgments were recognized and enforced in that country other collateral
                                matters.</p>

                            <!-- <blockquote class="blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote> -->

                            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->

                            <div class="faq-area">
                                <div class="faq-accordion">
                                    <ul class="accordion">
                                        <li class="accordion-item">
                                            <a class="accordion-title active" href="javascript:void(0)">
                                                <i class="las la-plus"></i>
                                                We offer a full range of services including:
                                            </a>

                                            <p class="accordion-content show">
                                            <ul>
                                                <li>Contracts</li>
                                                <li>Business Liability</li>
                                                <li>Foreign Exchange Matters</li>
                                                <li>Money Laundering </li>
                                                <li>Nab Cases </li>
                                                <li>Custom</li>
                                                <li>Corporate Crime </li>
                                                <li>Banking Cases
                                                </li>
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
                                <li><a href="tax-audit.html"><i class="las la-angle-double-right"></i></i>Tax Audits &
                                        Appeals</a></li>
                                <li><a href="corporate.html"><i class="las la-angle-double-right"></i></i>Corporate and
                                        Commercial</a></li>
                                <li><a href="multi-Jurisdictional .html"><i
                                            class="las la-angle-double-right"></i></i>Multi-Jurisdictional Trade
                                        Consultancy</a></li>

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

                        <!-- <div class="side-bar-box tags-box">
      <h3 class="title">Tags</h3>
      <ul>
      <li><a href="#">Resources</a></li>
      <li><a href="#">Law</a></li>
      <li><a href="#">Events</a></li>
      <li><a href="#">Illegal</a></li>
      <li><a href="#">Criminal</a></li>
      <li><a href="#">Family</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Legal</a></li>
      <li><a href="#">Civil</a></li>
      <li><a href="#">Divorce</a></li>
      <li><a href="#">Investment</a></li>
      </ul>
      </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area Area -->
@endsection

@section('custom-script')
@endsection
