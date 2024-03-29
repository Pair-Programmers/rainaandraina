@extends('layouts.master')

@section('title-meta')
<title>Property and Real Estate - Practice Area | Raina & Raina</title>
<meta name="description" content="Raina & Raina is involved in providing services and assistance to our clients in buying and selling of both movable and immovable properties & real estate in Pakistan. We also provide our services to facilitate the required permissions, etc. for setting up various industries, factories, commercial complexes, industrial and residential estates, etc. across Pakistan.">
<meta name="keywords" content="Raina, Practice Area, Property, Real Estate, advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
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
                            <li><a href="{{route('home')}}">Home <i class="las la-angle-right"></i></a></li>
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
                            <img src="{{asset('assets')}}/img/services/property-and-real-estate.jpg" alt="Professional_negligence_1_575x400.jpg">
                        </div>
                        <div class="services-details-content">
                            <h3>Property and Real Estate</h3>
                            <p>Raina & Raina is involved in providing services and assistance to our clients in buying and selling of both movable and immovable properties & real estate in Pakistan. We also provide our services to facilitate the required permissions, etc. for setting up various industries, factories, commercial complexes, industrial and residential estates, etc. across Pakistan.</p>
                            <p>Raina & Raina offers a broad spectrum of services in property & real estate in Pakistan including following:</p>
                            <ul>

                            <li>	Investigate & verify title documents of the property </li>
                            <li>	Investigate & verify mutation in favor of the vendor </li>
                            <li>	Obtain a fresh copy of Fard from relevant sub-registrar </li>
                            <li>	Obtain a certified copy of Aks-Shajra (map) </li>
                            <li>	Obtain a certified copy of Tatima/Supplementary Map of the property </li>
                            <li>	Demarcation details </li>
                            <li>	Drafting of the documents </li>
                            <li>	Registration of conveyance deed </li>
                            <li>	Transfer of title </li>
                            <li>	Entries in relevant government record </li>
                            <li>	Obtain a NOC, if necessary </li>
                            <li>	Verification of the Power of Attorney of the vendor, if any </li>
                            <li>	Verification of other documents e.g. lease deeds, mortgage deeds, gift deeds etc., if any </li>

                        </ul>

                            <!-- <blockquote class="blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote> -->

                            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->

                            <div class="faq-area">
                                <div class="faq-accordion">
                                    <ul class="accordion">
                                        <!-- <li class="accordion-item">
                                                    <a class="accordion-title active" href="javascript:void(0)">
                                                        <i class="las la-plus"></i>
                                                        We offer a full range of alternative dispute resolution services including:
                                                    </a>

                                                    <p class="accordion-content show">
                                                         <ul>
                                                             <li>Alternative dispute resolution (ADR)</li>
                                                             <li>Bilateral and multilateral investment treaty disputes </li>
                                                             <li>Mediation Services</li>
                                                             <li>Litigation and disputes</li>
                                                             <li>Post-award enforcement</li>
                                                             <li>Risk management</li>
                                                             <li>Treaty-based arbitrations</li>
                                                             <li>All types of institutional and ad hoc commercial arbitrations </li>


                                                         </ul>
                                                    </p>
                                                </li> -->


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
                                <li><a href="foreign.html"><i class="las la-angle-double-right"></i></i>Foreign Legal
                                        Opinion</a></li>
                                <li><a href="alternate-dispute.html"><i class="las la-angle-double-right"></i></i>Alternate
                                        Dispute Resolution</a></li>
                                <li><a href="legislative-drafting.html"><i
                                            class="las la-angle-double-right"></i></i>Legislative Drafting</a></li>
                                <li><a href="clinical.html"><i class="las la-angle-double-right"></i></i>clinical Negligence
                                        And Personal Injury</a></li>

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
