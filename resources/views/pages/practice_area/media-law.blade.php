@extends('layouts.master')

@section('title-meta')
<title>MEDIA LAW AND INFORMATION LAW - Practice Area | Raina & Raina</title>
<meta name="description" content="Raina & Raina, members practicing in this area have extensive experience in advising and
representing individuals and organizations in data protection and freedom of information
cases at all judicial levels from the Information Tribunal up to the Supreme Court and
the European Court of Human Rights.">
<meta name="keywords" content="Raina, Practice Area, MEDIA LAW, INFORMATION LAW, advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
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
                            <img src="{{asset('assets')}}/img/services/MEDIA_LAW_AND_INFORMATION_LAW_1_575x400.jpg" alt="MEDIA_LAW_AND_INFORMATION_LAW_1_575x400.jpg">
                        </div>
                        <div class="services-details-content">
                            <h3>MEDIA LAW AND INFORMATION LAW</h3>
                            <p><b>Raina & Raina, members practicing in this area have extensive experience in advising and
                                    representing individuals and organizations in data protection and freedom of information
                                    cases at all judicial levels from the Information Tribunal up to the Supreme Court and
                                    the European Court of Human Rights. </b></p>


                            <!-- <blockquote class="blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote> -->

                            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->


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
                                <li><a href="prof-negligence.html"><i class="las la-angle-double-right"></i></i>Professional
                                        Negligence</a></li>
                                <li><a href="criminal.html"><i class="las la-angle-double-right"></i></i>Criminal Law And
                                        Appeals</a></li>
                                <li><a href="civil.html"><i class="las la-angle-double-right"></i></i>Civil Law And
                                        Appeals</a></li>

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
