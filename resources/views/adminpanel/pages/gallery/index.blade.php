@extends('adminpanel.layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Blog Create</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
<link href="{{ asset('assets/adminpanel') }}/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('adminpanel.partials.header')
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Gallery Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Blog</a>
                    </li>
                    <li class="active">
                        <strong>Create</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <h2>Office Images</h2>


                        <div class="lightBoxGallery">
                            <a href="{{ asset('assets/adminpanel') }}/img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img src="{{ asset('assets/adminpanel') }}/img/gallery/1s.jpg"></a>
                            <a href="{{ asset('assets/adminpanel') }}/img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img src="{{ asset('assets/adminpanel') }}/img/gallery/2s.jpg"></a>

                            <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <h2>Other Image</h2>


                        <div class="lightBoxGallery">
                            <a href="{{ asset('assets/adminpanel') }}/img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img src="{{ asset('assets/adminpanel') }}/img/gallery/1s.jpg"></a>
                            <a href="{{ asset('assets/adminpanel') }}/img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img src="{{ asset('assets/adminpanel') }}/img/gallery/2s.jpg"></a>

                            <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            </div>
        </div>

        @include('adminpanel.partials.footer')

    </div>
@endsection


@section('custom-script')
    <!-- blueimp gallery -->
    <script src="{{ asset('assets/adminpanel') }}/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
@endsection
