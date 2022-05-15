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
                            <li><a href="{{route('home')}}">Home <i class="las la-angle-right"></i></a></li>
                            <li>Article Details</li>
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
                            <img src="{{asset('assets')}}/img/news&blog/article3-express.jpg" alt="Image">
                        </div>
                        <div class="services-details-content">
                            <h3>Pak-China Civil Nuclear Cooperation; New Narrative of Peaceful Co-existence </h3>
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


                            <p><b><i>There is no free lunch in international relations and bilateral cooperation is a
                                        gateway for interconnectivity to maintain stable ties in modern world.

                                    </i></b></p>
                            <p>The song of Pak-China Friendship is being heard in the halls of the energy sector in recent
                                times. While the year 2021 was coughing its last, Pakistan and China have entered into a new
                                phase of bilateral ties. The Pakistan Atomic Energy Commission (PAEC) and China Zhogyuan
                                Engineering Cooperation signed a “Framework Agreement on Deepening Nuclear Energy
                                Cooperation”. The roots of nuclear collaboration between the two states can be traced back
                                to the late1970s as both countries have exchanged a healthy history based on bilateral
                                cooperation. </p>

                            <p>The world has witnessed a global convergence towards interconnectivity for achieving global
                                peace and economic stability since the end of World War II. With an increased inclination
                                towards Soft Power and interconnectedness, states today desire to expand their nuclear
                                cooperation for development. Pakistan and China have observed a Soft Power approach towards
                                each other and have never engaged in a nuclear arms race. </p>
                            <p>Both states are extending nuclear ties to develop energy sectors and fulfill the arising
                                demands. Pakistan, being a developing country, is seeking nuclear cooperation with China to
                                meet its on energy needs. Nuclear Cooperation between the two states aids in the growth of
                                Pakistan’s energy sector and the achievement of long-term development goals.

                            </p>
                            <p>China has played a crucial role in assisting Pakistan to develop nuclear energy technologies
                                and building nuclear power stations. In 1986, China and Pakistan signed a historic agreement
                                to further the export of civil nuclear technology. Following the agreement, China opted to
                                transfer its indigenous developed Qishan-1 nuclear power plant in 1991. The construction of
                                Chashma Nuclear Power Plant that generates 300 MWe became operational in 2000. Later on,
                                Pakistan announced the construction of C-2 (2005), C-3 and C-4 nuclear reactors that have
                                been operational since 2016 and 2017. All these nuclear power plants are in accordance with
                                the IAEA norms and principles. The nuclear collaboration was further extended to the Karachi
                                Nuclear Power Plant K-2 and K-3 which have a combined net capacity of 1014 MWe. Five
                                operational nuclear power stations have a total energy capacity of 1318 MWe. With the
                                installation of K-2 and K-3, Pakistan is scheduled to produce 3346 MWe of nuclear energy by
                                2022.

                            </p>
                            <p>The growing civil nuclear cooperation between the two states is observing a spate of high
                                level international concerns over not following the set principles of Nuclear Supplier Group
                                (NSG) and is violating the norms of Nuclear Non-Proliferation Treaty (NPT). The cooperation
                                of Pakistan and China is speaking above the mortal mouth despite criticism. Following are
                                the reasons which have paved the ways for the cooperation between the two neighboring
                                countries:

                            </p>
                            <ul>
                                <li>Pakistan holds a centre position in the China global strategic plan of Belt and Road
                                    Initiative (BRI) through CPEC. </li>
                                <li>The imprints of cooperation between the two states can be traced back to the early years
                                    of the inception of both countries and share a wide length of strategic, diplomatic, and
                                    political ties. </li>
                                <li>China is deeply entrenched in the global non-proliferation regime and is considered a
                                    responsible nuclear-weapon state. </li>
                                <li>Pakistan, as a member of many nuclear security regimes, is dedicated to improving its
                                    non-proliferation credentials in the global arena. </li>
                                <li>The cooperation in civil nuclear technology reflects the corporate and trade prospects
                                    to address the energy crisis rather than a mere focus on conventional security
                                    dimensions. </li>
                            </ul>
                            <p>China is emerging as a strong economy due to the adoption of the Soft Power Approach. Also,
                                it is delivering an innovative strategy in international politics and global diplomacy with
                                effective use of Soft Power and extending the same approach in neighboring Pakistan. The
                                sole purpose of Pak-China nuclear cooperation is to deliver peace across the region and
                                beyond. </p>
                            <p>However, the nuclear cooperation between Pakistan and China has focused on reducing the gaps
                                between production and consumption of energy, and meeting supply and demand chain, while an
                                ls attention has been paid to addressing the challenges in the areas of nuclear medicines,
                                agriculture, pharmaceutical sector and education. </p>
                            <p>Civil nuclear cooperation has multidimensional prospects covering a wide range of economic
                                factors and social security issues such as extremism that is prevalent due to poverty and
                                unemployment. In a nutshell, nuclear cooperation is inevitable for the achievement of
                                sustainable development goals and brings forth a new dimension that peaceful utilization of
                                nuclear technology is more significant for national development rather than a real execution
                                of Hard Power in modern shivered world. </p>
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
