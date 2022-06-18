<!-- Preloder Area -->
        <!-- <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="lds-hourglass"></div>
                </div>
            </div>
        </div> -->
        <!-- End Preloder Area -->

        <!-- Heder Area -->
        <header class="header-area">
            <div class="top-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6">
                            <ul class="left-info">
                                <li>
                                    <a href="mailto:info@rainaandraina.com">
                                        <i class="las la-envelope"></i>
                                        info@rainaandraina.com
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+823-456-879">
                                        <i class="las la-phone"></i>
                                        +92 334 0811101
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <ul class="right-info">
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
                                <!-- <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li> -->

                                <li class="heder-btn">
                                    <a href="{{route('contact-us')}}">Get A Schedule</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="atorn-responsive-nav">
                    <div class="container">
                        <div class="atorn-responsive-menu">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="assets/img/landscape Orignal Logo@2x.png" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="atorn-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{route('home')}}">
                                <img src="{{asset('assets')}}/img/landscape-orignal-logo.svg" alt="logo" style="width: 100%; height: 70px;">
                            </a>

                            <div class="collapse navbar-collapse mean-menu">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{route('home')}}" class="nav-link active">
                                            Home
                                        </a>

                                    </li>



                                    <li class="nav-item">
                                        <a href="{{route('about-us')}}" class="nav-link">
                                            About Us
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{route('practice-areas')}}" class="nav-link">
                                            Practice Area
                                        </a>

                                    </li>


                                    <li class="nav-item">
                                        <a href="{{route('attorney')}}" class="nav-link">
                                            Our People
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{route('clients')}}" class="nav-link">
                                            Our clients
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('gallery')}}" class="nav-link">
                                            Events
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('blog.index')}}" class="nav-link">
                                            Articles
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('contact-us')}}" class="nav-link">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link search-box">
                                            <i class="las la-search"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
        </header>
        <!-- End Heder Area -->

        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>

                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='las la-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->
