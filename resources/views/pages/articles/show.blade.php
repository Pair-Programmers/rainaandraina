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
                            <img src="{{asset('storage')}}/images/blogs/{{$blog->image}}" alt="{{$blog->image}}">
                        </div>
                        <div class="services-details-content">
                            <h4>{{$blog->title}}</h4>
                            <ul class="blog-list">
                                <li>
                                    <i class="las la-calendar"></i>
                                    {{ date('d-M-Y', strtotime($blog->created_at)) }}
                                </li>
                                <li>
                                    <i class="las la-user-tie"></i>
                                    <a href="#">{{$blog->author_name}}</a>
                                </li>
                            </ul>
                            {!!$blog->description!!}

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
                            @foreach ($recentBlogs as $blog)
                            <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="{{route('blog.show', $blog)}}"><img src="{{asset('storage')}}/images/blogs/thumbnail/{{$blog->thumbnail}}" alt="{{$blog->thumbnail}}"></a>
                                </div>
                                <div class="recent-post-content">
                                    <ul>
                                        <li>{{$blog->author_name}}</li>
                                        <li><i class="fa fa-calendar"></i>{{ date('d-M-Y', strtotime($blog->created_at)) }}</li>
                                    </ul>
                                    <h3><a href="{{route('blog.show', $blog)}}">{{$blog->title}}</a></h3>
                                </div>
                            </div>
                            @endforeach


                        </div>

                        <div class="side-bar-box categories-box">
                            <h3 class="title">Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('blog.index', $category) }}"><i class="las la-angle-double-right"></i></i>{{ $category->name }}</a></li>
                                @endforeach
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
