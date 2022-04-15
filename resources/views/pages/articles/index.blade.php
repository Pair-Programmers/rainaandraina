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
                    <h2>Article</h2>
                    <ul>
                        <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                        <li>Articles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Page banner Area -->

<!-- News & Blog Area -->
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-sm-6">
                <div class="blog-card">
                    <a href="{{route('article.blues-of-trust')}}">
                        <img src="{{asset('storage')}}/images/blogs/thumbnail/{{$blog->thumbnail}}" alt="{{$blog->thumbnail}}">
                    </a>
                    <div class="blog-card-text">
                        <h3><a href="{{route('blog.show', $blog)}}">{{$blog->title}}</a></h3>
                        <ul>
                            <li>
                                <i class="las la-calendar"></i>
                                {{ date('d-M-Y', strtotime($blog->created_at)) }}
                            </li>
                            <li>
                                <i class="las la-user-alt"></i>
                                {{$blog->author_name}}
                            </li>
                        </ul>

                        <p>{{$blog->summary}}</p>

                        <a href="{{route('blog.show', $blog)}}" class="read-more">
                            Read More <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach





        </div>
        <!-- Pagination -->
        <!-- <div class="col-lg-12 col-md-12">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div> -->
    </div>
</div>
<!-- End News & Blog Area -->

@endsection

@section('custom-script')
@endsection
