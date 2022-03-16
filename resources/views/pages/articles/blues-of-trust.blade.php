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
                        <h2>Article Details</h2>
                        <ul>
                            <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                            <li>Articl Details</li>
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
                            <img src="{{asset('assets')}}/img/news&blog/article1-express.jpg" alt="Image">
                        </div>
                        <div class="services-details-content">
                            <h3>Blues of Trust for Higher Tax Revenues in the Dwarf Countries</h3>
                            <ul class="blog-list">
                                <li>
                                    <i class="las la-calendar"></i>
                                    16 March 2022
                                </li>
                                <li>
                                    <i class="las la-user-tie"></i>
                                    <a href="#">MS Zunaira Khan</a>
                                </li>
                            </ul>
                            <p>The outbreak of the Global Pandemic has unveiled the existing traditional mores in the
                                institutional framework of developing countries. In many Dwarf countries, the tax collection
                                system has remained in the grey zones despite several efforts at the governmental level. Tax
                                revenues have been observed far below levels that were needed to provide basic services to
                                citizens to minimize the shocks of COVID-19. </p>
                            <p><b><i>According to the World Bank Report, Governments in developing countries that look to
                                        strengthen tax collection systems need to adopt a pragmatic approach to conceal the
                                        developed cracks that includes restoration and revival of citizens’ trust. </i></b>
                            </p>

                            <p>The collaboration of the International Centre for Tax and Development (ICTD), Bill Gates and
                                Melinda Gates Foundation, and Global Tax Program (World Bank Group) for the launch of a new
                                book, “Innovations in Tax Compliance: Building Trust, Navigating Politics, and Tailoring
                                Reforms” has brought forth multidimensional aspects of Tax revenues and strategies. It
                                focuses on the prior fact to develop an integrated model for improving tax systems based on
                                three fundamentals: Enforcement, Facilitation and Trust.</p>
                            <p>Moreover, it highlights the centrality of renovating reform strategies to place greater
                                emphasis on the development and revival of trust, shave off political resistance and jaws of
                                endless exploitation of institutions, and tailor reforms to unique domestic circumstances.
                                By hammering the concept of Raison de Tate through improved tax strategies and enforced
                                facilitation, the world will witness increased trust between taxpayers and tax collectors
                                that eventually can lead to higher rates of compliance and build a foundation of public
                                support for effective taxation that will spread as a geometric fashion</p>
                            <h3>Tax apocalypse needs to defeat the shadows in Dwarf states</h3>
                            <div class="img">
                                <img src="assets/img/news&blog/article4.jpg" alt="Image">
                            </div>
                            <p>Recent research has highlighted that absence of trust among citizens has proved to be a major
                                barrier in tax collection. The state’s role as both tax collector and service provider
                                remains an important deterrent for many would-be taxpayers to take a step into the formal
                                economy or pay their full taxes and undermines broader political evangelism to initiate tax
                                reforms. </p>
                            <p>Tax Reforms have transformed the tax structure by leaning heavily towards strengthening tax
                                enforcement and facilitating compliance, with sanctions for citizens and corporations that
                                violate their legal obligation or avoid paying their taxes. Such mechanisms pave the ways
                                for taxpayers to identify their obligations and to adopt the proper channel to strengthen
                                the tax regime. </p>
                            <p>The embryonic states need to adopt feasible, clear-cut paths to achieve trust-building in the
                                real world. With detailed research on successful models across the world, the reformers and
                                innovators need to focus on implementing successful strategies to local contexts and
                                constraints. For example, in Freetown, Sierra Leone, successful property tax reform followed
                                significant public education programs and new forums for engagement between taxpayers and
                                the city</p>
                            <p>Developing states need to reconstruct the tax system to protect people and economies from the
                                further shocks wrought by the pandemic in the future. Fiscal pressures are increasing
                                immensely due to record-high levels of debt in lower and middle-income countries, rapidly
                                growing global crisis, and the need to transition to a green economy. Therefore, states need
                                to sketch a stable financial system based on a developed tax system, monetary awareness,
                                mobilize public trust and raise extra resources to heal the wounded economies. </p>

                            <blockquote class="blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite></footer>
                            </blockquote>
                        </div>
                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="las la-tags"></i></span>
                                <a href="#">Fashion</a>,
                                <a href="#">Games</a>,
                                <a href="#">Travel</a>
                            </div>

                            <!-- <div class="article-share">
                                        <ul class="social">
                                            <li><span>Share:</span></li>
                                            <li><a href="#" class="facebook" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter" target="_blank"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#" class="linkedin" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
                                            <li><a href="#" class="instagram" target="_blank"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </div> -->
                        </div>
                        <!-- <div class="comments-area">
                                    <h3 class="comments-title">2 Comments:</h3>

                                    <ol class="comment-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="assets/img/news&blog/blog7.jpg" class="avatar" alt="image">
                                                        <b class="fn">John Jones</b>
                                                        <span class="says">says:</span>
                                                    </div>

                                                    <div class="comment-metadata">
                                                        <span>April 24, 2019 at 10:59 am</span>
                                                    </div>
                                                </footer>

                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                                </div>

                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </div>

                                            <ol class="children">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <footer class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <img src="assets/img/news&blog/blog8.jpg" class="avatar" alt="image">
                                                                <b class="fn">Steven Smith</b>
                                                                <span class="says">says:</span>
                                                            </div>

                                                            <div class="comment-metadata">
                                                                <span>April 24, 2019 at 10:59 am</span>
                                                            </div>
                                                        </footer>

                                                        <div class="comment-content">
                                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                                        </div>

                                                        <div class="reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </div>

                                                    <ol class="children">
                                                        <li class="comment">
                                                            <div class="comment-body">
                                                                <footer class="comment-meta">
                                                                    <div class="comment-author vcard">
                                                                        <img src="assets/img/news&blog/blog9.jpg" class="avatar" alt="image">
                                                                        <b class="fn">Sarah Taylor</b>
                                                                        <span class="says">says:</span>
                                                                    </div>

                                                                    <div class="comment-metadata">
                                                                        <span>April 24, 2019 at 10:59 am</span>
                                                                    </div>
                                                                </footer>

                                                                <div class="comment-content">
                                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                                                </div>

                                                                <div class="reply">
                                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </li>

                                        <li class="comment">
                                            <div class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="assets/img/news&blog/blog10.jpg" class="avatar" alt="image">
                                                        <b class="fn">John Doe</b>
                                                        <span class="says">says:</span>
                                                    </div>

                                                    <div class="comment-metadata">
                                                        <span>April 24, 2019 at 10:59 am</span>
                                                    </div>
                                                </footer>

                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                                </div>

                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </div>

                                            <ol class="children">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <footer class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <img src="assets/img/news&blog/blog11.jpg" class="avatar" alt="image">
                                                                <b class="fn">James Anderson</b>
                                                                <span class="says">says:</span>
                                                            </div>

                                                            <div class="comment-metadata">
                                                                <span>April 24, 2019 at 10:59 am</span>
                                                            </div>
                                                        </footer>

                                                        <div class="comment-content">
                                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                                        </div>

                                                        <div class="reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Reply</h3>

                                    <form class="comment-form">
                                        <p class="comment-notes">
                                            <span id="email-notes">Your email address will not be published.</span>
                                            Required fields are marked
                                            <span class="required">*</span>
                                        </p>
                                        <p class="comment-form-author">
                                            <input type="text" id="author" placeholder="Your Name" name="author" required="required">
                                        </p>
                                        <p class="comment-form-email">
                                            <input type="email" id="email" placeholder="Your Email" name="email" required="required">
                                        </p>
                                        <p class="comment-form-url">
                                            <input type="url" id="url" placeholder="Website" name="url">
                                        </p>
                                        <p class="comment-form-comment">
                                            <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525"
                                                required="required"></textarea>
                                        </p>
                                        <p class="comment-form-cookies-consent">
                                            <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                            <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </p>
                                        <p class="form-submit">
                                            <input type="submit" name="submit" id="submit" class="submit" value="Post A Comment">
                                        </p>
                                    </form>
                                </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="side-bar">
                        <div class="side-bar-box search-box">
                            <form>
                                <input type="text" class="form-control" name="search" id="search-input"
                                    placeholder="Search">
                                <button type="submit"><i class="las la-search"></i></button>
                            </form>
                        </div>

                        <div class="side-bar-box recent-post">
                            <h3 class="title">Recent Post</h3>
                            <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="#"><img src="assets/img/news&blog/blog1.jpg" alt="Image"></a>
                                </div>
                                <div class="recent-post-content">
                                    <ul>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i> Jan 8, 2018</a></li>
                                    </ul>
                                    <h3><a href="#">Employment tribunal hears cases against National</a></h3>
                                </div>
                            </div>

                            <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="#"><img src="assets/img/news&blog/blog3.jpg" alt="Image"></a>
                                </div>
                                <div class="recent-post-content">
                                    <ul>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i> Jan 8, 2018</a></li>
                                    </ul>
                                    <h3><a href="#">Employment tribunal hears cases against National</a></h3>
                                </div>
                            </div>

                            <div class="single-recent-post mb-0">
                                <div class="recent-post-img">
                                    <a href="#"><img src="assets/img/news&blog/blog5.jpg" alt="Image"></a>
                                </div>
                                <div class="recent-post-content">
                                    <ul>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i> Jan 8, 2018</a></li>
                                    </ul>
                                    <h3><a href="#">Employment tribunal hears cases against National</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="side-bar-box categories-box">
                            <h3 class="title">Categories</h3>
                            <ul>
                                <li><a href="#"><i class="las la-angle-double-right"></i></i> News (10)</a></li>
                                <li><a href="#"><i class="las la-angle-double-right"></i></i> Legal News (15)</a></li>
                                <li><a href="#"><i class="las la-angle-double-right"></i></i> Events (09)</a></li>
                                <li><a href="#"><i class="las la-angle-double-right"></i></i> Resources (19)</a></li>
                                <li><a href="#"><i class="las la-angle-double-right"></i></i> Illegal News (13)</a></li>
                                <li><a href="#"><i class="las la-angle-double-right"></i></i> Legal Alerts (16)</a></li>
                                <li><a href="#"><i class="las la-angle-double-right"></i></i> Investigations (05)</a></li>
                            </ul>
                        </div>

                        <div class="side-bar-box tags-box">
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
