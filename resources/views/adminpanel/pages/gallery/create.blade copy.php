@extends('adminpanel.layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Blog Create</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
    <link href="{{ asset('assets/adminpanel') }}/css/plugins/cropper/cropper.min.css" rel="stylesheet">
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
                        <div class="ibox-title  back-change">
                            <h5>Image cropper <small>http://fengyuanchen.github.io/cropper/</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <p>
                                A simple jQuery image cropping plugin.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image-crop">
                                        <img src="{{ asset('assets/adminpanel') }}/img/p3.jpg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4>Preview image</h4>
                                    <div class="img-preview img-preview-sm"></div>
                                    <h4>Comon method</h4>
                                    <p>
                                        You can upload new image to crop container and easy download new cropped image.
                                    </p>
                                    <div class="btn-group">
                                        <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                            <input type="file" accept="image/*" name="file" id="inputImage"
                                                class="hide">
                                            Upload new image
                                        </label>
                                        <label title="Donload image" id="download" class="btn btn-primary">Download</label>
                                    </div>
                                    <h4>Other method</h4>
                                    <p>
                                        You may set cropper options with <code>$(image}).cropper(options)</code>
                                    </p>
                                    <div class="btn-group">
                                        <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                        <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                        <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                        <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                        <button class="btn btn-warning" id="setDrag" type="button">New crop</button>
                                    </div>
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
    <!-- Image cropper -->
    <script src="{{ asset('assets/adminpanel') }}/js/plugins/cropper/cropper.min.js"></script>
    <script>
        $(document).ready(function() {

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                    
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                        files = this.files,
                        file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function() {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });
        });
    </script>
@endsection
