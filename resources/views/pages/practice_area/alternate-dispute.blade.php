@extends('layouts.master')

@section('title-meta')
<title>ALTERNATE DISPUTE RESOLUTION - Practice Area | Raina & Raina</title>
<meta name="description" content="Raina & Raina law firm houses several attorneys who are also experienced mediators, who offer
an effective way of resolving disputes at domestic and international level.">
<meta name="keywords" content="Raina, Practice Area,ALTERNATE DISPUTE RESOLUTION, advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
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
                            <img src="{{asset('assets')}}/img/services/ALTERNATE_DISPUTE_RESOLUTION_1_575x400.jpg" alt="ALTERNATE_DISPUTE_RESOLUTION_1_575x400.jpg">
                        </div>
                        <div class="services-details-content">
                            <h3>ALTERNATE DISPUTE RESOLUTION</h3>
                            <p>Raina & Raina law firm houses several attorneys who are also experienced mediators, who offer
                                an effective way of resolving disputes at domestic and international level. </p>
                            <p><b><i>International arbitration is most effectively handled by a team with global reach and
                                        experience. Our world-renowned international arbitration team, with across the
                                        globe, is one of the few global legal practices with the experience and resources to
                                        assist clients from the onset of a dispute, through to enforcement of an award.
                                        Because numerous jurisdictions and legal systems can intersect in one international
                                        arbitration proceeding, our team operates in cross-border teams, regardless of where
                                        they are physically located, which allows us to cover legal disputes all across the
                                        world. We know the sectors in which our clients operate – our lawyers are highly
                                        skilled legal practitioners with extensive knowledge across a host of key industries
                                        including financial institutions; energy, infrastructure and resources; transport;
                                        technology; life sciences and healthcare and consumer markets.</i></b></p>

                            <p> Our lawyers handle some of the most complex, high-value and strategically important
                                arbitrations in the world, working closely with our clients to determine and achieve their
                                commercial objectives in a quick and cost-effective manner. </p>
                            <p>We advise on all aspects of arbitration, from drafting suitable clauses to advising on the
                                type and seat of arbitration, the formation of a tribunal, arbitral procedure and
                                enforcement of the award. Our lawyers are fluent in a number of languages and are very
                                experienced in conducting their own advocacy; additionally, many often sit as arbitrators in
                                high-value cases, demonstrating that the legal marketplace agrees with their legal
                                interpretations. Finally, many of our lawyers hold or have held leadership positions in the
                                world’s major arbitral institutions.</p>
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
