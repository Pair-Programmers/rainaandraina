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
                            <img src="{{asset('assets')}}/img/news&blog/article2-express.jpg" alt="Image">
                        </div>
                        <div class="services-details-content">
                            <h3>Birth of World Order 2.0</h3>
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

                            <p style="text-align: center;"><b><i>“This is quite a game, politics. There are no permanent
                                        enemies, and no permanent friends, only permanent interests”.</i></b></p>
                            <p>While geo-economy and geo-strategy have been dictating the world affairs for last few
                                decades, “geo-politics” has taken over global stage by transforming the previous trends.
                                International relations are witnessing preferable geo-political considerations, based on
                                prior national interests as directed by classical realism with dominance and stable state’s
                                immunity as its essentials, have started to sketch the “Making of New World Order, 2.0”.
                            </p>
                            <p>While recapping the events of past few years, drastic change has taken place in the world
                                order. The hasty withdrawal of United States and NATO forces from Afghanistan in 2021, the
                                outbreak of global pandemic in 2020, the US-China Thucydides and world trade war, the
                                formalization of new strategic blocs like QUAD (United States, United Kingdom, Japan, India)
                                and AUKUS (Australia, United States and United Kingdom) and stress on Indo-Pacific region,
                                the signing of Basic Exchange of Cooperation Agreement (BECA) between India and United
                                States to further bilateral ties, the shifting inclination of states to join global camps,
                                are raising concerns and the experts are anticipating the uncontrollable situation in
                                international politics.</p>
                            <p><b><i>The New World Order 2.0 is evolving in which Russia and China would be the key players
                                        to dominate the global stage against the Western World that has actually led the
                                        post-Cold War World Order.</i></b></p>
                            <p>The birth of New World Order 2.0 seems to be otherwise to the promise of George Bush, who
                                proclaimed the new World Order to be a reflection of the tall promises , made in 1945, a
                                world in which international institutions would guarantee international peace and security
                                with an active support of World’s Giant Powers. The post Cold World War era was a chimera.
                                Even the democratic-liberal internationalist states cannot afford a world without conflicts
                                due to the lengths of national interest, concerned. A peaceful world order demands universal
                                membership, a hierarchal set-up of institutions, and a centralized rule making authority.
                            </p>
                            <p>Unfortunately, the world could not discover peace beyond the embryonic stages despite the
                                fancy sketches of a stable world. The global institutions such as United Nations have
                                remained in the clutches of Giant Powers and could not function in an independent manner for
                                the maintenance of global peace. </p>
                            <p>The world has absorbed the plethora of dark shades throughout the Cold War era. In 1991, the
                                loud words of New World Order failed to echo in the global halls. Not long after the Persian
                                Gulf War in 1991, the flow of new world order slowed to trickle about which President Bush
                                said, "more than one small country; it is a big idea; a new world order," with "new ways of
                                working with other nations, peaceful settlement of disputes, solidarity against aggression,
                                reduced and controlled arsenals and just treatment of all peoples." The Democratic script of
                                Woodrow Wilson in the form of Fourteen Points or Franklin D. Roosevelt’s four freedoms or
                                Bush grand rhetoric expression of public well-being could not fit on the cracked global
                                landscape. </p>
                            <p>With the start of Cold War in 1949, NATO was founded with a sole purpose of promoting
                                collective security. Later on, the size of its membership expanded with the inclusion of
                                Greece, Spain, West Germany and Turkey. With the fall of Berlin Wall in 1990s, NATO started
                                to expand its wings eastwards, and brought Poland, Hungary and Czech Republic into its
                                shell, in 1999. The rapid expansion of NATO kept on increasing till 2020 with North
                                Macedonia to join in the recent period. Throughout this era, Russia has criticized the
                                expansion but Western Powers ignored the concerns of Moscow. However, NATO’s efforts to
                                embrace Ukraine in its fold was perhaps like crossing Russia’s red line, and therefore, the
                                Kremlin decided to respond by moving its forces westward into Ukraine from different
                                directions. </p>
                            <p>The lawlessness of US speaks above the mortal mouth when history is unveiled. The US,
                                following the Monroe Doctrine, has not allowed any political interference in the western
                                hemisphere, while it protested to Soviet Union’s placement of Medium Range Ballistic
                                Missiles (MRBMs) in 1962 on its doorsteps in Cuba. While the US ensured its security
                                interests by forcing the USSR to withdraw its MRBMs from Cuba, it desires to place North
                                Atlantic Treaty Organization (NATO) forces on the doorsteps of Russia by including Ukraine
                                in NATO.</p>
                            <p>The World is witnessing the glimpses of Cuban Missile Crisis in present episodes, where
                                President Kennedy imposed quarantine and blocked Soviet ships towards the Cuban coasts and
                                forced USSR to blink. President Biden also seemed to be testing President Putin by bringing
                                NATO forces alongside Russia’s borders. The result is no different. Global Giants are
                                responding in an aggressive manner without considering the consequences of confrontation in
                                an age of globalization.</p>
                            <p>At present, Ukraine crisis are dividing the world into blocs. The West is providing
                                financial, diplomatic and military supply to Ukraine while Communist China is supporting
                                Russia and India has abstained from voting against Russia at the United Nations Security
                                Council (UNSC). States, today, are choosing Global Blocs, prioritizing their ideological,
                                economic and national interests. </p>
                            <p>If the present situation of Ukraine further intensifies, the cost of polarization will become
                                unaffordable for pro-West alliances. The expensive patterns of leaders can turn multicolor
                                modern world into black and white zones, rupturing the entire global fabric. </p>
                            <p>It is apparent that the New World Order 2.0 is evolving in which Russia and China would be
                                the key players to dominate the global stage against the World that has actually led the
                                post-Cold War World Order. This fast emerging world order would be far more absorbent of
                                conflicts, prone to the use of Hard Power, more perplexing, and hold an unpredictable alarm.
                                Many states would want to stay neutral, but the changing geopolitical environment may not
                                allow them and invariably drag them into a larger conflict scenario. </p>

                            <p>Giant Powers are slipping deeper into political adventurism which is leading towards a gloomy
                                era of exhaustion but world must keep in mind that in darkness, shadows cannot be defeated.
                            </p>
                            <p style="text-align: center;"><b><i>“The World is full of conflicts. It has to see whether it
                                        ends in Fire or Ice”. (Robert Frost)</i></b></p>
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
